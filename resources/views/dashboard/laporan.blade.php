@extends('dashboard.layout')

@section('content')
    <div class="dasboard-content">
        <h1>Keluhan & Saran</h1>
        @foreach($lapor as $post)
            <div class="box">
                <h1>Nama : {{$post->name}}</h1>
                <h1>Email : {{$post->email}}</h1>
                <h1>Subjek : {{$post->subjek}}</h1>
                <h1>Tanggal : {{$post->created_at}}</h1>
                <h1>Pesan :</h1>
                <p>"{{$post->pesan}}"</p>
                <a href="/storage/lapor/ktp/{{$post->ktp}}">
                    <img src="/storage/lapor/ktp/{{$post->ktp}}" id="ktp">
                </a>
                <a href="/storage/lapor/foto/{{$post->foto1}}">
                    <img src="/storage/lapor/foto/{{$post->foto1}}" id="foto">
                </a>
                <a href="/storage/lapor/foto/{{$post->foto2}}">
                    <img src="/storage/lapor/foto/{{$post->foto2}}" id="foto">
                </a>
            </div>
        @endforeach

    </div>
@endsection