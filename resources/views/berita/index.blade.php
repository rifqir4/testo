@extends('layout.app')

@section('content')
    <section>
        <div class="judul-content">
            Berita
        </div>
    </section>
    <ul class="breadcrumb">
        <li><a href="/">Kecamatan Rappocini</a></li>
        <li><span style="font-weight: bold">Berita</span></li>
    </ul>
    <section>
        <div class="container grid_41">
            <div id="isi_kiri">
                @if(count($posts) > 0 )
                    @foreach($posts as $post)
                        <div class="card-berita">
                            <img src="/storage/cover_berita/{{$post->cover_image}}">
                            <a href="/berita/{{$post->id}}"><h1>{{$post->title}}</h1></a>
                            <p>{!! str_limit($post->body, $limit = 200, $end = '...') !!}<a href="/berita/{{$post->id}}">Selengkapnya</a></p>
                            <h3>{{str_limit($post->created_at, $limit = 10, $end = '')}} | {{$post->tags}}</h3>
                        </div>
                    @endforeach
                    <div class="pagination">
                        {{$posts->links()}}
                    </div>
                @else
                    <h1>no post found</h1>
                @endif
            </div>
            <div id="isi_kanan">
                <p>
                    Semper viverra nam libero justo laoreet sit amet cursus. A iaculis at erat pellentesque adipiscing commodo elit at imperdiet. Est lorem ipsum dolor sit. Lectus sit amet est placerat in egestas erat. Magna fringilla urna porttitor rhoncus dolor purus. Lorem dolor sed viverra ipsum nunc aliquet bibendum enim facilisis. Suspendisse potenti nullam ac tortor vitae purus faucibus ornare. Nibh sit amet commodo nulla facilisi nullam vehicula. Congue eu consequat ac felis. Ac tortor vitae purus faucibus ornare suspendisse sed nisi. Laoreet suspendisse interdum consectetur libero id faucibus nisl tincidunt eget. In metus vulputate eu scelerisque felis. Pharetra magna ac placerat vestibulum lectus mauris ultrices eros in. Etiam non quam lacus suspendisse faucibus interdum. Duis ultricies lacus sed turpis tincidunt id. Orci eu lobortis elementum nibh tellus molestie. Eget velit aliquet sagittis id consectetur purus. Tortor posuere ac ut consequat semper. Tincidunt lobortis feugiat vivamus at augue.
                </p>
            </div>
        </div>
    </section>
@endsection