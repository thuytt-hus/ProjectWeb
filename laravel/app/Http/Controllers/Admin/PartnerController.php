<?php

namespace App\Http\Controllers\Admin;

use App\Exports\PartnerExport;
use App\Imports\PartnerImport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\PartnerModel;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class PartnerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {

        $items = DB::table('partner')->paginate(10);

        /**
         * Đây là biến truyền từ controller xuống view
         */
        $data = array();
        $data['cats'] = $items;

        return view('admin.content.partner.index', $data);
    }

    public function create()
    {
        /**
         * Đây là biến truyền từ controller xuống view
         */
        $data = array();

        return view('admin.content.partner.submit', $data);
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'referralunit' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'position' => 'required',
            'department' => 'required',
            'company_name' => 'required',
            'country' => 'required',
            'email' => 'required|email',
            'phone' => ['required', 'regex:/(09|03|07|08|05)([0-9]{8})/'],
        ], [
            'required' => ':attribute bắt buộc nhập.',
            'email' => ':attribute chưa đúng định dạng',
            'regex' => ':attribute chưa đúng định dạng'
        ], [
            'referralunit' => 'Đơn vị giới thiệu',
            'firstname' => 'Tên',
            'lastname' => 'Họ đệm',
            'position' => 'Chức vụ',
            'department' => 'Lĩnh vực công tác',
            'company_name' => 'Tên công ty',
            'country' => 'Quốc gia',
            'email' => 'Email',
            'phone' => 'Điện thoại'
        ]);

        $input = $request->all();
        $item = new PartnerModel();

        $item->referralunit = $input['referralunit'];
        $item->firstname = $input['firstname'];
        $item->lastname = $input['lastname'];
        $item->position = $input['position'];
        $item->department = $input['department'];
        $item->company_name = $input['company_name'];
        $item->country = $input['country'];
        $item->email = $input['email'];
        $item->phone = $input['phone'];

        $item->save();

        return redirect('/admin/partner');
    }

    public function edit($id)
    {
        /**
         * Đây là biến truyền từ controller xuống view
         */
        $data = array();

        $item = PartnerModel::find($id);
        $data['cat'] = $item;

        return view('admin.content.partner.edit', $data);
    }

    public function update(Request $request, $id)
    {

        $validatedData = $request->validate([
            'referralunit' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'position' => 'required',
            'department' => 'required',
            'company_name' => 'required',
            'country' => 'required',
            'email' => 'required|email',
            'phone' => ['required', 'regex:/(09|03|07|08|05)([0-9]{8})/'],
        ], [
            'required' => ':attribute bắt buộc nhập.',
            'email' => ':attribute chưa đúng định dạng',
            'regex' => ':attribute chưa đúng định dạng'
        ], [
            'referralunit' => 'Đơn vị giới thiệu',
            'firstname' => 'Tên',
            'lastname' => 'Họ đệm',
            'position' => 'Chức vụ',
            'department' => 'Lĩnh vực công tác',
            'company_name' => 'Tên công ty',
            'country' => 'Quốc gia',
            'email' => 'Email',
            'phone' => 'Điện thoại'
        ]);

        $input = $request->all();

        $item = PartnerModel::find($id);

        $item->referralunit = $input['referralunit'];
        $item->firstname = $input['firstname'];
        $item->lastname = $input['lastname'];
        $item->position = $input['position'];
        $item->department = $input['department'];
        $item->company_name = $input['company_name'];
        $item->country = $input['country'];
        $item->email = $input['email'];
        $item->phone = $input['phone'];

        $item->save();

        return redirect('/admin/partner');
    }

    public function delete($id)
    {
        /**
         * Đây là biến truyền từ controller xuống view
         */
        $data = array();

        $item = PartnerModel::find($id);
        $data['cat'] = $item;

        return view('admin.content.partner.delete', $data);
    }

    public function destroy($id)
    {
        $item = PartnerModel::find($id);

        $item->delete();

        return redirect('/admin/partner');
    }

    public function upload()
    {
        return view('admin.content.partner.upload');
    }

    public function import(Request $request)
    {
        $validatedData = $request->validate([
            'select_file' => 'required|mimes:xls,xlsx,csv'
        ]);

        $import = Excel::import(new PartnerImport(), request()->file('select_file'));
        return redirect('/admin/partner');
    }

    public function export()
    {
        return Excel::download(new PartnerExport(), 'nhatuyendung.xlsx');

    }

    public function search(Request $request)
    {
        $keyword = $request->input('search');
        $partner = PartnerModel::SearchByKeyword($keyword, true)->paginate(10);
        $data = array();
        $data['cats'] = $partner;
        return view('admin.content.partner.index', $data);
    }

    public function barchar()
    {
        $data1 = DB::table('partner')
            ->select(
                DB::raw('company_name as company_name'),
                DB::raw('count(*) as number'))
            ->groupBy('company_name')
            ->get();
        $array1[] = ['Công ty', 'Số lượng'];
        foreach ($data1 as $key => $value) {
            $array1[++$key] = [$value->company_name, $value->number];
        }

        $data2 = DB::table('partner')
            ->select(
                DB::raw('month(created_at) as year'),
                DB::raw("COUNT(*) as count"))
            ->groupBy(DB::raw("month(created_at)"))
            ->get();
        $array2[] = ['Năm', 'Số lượng'];
        foreach ($data2 as $key => $value) {
            $array2[++$key] = [$value->year, $value->count];
        }
        return view('admin.content.partner.char', $data1, compact($data2))
            ->with('partner', json_encode($array1))
            ->with('user', json_encode($array2));

    }
}
