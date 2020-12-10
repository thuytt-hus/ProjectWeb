<?php

namespace App\Http\Controllers;

use App\Model\Admin\PartnerModel;
use App\Model\Admin\ScholarModel;
use App\Model\AdminModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        $data3 = DB::table('partner')
            ->select(
                DB::raw('referralunit as referralunit'),
                DB::raw('count(*) as number'))
            ->groupBy('referralunit')
            ->get();
        $array1[] = ['Referralunit', 'Number'];
        foreach($data3 as $key => $value)
        {
            $array1[++$key] = [$value->referralunit, $value->number];
        }

        $data4 = DB::table('scholar')
            ->select(
                DB::raw('referralunit as referralunit'),
                DB::raw('count(*) as number'))
            ->groupBy('referralunit')
            ->get();
        $array2[] = ['Referralunit', 'Number'];
        foreach($data4 as $key => $value)
        {
            $array2[++$key] = [$value->referralunit, $value->number];
        }

        return view('admin.dashboard', $data1, $data2)->with('partner', json_encode($array1))->with('scholar', json_encode($array2));
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
