<?php

namespace App\Http\Controllers;

use App\Models\Kategori_Arsip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class KategoriArsipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware(
            'permission:kategori-arsip-list|kategori-arsip-create|kategori-arsip-edit|kategori-arsip-delete',
            ['only' => ['index', 'show']]
        );
        $this->middleware('permission:kategori-arsip-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:kategori-arsip-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:kategori-arsip-delete', ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Kategori_Arsip::select('*');
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    if (Auth::user()->can('kategori-arsip-edit')) {
                        $actionBtn = '<a href="' . route('kategori.edit', $row->id) . '" class="edit btn btn-success btn-sm">Edit</a> ';
                    }
                    if (Auth::user()->can('kategori-arsip-list')) {
                        $actionBtn .= '<a href="' . route('kategori.show', $row->id) . '" class="delete btn btn-primary btn-sm">Show</a>';
                    }
                    if (Auth::user()->can('kategori-arsip-delete')) {
                        $actionBtn .= '<form action="' . route('kategori.destroy', $row->id) . '" method="POST" class="d-inline">
                        ' . csrf_field() . '
                        ' . method_field('DELETE') . '
                        <button type="submit" class="delete btn btn-danger btn-sm" onclick="return confirm(\'Are you sure you want to delete this kategori?\')">Delete</button>
                      </form>';
                    }
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('Kategori.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'status' => 'required',
        ]);

        Kategori_Arsip::create($request->all());

        return redirect()->route('kategori.index')->with('success', 'Kategori Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kategori_Arsip  $kategori_Arsip
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kategori_Arsip = Kategori_Arsip::find($id);
        return view('Kategori.show', compact('kategori_Arsip'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kategori_Arsip  $kategori_Arsip
     * @return \Illuminate\Http\Response
     */
    public function edit(Kategori_Arsip $kategori)
    {
        return view('Kategori.edit', compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kategori_Arsip  $kategori_Arsip
     * @return \Illuminate\Http\Response
     */


    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'status' => 'required',
        ]);

        $kategori_Arsip = Kategori_Arsip::find($id);
        $kategori_Arsip->update($request->all());

        return redirect()->route('kategori.index')->with('success', 'update berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kategori_Arsip  $kategori_Arsip
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategori_Arsip = Kategori_Arsip::find($id);
        $kategori_Arsip->delete();
        return redirect()->back()->with('success', 'berhasil hapus data');
    }
}
