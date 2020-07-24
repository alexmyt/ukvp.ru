Настройки деплоя посредством Gitlab CI/CD
---
1. При пуше в любую ветку происходит деплой в тестовую среду: dev.ukvp.ru
   
   При тегировании ветки тегом вида vN.N.N происходит деплой в продуктовую среду: ukvp.ru

   Локальные файлы в /storage сейчас обновляются вручную.

1. На продуктовом сервере:

   1. Создается пользователь deployer:
   
   ~~~sh
   sudo adduser --disabled-password -q -gecos "Deployer" deployer
   ~~~
   
   2. Для пользователя deployer генерируется и копируется приватный ключ SSH (баз парольной фразы):

   ~~~sh
   sudo -u deployer ssh-keygen
   sudo -u deployer cat /home/deployer/.ssh/id_rsa
   ~~~
   
   3. Приватный ключ добавляется в переменную `DEPLOYER_SSH_PRIVATE_KEY` в проекте сайта на GitLab (Settings - Reposytory - Variables)

   4. Устанавливается пакет `acl`: 
   ~~~sh 
   sudo apt-get install acl 
   ~~~

   5. Добавляются права для пользователя deployer на /var/www: 
   ~~~sh 
   sudo setfacl -R -m u:deployer:rwx,u:deployer:rwx /var/www 
   ~~~

   6. Устанавливаются и настраиваются необходимые пакеты:
   ~~~sh
   sudo apt-get install php php-fpm certbot python-certbot-nginx
   ~~~

   7. Сотрудники организации, ответственные за обслуживание сайте, добавляются в группу `deployer` для возможжности манипуляции со статическими файлами сайта.

4. На сервере разработчика:

   1. Устанавливается пакет [deployer](https://deployer.org/):
   ~~~sh
   curl -LO https://deployer.org/deployer.phar
   mv deployer.phar /usr/local/bin/dep
   chmod +x /usr/local/bin/dep
   ~~~

   2. В файле конфигурации деплойера (deploy.php) в настройках хоста устанавливается имя пользователя:
   ~~~php
   host('vds1.ukvp.ru')
       ->user('deployer')
       ->set('deploy_path', '/var/www/ukvp.ru')
       ->set('keep_releases',3)
       ->stage('prod');
   ~~~

4. Сценария задачи в .gitlab-ci:
~~~yaml
  script:
    - 'which ssh-agent || ( apt-get update -y && apt-get install openssh-client -y )'
    - eval $(ssh-agent -s)
    - ssh-add <(echo "$DEPLOYER_SSH_PRIVATE_KEY")
    - dep deploy prod --tag=$CI_COMMIT_REF_NAME -vvv
~~~

5. Сейчас деплой не переносит статические файлы в public/storage и файл конфигурации .env. Необходимо перенести вручную (единожды)
