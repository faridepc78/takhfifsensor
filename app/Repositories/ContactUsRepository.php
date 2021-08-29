<?php

namespace App\Repositories;

use App\Models\ContactUs;

class ContactUsRepository
{
    public function store($values)
    {
        return ContactUs::query()
            ->create([
                'f_name' => $values['f_name'],
                'l_name' => $values['l_name'],
                'mobile' => $values['mobile'],
                'user_id' => $values['user_id'],
                'subject' => $values['subject'],
                'text' => $values['text']
            ]);
    }

    public function findById($id)
    {
        return ContactUs::query()
            ->findOrFail($id);
    }

    public function updateType($id)
    {
        return ContactUs::query()
            ->where('id', '=', $id)
            ->update([
                'type' => ContactUs::READ
            ]);
    }
}
