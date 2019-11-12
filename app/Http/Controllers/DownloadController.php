<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public  function blangko(){
        return view('download.blangko');
    }

    public  function dokumen(){
        return view('download.dokumen');
    }

    public function dblangko($nama){
        if($nama == "Formulir-Pengajuan-IUMK"){
            $filename = $nama.'.xlsx';
        } else {
            $filename = $nama . '.docx';
        }
        return response()->download(storage_path("app/public/files/blangko/{$filename}"));
    }

    public function download(){
        $filename = 'form.xlsx';
        return response()->download(storage_path("app/public/files/{$filename}"));
    }

    public function lakip(){
        return view('download.dokumen.lakip');
    }

    public function renstra(){
        return view('download.dokumen.renstra');
    }

    public function kinerja(){
        return view('download.dokumen.kinerja');
    }

    public function renja(){
        return view('download.dokumen.renja');
    }
}
