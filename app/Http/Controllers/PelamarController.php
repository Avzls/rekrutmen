<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelamar;

class PelamarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_pelamar = Pelamar::all();
        return view('datapelamar', compact('data_pelamar'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('datapelamar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pasfoto = $request->file('pasfoto');
        $ktp = $request->file('ktp');
        $ijazah = $request->file('ijazah');
        $transkipnilai = $request->file('transkipnilai');
        $sertifikat = $request->file('sertifikat');
        $dokumen = $request->file('dokumen');

        $namafilePasfoto = time() . '_' . $pasfoto->getClientOriginalName();
        $namafileKtp = time() . '_' . $ktp->getClientOriginalName();
        $namafileIjazah = time() . '_' . $ijazah->getClientOriginalName();
        $namafileTranskipnilai = time() . '_' . $transkipnilai->getClientOriginalName();
        $namafileSertifikat = time() . '_' . $sertifikat->getClientOriginalName();
        $namafileDokumen = time() . '_' . $dokumen->getClientOriginalName();

        $data = new Pelamar;
        $data->nama = $request->nama;
        $data->nik = $request->nik;
        $data->email = $request->email;
        $data->jeniskelamin = $request->jeniskelamin;
        $data->nohp = $request->nohp;
        $data->agama = $request->agama;
        $data->alamat = $request->alamat;
        $data->kota = $request->kota;
        $data->kelurahan = $request->kelurahan;
        $data->kecamatan = $request->kecamatan;
        $data->provinsi = $request->provinsi;
        $data->pendidikan = $request->pendidikan;
        $data->pasfoto = $namafilePasfoto;
        $data->ktp = $namafileKtp;
        $data->ijazah = $namafileIjazah;
        $data->transkipnilai = $namafileTranskipnilai;
        $data->sertifikat = $namafileSertifikat;
        $data->dokumen = $namafileDokumen;
        $data->save();

        $pasfoto->store('DataPelamar');
        $ktp->store('DataPelamar');
        $ijazah->store('DataPelamar');
        $transkipnilai->store('DataPelamar');
        $sertifikat->store('DataPelamar');
        $dokumen->store('DataPelamar');


        return redirect()->route('datapelamar')->with('toast_success', 'Data Berhasil Disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $hapus = Pelamar::find($id);

        if ($hapus) {
            $hapus->delete();
            return redirect()->route('datapelamar')->with('toast_success', 'Data berhasil dihapus.');
        } else {
            return redirect()->route('datapelamar')->with('toast_error', 'Data tidak ditemukan.');
        }
    }
}
