<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web design</title>
    <link rel="stylesheet" href="/js/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="/js/owlcarousel/assets/owl.theme.default.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
<header>
    <div class="header-container" id="top-section">
        <div class="logo">
            <img src="/img/logo.png" alt="logo">
        </div>
        <input type="checkbox" id="menu-checkbox">
        <nav role="navigation">
            <label for="menu-checkbox" class="toggle-button" data-open="Menu" data-close="Close" onclick></label>
            <ul class="main-menu">
                <li><a href="#">HOME</a></li>
                <li><a href="#test-element">PORTFOLIO</a></li>
                <li><a href="#blog-element">BLOG</a></li>
                <li><a href="#">ABOUT US</a></li>
                <li><a href="#">CONTACT</a></li>
            </ul>
        </nav>
    </div>
</header>
<main>
    <div>
        <nav class="arrow-to-top">
            <div>
                <a href="#top-section"><img src="/img/up-arrow.png" alt="Наверх"></a>
            </div>
        </nav>
    </div>
    <section class="top-slide">
        <div class="top-container">
            <div><h2>WE BELIEVE</h2></div>
            <div><h2>IN QUALITY DESIGN</h2></div>
            <div><p>Any creative project is unique</p></div>
            <div><p>and should be provided with</p></div>
            <div id="test-element"><p>the appropriate quality</p></div>
        </div>
    </section>
    <section class="specialize">
        <div class="specialize-container">
            <h3>We create quality designs.</h3>
            <p>We specialize in Web Design / Development and Graphic Design</p>
            <div class="specialize-cards">
                <div class="card">
                    <div class="top-card">
                        <img src="/img/bottle.jpg" alt="bottle">
                    </div>
                    <div class="bottom-card">
                        <p class="first-p">Redesigning <br>
                            with Personality</p>
                    </div>
                </div>
                <div class="card">
                    <div class="top-card next-cards-top">
                        <img src="/img/web-development.png" alt="bottle">
                        <p>WEB DEVELOPMENT</p>
                    </div>
                    <div class="bottom-card next-cards-bottom">
                        <p>Lorem ipsum dolor sit amet,<br> consectetur.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="top-card next-cards-top">
                        <img src="/img/web-design-icon.png" alt="graphic-design-icon">
                        <p>WEB DESIGN</p>
                    </div>
                    <div class="bottom-card next-cards-bottom">

                        <p>Lorem ipsum dolor sit amet,<br> consectetur.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="top-card next-cards-top">
                        <img src="/img/graphic-design-icon.png" alt="graphic-design-icon"
                             style="width: 100px;height: 80px">
                        <p>GRAPHIC DESIGN</p>
                    </div>
                    <div class="bottom-card next-cards-bottom">
                        <p>Lorem ipsum dolor sit amet,<br> consectetur.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <section class="portfolio" id="blog-element">
            <h4>OUR WORK</h4>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
            <div class="toggles">
                <button id="showall">SHOW ALL</button>
                <button id="webdev">WEB DEVELOPMENT</button>
                <button id="webdesign">WEB DESIGN</button>
                <button id="graphd">GRAPHIC DESIGN</button>
            </div>
            <div class="posts">
                <div class="post webdev"><img src="/img/Portfolio3.jpg" alt=""></div>
                <div class="post webdesign"><img src="/img/Portfolio3.jpg" alt=""></div>
                <div class="post graphd"><img src="/img/Portfolio3.jpg" alt=""></div>
                <div class="post webdev"><img src="/img/Portfolio3.jpg" alt=""></div>
                <div class="post webdesign"><img src="/img/Portfolio3.jpg" alt=""></div>
                <div class="post webdev"><img src="/img/Portfolio3.jpg" alt=""></div>
                <div class="post webdesign"><img src="/img/Portfolio3.jpg" alt=""></div>
                <div class="post graphd"><img src="/img/Portfolio3.jpg" alt=""></div>
            </div>
        </section>
    </section>
    <section class="brand-slider">
        <h4>OUR CLIENTS</h4>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
        <div class="owl-carousel">
            <div><img src="{{asset('img/Client-1.jpg')}}" alt="Фото 1"></div>
            <div><img src="{{asset('img/Client-2.jpg')}}" alt="Фото 1"></div>
            <div><img src="{{asset('img/Client-3.jpg')}}" alt="Фото 1"></div>
            <div><img src="{{asset('img/Client-4.jpg')}}" alt="Фото 1"></div>
            <div><img src="{{asset('img/Client-5.jpg')}}" alt="Фото 1"></div>
            <div><img src="{{asset('img/Client-6.jpg')}}" alt="Фото 1"></div>
            <div><img src="{{asset('img/Client-7.jpg')}}" alt="Фото 1"></div>
            <div><img src="{{asset('img/Client-8.jpg')}}" alt="Фото 1"></div>
            <div><img src="{{asset('img/Client-7.jpg')}}" alt="Фото 1"></div>
            <div><img src="{{asset('img/Client-8.jpg')}}" alt="Фото 1"></div>
        </div>
    </section>
