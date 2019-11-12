<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;
use App\Kelas;
use App\Lapor;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.index');
    }

    public function berita()
    {
        //$posts = Post::all();
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('dashboard.berita')->with('posts', $user->posts);
    }

    public function kelas()
    {
        $posts = Kelas::orderBy('created_at','desc')->get();
        return view('dashboard.kelas')->with('kelas', $posts);

    }

    public function laporki()
    {
        $posts = Lapor::orderBy('created_at','desc')->get();
        return view('dashboard.laporan')->with('lapor',$posts);
    }

}
