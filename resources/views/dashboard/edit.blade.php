@extends('dashboard.layout')

@section('content')
    <div class="dasboard-content">
        <h1>Edit Berita</h1>
        <div>
        {!! Form::open(['action' => ['PostController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
            {{Form::label('title', 'Judul Berita')}}
            {{Form::text('title', $post->title, ['palceholder' => 'Judul'])}}
            {{Form::label('body', 'Isi Berita')}}
            {{Form::textarea('body',$post->body, ['id' => 'article-ckeditor', 'palceholder' => 'Isi'])}}
            <br>
            {{Form::label('Cover Berita')}}
            <br>
            {{Form::file('cover_image')}}
            {{Form::hidden('_method','PUT')}}
            {{Form::submit('Submit')}}
        {!! Form::close() !!}
        </div>
    </div>
@endsection