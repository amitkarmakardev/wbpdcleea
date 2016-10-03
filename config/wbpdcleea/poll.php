<?php

return [

    'repository' => \App\Repository\PollRepository::class,

    'per_page' => 12,

    'validation_rules' => [
        'agenda' => 'required',
    ],

];