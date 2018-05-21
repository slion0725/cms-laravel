<?php

Breadcrumbs::for('index', function ($trail) {
    $trail->push('Index', route('index'));
});

Breadcrumbs::for('dashboard', function ($trail) {
    $trail->push('Dashboard', route('dashboard'));
});