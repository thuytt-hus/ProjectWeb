<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ScholarMailController extends Controller
{
    public function index()
    {
        return view('admin.content.email.scholar.index');
    }
}
