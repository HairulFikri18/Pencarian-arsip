<?php

namespace App\Http\Controllers;

use App\Models\Lemari;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class LemariController extends Controller
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
            $data = Lemari::get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    if (Auth::user()->can('role-delete')) {
                        $actionBtn = null;
                        $actionBtn .= '<form action="' . route('lemari.destroy', $row->id) . '" method="POST" class="d-inline">
                        ' . csrf_field() . '
                        ' . method_field('DELETE') . '
                        <button type="submit" class="delete btn btn-danger btn-sm" onclick="return confirm(\'Are you sure you want to delete this Lemari?\')">Delete</button>
                      </form>';
                    }
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('lemari.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lemari.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'lemari' => 'required',
            'desc' => 'required',
        ]);

        Lemari::create($request->all());

        return redirect()->route('lemari.index')->with('success', 'Lemari Berhasil Ditambahkan');
    }


    public function destroy($id)
    {
        $lemari = Lemari::find($id);
        $lemari->delete();
        return redirect()->back()->with('success', 'berhasil hapus data');
    }
}
