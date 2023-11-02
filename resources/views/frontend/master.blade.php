<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preview.colorlib.com/theme/pato/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Aug 2023 07:29:12 GMT -->

<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="{{ asset('public/frontend/images/icons/favicon.png') }}" />

    <link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/vendor/bootstrap/css/bootstrap.min.css') }}">

    <link rel="stylesheet" type="text/css"
        href="{{ asset('public/frontend/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/fonts/themify/themify-icons.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/vendor/animate/animate.css') }}">

    <link rel="stylesheet" type="text/css"
        href="{{ asset('public/frontend/vendor/css-hamburgers/hamburgers.min.css') }}">

    <link rel="stylesheet" type="text/css"
        href="{{ asset('public/frontend/vendor/animsition/css/animsition.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/vendor/select2/select2.min.css') }}">

    <link rel="stylesheet" type="text/css"
        href="{{ asset('public/frontend/vendor/daterangepicker/daterangepicker.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/vendor/slick/slick.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/vendor/lightbox2/css/lightbox.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/css/main.css') }}">

    {{-- <script nonce="ea88ae18-da44-4edb-9d23-ce33610ac543">(function(w,d){!function(j,k,l,m){j[l]=j[l]||{};j[l].executed=[];j.zaraz={deferred:[],listeners:[]};j.zaraz.q=[];j.zaraz._f=function(n){return async function(){var o=Array.prototype.slice.call(arguments);j.zaraz.q.push({m:n,a:o})}};for(const p of["track","set","debug"])j.zaraz[p]=j.zaraz._f(p);j.zaraz.init=()=>{var q=k.getElementsByTagName(m)[0],r=k.createElement(m),s=k.getElementsByTagName("title")[0];s&&(j[l].t=k.getElementsByTagName("title")[0].text);j[l].x=Math.random();j[l].w=j.screen.width;j[l].h=j.screen.height;j[l].j=j.innerHeight;j[l].e=j.innerWidth;j[l].l=j.location.href;j[l].r=k.referrer;j[l].k=j.screen.colorDepth;j[l].n=k.characterSet;j[l].o=(new Date).getTimezoneOffset();if(j.dataLayer)for(const w of Object.entries(Object.entries(dataLayer).reduce(((x,y)=>({...x[1],...y[1]})),{})))zaraz.set(w[0],w[1],{scope:"page"});j[l].q=[];for(;j.zaraz.q.length;){const z=j.zaraz.q.shift();j[l].q.push(z)}r.defer=!0;for(const A of[localStorage,sessionStorage])Object.keys(A||{}).filter((C=>C.startsWith("_zaraz_"))).forEach((B=>{try{j[l]["z_"+B.slice(7)]=JSON.parse(A.getItem(B))}catch{j[l]["z_"+B.slice(7)]=A.getItem(B)}}));r.referrerPolicy="origin";r.src="../../cdn-cgi/zaraz/sd0d9.js?z="+btoa(encodeURIComponent(JSON.stringify(j[l])));q.parentNode.insertBefore(r,q)};["complete","interactive"].includes(k.readyState)?zaraz.init():j.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);</script></head> --}}

<body class="">

    <header>

        <div class="wrap-menu-header gradient1 trans-0-4">
            <div class="container h-full">
                <div class="wrap_header trans-0-3">

                    <div class="logo" style="height: 70px;">
                        <a href="{{url('/')}}">
                            <img src="{{ asset('public/frontend/images/icons/aapki_pasand_logo.png') }}" alt="IMG-LOGO"
                                data-logofixed="{{ asset('public/frontend/images/icons/aapki_pasand_logo.png') }}">
                        </a>
                    </div>

                    <div class="wrap_menu p-l-45 p-l-0-xl">
                        <nav class="menu">
                            <ul class="main_menu">
                                <li>
                                    <a href="{{url('/')}}">Home</a>
                                </li>
                                <li>
                                    <a href="{{url('menu')}}">Menu</a>
                                </li>
                                <li>
                                    <a href="{{url('reservation')}}">Reservation</a>
                                </li>
                                <li>
                                    <a href="{{url('gallery')}}">Gallery</a>
                                </li>
                                <li>
                                    <a href="{{url('about')}}">About</a>
                                </li>
                                <li>
                                    <a href="{{url('contact')}}">Contact</a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <div class="social flex-w flex-l-m p-r-20">
                        <button class="btn-show-sidebar m-l-33 trans-0-4"></button>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <aside class="sidebar trans-0-4">

        <button class="btn-hide-sidebar ti-close color0-hov trans-0-4"></button>

        <ul class="menu-sidebar p-t-95 p-b-70">
            <li class="t-center m-b-13">
                <a href="{{url('/')}}" class="txt19">Home</a>
            </li>
            <li class="t-center m-b-13">
                <a href="{{url('menu')}}" class="txt19">Menu</a>
            </li>
            <li class="t-center m-b-13">
                <a href="{{url('gallery')}}" class="txt19">Gallery</a>
            </li>
            <li class="t-center m-b-13">
                <a href="{{url('about')}}" class="txt19">About</a>
            </li>
            <li class="t-center m-b-33">
                <a href="{{url('contact')}}" class="txt19">Contact</a>
            </li>
            <li class="t-center">

                <a href="{{url('reservation')}}" class="btn3 flex-c-m size13 txt11 trans-0-4 m-l-r-auto">
                    Reservation
                </a>
            </li>
        </ul>

        <div class="gallery-sidebar t-center p-l-60 p-r-60 p-b-40">

            <h4 class="txt20 m-b-33">
                Gallery
            </h4>

            <div class="wrap-gallery-sidebar flex-w">
                <a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-01.jpg"
                    data-lightbox="gallery-footer">
                    <img src="{{ asset('public/frontend/images/photo-gallery-thumb-01.jpg') }}" alt="GALLERY">
                </a>
                <a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-02.jpg"
                    data-lightbox="gallery-footer">
                    <img src="{{ asset('public/frontend/images/photo-gallery-thumb-02.jpg') }}" alt="GALLERY">
                </a>
                <a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-03.jpg"
                    data-lightbox="gallery-footer">
                    <img src="{{ asset('public/frontend/images/photo-gallery-thumb-03.jpg') }}" alt="GALLERY">
                </a>
                <a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-05.jpg"
                    data-lightbox="gallery-footer">
                    <img src="{{ asset('public/frontend/images/photo-gallery-thumb-05.jpg') }}" alt="GALLERY">
                </a>
                <a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-06.jpg"
                    data-lightbox="gallery-footer">
                    <img src="{{ asset('public/frontend/images/photo-gallery-thumb-06.jpg') }}" alt="GALLERY">
                </a>
                <a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-07.jpg"
                    data-lightbox="gallery-footer">
                    <img src="{{ asset('public/frontend/images/photo-gallery-thumb-07.jpg') }}" alt="GALLERY">
                </a>
                <a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-09.jpg"
                    data-lightbox="gallery-footer">
                    <img src="{{ asset('public/frontend/images/photo-gallery-thumb-09.jpg') }}" alt="GALLERY">
                </a>
                <a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-10.jpg"
                    data-lightbox="gallery-footer">
                    <img src="{{ asset('public/frontend/images/photo-gallery-thumb-10.jpg') }}" alt="GALLERY">
                </a>
                <a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-11.jpg"
                    data-lightbox="gallery-footer">
                    <img src="{{ asset('public/frontend/images/photo-gallery-thumb-11.jpg') }}" alt="GALLERY">
                </a>
            </div>
        </div>
    </aside>

@yield('body')


    <footer class="bg1">
        <div class="container p-t-40 p-b-70">
            <div class="row">
                <div class="col-sm-6 col-md-4 p-t-50">

                    <h4 class="txt13 m-b-33">
                        Contact Us
                    </h4>
                    <ul class="m-b-70">
                        <li class="txt14 m-b-14">
                            <i class="fa fa-map-marker fs-16 dis-inline-block size19" aria-hidden="true"></i>
                            Helious Bhawan, Nisa Hotel, Station Rd, behind Goriyatoli, Fraser Road Area, Patna, Bihar 800001
                        </li>
                        <li class="txt14 m-b-14">
                            <i class="fa fa-phone fs-16 dis-inline-block size19" aria-hidden="true"></i>
                            (+1) 96 716 6879
                        </li>
                        <li class="txt14 m-b-14">
                            <i class="fa fa-envelope fs-13 dis-inline-block size19" aria-hidden="true"></i>
                            <a href="https://preview.colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__"
                                data-cfemail="680b07061c090b1c281b011c0d460b0705">[email&#160;protected]</a>
                        </li>
                    </ul>

                    <h4 class="txt13 m-b-32">
                        Opening Times
                    </h4>
                    <ul>
                        <li class="txt14">
                            11: AM – 06: PM
                        </li>
                        <li class="txt14">
                            Every Day
                        </li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-4 p-t-50">

                    <h4 class="txt13 m-b-33">
                        Latest twitter
                    </h4>
                    <div class="m-b-25">
                        <span class="fs-13 color2 m-r-5">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </span>
                        <a href="#" class="txt15">
                            @colorlib
                        </a>
                        <p class="txt14 m-b-18">
                            Activello is a good option. It has a slider built into that displays the featured image in
                            the slider.
                            <a href="#" class="txt15">
                                https://buff.ly/2zaSfAQ
                            </a>
                        </p>
                        <span class="txt16">
                            16 sept 2023
                        </span>
                    </div>
                    <div>
                        <span class="fs-13 color2 m-r-5">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </span>
                        <a href="#" class="txt15">
                            @colorlib
                        </a>
                        <p class="txt14 m-b-18">
                            Activello is a good option. It has a slider built into that displays
                            <a href="#" class="txt15">
                                https://buff.ly/2zaSfAQ
                            </a>
                        </p>
                        <span class="txt16">
                            16 sept 2023
                        </span>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 p-t-50">

                    <h4 class="txt13 m-b-38">
                        Gallery
                    </h4>

                    <div class="wrap-gallery-footer flex-w">
                        <a class="item-gallery-footer wrap-pic-w"
                            href="images/photo-gallery-01.jpg"
                            data-lightbox="gallery-footer">
                            <img src="{{ asset('public/frontend/images/photo-gallery-thumb-01.jpg')}}" alt="GALLERY">
                        </a>
                        <a class="item-gallery-footer wrap-pic-w"
                            href="images/photo-gallery-02.jpg"
                            data-lightbox="gallery-footer">
                            <img src="{{ asset('public/frontend/images/photo-gallery-thumb-02.jpg')}}" alt="GALLERY">
                        </a>
                        <a class="item-gallery-footer wrap-pic-w"
                            href="images/photo-gallery-03.jpg"
                            data-lightbox="gallery-footer">
                            <img src="{{ asset('public/frontend/images/photo-gallery-thumb-03.jpg')}}" alt="GALLERY">
                        </a>
                        <a class="item-gallery-footer wrap-pic-w"
                            href="images/photo-gallery-04.jpg"
                            data-lightbox="gallery-footer">
                            <img src="{{ asset('public/frontend/images/photo-gallery-thumb-04.jpg')}}" alt="GALLERY">
                        </a>
                        <a class="item-gallery-footer wrap-pic-w"
                            href="images/photo-gallery-05.jpg"
                            data-lightbox="gallery-footer">
                            <img src="{{ asset('public/frontend/images/photo-gallery-thumb-05.jpg')}}" alt="GALLERY">
                        </a>
                        <a class="item-gallery-footer wrap-pic-w"
                            href="images/photo-gallery-06.jpg"
                            data-lightbox="gallery-footer">
                            <img src="{{ asset('public/frontend/images/photo-gallery-thumb-06.jpg')}}" alt="GALLERY">
                        </a>
                        <a class="item-gallery-footer wrap-pic-w"
                            href="images/photo-gallery-07.jpg"
                            data-lightbox="gallery-footer">
                            <img src="{{ asset('public/frontend/images/photo-gallery-thumb-07.jpg')}}" alt="GALLERY">
                        </a>
                        <a class="item-gallery-footer wrap-pic-w"
                            href="images/photo-gallery-08.jpg"
                            data-lightbox="gallery-footer">
                            <img src="{{ asset('public/frontend/images/photo-gallery-thumb-08.jpg')}}" alt="GALLERY">
                        </a>
                        <a class="item-gallery-footer wrap-pic-w"
                            href="images/photo-gallery-09.jpg"
                            data-lightbox="gallery-footer">
                            <img src="{{ asset('public/frontend/images/photo-gallery-thumb-09.jpg')}}" alt="GALLERY">
                        </a>
                        <a class="item-gallery-footer wrap-pic-w"
                            href="images/photo-gallery-10.jpg"
                            data-lightbox="gallery-footer">
                            <img src="{{ asset('public/frontend/images/photo-gallery-thumb-10.jpg')}}" alt="GALLERY">
                        </a>
                        <a class="item-gallery-footer wrap-pic-w"
                            href="images/photo-gallery-11.jpg"
                            data-lightbox="gallery-footer">
                            <img src="{{ asset('public/frontend/images/photo-gallery-thumb-11.jpg')}}" alt="GALLERY">
                        </a>
                        <a class="item-gallery-footer wrap-pic-w"
                            href="images/photo-gallery-12.jpg') }}"
                            data-lightbox="gallery-footer">
                            <img src="{{ asset('public/frontend/images/photo-gallery-thumb-12.jpg')}}" alt="GALLERY">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="end-footer bg2">
            <div class="container">
                <div class="flex-sb-m flex-w p-t-22 p-b-22">
                    <div class="p-t-5 p-b-5">
                        <a href="https://anbyteinfotech.com/" class="fs-15 c-white">@unite_source_infotech</a>
                        {{-- <a href="#" class="fs-15 c-white"><i class="fa fa-facebook m-l-18"
                                aria-hidden="true"></i></a>
                        <a href="#" class="fs-15 c-white"><i class="fa fa-twitter m-l-18"
                                aria-hidden="true"></i></a> --}}
                    </div>
                   <div class="txt17 p-r-20 p-t-5 p-b-5">
                        @Unite Source Infotech.
                        <a href="#" class="txt18">
                            Get The Theme
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="btn-back-to-top bg0-hov" id="myBtn">
        <span class="symbol-btn-back-to-top">
            <i class="fa fa-angle-double-up" aria-hidden="true"></i>
        </span>
    </div>

    <div id="dropDownSelect1"></div>

    <div class="modal fade" id="modal-video-01" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document" data-dismiss="modal">
            <div class="close-mo-video-01 trans-0-4" data-dismiss="modal" aria-label="Close">&times;</div>
            <div class="wrap-video-mo-01">
                <div class="w-full wrap-pic-w op-0-0"><img
                        src="{{ asset('public/frontend/images/icons/video-16-9.jpg') }}" alt="IMG"></div>
                <div class="video-mo-01">
                    <iframe src="https://www.youtube.com/embed/5k1hSu2gdKE?rel=0&amp;showinfo=0"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script type="text/javascript" src="{{ asset('public/frontend/vendor/jquery/jquery-3.2.1.min.js')}}"></script>

    <script type="text/javascript" src="{{ asset('public/frontend/vendor/animsition/js/animsition.min.js')}}"></script>

    <script type="text/javascript" src="{{ asset('public/frontend/vendor/bootstrap/js/popper.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/frontend/vendor/bootstrap/js/bootstrap.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('public/frontend/vendor/select2/select2.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('public/frontend/vendor/daterangepicker/moment.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('public/frontend/vendor/daterangepicker/daterangepicker.js') }}"></script>

    <script type="text/javascript" src="{{ asset('public/frontend/vendor/slick/slick.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/frontend/js/slick-custom.js') }}"></script>

    <script type="text/javascript" src="{{ asset('public/frontend/vendor/parallax100/parallax100.js') }}"></script>
    <script type="text/javascript">
        $('.parallax100').parallax100();
    </script>

    <script type="text/javascript" src="{{ asset('public/frontend/vendor/countdowntime/countdowntime.js') }}"></script>

    <script type="text/javascript" src="{{ asset('public/frontend/vendor/lightbox2/js/lightbox.min.js') }}"></script>

    <script src="{{ asset('public/frontend/js/main.js')}}"></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v8b253dfea2ab4077af8c6f58422dfbfd1689876627854"
        integrity="sha512-bjgnUKX4azu3dLTVtie9u6TKqgx29RBwfj3QXYt5EKfWM/9hPSAI/4qcV5NACjwAo8UtTeWefx6Zq5PHcMm7Tg=="
        data-cf-beacon='{"rayId":"7fa129dbdf87f2e2","version":"2023.8.0","b":1,"token":"cd0b4b3a733644fc843ef0b185f98241","si":100}'
        crossorigin="anonymous"></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/pato/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Aug 2023 07:29:52 GMT -->

</html>
