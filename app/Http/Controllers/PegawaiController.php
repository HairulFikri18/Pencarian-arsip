<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     function __construct()
     {
         $this->middleware(
             'permission:pegawai-list|pegawai-create|pegawai-edit|pegawai-delete',
             ['only' => ['index', 'store']]
         );
         $this->middleware('permission:pegawai-create', ['only' => ['create', 'store']]);
         $this->middleware('permission:pegawai-edit', ['only' => ['edit', 'update']]);
         $this->middleware('permission:pegawai-delete', ['only' => ['destroy']]);
     }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Pegawai::select('*');
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    if (Auth::user()->can('pegawai-edit')){
                        $actionBtn = '<a href="' . route('pegawais.edit', $row->id) . '" class="edit btn btn-success btn-sm">Edit</a> ';
                    }
                    if (Auth::user()->can('pegawai-list')){
                        $actionBtn .= '<a href="' . route('pegawais.show', $row->id) . '" class="delete btn btn-primary btn-sm">Show</a>';
                    }
                    if (Auth::user()->can('pegawai-delete')){
                        $actionBtn .= '<form action="' . route('pegawais.destroy', $row->id) . '" method="POST" class="d-inline">
                        ' . csrf_field() . '
                        ' . method_field('DELETE') . '
                        <button type="submit" class="delete btn btn-danger btn-sm" onclick="return confirm(\'Are you sure you want to delete this pegawai?\')">Delete</button>
                      </form>';
                    }
                   
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('Pegawai.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Pegawai.create');
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
            'nama'=>'required',
            'email'=>'required',
            'nohp'=>'required',
            'alamat'=>'required',
            'nip'=>'required|numeric',
            'nik'=>'required|numeric',
            'foto'=>'required',
        ]);

        $input = $request->all();
        if($request->hasFile('foto')){
            $fileName = time().'.'.$request->foto->extension();
            $input['foto'] = $fileName;
            $request->foto->move(public_path('pegawai'), $fileName);
        }

        Pegawai::create($input);

        return redirect()->route('pegawais.index')->with('success', 'Pegawai Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pegawai = Pegawai::find($id);
        return view('Pegawai.show',compact('pegawai'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function edit(Pegawai $pegawai)
    {
        return view('Pegawai.edit', compact('pegawai'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'nama'=>'required',
            'email'=>'required',
            'nohp'=>'required',
            'alamat'=>'required',
            'nip'=>'required',
            'nik'=>'required',
        ]);
        $pegawai = Pegawai::find($id);
        $input = $request->all();
        if($request->hasFile('foto')){
            $fileName = time().'.'.$request->foto->extension();
            $input['foto'] = $fileName;
            $request->foto->move(public_path('pegawai'), $fileName);
        }else{
            $input['foto'] = $pegawai->foto;
        }
        $pegawai->update($input);
        return redirect()->route('pegawais.index')->with('success','update berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)    {
        $pegawai = Pegawai::find($id);
        $pegawai->delete();
        return redirect()->back()->with('success','berhasil hapus data');
    }
}
