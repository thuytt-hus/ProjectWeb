<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\ScholarModel;
use Illuminate\Support\Facades\DB;
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
            'name' => 'required|max:255',
            'college' => 'required',
            'schoolyear' => 'required',
            'majors' => 'required',
            'score' => 'required',
            'birth' => 'required',
            'hometown' => 'required',
        ]);

        $input = $request->all();
        $item = new ScholarModel();

        $item->name = $input['name'];
        $item->college = $input['college'];
        $item->schoolyear = $input['schoolyear'];
        $item->majors = $input['majors'];
        $item->score = $input['score'];
        $item->birth = $input['birth'];
        $item->hometown = $input['hometown'];

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
            'name' => 'required|max:255',
            'college' => 'required',
            'schoolyear' => 'required',
            'majors' => 'required',
            'score' => 'required',
            'birth' => 'required',
            'hometown' => 'required',
        ]);

        $input = $request->all();

        $item = ScholarModel::find($id);

        $item->name = $input['name'];
        $item->college = $input['college'];
        $item->schoolyear = $input['schoolyear'];
        $item->majors = $input['majors'];
        $item->score = $input['score'];
        $item->birth = $input['birth'];
        $item->hometown = $input['hometown'];

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
}
