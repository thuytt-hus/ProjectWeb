<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class ScholarModel extends Model
{
    public $table = 'scholar';
    protected $fillable = [
        'referralunit', 'firstname', 'lastname', 'position', 'faculty', 'college', 'country', 'email', 'phone'
    ];
}
