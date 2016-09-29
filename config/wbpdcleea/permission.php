<?php

return [

    'admin' => [

        'announcement' => [
            'create',
            'view',
            'comment',
        ],

        'discussion' => [
            'create',
            'view',
            'comment',
        ],

        'poll' => [
            'create',
            'view',
            'vote',
        ],

        'member' => [
            'create',
            'update',
        ],

        'comment' => [
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

        'comment' => [
            'view',
            'moderate'
        ],
    ],

    'member' => [

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

        'comment' => [
            'view',
        ],
    ],

];