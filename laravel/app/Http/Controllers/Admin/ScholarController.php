<?php

namespace App\Http\Controllers\Admin;

use App\Imports\ScholarImport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\ScholarModel;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class ScholarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index() {

        $items = DB::table('scholar')->paginate(10);

        /**
         * Đây là biến truyền từ controller xuống view
         */
        $data = array();
        $data['cats'] = $items;

        return view('admin.content.scholar.index', $data);
    }

    public function create() {
        /**
         * Đây là biến truyền từ controller xuống view
         */
        $data = array();

        return view('admin.content.scholar.submit', $data);
    }

    public function store(Request $request) {

        $validatedData = $request->validate([
            'referralunit' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'position' => 'required',
            'faculty' => 'required',
            'college' => 'required',
            'country' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);

        $input = $request->all();
        $item = new ScholarModel();

        $item->referralunit = $input['referralunit'];
        $item->firstname = $input['firstname'];
        $item->lastname = $input['lastname'];
        $item->position = $input['position'];
        $item->faculty = $input['faculty'];
        $item->college = $input['college'];
        $item->country = $input['country'];
        $item->email = $input['email'];
        $item->phone = $input['phone'];

        $item->save();

        return redirect('/admin/scholar');
    }

    public function edit($id) {
        /**
         * Đây là biến truyền từ controller xuống view
         */
        $data = array();

        $item = ScholarModel::find($id);
        $data['cat'] = $item;

        return view('admin.content.scholar.edit', $data);
    }

    public function update(Request $request, $id) {

        $validatedData = $request->validate([
            'referralunit' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'position' => 'required',
            'faculty' => 'required',
            'college' => 'required',
            'country' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);

        $input = $request->all();

        $item = ScholarModel::find($id);

        $item->referralunit = $input['referralunit'];
        $item->firstname = $input['firstname'];
        $item->lastname = $input['lastname'];
        $item->position = $input['position'];
        $item->faculty = $input['faculty'];
        $item->college = $input['college'];
        $item->country = $input['country'];
        $item->email = $input['email'];
        $item->phone = $input['phone'];

        $item->save();

        return redirect('/admin/scholar');
    }

    public function delete($id) {
        /**
         * Đây là biến truyền từ controller xuống view
         */
        $data = array();

        $item = ScholarModel::find($id);
        $data['cat'] = $item;

        return view('admin.content.scholar.delete', $data);
    }

    public function destroy($id) {
        $item = ScholarModel::find($id);

        $item->delete();

        return redirect('/admin/scholar');
    }

    public function upload(){
        return view('admin.content.scholar.upload');
    }

    public function import(Request $request)
    {
        $validatedData = $request->validate([
            'select_file' => 'required|mimes:xls,xlsx,csv'
        ]);

        $import = Excel::import(new ScholarImport(), request()->file('select_file'));
        return redirect('/admin/scholar');
    }
}
