@extends('layouts.main')

@section('content')

<section>
    <div class="container pt-5 pb-5">
        <div class="row justify-content-start">
            <!-- Standart Celan -->
            <div class="col-3">
                <img id="img-service" src="images/StandartClean.png" alt="">
            </div>
            <div id="col-height" class="col-3">
                <h4 id='ServiceTitle'>Standart Clean</h4>
                <h4 class="pt-2" id='ServicePrice'>Rp.30.000</h4>
                <p class="pt-2" id='ServiceDesc'>Pembersihan bagian atas dan tengah.
                    Bagus untuk sepatu kets dengan sedikit kotoran dari penggunaan normal sehari-hari.
                    Pilihan ini tidak menghilangkan noda atau kotoran membandel yang dalam.</p>
                <div class="pt-3">
                    <a class="btn text-light" id="buttonservice">
                        Pesan Sekarang
                    </a>
                </div>
            </div>

            <!-- Deep Clean -->
            <div class="col-3">
                <img id="img-service" src="images/DeepClean.png" alt="">
            </div>
            <div class="col-3">
                <h4 id='ServiceTitle'>Deep Clean</h4>
                <h4 id='ServicePrice' class="pt-2">Rp.40.000</h4>
                <p class="pt-2" id='ServiceDesc'>Pembersihan mendalam pada bagian atas, tengah, dan tali.
                    Opsi ini menargetkan noda dan kotoran yang membandel.</p>
                <div class="pt-3">
                    <a class="btn text-light" id="buttonservice">
                        Pesan Sekarang
                    </a>
                </div>
            </div>
        </div>

        <div class="container pt-5 pb-5">
            <div class="row justify-content-start">
                <!-- Premium Clean -->
                <div class="col-3">
                    <img id="img-service" src="images/PremiumClean.png" alt="">
                </div>
                <div class="col-3">
                    <h4 id='ServiceTitle'>Premium Clean</h4>
                    <h4 class="pt-2" id='ServicePrice'>Rp.45.000</h4>
                    <p class="pt-2" id='ServiceDesc'>Clean Standard untuk sneakers dengan bahan premium seperti suede
                        dan Primeknit. Juga untuk fashion sneakers seperti Gucci, Balenciaga, DLL..</p>
                    <div class="pt-3">
                        <a class="btn text-light" id="buttonservice">
                            Pesan Sekarang
                        </a>
                    </div>
                </div>

                <!-- Weekend Celan -->
                <div class="col-3">
                    <img id="img-service" src="images/WeekendClean.png" alt="">
                </div>
                <div class="col-3">
                    <h4 id='ServiceTitle'>Weekend Clean</h4>
                    <h4 class="pt-2" id='ServicePrice'>Rp.50.000</h4>
                    <p class="pt-2" id='ServiceDesc'>Perhatian cermat terhadap detail, deep clean, sol dalam, sol dalam,
                        pelapis, pewangi.</p>
                    <div class="pt-3">
                        <a class="btn text-light" id="buttonservice">
                            Pesan Sekarang
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection