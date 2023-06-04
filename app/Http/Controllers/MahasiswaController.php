<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Mahasiswa;
use App\Models\Mahasiswa_MataKuliah;
use App\Models\MahasiswaModel;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function cetak_pdf($id){
        $mhs = MahasiswaModel::find($id);
        $khs = Mahasiswa_MataKuliah::where('mhs_id', $id)->get();
        $pdf = PDF::loadView('mahasiswa.cetak_pdf', ['mhs' => $mhs, 'khs' => $khs]);
        return $pdf->stream();
    }

    public function index()
    {
       return view('mahasiswa.mahasiswa');
    }

    public function data() {
        $data = MahasiswaModel::selectRaw('id, nim, nama, hp, foto, jk');

        return DataTables::of($data)
                    ->addIndexColumn()
                    ->make(true);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $kelas = Kelas::all();
        return view('mahasiswa.create_mahasiswa',['kelas'=> $kelas])
        ->with('url_form', url('/mahasiswa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeOld(Request $request)
    {
        $request->validate([
            'nim'=>'required|string|max:10|unique:mahasiswa,nim',
            'nama'=>'required|string|max:50',
            'kelas_id'=>'required',
            'jk'=>'required|in:l,p',
            'tempat_lahir'=>'required|string|max:50',
            'tanggal_lahir'=>'required|date',
            'alamat'=>'required|string|max:255',
            'hp'=>'required|digits_between:6,15'
        ]);

        $image_name = $request->file('foto')->store('images', 'public');
        
        MahasiswaModel::create([
            'nim'=> $request->nim,
            'nama' => $request->nama,
            'foto' => $request->foto,
            'kelas_id' => $request->kelas_id,
            'jk' => $request->jk,
            'tempat_lahir' => $request->tempat_lahir,
            'hp' => $request->hp,
            'alamat' => $request->alamat,
        ]);

        //MahasiswaModel::insert($request->except(['_token']));

        //$data = MahasiswaModel::create($request->except(['_token']));
        return redirect('mahasiswa')
            ->with('success', 'Mahasiswa Berhasil Ditambahkan');
    }

    public function store(Request $request)
    {
        $rule = [
            'nim' => 'required|string|max:10|unique:mahasiswa,nim',
            'nama' => 'required|string|max:50',
            'hp' => 'required|digits_between:6,15',
        ];

        $validator = Validator::make($request->all(), $rule);
        if($validator->fails()){
            return response()->json([
                'status' => false,
                'message' => 'Data gagal ditambahkan. ' .$validator->errors()->first(),
                'data' => $validator->errors()
            ]);
        }

        $mhs = MahasiswaModel::create($request->all());
        return response()->json([
            'status' => ($mhs),
            'message' => ($mhs)? 'Data berhasil ditambahkan' : 'Data gagal ditambahkan',
            'data' => null
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    
    public function show($id){
        $mahasiswa = MahasiswaModel::find($id);

        if ($mahasiswa) {
            return response()->json($mahasiswa);

        } else {
            return response()->json(['error' => 'Data not found'], 404);
        }
    }

    public function showOld($id)
    {
        $mahasiswa = MahasiswaModel::where('id',$id)->get();
        return view('mahasiswa.detail', ['Mahasiswa' => $mahasiswa[0]]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    
    public function edit($id)
    {
        /*$mahasiswa = MahasiswaModel::find($id);
        return view('mahasiswa.create_mahasiswa')
            ->with('mhs', $mahasiswa)
            ->with('url_form', url('/mahasiswa/'.$id));*/
        $mahasiswa = MahasiswaModel::with('kelas')->where('id', $id)->first();
        $kelas = Kelas::all();
        return view('mahasiswa.create_mahasiswa')
            ->with('mhs', $mahasiswa)
            ->with('kelas', $kelas)
            ->with('url_form', url('/mahasiswa/'.$id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        $rule = [
            'nim' => 'required|string|max:10|unique:mahasiswa,nim,'.$id,
            'nama' => 'required|string|max:50',
            'hp' => 'required|digits_between:6,15',
        ];

        $validator = Validator::make($request->all(), $rule);
        if($validator->fails()){
            return response()->json([
                'status' => false,
                'modal_close' => false,
                'message' => 'Data gagal diedit. ' .$validator->errors()->first(),
                'data' => $validator->errors()
            ]);
        }

        $mhs = MahasiswaModel::where('id', $id)->update($request->except('_token', '_method'));

        return response()->json([
            'status' => ($mhs),
            'modal_close' => $mhs,
            'message' => ($mhs)? 'Data berhasil diedit' : 'Data gagal diedit',
            'data' => null
        ]);
    }
    
     public function updateOld(Request $request, $id)
    {
        $request->validate([
            'nim'=>'required|string|max:10|unique:mahasiswa,nim,'.$id,
            'nama'=>'required|string|max:50',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // 'nullable' agar tidak error saat edit data tanpa mengganti '
            'jk'=>'required|in:l,p',
            'tempat_lahir'=>'required|string|max:50',
            'tanggal_lahir'=>'required|date',
            'alamat'=>'required|string|max:255',
            'hp'=>'required|digits_between:6,15',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        //$data = MahasiswaModel::where('id', '=', $id)->update($request->except(['_token', '_method']));
        $image_name = $request->file('foto')->store('images', 'public');

        MahasiswaModel::where('id', $id)->update([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'foto' => $image_name,
            'kelas_id' => $request->kelas_id,
            'jk' => $request->jk,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'hp' => $request->hp,
            'alamat' => $request->alamat,
        ]);
        return redirect('mahasiswa')
            ->with('success', 'Mahasiswa Berhasil Ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $mhs = MahasiswaModel::where('id', $id)->delete();
        return response()->json([
            'status' => ($mhs),
            'message' => ($mhs)? 'Data berhasil dihapus' : 'Data gagal dihapus',
            'data' => null
        ]);
    }
    
     public function destroyOld($id)
    {
        MahasiswaModel::where('id', '=', $id)->delete();
        return redirect('mahasiswa')
            ->with('success', 'Mahasiswa Berhasil Dihapus');
    }
}
