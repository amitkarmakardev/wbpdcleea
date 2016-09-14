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
    ]

];