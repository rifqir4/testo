@extends('layout.app')

@section('content')
    <section>
        <div class="judul-content">
            Keluhan & Saran
        </div>
    </section>
    <ul class="breadcrumb">
        <li><a href="/">Kecamatan Rappocini</a></li>
        <li><span style="font-weight: bold">Keluhan & Saran</span></li>
    </ul>
    <section>
        <div class="container grid_41">
            <div id="isi_kiri">
                {!! Form::open(['action' => 'KelasController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                {{Form::label('name', 'Nama Anda (wajib diisi)')}}
                {{Form::text('name','', ['placeholder' => 'Nama Anda'])}}
                {{Form::label('email', 'Email (wajib diisi)')}}
                {{Form::text('email','', ['placeholder' => 'Email'])}}
                {{Form::label('subjek', 'Subjek')}}
                {{Form::text('subjek','', ['placeholder' => 'Subjek'])}}
                {{Form::label('pesan', 'Pesan Anda')}}
                {{Form::textarea('pesan','', ['placeholder' => 'Isi disini ..'])}}
                {{Form::submit('Submit', ['class' => 'submitBtn'])}}
                {!! Form::close() !!}
            </div>
            <div id="isi_kanan">
                <p>
                    Semper viverra nam libero justo laoreet sit amet cursus. A iaculis at erat pellentesque adipiscing commodo elit at imperdiet. Est lorem ipsum dolor sit. Lectus sit amet est placerat in egestas erat. Magna fringilla urna porttitor rhoncus dolor purus. Lorem dolor sed viverra ipsum nunc aliquet bibendum enim facilisis. Suspendisse potenti nullam ac tortor vitae purus faucibus ornare. Nibh sit amet commodo nulla facilisi nullam vehicula. Congue eu consequat ac felis. Ac tortor vitae purus faucibus ornare suspendisse sed nisi. Laoreet suspendisse interdum consectetur libero id faucibus nisl tincidunt eget. In metus vulputate eu scelerisque felis. Pharetra magna ac placerat vestibulum lectus mauris ultrices eros in. Etiam non quam lacus suspendisse faucibus interdum. Duis ultricies lacus sed turpis tincidunt id. Orci eu lobortis elementum nibh tellus molestie. Eget velit aliquet sagittis id consectetur purus. Tortor posuere ac ut consequat semper. Tincidunt lobortis feugiat vivamus at augue.
                </p>

            </div>
        </div>
    </section>
@endsection