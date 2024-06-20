<?php

namespace App\Http\Controllers;

use App\Models\Box;
use App\Models\Kategori_Arsip;
use App\Models\Lemari;
use App\Models\Rak;
use App\Models\Ruangan;
use App\Models\Tabel_Arsip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Contracts\DataTable;
use Yajra\DataTables\Facades\DataTables;

class TabelArsipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware(
            'permission:tabel-arsip-list|tabel-arsip-create|tabel-arsip-edit|tabel-arsip-delete',
            ['only' => ['index', 'show']]
        );
        $this->middleware('permission:tabel-arsip-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:tabel-arsip-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:tabel-arsip-delete', ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Tabel_Arsip::with('kategori','ruangan','lemari','rak','box')->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    if (Auth::user()->can('tabel-arsip-edit')) {
                        $actionBtn = '<a href="' . route('tabelarsips.edit', $row->id) . '" class="edit btn btn-success btn-sm">Edit</a> ';
                    }
                    if (Auth::user()->can('tabel-arsip-list')) {
                        $actionBtn .= '<a href="' . route('tabelarsips.show', $row->id) . '" class="delete btn btn-primary btn-sm">Show</a>';
                    }
                    if (Auth::user()->can('tabel-arsip-delete')) {
                        $actionBtn .= '<form action="' . route('tabelarsips.destroy', $row->id) . '" method="POST" class="d-inline">
                    ' . csrf_field() . '
                    ' . method_field('DELETE') . '
                    <button type="submit" class="delete btn btn-danger btn-sm" onclick="return confirm(\'Are you sure you want to delete this tabel arsip?\')">Delete</button>
                  </form>';
                    }

                    return $actionBtn;
                })->addColumn('kategori', function ($row) {
                    return $row->kategori->nama;
                })->addColumn('ruangan', function ($row) {
                    return $row->ruangan->ruang;
                })->addColumn('lemari', function ($row) {
                    return $row->lemari->lemari;
                })->addColumn('rak', function ($row) {
                    return $row->rak->rak;
                })->addColumn('box', function ($row) {
                    return $row->box->name;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('Tabel_Arsip.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategoris = Kategori_Arsip::all();
        $raks = Rak::get();
        $lemaris = Lemari::get();
        $ruangans = Ruangan::get();
        $boxs = Box::get();
        return view('Tabel_Arsip.create', compact('kategoris','raks','lemaris','ruangans','boxs'));
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
            'kode_klasifikasi' => 'required',
            'jenis_arsip' => 'required',
            'uraian_informasi' => 'required',
            'id_kategori' => 'required',
            'id_ruangans' => 'required',
            'id_lemari' => 'required',
            'id_rak' => 'required',
            'id_box' => 'required',
            'folder' => 'required',
        ]);

        $input = $request->all();

        Tabel_Arsip::create($input);

        return redirect()->route('tabelarsips.index')->with('success', 'Arsip Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tabel_Arsip  $tabel_Arsip
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tabel_arsip = Tabel_arsip::find($id);
        return view('Tabel_Arsip.show', compact('tabel_arsip'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tabel_Arsip  $tabel_Arsip
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
{
    $kategoris = Kategori_Arsip::all();
    $raks = Rak::get();
    $lemaris = Lemari::get();
    $ruangans = Ruangan::get();
    $boxs = Box::get();
    $tabel_arsip = Tabel_Arsip::find($id);

    return view('Tabel_Arsip.edit', compact('tabel_arsip', 'kategoris', 'raks', 'lemaris', 'ruangans', 'boxs'));
}


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tabel_Arsip  $tabel_Arsip
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'kode_klasifikasi' => 'required',
            'jenis_arsip' => 'required',
            'uraian_informasi' => 'required',
            'id_kategori' => 'required',
            'id_ruangans' => 'required',
            'id_lemari' => 'required',
            'id_rak' => 'required',
            'id_box' => 'required',
            'folder' => 'required',
        ]);
        $tabel_arsip = Tabel_Arsip::find($id);
        $input = $request->all();

        $tabel_arsip->update($input);
        return redirect()->route('tabelarsips.index')->with('success', 'update berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tabel_Arsip  $tabel_Arsip
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tabel_arsip = Tabel_Arsip::find($id);
        $tabel_arsip->delete();
        return redirect()->back()->with('success', 'berhasil hapus data');
    }
}
