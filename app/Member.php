<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = ['member_id', 'member_since', 'name', 'address', 'attached_to', 'contact_no'];
}
