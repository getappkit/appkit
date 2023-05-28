<?php


return   [
    [
        'pattern' => '/',
        'method' => 'GET',
        'action' => 'index'
    ],
    [
        'pattern' => '/',
        'method' => 'POST',
        'action' => 'store'
    ],
    [
        'pattern' => '/create',
        'method' => 'GET',
        'action' => 'create'
    ],
    [
        'pattern' => '/(\d+)',
        'method' => 'GET',
        'action' => 'show'
    ],
    [
        'pattern' => '/(\d+)/edit',
        'method' => 'GET',
        'action' => 'edit'
    ],
    [
        'pattern' => '/(\d+)',
        'method' => 'PUT',
        'action' => 'update'
    ],
    [
        'pattern' => '/(\d+)',
        'method' => 'DELETE',
        'action' => 'destroy'
    ],
];




