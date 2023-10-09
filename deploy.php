<?php

namespace Deployer;

require 'recipe/laravel.php';

// Config

set('repository', 'https://github.com/AntonLeontev/sudo.git');
set('keep_releases', 3);

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts

host('45.146.165.254')
    ->set('remote_user', 'deployer')
    ->set('deploy_path', '~/sudo');

// Tasks

task('build', function () {
    cd('{{release_path}}');
    run('npm install');
    run('npm run build');
});

task('config:clear', function () {
    cd('~/24-7-365/current');
    run('php artisan config:clear');
    run('php artisan config:cache');
});

// Hooks
after('deploy:vendors', 'build');
after('deploy:failed', 'deploy:unlock');
