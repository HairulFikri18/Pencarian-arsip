<?php

namespace App\Http\Controllers;

use App\Models\Box;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class BoxController extends Controller
{

    function __construct()
    {
        $this->middleware(
            'permission:role-create|role-delete',
            ['only' => ['index', 'show']]
        );
        $this->middleware('permission:role-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:role-delete', ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Box::get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    if (Auth::user()->can('role-delete')) {
                        $actionBtn = null;
                        $actionBtn .= '<form action="' . route('box.destroy', $row->id) . '" method="POST" class="d-inline">
                        ' . csrf_field() . '
                        ' . method_field('DELETE') . '
                        <button type="submit" class="delete btn btn-danger btn-sm" onclick="return confirm(\'Are you sure you want to delete this rak?\')">Delete</button>
                      </form>';
                    }
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('box.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('box.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'desc' => 'required',
        ]);

        box::create($request->all());

        return redirect()->route('box.index')->with('success', 'Box Berhasil Ditambahkan');
    }


    public function destroy($id)
    {
        $box = box::find($id);
        $box->delete();
        return redirect()->back()->with('success', 'berhasil hapus data');
    }
}
