<?php

namespace App\Http\Controllers\Auth\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Model\AdminModel;
class RegisterController extends Controller
{
    use RegistersUsers;
    public function __construct()
    {
        $this->middleware('auth:admin')->only('index');
    }

    public function index(){
        return view('admin.dashboard');
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
