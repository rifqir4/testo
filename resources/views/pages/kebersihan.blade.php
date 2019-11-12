@extends('layout.app')

@section('content')
    <section>
        <div class="judul-content">
            Kebersihan
        </div>
    </section>
    <ul class="breadcrumb">
        <li><a href="/">Kecamatan Rappocini</a></li>
        <li><span style="font-weight: bold">Kebersihan</span></li>
    </ul>
    <section>
        <div class="container grid_41">
            <div id="isi_kiri">
                <h1>DATA PENYAPUAN JALAN DAN PEMOTONG RUMPUT DI KECAMATAN RAPPOCINI</h1>
                <table width="100%" style="text-align: left">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Lokasi</th>
                    </tr>
                    @foreach($kebersihan as $data)
                        <tr>
                            <td>{{$data->id}}</td>
                            <td>{{$data->name}}</td>
                            <td>{{$data->lokasi}}</td>
                        </tr>
                    @endforeach
                </table><br>
                <h1>VOLUME SAMPAH DAN JUMLAH ARMADA YANG BEROPERASI</h1>
                <table width="100%" style="text-align: left" cellpadding="5px">
                    <tr>
                        <th>No</th>
                        <th>Kelurahan</th>
                        <th>Dum Truk</th>
                        <th>Tangkasaki</th>
                        <th>Roda 3 Pemkot</th>
                        <th>Roda 3 Mandiri</th>
                        <th>Roda 3 BKM</th>
                        <th>Roda 3 Swasta</th>
                        <th>Gerobak Becak</th>
                        <th>Volume Sampah (m3)</th>
                    </tr>
                    @foreach($armada as $data)
                        <tr>
                            <td>{{$data->id}}</td>
                            <td>{{$data->kelurahan}}</td>
                            <td>{{$data->dum_truk}} Unit</td>
                            <td>{{$data->tangkasaki}} Unit</td>
                            <td>{{$data->roda3_pemkot}} Unit</td>
                            <td>{{$data->roda3_mandiri}} Unit</td>
                            <td>{{$data->roda3_bkm}} Unit</td>
                            <td>{{$data->roda3_swasta}} Unit</td>
                            <td>{{$data->becak}} Unit</td>
                            <td>{{$data->volume}}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
            <div id="isi_kanan">
                <p>
                    Semper viverra nam libero justo laoreet sit amet cursus. A iaculis at erat pellentesque adipiscing commodo elit at imperdiet. Est lorem ipsum dolor sit. Lectus sit amet est placerat in egestas erat. Magna fringilla urna porttitor rhoncus dolor purus. Lorem dolor sed viverra ipsum nunc aliquet bibendum enim facilisis. Suspendisse potenti nullam ac tortor vitae purus faucibus ornare. Nibh sit amet commodo nulla facilisi nullam vehicula. Congue eu consequat ac felis. Ac tortor vitae purus faucibus ornare suspendisse sed nisi. Laoreet suspendisse interdum consectetur libero id faucibus nisl tincidunt eget. In metus vulputate eu scelerisque felis. Pharetra magna ac placerat vestibulum lectus mauris ultrices eros in. Etiam non quam lacus suspendisse faucibus interdum. Duis ultricies lacus sed turpis tincidunt id. Orci eu lobortis elementum nibh tellus molestie. Eget velit aliquet sagittis id consectetur purus. Tortor posuere ac ut consequat semper. Tincidunt lobortis feugiat vivamus at augue.
                </p>
            </div>
        </div>
    </section>
@endsection



