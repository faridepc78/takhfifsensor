<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Lang;

class ContactUs extends Model
{
    protected $table = 'contact_us';

    protected $guarded =
        [
            'id',
            'created_at',
            'updated_at'
        ];

    protected $fillable =
        [
            'f_name',
            'l_name',
            'mobile',
            'user_id',
            'subject',
            'text'
        ];

    const READ = 'read';
    const UNREAD = 'unread';
    static $types =
        [
            self::READ,
            self::UNREAD
        ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id')->withDefault();
    }

    public function type()
    {
        if ($this->type == ContactUs::READ) {
            return '<td class="alert alert-success">'.Lang::get(self::READ).'</td>';
        } elseif ($this->type == ContactUs::UNREAD) {
            return '<td class="alert alert-danger">'.Lang::get(self::UNREAD).'</td>';
        }
    }
}
