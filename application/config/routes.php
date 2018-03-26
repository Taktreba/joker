<?php
return [

    '' => [
        'controller' => 'main',
        'action' => 'index'
    ],

    'contact' => [
        'controller' => 'main',
        'action' => 'contact'
    ],

    'account/login' => [
        'controller' => 'account',
        'action' => 'login'
    ],

    'account/register' => [
        'controller' => 'account',
        'action' => 'register'
    ],

    'users/add' => [
        'controller' => 'main',
        'action' => 'addUsers'
    ],

    'getCity' => [
        'controller' => 'Territory',
        'action' => 'city'
    ],

    'getDistricts' => [
        'controller' => 'Territory',
        'action' => 'districts'
    ],

    'checkUserName' => [
        'controller' => 'User',
        'action' => 'checkUserName'
    ],

    'checkUserEmail' => [
        'controller' => 'User',
        'action' => 'checkUserEmail'
    ],

    'addUser' => [
        'controller' => 'User',
        'action' => 'addUser'
    ],
    'getUser' => [
        'controller' => 'User',
        'action' => 'getUser'
    ],

];