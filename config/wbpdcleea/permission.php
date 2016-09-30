<?php

return [

    'admin' => [

        'announcement' => [
            'create',
            'view',
        ],

        'discussion' => [
            'create',
            'view',
        ],

        'poll' => [
            'create',
            'view',
            'vote',
        ],

        'member' => [
            'view',
            'create',
            'update',
        ],

        'comment' => [
            'create',
            'view',
            'moderate'
        ],
    ],

    'moderator' =>[

        'announcement' => [
            'view',
            'comment',
        ],

        'discussion' => [
            'view',
            'comment',
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
            'moderate'
        ],
    ],

    'member' => [

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
            'vote',
        ],

        'member' => [
            'view',
        ],

        'comment' => [
            'view',
            'create',
        ],

    ],

];