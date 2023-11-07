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
            <h2>Resources</h2>
            <ul>
                <li><a href="https://www.w3schools.com/w3css/defaulT.asp">W3Schools</a></li>
                <li><a href="https://www.sololearn.com/learn/courses/css-introduction">SoloLearn</a></li>
                <li><a
                        href="https://www.codecademy.com/catalog/language/html-css?g_network=g&g_productchannel=&g_adid=528849219307&g_locinterest=&g_keyword=codecademy%20css&g_acctid=243-039-7011&g_adtype=&g_keywordid=kwd-319752155745&g_ifcreative=&g_campaign=account&g_locphysical=1007715&g_adgroupid=128133970468&g_productid=&g_source={sourceid}&g_merchantid=&g_placement=&g_partition=&g_campaignid=1726903838&g_ifproduct=&g_adtype=search&g_acctid=243-039-7011">Codecademy</a>
                </li>
                <li><a href="https://www.udemy.com/topic/css/">Udemy</a></li>
            </ul>
            <h2>Other Works</h2>
            <ul>
                <li><a href="">Website 1</a></li>
                <li><a href="">Website 2</a></li>
                <li><a href="">Website 3</a></li>
                <li><a href="">Website 4</a></li>
            </ul>
        </aside>
    </div>
    <div class="articles" id="articles">
        <table>
            <tr class="row-first">
                <td class="article">
                    <img alt="Article 1">
                    <h3>The Future of CSS: Trends and Predictions</h3>
                    <p>As technology continues to evolve, so too does the world of web design. CSS is no exception, with
                        advancements being made all the time to enhance the user experience of websites. In this article, we
                        will explore the latest trends and predictions for the future of CSS and what it means for web
                        developers and designers.</p>
                    <a href="#">See More</a>
                </td>
                <td class="article">
                    <img alt="Article 2">
                    <h3>The Benefits of CSS for Web Developers</h3>
                    <p>CSS preprocessors, such as Sass and Less, have become increasingly popular among web developers. They
                        offer a range of benefits, including simpler code organization, increased efficiency, and easier
                        maintenance of CSS files. In this article, we will explore the advantages of using CSS preprocessors
                        and how they can benefit your web development workflow.</p>
                    <a href="#">See More</a>
                </td>
                <td class="article">
                    <img alt="Article 3">
                    <h3>The Role of CSS in Accessibility and Inclusitivity</h3>
                    <p>Web accessibility is becoming an increasingly important consideration for web designers and
                        developers. CSS plays a crucial role in ensuring that websites are accessible to all users,
                        including those with disabilities. In this article, we will explore the role of CSS in creating
                        accessible and inclusive web designs and the best practices for implementing them.</p>
                    <a href="#">See More</a>
                </td>
            </tr>
            <tr class="row-second">
                <td class="article-long" colspan="2">
                    <h3>CSS vs. JavaScript: Which One Should You Use for Animation?</h3>
                    <p>CSS and JavaScript are both powerful tools for creating animation effects on websites. While CSS is
                        often used for simple animations, JavaScript offers more advanced functionality and control over
                        animations. In this article, we will explore the differences between CSS and JavaScript animation
                        effects and help you decide which one is best suited for your web development needs. We will also
                        provide examples and tips for using each tool effectively.</p>
                </td>
                <td>
                    <img alt="Article 4">
                </td>
            </tr>
        </table>
    </div>




    <div class="creativity" id="creativity">
        <div class="creativity-wrapper">
            @php
                $counter = 0;
            @endphp
    
            @foreach ($trainers as $key => $item)
                @if ($counter < 4)
                    <div class="mini-one">
                        <a href="trainerdetail/{{ $item->id }}">
                            <img src="{{ $item->profile_picture }}" alt="Background Image" width="100" height="100">
                        </a>
    
                        <div class="mini-content">
                            <h2>{{ $item->name }}</h2>
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
        <div class="footer-logo">
            <h3>CSS Template</h3>
            <p>Showcasing the talent and abilites of students.</p>
        </div>
        <div class="footer-form">
            <p>Registration Form</p>
            <form action="">
                <label for="name">Name:</label><br>
                <input type="text" id="name" name="name"><br>
                <label for="gender">Gender:</label><br>
                <select name="gender" id="gender">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="null">Prefer Not to Answer</option>
                </select>
                <p>Please select your favorite Web language:</p>
                <input type="radio" id="html" name="fav_language" value="HTML">
                <label for="html">HTML</label><br>
                <input type="radio" id="css" name="fav_language" value="CSS">
                <label for="css">CSS</label><br>
                <input type="radio" id="javascript" name="fav_language" value="JavaScript">
                <label for="javascript">JavaScript</label><br>
                <button>Submit</button>
            </form>
        </div>
        <div class="footer-credit">
            <h3>Template Made by Nicholas Christian Irawan</h3>
            <h3>Copyright @ 2023 NCI</h3>
        </div>
    </footer>
@endsection
