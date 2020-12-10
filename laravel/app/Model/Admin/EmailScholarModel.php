<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class EmailScholarModel extends Model
{
    public $table = 'email_scholar';

    protected $fillable = [
        'subject', 'email', 'message', 'document'
    ];
}
