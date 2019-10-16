<?php

Breadcrumbs::for('sitetronic-posts-admin-index', function ($trail) {
    $trail->parent('sitetronic-core-admin-index');
    $trail->push('Posts', route('admin.posts.index'));
});

Breadcrumbs::for('sitetronic-posts-admin-edit', function ($trail) {
    $trail->parent('sitetronic-posts-admin-index');
    $trail->push('Posts', route('admin.posts.edit'));
});

Breadcrumbs::for('sitetronic-posts-admin-show', function ($trail) {
    $trail->parent('sitetronic-posts-admin-index');
    $trail->push('Posts', route('admin.posts.show'));
});
