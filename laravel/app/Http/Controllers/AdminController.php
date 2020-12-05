<?php

namespace App\Http\Controllers;

use App\Model\Admin\PartnerModel;
use App\Model\Admin\ScholarModel;
use App\Model\AdminModel;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin')->only('index');
    }

    public function index(){
        $countPartner = PartnerModel::count();
        $data1 = array();
        $data1['countpartner'] = $countPartner;

        $countScholar = ScholarModel::count();
        $data2 = array();
        $data2['countscholar'] = $countScholar;
        return view('admin.dashboard', $data1, $data2);
    }

    public function create(){
        return view('admin.auth.registertemplate');
    }

    public function store(Request $request){
        $this->validate($request, array(
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ));

        // Khởi tạo model để lưu admin mới
        $adminModel = new AdminModel();
        $adminModel->name = $request->name;
        $adminModel->email = $request->email;
        $adminModel->password = bcrypt($request->password);
        $adminModel->save();

        return redirect()->route('admin.auth.login');
    }

}
