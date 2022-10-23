<?php

namespace App\Http\Controllers\Undangan;

use App\Http\Controllers\Controller;
use App\Models\Undangan\Undangan;
use App\Models\Undangan\UndanganPesan;
use Illuminate\Database\Eloquent\Collection;
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

        $get_galeri = function (?Collection $collect, string $kode = null) {
            if (is_null($collect)) {
                return null;
            }
            $get = $collect->where('kode', $kode)->first();
            return is_null($get) ? null : $get->file_url;
        };

        $foto['sampul_depan'] = $get_galeri($galeri, 'SAMPUL_DEPAN');
        $foto['sampul_belakang'] = $get_galeri($galeri, 'SAMPUL_BELAKANG');
        $foto['sampul_acara'] = $get_galeri($galeri, 'SAMPUL_ACARA');
        $foto['sampul_acara_hp'] = $get_galeri($galeri, 'SAMPUL_ACARA_HP');
        $foto['sampul_pasangan'] = $get_galeri($galeri, 'SAMPUL_PASANGAN');
        $foto['galeri'] = $galeri->where('kode', 'GALERI');
        $foto = (object)$foto;

        $data = compact('nama_tamu', 'mempelai', 'model', 'acara', 'amplop', 'foto');
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
