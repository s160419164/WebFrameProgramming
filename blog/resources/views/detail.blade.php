<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div>
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                @if( $detailid=='medicine_1')
                    <div>
                        <div>
                            <h2>Paracetamol</h4>
                        </div>
                        <div>
                            <img src="{{asset('img/paracetamol.jpeg')}}"/>
                        </div>
                    </div>
                    <div><h4>Paracetamol adalah obat untuk meredakan demam dan nyeri, termasuk nyeri haid atau sakit gigi. 
                        Paracetamol atau acetaminophen tersedia dalam bentuk tablet, sirop, tetes, suppositoria, dan infus.</h4>
                    </div>
                @elseif($detailid=='medicine_2')
                        <div>
                            <div><h2><a href="{{route('detailmedicines',['id'=>'medicine_2'])}}">Promag</a></h4></div>
                            <div><img src="{{asset('img/promag.jpg')}}"/></div>
                       </div>
                       <div><h4>Promag bermanfaat untuk mengatasi sakit maag, penyakit asam lambung naik, dan perut kembung. 
                           Obat ini dijual secara bebas. Promag tersedia dalam bentuk tablet kunyah dan suspensi cair dengan kandungan bahan 
                           aktif yang bervariasi di tiap jenisnya.</h4></div>
                @elseif($detailid=='medicine_3')
                        <div>
                            <div><h2><a href="{{route('detailmedicines',['id'=>'medicine_3'])}}">Konidin</a></h4></div>
                            <div><img src="{{asset('img/konidin.jpg')}}"/></div>
                       </div>
                       <div><h4>Konidin bermanfaat untuk mengobati batuk berdahak, kering, batuk yang disebabkan oleh alergi hingga 
                           menuntaskan sisa-sisa bronkitis.</h4></div>
                @elseif($detailid=='equip_1')
                         <div>
                            <div><h2><a href="{{route('detailequip',['id'=>'equip_1'])}}">Stetoskop</a></h4></div>
                            <div><img src="{{asset('img/stetoskop.jpg')}}"/></div>
                        </div>
                        <div><h4>Alat ini berfungsi untuk mendengarkan suara yang terdapat di dalam tubuh. Seperti suara paru-paru, 
                            detak jantung, dan untuk memeriksa gangguan pada usus dan lambung.</h4></div>
                        </div>
                @elseif($detailid=='equip_2')
                        <div>
                           <div><h2><a href="{{route('detailequip',['id'=>'equip_2'])}}">Tensimeter</a></h4></div>
                           <div><img src="{{asset('img/tensimeter.jpg')}}"/></div>
                           <div><h4>Tensimeter atau sfigmomanometer merupakan alat yang digunakan untuk mengukur tekanan darah</h4></div>
                        </div>
                @endif
                @elseif($detailid=='equip_3')
                        <div>
                           <div><h2><a href="{{route('detailequip',['id'=>'equip_3'])}}">Penlight</a></h4></div>
                           <div><img src="{{asset('img/penlight.jpg')}}"/></div>
                           <div><h4>Penlight merupakan intrumen kedokteran yang berguna untuk memeriksa di daerah gelap seperti rongga mulut, telinga, dll.</h4></div>
                        </div>
                @endif
            </div>
        </div>
    </body>
</html>
