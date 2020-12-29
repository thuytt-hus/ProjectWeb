<?php

namespace App\Http\Controllers\Admin;

use App\Exports\ScholarExport;
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

    public function index()
    {

        $items = DB::table('scholar')->paginate(10);

        /**
         * Đây là biến truyền từ controller xuống view
         */
        $data = array();
        $data['cats'] = $items;

        return view('admin.content.scholar.index', $data);
    }

    public function create()
    {
        /**
         * Đây là biến truyền từ controller xuống view
         */
        $data = array();

        return view('admin.content.scholar.submit', $data);
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'referralunit' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'position' => 'required',
            'faculty' => 'required',
            'college' => 'required',
            'country' => 'required',
            'email' => 'required|email',
            'phone' => ['required','regex:/(09|03|07|08|05)([0-9]{8})/'],
        ], [
            'required' => ':attribute bắt buộc nhập.',
            'email' => ':attribute chưa đúng định dạng',
            'regex' => ':attribute chưa đúng định dạng'
        ], [
            'referralunit' => 'Đơn vị giới thiệu',
            'firstname' => 'Tên',
            'lastname' => 'Họ đệm',
            'position' => 'Chức vụ',
            'faculty' => 'Khoa',
            'college' => 'Đơn vị giáo dục',
            'country' => 'Quốc gia',
            'email' => 'Email',
            'phone' => 'Điện thoại'
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

    public function edit($id)
    {
        /**
         * Đây là biến truyền từ controller xuống view
         */
        $data = array();

        $item = ScholarModel::find($id);
        $data['cat'] = $item;

        return view('admin.content.scholar.edit', $data);
    }

    public function update(Request $request, $id)
    {

        $validatedData = $request->validate([
            'referralunit' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'position' => 'required',
            'faculty' => 'required',
            'college' => 'required',
            'country' => 'required',
            'email' => 'required|email',
            'phone' => ['required','regex:/(09|03|07|08|05)([0-9]{8})/'],
        ], [
            'required' => ':attribute bắt buộc nhập.',
            'email' => ':attribute chưa đúng định dạng',
            'regex' => ':attribute chưa đúng định dạng'
        ], [
            'referralunit' => 'Đơn vị giới thiệu',
            'firstname' => 'Tên',
            'lastname' => 'Họ đệm',
            'position' => 'Chức vụ',
            'faculty' => 'Khoa',
            'college' => 'Đơn vị giáo dục',
            'country' => 'Quốc gia',
            'email' => 'Email',
            'phone' => 'Điện thoại'
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

    public function delete($id)
    {
        /**
         * Đây là biến truyền từ controller xuống view
         */
        $data = array();

        $item = ScholarModel::find($id);
        $data['cat'] = $item;

        return view('admin.content.scholar.delete', $data);
    }

    public function destroy($id)
    {
        $item = ScholarModel::find($id);

        $item->delete();

        return redirect('/admin/scholar');
    }

    public function upload()
    {
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

    public function export(){
        return Excel::download(new ScholarExport(), 'hocgia.xlsx');

    }
    public function search(Request $request)
    {
        $keyword = $request->input('search');
        $scholar = ScholarModel::SearchByKeyword($keyword, true)->paginate(10);
        $data = array();
        $data['cats'] = $scholar;
        return view('admin.content.scholar.index', $data);
    }

    public function barchar()
    {
        $data1 = DB::table('scholar')
            ->select(
                DB::raw('college as college'),
                DB::raw('count(*) as number'))
            ->groupBy('college')
            ->get();
        $array1[] = ['Đơn vị giáo dục', 'Số lượng'];
        foreach ($data1 as $key => $value) {
            $array1[++$key] = [$value->college, $value->number];
        }

        $data2 = DB::table('scholar')
            ->select(
                DB::raw('month(created_at) as year'),
                DB::raw("COUNT(*) as count"))
            ->groupBy(DB::raw("month(created_at)"))
            ->get();
        $array2[] = ['Năm', 'Số lượng'];
        foreach ($data2 as $key => $value) {
            $array2[++$key] = [$value->year, $value->count];
        }
        return view('admin.content.scholar.char', $data1, compact($data2))
            ->with('partner', json_encode($array1))
            ->with('user', json_encode($array2));

    }
}
