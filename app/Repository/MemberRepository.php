<?php

namespace App\Repository;

use App\Member;
use App\User;
use Illuminate\Support\Facades\Hash;

class MemberRepository
{

    public function all()
    {
        return Member::paginate(config('wbpdcleea.member.per_page'));
    }

    public function save($request)
    {
        Member::create($request->only('member_id', 'member_since', 'name', 'address', 'attached_to', 'contact_no', 'designation'));
        User::create(array_add($request->only('member_id', 'email', 'role'), 'password', bcrypt('password')));
    }

    public function get($id)
    {
        return Member::find($id);
    }

    public function update($id, $request)
    {
        $data = $this->get($id);
        $data->update($request->only('member_since', 'name', 'address', 'attached_to', 'contact_no', 'designation'));
        $data->user->update($request->only('email', 'role'));
    }

    public function resetPassword($id)
    {
        $u = User::find($id);
        $u->password = bcrypt('password');
        $u->save();
    }

    public function changePassword($request)
    {
        if(Hash::check($request->get('current_password'), auth()->user()->getAuthPassword())){
            auth()->user()->password = bcrypt($request->get('new_password'));
            auth()->user()->save();
            return true;
        }
        return false;
    }

}
