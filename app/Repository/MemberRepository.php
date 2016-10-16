<?php

namespace App\Repository;

use App\Member;
use App\User;

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

}
