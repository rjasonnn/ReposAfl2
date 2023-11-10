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
    <div class="content-aside">
        <div class="content" id="content">
            <div class="content-first">
                <h2>The Importance</h2>
                <p>Cascading Style Sheets (CSS) is an integral part of web development. It is used to style and format the
                    layout of web pages, and can be used to create visually appealing and dynamic websites. CSS allows web
                    developers to separate the content of a web page from its presentation, making it easier to update and
                    maintain a website. With CSS, web developers can create responsive web designs that adapt to different
                    screen sizes and devices.</p>
                <p>In addition, CSS provides a range of features and functionalities that enhance the user experience of a
                    website. It can be used to create animations, transitions, and effects that add interactivity and
                    engagement to web pages. CSS also allows for the customization of fonts, colors, and backgrounds,
                    providing a unique and personalized look to a website. Overall, CSS plays a crucial role in modern web
                    development, and mastering its concepts and techniques is essential for creating successful and engaging
                    websites.</p>
            </div>
            <div class="content-second">
                <h2>The History</h2>
                <h4>Evolution of CSS: From Styling HTML to Revolutionizing Web Design</h4>
                <p>Cascading Style Sheets (CSS) was first introduced in 1996 by Håkon Wium Lie and Bert Bos, both working at
                    the European Organization for Nuclear Research (CERN). Initially, CSS was designed as a simple language
                    for styling HTML documents. It allowed web developers to separate the content of a web page from its
                    presentation, making it easier to maintain and update the website. CSS1 was released in 1996, followed
                    by CSS2 in 1998 and CSS3 in 1999.</p>
                <p>Over the years, CSS has evolved into a powerful tool for web design. With the introduction of CSS3, web
                    developers gained access to a range of new features and functionalities, including animations,
                    transitions, and dynamic effects. This allowed web designers to create engaging and interactive websites
                    that were previously impossible. CSS frameworks, such as Bootstrap and Foundation, have made it easier
                    for developers to create responsive and mobile-friendly websites. CSS preprocessors, such as Sass and
                    Less, have simplified the process of writing and organizing CSS code.</p>
                <p>In conclusion, CSS has come a long way since its inception in 1996. It has evolved from a simple language
                    for styling HTML to a powerful tool for web design, revolutionizing the way websites are created and
                    presented. The advancements in CSS have opened up new possibilities for web designers and developers,
                    leading to more engaging and interactive websites.</p>
            </div>
        </div>
        <aside>
            <h2>Contact Us</h2>
            <ul>
                <li><a href="">Instagram</a></li>
                <li><a href="">WhatsApp</a></li>
                <li><a
                        href="">Line</a>
                </li>
                <li><a href="">Telegram</a></li>
            </ul>
           
        </aside>
    </div>

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
            <p>Di gym kami, Anda akan menemukan beragam tantangan yang dapat diikuti untuk membantu Anda mencapai tujuan kebugaran dan kesehatan pribadi Anda. Mulai dari kompetisi angkat beban, lari maraton, hingga kelas-kelas olahraga khusus yang dirancang untuk meningkatkan kekuatan, daya tahan, dan keseimbangan Anda. Tantangan-tantangan ini tidak hanya memberi Anda kesempatan untuk mengukur kemajuan Anda, tetapi juga memotivasi Anda untuk terus meningkatkan diri, menjadikan gym kami tempat yang ideal untuk mengembangkan potensi kebugaran Anda. Jadi, bersiaplah untuk menghadapi berbagai tantangan seru dan menjadi versi terbaik dari diri Anda di gym kami!</p>
        </div>
        
        <div class="col-4 m-4 article" style="background: url(https://img.freepik.com/premium-vector/people-doing-gym-exercise-with-instructor_18660-558.jpg?size=626&ext=jpg&ga=GA1.1.1826414947.1698969600&semt=ais); background-repeat:no-repeat; background-size:cover;">
            
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
