<?php

namespace App\Http\Controllers;
use DB;
use App\Person;
use App\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public  function index(){
        $posts = Post::orderBy('created_at','desc')->paginate(3);
        $cards = Post::orderBy('created_at','desc')->paginate(2);
        $person = Person::all();
        return view('pages.index')->with('posts',$posts)->with('cards',$cards)->with('persons',$person);
    }

    public  function kelurahan(){
        return view('pages.kelurahan');
    }

    public  function pemtib(){
        $pemtib = DB::select('SELECT * FROM pemtib');
        //$jumlah = DB::select('SELECT SUM(luas) as luas, SUM(rt) as rt, SUM(rw) as rw, SUM(jumlah_kk) as kk, SUM(pen_l) as p, SUM(pen_p) as l FROM pemtib');
        $luas = DB::table('pemtib')->sum('luas');
        $rt = DB::table('pemtib')->sum('rt');
        $rw = DB::table('pemtib')->sum('rw');
        $kk = DB::table('pemtib')->sum('jumlah_kk');
        $l = DB::table('pemtib')->sum('pen_l');
        $p = DB::table('pemtib')->sum('pen_p');
        $jumlah = $l + $p;

        return view('pages.pemtib')
            ->with('pemtib', $pemtib)
            ->with('luas', $luas)
            ->with('rt', $rt)
            ->with('rw', $rw)
            ->with('kk', $kk)
            ->with('l', $l)
            ->with('p', $p)
            ->with('jumlah', $jumlah)
            ;
    }

    public  function pemas(){
        return view('pages.pemas');
    }

    public  function ekonomi(){
        return view('pages.ekonomi');
    }

    public  function kebersihan(){
        $kebersihan = DB::select('SELECT * FROM kebersihan');
        $armada = DB::select('SELECT * FROM armada');
        return view('pages.kebersihan')
            ->with('kebersihan', $kebersihan)
            ->with('armada', $armada);
    }

    public  function kelas(){
        return view('pages.kelas');
    }

    public  function laporki(){
        return view('pages.laporki');
    }

}
