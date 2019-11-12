@extends('dashboard.layout')

@section('content')
    <div class="dasboard-content">
        <h1>Buat Berita</h1>
        <div>
        {!! Form::open(['action' => 'PostController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
            {{Form::label('title', 'Judul Berita')}}
            {{Form::text('title','', ['palceholder' => 'Judul'])}}
            {{Form::label('body', 'Isi Berita')}}
            {{Form::textarea('body','', ['id' => 'article-ckeditor', 'palceholder' => 'Isi'])}}
            <br>
            {{Form::label('Cover Berita')}}
            <br>
            {{Form::file('cover_image')}}
            {{Form::submit('Submit', ['class' => 'submitBtn'])}}
        {!! Form::close() !!}
        </div>
        <h1>Berita yang telah di post</h1>
        <table>
            <tr>
                <th>ID</th>
                <th>Judul Berita</th>
                <th>tanggal pembuatan</th>
                <th>Id user</th>
            </tr>
            @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->created_at}}</td>
                    <td>{{$post->user->name}}</td>
                    <td><a href="/berita/{{$post->id}}/edit">Edit</a></td>
                    <td>
                    {!!Form::open(['action' => ['PostController@destroy', $post->id], 'method' => 'POST'])!!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::submit('Hapus')}}
                    {!!Form::close()!!}
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection