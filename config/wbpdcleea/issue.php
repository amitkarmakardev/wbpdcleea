<?php

return [

    'repository' => \App\Repository\IssueRepository::class,

    'per_page' => 12,

    'validation_rules' => [
        'subject' => 'required'
    ],

];