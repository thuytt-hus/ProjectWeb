<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\PartnerCompanyModel;
use Illuminate\Support\Facades\DB;

class PartnerCompanyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index() {

        $items = DB::table('partner_company')->paginate(10);

        /**
         * Đây là biến truyền từ controller xuống view
         */
        $data = array();
        $data['cats'] = $items;

        return view('admin.content.partner.company.index', $data);
    }

    public function create() {
        /**
         * Đây là biến truyền từ controller xuống view
         */
        $data = array();

        return view('admin.content.partner.company.submit', $data);
    }

    public function store(Request $request) {

        $validatedData = $request->validate([
            'company_name' => 'required|max:255',
            'website' => 'required',
            'desc' => 'required',
        ]);

        $input = $request->all();
        $item = new PartnerCompanyModel();

        $item->company_name= $input['company_name'];
        $item->website = $input['website'];
        $item->desc = $input['desc'];

        $item->save();

        return redirect('/admin/partner/company');
    }

    public function edit($id) {
        /**
         * Đây là biến truyền từ controller xuống view
         */
        $data = array();

        $item = PartnerCompanyModel::find($id);
        $data['cat'] = $item;

        return view('admin.content.partner.company.edit', $data);
    }

    public function update(Request $request, $id) {

        $validatedData = $request->validate([
            'company_name' => 'required|max:255',
            'website' => 'required',
            'desc' => 'required',
        ]);

        $input = $request->all();

        $item = PartnerCompanyModel::find($id);

        $item->company_name= $input['company_name'];
        $item->website = $input['website'];
        $item->desc = $input['desc'];

        $item->save();

        return redirect('/admin/partner/company');
    }

    public function delete($id) {
        /**
         * Đây là biến truyền từ controller xuống view
         */
        $data = array();

        $item = PartnerCompanyModel::find($id);
        $data['cat'] = $item;

        return view('admin.content.partner.company.delete', $data);
    }

    public function destroy($id) {
        $item = PartnerCompanyModel::find($id);

        $item->delete();

        return redirect('/admin/partner/company');
    }
}
