<?php
namespace Deployer;

require 'recipe/laravel.php';
require 'recipe/rsync.php';

// Project name
set('application', getenv('CI_PROJECT_NAME'));

// Project repository
set('repository', 'https://gitlab.com/ukvp/ukvp.ru');

set('ssh_multiplexing', true); // Speed up deployment

set('rsync_src', function () {
    return __DIR__; // If your project isn't in the root, you'll need to change this.
});

// [Optional] Allocate tty for git clone. Default value is false.
//set('git_tty', true);

// Shared files/dirs between deploys.
add('shared_files', []);
add('shared_dirs', []);

// Writable dirs by web server.
add('writable_dirs', []);

set('default_stage','testing');

// Configuring the rsync exclusions. 
// You'll want to exclude anything that you don't want on the production server.  
add('rsync', [
    'exclude' => [
        '.git',
        '/.env',
        '/storage/',
        '/vendor/',
        '/node_modules/',
        '.gitlab-ci.yml',
        'deploy.php',
        'db.sql'
    ],
]);

// Set up a deployer task to copy secrets to the server. 
// Since our secrets are stored in Gitlab, we can access them as env vars.
task('deploy:secrets', function () {
    file_put_contents(__DIR__ . '/.env', getenv('DOT_ENV'));
    upload('.env', get('deploy_path') . '/shared');
});

// Sitemap generate
// @see: https://packagist.org/packages/spatie/laravel-sitemap
task('artisan:sitemap:generate', function () {
    run('{{bin/php}} {{release_path}}/artisan sitemap:generate');
});

// Hosts
localhost()
    ->set('deploy_path', '/var/www/ukvp.ru')
    ->set('keep_releases',1)
    ->stage('testing');

host('vds2.ukvp.ru')
    ->user('deployer')
    ->set('deploy_path', '/var/www/ukvp.ru')
    ->set('keep_releases',3)
    ->stage('prod');

// Tasks

task('build', function () {
    run('cd {{release_path}} && build');
});

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

desc('Deploy the application');
task('deploy', [
    'deploy:info',
    'deploy:prepare',
    'deploy:lock',
    'deploy:release',
    'rsync', // Deploy code & built assets
 //   'deploy:secrets', // Deploy secrets
    'deploy:shared',
    'deploy:vendors',
    'deploy:writable',
    'artisan:storage:link',     // |
    'artisan:view:cache',       // |
    'artisan:config:cache',     // | Laravel specific steps 
    'artisan:optimize',         // |
    'artisan:migrate',          // |
    'artisan:sitemap:generate', // |
    'deploy:symlink',
    'deploy:unlock',
    'cleanup',
]);

// Migrate database before symlink new release.

//before('deploy:symlink', 'artisan:migrate');
