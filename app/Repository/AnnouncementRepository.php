<?php

namespace App\Repository;

use App\Announcement;

class AnnouncementRepository{

    public function all()
    {
        return Announcement::paginate(config('wbpdcleea.announcement.per_page'));
    }

    public function save($request)
    {
        Announcement::create($request->all());
    }

    public function get($id)
    {
        return Announcement::find($id);
    }
}