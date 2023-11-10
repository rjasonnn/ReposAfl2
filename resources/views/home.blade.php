@extends('layouts.template')

@section('content')
    <section id="header">
        <div class="header-texts">
            <h1>Arnold Gym</h1>
            <h3>Perjalanan gym yang terjangkau dimulai sekarang!!</h3>
            <p>Akses tak terbatas ke puluhan gym premium & variasi kelas gratis setiap harinya. Hanya di Arnold Gym!!</p>
        </div>
        <div class="header-filler">
            <div>

            </div>
        </div>
    </section>

    <style>
       
    
    </style>
    <div class="content-aside article">
        <div class="content" id="content">

             
            
           

        </div>
       
    </div>

    <aside class="articles">
        <h2>Contact Us</h2>
        <ul>
            <li><a href="">Instagram</a></li>
            <li><a href="">WhatsApp</a></li>
            <li><a href="">Line</a>
            </li>
            <li><a href="">Telegram</a></li>
        </ul>

    </aside>

    <div class="container text-center articles">
        <div class="row gx-5">
            @foreach ($challenges as $challenge)
                <div class="article col m-4">
                    <img src="{{ $challenge->image }}" alt="{{ $challenge->judul }}">
                    <h3>{{ $challenge->judul }} Challenge</h3>
                    <p>{{ $challenge->deskripsi }}</p>
                </div>
            @endforeach
        </div>
    </div>


    <div class="row articles">
        <div class="article col m-4" colspan="2">
            <h3>Challenge Yourself: Discover a Variety of Challenges at Our Gym </h3>
            <p>Di gym kami, Anda akan menemukan beragam tantangan yang dapat diikuti untuk membantu Anda mencapai tujuan
                kebugaran dan kesehatan pribadi Anda. Mulai dari kompetisi angkat beban, lari maraton, hingga kelas-kelas
                olahraga khusus yang dirancang untuk meningkatkan kekuatan, daya tahan, dan keseimbangan Anda.
                Tantangan-tantangan ini tidak hanya memberi Anda kesempatan untuk mengukur kemajuan Anda, tetapi juga
                memotivasi Anda untuk terus meningkatkan diri, menjadikan gym kami tempat yang ideal untuk mengembangkan
                potensi kebugaran Anda. Jadi, bersiaplah untuk menghadapi berbagai tantangan seru dan menjadi versi terbaik
                dari diri Anda di gym kami!</p>
        </div>

        <div class="col-4 m-4 article"
            style="background: url(https://img.freepik.com/premium-vector/people-doing-gym-exercise-with-instructor_18660-558.jpg?size=626&ext=jpg&ga=GA1.1.1826414947.1698969600&semt=ais); background-repeat:no-repeat; background-size:cover;">

            <a href="challenges" class="p-3">View More</a>
        </div>
    </div>



    <style>
        .mini-one {
            text-align: center;
        }

        .mini-one img {
            border-radius: 20%;
        }

        .mini-content {
            display: inline-block;
            vertical-align: middle;
            text-align: left;
        }

        .image-div {
            width: 100px;
            padding-bottom: 8px;
            background: black;
        }

        .image-div img {
            object-fit: cover;
            width: 150px;
            height: 150px;

        }
    </style>





    <div class="creativity" id="creativity">

        <h2 style="margin: -15px 45px">Our Trainers</h3>

            <div class="creativity-wrapper">

                @php
                    $counter = 0;
                @endphp

                @foreach ($trainers as $key => $item)
                    @if ($counter < 4)
                        <div class="mini-one image-div">
                            <div>
                                <a class="" href="trainerdetail/{{ $item->id }}" class="p-2">
                                    <img src="{{ $item->profile_picture }}" alt="Background Image">
                                </a>
                            </div>


                            <h2 style="color: black">{{ $item->name }}</h2>

                            <div class="mini-content">

                                <p>{{ $item->bio }}</p>
                            </div>
                        </div>

                        @php
                            $counter++;
                        @endphp
                    @else
                    @break
                @endif
            @endforeach
        </div>
</div>






<footer>

    <div class="footer-credit">
        <h3>Arnold Gym</h3>
        <h3>By Reyhan and Steven</h3>
    </div>
</footer>
@endsection
