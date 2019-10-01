<?php

Breadcrumbs::for('sitetronic-posts-admin-index', function ($trail) {
    $trail->parent('sitetronic-core-admin-index');
    $trail->push('Posts', route('admin.posts.index'));
});
