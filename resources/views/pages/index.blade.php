@extends('layout.app')

@section('content')

<div id="content">
    <section>
        <div class="carousel">
            <div class="arrow" id="kiri" style="display: none"></div>
            <div class="arrow" id="kanan" style="display: none"></div>
            <div id="slider">
                <div class="slide slide1">
                    <div class="slide-content"></div>
                </div>
                <div class="slide slide2">
                    <div class="slide-content"></div>
                </div>
                <div class="slide slide3">
                    <div class="slide-content"></div>
                </div>
                <div class="slide slide4">
                    <div class="slide-content"></div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div>
                <iframe width="100%" height="450" src="https://www.youtube.com/embed/zRSeNyC__l8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
        </div>
    </section>

    <section>
        <div class="container grid_dw">
            <div class="download">
                <a href="/download/blangko-layanan">
                    <img src="/storage/images/home/blangko-layanan.jpg">
                </a>
            </div>
            <div class="download">
                <a href="/download/dokumen">
                    <img src="/storage/images/home/dokumen.jpg">
                </a>
            </div>
        </div>
        <div class="container grid_c">
            <div class="iklan">
                <img src="/storage/images/bannerkecsehat.jpg">
            </div>
            <div class="person">
                @foreach($persons as $person)
                <!--
                <div class="card-h">
                    <div id="logo"><i class="material-icons" style="color: whitesmoke; font-size: 30px; margin-top: 30%; margin-left: 25%; padding: 5px; background-color: #ddb475;">account_balance</i></div>
                    <div><h1>{{$person->place}}</h1></div>
                    <div><h3>{{$person->name}}</h3></div>
                </div> 
                @endforeach -->
                <?php
                for ($x = 1; $x <= 11; $x++) {
                    echo "<div><img src='/storage/images/home/kelurahan/kel-$x.png' width='100%'></div>";
                }
                ?>
                <img src="" alt="">
            </div>
        </div>
    </section>

    <section>
        <div class="container grid_t">
            <div class="card">
                <img src="/storage/images/home/camat.jpg">
                <div class="jab">Camat</div>
                <h2>Dr. Hamri Haiya,AP.,S.Sos.,SH.,M.Si</h2>
            </div>
            <div class="card">
                <img src="/storage/images/home/sek_camat.jpg">
                <div class="jab">Sekretaris Camat</div>
                <h2>H. Ismail Abdullah, S.STP</h2>
            </div>
            <div class="card">
                <h1>Profile Singkat</h1>
                <p>Kecamatan Rappocini merupakan salah satu dari 14 Kecamatan di Kota Makassar, pemekaran dari Kecamatan Tamalate yang dibentuk pada hari Rabu tanggal 07 Januari 1998 tindak lanjut dari persetujuan Mendagri nomor 138 /1242/PUOD tanggl 03 Mei 1996 berdasarkan Gubernur Sulwesi Selatan 538/VI/1996 Tahun 1996 tanggal 27 Juni 1996, dengan luas wilayah 9,23 km2.</p>
                <a href="#">Selengkapnya >></a>
            </div>
        </div>
    </section>

    <section>
            <div class="container grid_t">
                @foreach($cards as $card)
                    <div class="card berita">
                        <div class="tgl-berita">{{str_limit($card->created_at, $limit = 10, $end = '')}}</div>
                        <div id="image" style="background-image: url('/storage/cover_berita/{{$card->cover_image}}')"></div>
                        <a href="/berita/{{$card->id}}">{{$card->title}}</a>
                        <p>{!! str_limit($card->body, $limit = 300, $end = '...') !!}</p>
                    </div>
                @endforeach
                <div class="card berita">
                    <div class="wrap-tab-berita">
                        @foreach($posts as $post)
                            <a href="/berita/{{$post->id}}">
                                <div class="tab-berita">
                                   {{$post->title}}
                                    <p id="light-grey">{!! str_limit($post->created_at, $limit = 10, $end = '') !!}</p>
                                </div>
                            </a>
                        @endforeach
                        <a href="/berita">
                            <div class="tab-berita">
                                Berita Lainnya -->
                            </div>
                        </a>
                    </div>
                </div>
            </div>
    </section>

    <section>
        <div class="mapku">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d993.3715851387464!2d119.442683!3d-5.185955!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xcdfa28d5cd7b9b17!2sKantor+Kecamatan+Rappocini!5e0!3m2!1sen!2sid!4v1518715163920" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </section>
</div>

<script>
    let sliderImages = document.querySelectorAll('.slide'),
        arrowLeft = document.querySelector('#kiri'),
        arrowRight = document.querySelector('#kanan'),
        current = 0;

    function ulang() {
        for(let i = 0; i < sliderImages.length; i++) {
            sliderImages[i].style.display = 'none';
        }
    }

    function startSlide() {
        ulang();
        sliderImages[0].style.display = 'block';
    }

    startSlide();
    slideRight();

    function slideLeft() {
        ulang();
        sliderImages[current - 1].style.display = 'block';
        current--;
    }

    arrowLeft.addEventListener('click',function() {
        if(current === 0){
            current = sliderImages.length;
        }
        slideLeft();
    });

    function slideRight() {
        if(current === sliderImages.length - 1){
            current = -1;
        }
        ulang();
        sliderImages[current + 1].style.display = 'block';
        current++;
        setTimeout(slideRight,5000);
    }

    arrowRight.addEventListener('click',function() {
        slideRight();
    });


</script>
@endsection