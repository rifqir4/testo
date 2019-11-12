@extends('dashboard.layout')

@section('content')
    <div class="dasboard-content">
        <h1>Keluhan & Saran</h1>
        @foreach($kelas as $post)
        <div class="box">
            <h1>Nama : {{$post->name}}</h1>
            <h1>Email : {{$post->email}}</h1>
            <h1>Subjek : {{$post->subjek}}</h1>
            <h1>Tanggal : {{$post->created_at}}</h1>
            <h1>Pesan :</h1>
            <p>"{{$post->pesan}}"</p>
        </div>
        @endforeach

    </div>
@endsection