<?php

namespace App\Http\Controllers;

use App\Models\Kategori_Arsip;
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
            $data = Tabel_Arsip::with('kategori')->select('*');
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
                    // dd($row);
                    return $row->kategori->nama;
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
        return view('Tabel_Arsip.create', compact('kategoris'));
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
            'id_kategori' => 'required',
            'uraian_informasi' => 'required',
            'nama_ruang' => 'required',
            'nomor_rak' => 'required',
            'nomor_box' => 'required',
            'nomor_folder' => 'required',
            'jumlah_berkas' => 'required',
            'tanggal'=>'required',
            'file' => 'required',
        ]);

        $input = $request->all();
        if ($request->hasFile('file')) {
            $fileName = time() . '.' . $request->file->extension();
            $input['file'] = $fileName;
            $request->file->move(public_path('tabel_arsip'), $fileName);
        }

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
        $tabel_arsip = Tabel_Arsip::findOrFail($id);
        return view('Tabel_Arsip.edit', compact('tabel_arsip'));
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
            'id_kategori' => 'required',
            'uraian_informasi' => 'required',
            'nama_ruang' => 'required',
            'nomor_rak' => 'required',
            'nomor_box' => 'required',
            'nomor_folder' => 'required',
            'jumlah_berkas' => 'required',
            'tanggal'=>'required',
            'file' => 'required',
        ]);
        $tabel_arsip = Tabel_Arsip::find($id);
        $input = $request->all();
        if ($request->hasFile('file')) {
            $fileName = time() . '.' . $request->file->extension();
            $input['file'] = $fileName;
            $request->file->move(public_path('tabel_arsip'), $fileName);
        } else {
            $input['file'] = $tabel_arsip->file;
        }
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
