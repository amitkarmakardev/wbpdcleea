<?php

namespace App;

use Collective\Html\Eloquent\FormAccessible;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use FormAccessible;

    protected $fillable = ['member_id', 'member_since', 'name', 'address', 'attached_to', 'contact_no', 'designation'];

    public function user()
    {
        return $this->belongsTo('App\User', 'member_id', 'member_id');
    }

    /**
     * Here I am making the email and role attribute of the App\User model available to the App\Member Model
     * so that the Form::model() can pre-populate all the fields in the member.edit form
     */
    public function formEmailAttribute($value)
    {
        return $this->user->email;
    }

    public function formRoleAttribute()
    {
        return $this->user->role;
    }
}
