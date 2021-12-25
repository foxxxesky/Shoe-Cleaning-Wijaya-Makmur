@extends('layouts.main')

@section('content')
<!-- Jumbotron -->
<section id="home">
    <div id="jumbotron">
        <div class="container pt-5 pb-5">
            <div class="row justify-content-around">
                <div class="col-7">
                    <div class="pt-5">
                        <h4 id="text-jumbotron">Shoe Cleaning Siap Membersihkan Sepatu Anda!</h4>
                        <p id="desc-jumbotron">Percayakan sepatu kesukaan anda kepada kami!</p>
                    </div>
                    <button id="button-jumbotron" class="btn btn-light">Bersihkan Sekarang!</button>
                </div>
                <div class="col-5">
                    <img id="img-jumbotron" src="images/char.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Jumbotron -->

<!-- Layanan Kami -->
<section id="service">
    <h4 class="text-center pt-5" id="text-layanankami">Layanan Kami</h4>
    <div class="text-center">
        <img src="images/line.png" alt="">
    </div>
    <p class="text-center pt-2 pb-2" id="desc-layanan">Kami telah mencuci lebih dari 391,812 pasang sepatu, dan akan
        terus bertambah...
        Berikut jasa yang kami tawarkan</p>
    <div class="container pb-5">
        <div class="row justify-content-around">
            <div class="col-3">
                <img id="img-layanan" src="images/standart.png" alt="">
                <h5 class="text-center pt-3" id="item-layanan">Standart Clean</h5>
            </div>
            <div class="col-3">
                <img id="img-layanan" src="images/deep.png" alt="">
                <h5 class="text-center pt-3" id="item-layanan">Deep Clean</h5>
            </div>
            <div class="col-3">
                <img id="img-layanan" src="images/premium.png" alt="">
                <h5 class="text-center pt-3" id="item-layanan">Premium Clean</h5>
            </div>
            <div class="col-3">
                <img id="img-layanan" src="images/weekend.png" alt="">
                <h5 class="text-center pt-3" id="item-layanan">Weekend Clean</h5>
            </div>
        </div>
    </div>
</section>
<!-- Layanan Kami -->

<!-- Testimoni -->
<section id="testi">
    <h4 class="text-center pt-5" id="text-testimoni">Testimoni</h4>
    <div class="text-center">
        <img src="images/line.png" alt="">
    </div>
    <div class="container pt-3 pb-5">
        <div class="row justify-content-around">
            <div class="col-4">
                <img id="img-testimoni" src="images/testimoni.png" alt="">
            </div>
            <div class="col-6 pt-5">
                <h4 id="text-title-testimoni">Pelanggan Kami Mengatakan</h4>
                <p id="desc-testimoni">“Website pembersih sepatu membantu saya dalam aktivitas sehari-hari, bahkan saya
                    dapat melakukan
                    aktivitas dengan sangat cepat, terima kasih pembersih sepatu”</p>
                <h4 class="pt-2" id="person">Oliver Skyes</h4>
                <p id="location">Bojongsoang, Bandung</p>
            </div>
        </div>
    </div>
</section>
<!-- Testimoni -->

<!-- Tentang Kami -->
<section id="about">
    <div class="container pt-5 pb-5">
        <h4 class="text-center" id="text-tentang">Tentang Kami</h4>
        <div class="text-center pb-3">
            <img src="images/line.png" alt="">
        </div>
        <p class="text-center" id="desc-tentang">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sociis ut
            velit nec lobortis eget maecenas
            iaculis pellentesque. Sed adipiscing eget diam ut congue cursus arcu risus. Facilisis egestas faucibus
            suspendisse auctor pellentesque ut iaculis suscipit cursus. Varius dui iaculis tristique hac orci,
            vestibulum pretium integer. Ut maecenas odio vitae diam urna, habitasse egestas. Non sed egestas aenean odio
            bibendum volutpat. Nisi dictumst mauris augue nisl. Nullam id aliquam vestibulum porta potenti enim amet
            imperdiet. Volutpat id amet id ac. Varius dui iaculis tristique hac orci, vestibulum pretium integer. Ut
            maecenas odio vitae diam urna, habitasse egestas. Non sed egestas aenean odio bibendum volutpat. Nisi
            dictumst mauris augue nisl. Nullam id aliquam vestibulum porta potenti enim amet imperdiet. Volutpat id amet
            id ac</p>
    </div>
</section>
<!-- Tentang Kami -->

<!-- Our Team -->
<section>
    <div class="container pt-5 pb-5">
        <h4 class="text-center" id="text-team">Tim Kami</h4>
        <div class="text-center pb-5">
            <img src="images/line.png" alt="">
        </div>
        <!-- Row 1 -->
        <div class="row justify-content-around">
            <div class="col-4">
                <div class="text-center pb-3">
                    <img id="img-team" src="images/ryan.png" alt="">
                </div>
                <h4 id="name" class="text-center">Ryandi Yorsinda Anggoro</h4>
                <p id="role" class="text-center">UI/UX Designer</p>
            </div>
            <div class="col-4">
                <div class="text-center pb-3">
                    <img id="img-team" src="images/syarif.png" alt="">
                </div>
                <h4 id="name" class="text-center">Syariif Abdurrahman Bathik</h4>
                <p id="role" class="text-center">Project Manager</p>
            </div>
            <div class="col-4">
                <div class="text-center pb-3">
                    <img id="img-team" src="images/mubeth.png" alt="">
                </div>
                <h4 id="name" class="text-center">Mubeth Praditya</h4>
                <p id="role" class="text-center">Web Developer</p>
            </div>
        </div>

        <!-- Row 2 -->
        <div class="row justify-content-around pt-5">
            <div class="col-4">
                <div class="text-center pb-3">
                    <img id="img-team" src="images/ica.png" alt="">
                </div>
                <h4 id="name" class="text-center">Luh Putu Kartika Yasa Putri</h4>
                <p id="role" class="text-center">UX Researcher</p>
            </div>
            <div class="col-4">
                <div class="text-center pb-3">
                    <img id="img-team" src="images/hadi.png" alt="">
                </div>
                <h4 id="name" class="text-center">Hadi Noerddien Jayanto</h4>
                <p id="role" class="text-center">Data Engineer</p>
            </div>
            <div class="col-4">
                <div class="text-center pb-3">
                    <img id="img-team" src="images/harun.png" alt="">
                </div>
                <h4 id="name" class="text-center">Hasrinaldi Hasniman Harun</h4>
                <p id="role" class="text-center">System Analyst</p>
            </div>
        </div>
    </div>
</section>
<!-- Our Team -->
@endsection