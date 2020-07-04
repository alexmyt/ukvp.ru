<?php
namespace Deployer;

require 'recipe/laravel.php';

// Project name
set('application', 'my_project');

// Project repository
set('repository', 'https://gitlab.com/ukvp/ukvp.ru');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', true);

// Shared files/dirs between deploys.
add('shared_files', []);
add('shared_dirs', []);

// Writable dirs by web server.
add('writable_dirs', []);


// Hosts

localhost()
    ->set('deploy_path', '/var/www/ukvp.ru');

// Tasks

task('build', function () {
    run('cd {{release_path}} && build');
});

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

// Migrate database before symlink new release.

before('deploy:symlink', 'artisan:migrate');
