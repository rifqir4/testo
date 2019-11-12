@extends('layout.app')

@section('content')
    <section>
        <div class="judul-content">
            Pemerintahan & Trantib
        </div>
    </section>
    <ul class="breadcrumb">
        <li><a href="/">Kecamatan Rappocini</a></li>
        <li><a href="#">Tentang</a></li>
        <li><span style="font-weight: bold">Pemerintahan & Trantib</span></li>
    </ul>
    <section>
        <div class="container">
            <div id="isi_kiri">
                <table width="100%">
                    <tr>
                        <th colspan="9">Pemerintahan</th>
                    </tr>
                    <tr>
                        <th>No</th>
                        <th>Kelurahan</th>
                        <th>Luas (km2)</th>
                        <th>RT</th>
                        <th>RW</th>
                        <th>Jumlah KK</th>
                        <th colspan="3">Penduduk</th>
                    </tr>
                    <tr>
                        <th colspan="6"> </th>
                        <th>L</th>
                        <th>P</th>
                        <th>Jumlah</th>
                    </tr>
                    @foreach($pemtib as $data)
                        <tr align="center">
                            <td>{{$data->no}}</td>
                            <td>{{$data->kelurahan}}</td>
                            <td>{{$data->luas}}</td>
                            <td>{{$data->rt}}</td>
                            <td>{{$data->rw}}</td>
                            <td>{{number_format($data->jumlah_kk)}}</td>
                            <td>{{number_format($data->pen_l)}}</td>
                            <td>{{number_format($data->pen_p)}}</td>
                            <td>{{number_format($data->pen_l + $data->pen_p)}}</td>
                        </tr>
                    @endforeach
                    <tr align="center">
                        <td></td>
                        <td>JUMLAH</td>
                        <td>{{$luas}}</td>
                        <td>{{$rt}}</td>
                        <td>{{$rw}}</td>
                        <td>{{number_format($kk)}}</td>
                        <td>{{number_format($l)}}</td>
                        <td>{{number_format($p)}}</td>
                        <td>{{number_format($jumlah)}}</td>
                    </tr>
                </table>
            </div>
        </div>
    </section>
@endsection