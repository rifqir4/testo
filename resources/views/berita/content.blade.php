@extends('layout.app')

@section('content')
    <section>
        <div class="judul-content">
            Berita
        </div>
    </section>
    <ul class="breadcrumb">
        <li><a href="/">Kecamatan Rappocini</a></li>
        <li><a href="/berita">Berita</a></li>
        <li><span style="font-weight: bold">{{$posts->title}}</span></li>
    </ul>
    <section>
        <div class="container grid_41">
            <div id="isi_kiri">
                <div class="content-berita">
                    <img src="/storage/cover_berita/{{$posts->cover_image}}">
                    <div>
                        <ul class="writer">
                            <li>{!! str_limit($posts->created_at, $limit = 10, $end = '') !!}</li>
                            <li>{{$posts->tags}}</li>
                            <li><a href="/berita">Berita</a></li>
                        </ul>
                    </div>
                    <h1>{{$posts->title}}</h1>
                    <p>{!! $posts->body !!}</p>
                </div>
            </div>
            <div id="isi_kanan">
                <div class="card berita">
                    <div class="wrap-tab-berita">
                        @foreach($tabs as $tab)
                            <a href="/berita/{{$tab->id}}">
                                <div class="tab-berita">
                                    {{$tab->title}}
                                    <p id="light-grey">{!! str_limit($tab->created_at, $limit = 10, $end = '') !!}</p>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection