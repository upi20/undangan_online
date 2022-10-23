<?php

namespace App\Http\Controllers\Undangan;

use App\Http\Controllers\Controller;
use App\Models\Undangan\Undangan;
use Illuminate\Http\Request;

class DisplayController extends Controller
{
    public function display(Undangan $model, Request $request)
    {
        $mempelai = $model->mempelai->sortBy('sequence');
        $nama_tamu = $request->to;
        return view('undangan.ulfa', compact('nama_tamu', 'mempelai'));
    }
}