</main>

<footer>
    <div class="footer-container">
        <div class="about-us">
            <h4>About us</h4>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                sed diam nonummy nibh euismod tincidunt ut
                laoreet dolore magna aliquam erat volutpat. Ut wisi
                enim ad minim veniam, quis nostrud exerci tation ullamcorper
                suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
            <a href="#">learn more</a>
            <h4>Photo stream</h4>
            <div class="images">
                <img src="{{asset('/img/photo1.jpg')}}" alt="">
                <img src="{{asset('/img/photo1.jpg')}}" alt="">
                <img src="{{asset('/img/photo1.jpg')}}" alt="">
                <img src="{{asset('/img/photo1.jpg')}}" alt="">
                <img src="{{asset('/img/photo1.jpg')}}" alt="">
                <img src="{{asset('/img/photo1.jpg')}}" alt="">
            </div>
        </div>
        <div class="tweets">
            <h4>Latest tweets</h4>
            <p>
                <img src="{{asset('/img/Twitter-icon.png')}}" alt="">
                Check Out Dtbaker's @Arduino Sales Notification <span class="yellow-span">#System</span>
            </p>
            <p>
                <img src="{{asset('/img/Twitter-icon.png')}}" alt="">
                Check Out Dtbaker's @Arduino Sales Notification <span class="yellow-span">#System</span>
            </p>
            <p>
                <img src="{{asset('/img/Twitter-icon.png')}}" alt="">
                Check Out Dtbaker's @Arduino Sales Notification <span class="yellow-span">#System</span>
            </p>
            <p>
                <img src="{{asset('/img/Twitter-icon.png')}}" alt="">
                Check Out Dtbaker's @Arduino Sales Notification <span class="yellow-span">#System</span>
            </p>
            <div class="tweets-icons">
                <div class="icons">
                    <h4>Social connecting </h4>
                    <p><img src="{{asset('/img/facebook.jpg')}}" alt=""></p>
                    <p><img src="{{asset('/img/facebook.jpg')}}" alt=""></p>
                    <p><img src="{{asset('/img/facebook.jpg')}}" alt=""></p>
                    <p><img src="{{asset('/img/facebook.jpg')}}" alt=""></p>
                    <p><img src="{{asset('/img/facebook.jpg')}}" alt=""></p>
                </div>

            </div>

        </div>
        <div class="contacts">
            <h4>Contact info</h4>
            <p><img src="{{asset('/img/icon1.jpg')}}" alt="">Address: 12569 Saint Patrick des Prés,
                85000 Paris, France</p>
            <p><img src="{{asset('/img/icon2.jpg')}}" alt="">Phone: +38 045 845-45-78</p>
            <p><img src="{{asset('/img/icon3.jpg')}}" alt="">E-mail: <span class="yellow-span">freeforwebdesign@gmail
                    .com</span></p>
            <div class="follow">
                <h4>Follow Us</h4>
                <p>Lorem Ipsum is simply dummy text of the printing
                    and typesetting industry.</p>
                <form action="#">
                    <input type="text">
                    <button type="submit">
                        <img src="{{asset('/img/icon4.jpg')}}" alt="">
                    </button>
                </form>
            </div>
        </div>
    </div>
    <nav class="bottom-nav">
        <ul class="main-menu">
            <li><a href="#">HOME</a></li>
            <li><a href="#test-element">PORTFOLIO</a></li>
            <li><a href="#blog-element">BLOG</a></li>
            <li><a href="#">ABOUT US</a></li>
            <li><a href="#">CONTACT</a></li>
        </ul>
    </nav>
</footer>

<script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
<script src="/js/owlcarousel/owl.carousel.min.js"></script>
<script src="{{ asset('/js/script.js') }}"></script>
</body>
</html>