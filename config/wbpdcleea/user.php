<?php

return [

    'change_password_validation_rules' => [
        'current_password' => 'required',
        'new_password' => 'required|confirmed',
        'new_password_confirmation' => 'required',
    ]
];