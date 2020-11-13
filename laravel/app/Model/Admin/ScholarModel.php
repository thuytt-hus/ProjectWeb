<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class ScholarModel extends Model
{
    public $table = 'scholar';
    protected $fillable = [
        'referralunit', 'firstname', 'lastname', 'position', 'faculty', 'college', 'country', 'email', 'phone'
    ];

    public function scopeSearchByKeyword($query, $keyword)
    {
        if ($keyword!='') {
            $query->where(function ($query) use ($keyword) {
                $query->where("firstname", "LIKE","%$keyword%")
                    ->orwhere("lastname", "LIKE","%$keyword%")
                    ->orWhere("faculty", "LIKE", "%$keyword%")
                    ->orWhere("college", "LIKE", "%$keyword%")
                    ->orWhere("country", "LIKE", "%$keyword%")
                    ->orWhere("email", "LIKE", "%$keyword%");
            });
        }
        return $query;
    }
}
