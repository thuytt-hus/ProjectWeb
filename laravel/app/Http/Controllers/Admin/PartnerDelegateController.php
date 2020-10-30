<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\PartnerDelegateModel;
use Illuminate\Support\Facades\DB;

class PartnerDelegateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index() {

        $items = DB::table('partner_delegate')->paginate(10);

        /**
         * Đây là biến truyền từ controller xuống view
         */
        $data = array();
        $data['cats'] = $items;

        return view('admin.content.partner.delegate.index', $data);
    }

    public function create() {
        /**
         * Đây là biến truyền từ controller xuống view
         */
        $data = array();

        return view('admin.content.partner.delegate.submit', $data);
    }

    public function store(Request $request) {

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'position' => 'required',
            'department' => 'required',
            'email' => 'required',
            'company_name' => 'required',
            'desc' => 'required',
        ]);

        $input = $request->all();
        $item = new PartnerDelegateModel();

        $item->name = $input['name'];
        $item->department = $input['department'];
        $item->email = $input['email'];
        $item->company_name = $input['company_name'];
        $item->desc = $input['desc'];

        $item->save();

        return redirect('/admin/content/partner');
    }

    public function edit($id) {
        /**
         * Đây là biến truyền từ controller xuống view
         */
        $data = array();

        $item = PartnerDelegateModel::find($id);
        $data['cat'] = $item;

        return view('admin.content.partner.delegate.edit', $data);
    }

    public function update(Request $request, $id) {

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'position' => 'required',
            'department' => 'required',
            'email' => 'required',
            'company_name' => 'required',
            'desc' => 'required',
        ]);

        $input = $request->all();

        $item = PartnerDelegateModel::find($id);

        $item->name = $input['name'];
        $item->department = $input['department'];
        $item->email = $input['email'];
        $item->company_name = $input['company_name'];
        $item->desc = $input['desc'];

        $item->save();

        return redirect('/admin/content/partner');
    }

    public function delete($id) {
        /**
         * Đây là biến truyền từ controller xuống view
         */
        $data = array();

        $item = PartnerDelegateModel::find($id);
        $data['cat'] = $item;

        return view('admin.content.partner.delegate.delete', $data);
    }

    public function destroy($id) {
        $item = PartnerDelegateModel::find($id);

        $item->delete();

        return redirect('/admin/content/partner');
    }

}
