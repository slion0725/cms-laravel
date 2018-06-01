<?php

Breadcrumbs::for('index', function ($trail) {
    $trail->push('Index', route('index'));
});

Breadcrumbs::for('login', function ($trail) {
    $trail->parent('index');
    $trail->push('Login', route('login'));
});

Breadcrumbs::for('register', function ($trail) {
    $trail->parent('index');
    $trail->push('Register', route('register'));
});

Breadcrumbs::for('password.request', function ($trail) {
    $trail->parent('login');
    $trail->push('Reset', route('password.request'));
});

Breadcrumbs::for('password.reset', function ($trail) {
    $trail->parent('password.request');
    $trail->push('Reset', route('password.reset'));
});

Breadcrumbs::for('dashboard.index', function ($trail) {
    $trail->push('Dashboard', route('dashboard.index'));
});

Breadcrumbs::for('accounts.index', function ($trail) {
    $trail->parent('dashboard.index');
    $trail->push('Accounts', route('accounts.index'));
});