<?php

return [

    'repository' => \App\Repository\DiscussionRepository::class,

    'per_page' => 12,

    'validation_rules' => [
        'subject' => 'required',
        'description' => 'required'
    ],

];