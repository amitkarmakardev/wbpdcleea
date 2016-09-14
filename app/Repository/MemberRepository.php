<?php

namespace App\Repository;
use App\Member;

class MemberRepository{

    public function all()
    {
        return Member::paginate(config('wbpdcleea.member.per_page'));
    }

    public function save($request)
    {
        Member::create($request->all());
    }

    public function get($id)
    {
        return Member::find($id);
    }

    public function update($id, $request)
    {
        $data = $this->get($id);
        $data->update($request->all());
    }

}
