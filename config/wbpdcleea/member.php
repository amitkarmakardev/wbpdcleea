<?php

return [

    'repository' => \App\Repository\MemberRepository::class,

    'per_page' => 12,

    'attached_to' => [
        'BKTPS' => 'BKTPS',
        'STPS' => 'STPS',
        'SGTPS' => 'SGTPS',
        'KTPS' => 'KTPS',
        'BTPS' => 'BTPS',
        'CORP' => 'CORP',
    ],

    'validation_rules' => [
        'member_id' => 'required',
        'member_since' => 'required|date',
        'name' => 'required',
        'email' => 'required|email',
        'address' => 'required',
        'attached_to' => 'required',
        'contact_no' => 'required',
    ],

];