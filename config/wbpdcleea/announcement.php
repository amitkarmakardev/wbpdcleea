<?php

return [

    'repository' => \App\Repository\AnnouncementRepository::class,

    'per_page' => 12,

    'validation_rules' => [
        'subject' => 'required',
        'description' => 'required'
    ],

];