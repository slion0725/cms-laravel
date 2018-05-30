<?php

Breadcrumbs::for('index', function ($trail) {
    $trail->push('Index', route('index'));
});

Breadcrumbs::for('dashboard.index', function ($trail) {
    $trail->push('Dashboard', route('dashboard.index'));
});

Breadcrumbs::for('accounts.index', function ($trail) {
    $trail->parent('dashboard.index');
    $trail->push('Accounts', route('accounts.index'));
});