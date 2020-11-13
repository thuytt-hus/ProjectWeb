<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\PartnerModel;
use Illuminate\Support\Facades\DB;

class PartnerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index() {

        $items = DB::table('partner')->paginate(10);

        /**
         * Đây là biến truyền từ controller xuống view
         */
        $data = array();
        $data['cats'] = $items;

        return view('admin.content.partner.index', $data);
    }

    public function create() {
        /**
         * Đây là biến truyền từ controller xuống view
         */
        $data = array();

        return view('admin.content.partner.submit', $data);
    }

    public function store(Request $request) {

        $validatedData = $request->validate([
            'referralunit' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'position' => 'required',
            'department' => 'required',
            'company_name' => 'required',
            'country' => 'required',
            'email' => 'required',
            'phone' => 'required',
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

    public function edit($id) {
        /**
         * Đây là biến truyền từ controller xuống view
         */
        $data = array();

        $item = PartnerModel::find($id);
        $data['cat'] = $item;

        return view('admin.content.partner.edit', $data);
    }

    public function update(Request $request, $id) {

        $validatedData = $request->validate([
            'referralunit' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'position' => 'required',
            'department' => 'required',
            'company_name' => 'required',
            'country' => 'required',
            'email' => 'required',
            'phone' => 'required',
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

    public function delete($id) {
        /**
         * Đây là biến truyền từ controller xuống view
         */
        $data = array();

        $item = PartnerModel::find($id);
        $data['cat'] = $item;

        return view('admin.content.partner.delete', $data);
    }

    public function destroy($id) {
        $item = PartnerModel::find($id);

        $item->delete();

        return redirect('/admin/partner');
    }

    public function countScholar()
    {
        $countPartner = PartnerModel::count();
        return view('admin.dashboard', compact($countPartner));
    }
}
