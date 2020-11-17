<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class PartnerModel extends Model
{
    public $table = 'partner';

    protected $fillable = [
        'referralunit', 'firstname', 'lastname', 'position', 'department', 'company_name', 'country', 'email', 'phone'
    ];

    public function scopeSearchByKeyword($query, $keyword)
    {
        if ($keyword!='') {
            $query->where(function ($query) use ($keyword) {
                $query->where("firstname", "LIKE","%$keyword%")
                    ->orwhere("lastname", "LIKE","%$keyword%")
                    ->orWhere("department", "LIKE", "%$keyword%")
                    ->orWhere("company_name", "LIKE", "%$keyword%")
                    ->orWhere("country", "LIKE", "%$keyword%")
                    ->orWhere("email", "LIKE", "%$keyword%");
            });
        }
        return $query;
    }
}
