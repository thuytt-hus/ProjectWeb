<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class EmailPartnerModel extends Model
{
    public $table = 'email_partner';

    protected $fillable = [
        'subject', 'email', 'message', 'document'
    ];
}
