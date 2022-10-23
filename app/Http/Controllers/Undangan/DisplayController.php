<?php

namespace App\Http\Controllers\Undangan;

use App\Http\Controllers\Controller;
use App\Models\Undangan\Undangan;
use App\Models\Undangan\UndanganPesan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use League\Config\Exception\ValidationException;

class DisplayController extends Controller
{
    public function display(Undangan $model, Request $request)
    {
        $nama_tamu = $request->to;
        $mempelai = $model->mempelai->sortBy('sequence');
        $acara = $model->acara->sortBy('tanggal');
        $amplop = $model->amplop;
        $galeri = $model->galeri->sortBy('sequence');
        $sampul = $galeri->where('kode', 'SAMPUL')->first();
        // $sampul = $galeri->where('kode', 'SAMPUL_BELAKANG')->first();
        // $sampul = $galeri->where('kode', 'SAMPUL_ACARA')->first();
        // $sampul = $galeri->where('kode', 'MEMPELAI_PRIA')->first();
        // $sampul = $galeri->where('kode', 'MEMPELAI_WANITA')->first();
        // $sampul = $galeri->where('kode', 'GALERI')->first();

        $data = compact('nama_tamu', 'mempelai', 'model', 'acara', 'amplop', 'galeri', 'sampul');
        $data['compact'] = $data;
        return view('undangan.ulfa', $data);
    }

    public function pesan(Undangan $model)
    {
        $pesan = [];
        foreach ($model->pesan->sortByDesc('tanggal') as $v) {
            $pesan[] = $v;
        };
        return response()->json($pesan);
    }

    public function pesan_simpan(Undangan $model, Request $request)
    {
        try {
            DB::beginTransaction();

            $request->validate([
                'nama' => ['required', 'string', 'max:255'],
                'pesan' => ['required', 'string', 'max:500'],
                'keterangan' => ['required', 'string', 'max:30'],
            ]);

            $pesan = new UndanganPesan();
            $pesan->undangan_id = $model->id;
            $pesan->nama = $request->nama;
            $pesan->pesan = $request->pesan;
            $pesan->keterangan = $request->keterangan;
            $pesan->tanggal = now();
            $pesan->save();
            DB::commit();
            return response()->json();
        } catch (ValidationException $error) {
            return response()->json([
                'message' => 'Something went wrong',
                'error' => $error,
            ], 500);
        }
    }
}
