@extends('layout.app')

@section('content')
    <section>
        <div class="judul-content">
            Dokumen IKU LAKIP Kinerja RENJA RENSTRA
        </div>
    </section>
    <ul class="breadcrumb">
        <li><a href="/">Kecamatan Rappocini</a></li>
        <li><a href="#">Download</a></li>
        <li><span style="font-weight: bold">Dokumen IKU LAKIP Kinerja RENJA RENSTRA</span></li>
    </ul>
    <section>
        <div class="container">
                <div class="grid_tiga">
                    <div class="download">
                        <a href="/storage/pdf/01-RENCANA-AKSI-2017.pdf" target="_blank">
                            <img src="/storage/images/dokumen/RENCANA-AKSI.jpg">
                        </a>
                    </div>
                    <div class="download">
                        <a href="/download/dokumen/lakip">
                            <img src="/storage/images/dokumen/LAKIP.jpg">
                        </a>
                    </div>
                    <div class="download">
                        <a href="/download/dokumen/renja">
                            <img src="/storage/images/dokumen/RENCANA-KERJA.jpg">
                        </a>
                    </div>
                    <div class="download">
                        <a href="/storage/pdf/IKU.pdf" target="_blank">
                            <img src="/storage/images/dokumen/IKU.jpg">
                        </a>
                    </div>
                    <div class="download">
                        <a href="/download/dokumen/kinerja">
                            <img src="/storage/images/dokumen/PERJANJIAN-KINERJA.jpg">
                        </a>
                    </div>
                    <div class="download">
                        <a href="/download/dokumen/renstra">
                            <img src="/storage/images/dokumen/RENCANA-STRATEGIS.jpg">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection