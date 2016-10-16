<?php

return [

    'admin' => [

        'announcement' => [
            'view',
            'create',
        ],

        'discussion' => [
            'view',
            'create',
        ],

        'poll' => [
            'view',
            'create',
            'vote',
        ],

        'member' => [
            'create',
            'view',
        ],

        'comment' => [
            'view',
            'create',
            'moderate'
        ],

        'issue' => [
            'view',
            'create',
        ],
    ],

    'moderator' =>[


    ],

    'member' => [

        'announcement' => [
            'view',
        ],

        'discussion' => [
            'view',
            'create',
        ],

        'poll' => [
            'view',
            'vote',
        ],

        'member' => [
            'view',
        ],

        'comment' => [
            'view',
            'create',
        ],

        'issue' => [
            'view',
            'create'
        ],


    ],

];