@extends('frontend.master')
@section('body')
    <section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15"
        style="background-image: url({{ asset('public/frontend/images/bg-title-page-03.jpg') }});">
        <h2 class="tit6 t-center">
            About Us
        </h2>
    </section>

    <section class="bg2-pattern p-t-116 p-b-110 t-center p-l-15 p-r-15">
        <span class="tit2 t-center">
            Indian Restaurant
        </span>
        <h3 class="tit3 t-center m-b-35 m-t-5">
            Our Story
        </h3>
        <p class="t-center size32 m-l-r-auto">
            Indian food, not unlike any other country’s national food scene,
            is a vast constellation of culinary influences and <br> traditions
            from all over the Asian continent. Simple food that packs a
            flavorful punch is the  defining feature <br>of Indian cuisine from region to region.
            A Guide To Indian Cuisine, Indian cuisine is meant to be eaten <br> socially, in groups,
            until everyone is fully satisfied.  You will be served all your courses at  once on <br>a plate
            of food called a thali.  A thali is a large tray that is used to serve all the foods<br> at once.
            Some foods are mild, sweet and some are  spicy and hot.
        </p>
    </section>

    <section class="section-video parallax100"
        style="background-image: url({{ asset('public/frontend/images/header-menu-01.jpg') }});">
        <div class="content-video t-center p-t-225 p-b-250">
            <span class="tit2 p-l-15 p-r-15">
                Discover
            </span>
            <h3 class="tit4 t-center p-l-15 p-r-15 p-t-3">
                Our Video
            </h3>
            <div class="btn-play ab-center size16 hov-pointer m-l-r-auto m-t-43 m-b-33" data-toggle="modal"
                data-target="#modal-video-01">
                <div class="flex-c-m sizefull bo-cir bgwhite color1 hov1 trans-0-4">
                    <i class="fa fa-play fs-18 m-l-2" aria-hidden="true"></i>
                </div>
            </div>
        </div>
    </section>

    <section class="bg1-pattern p-t-120 p-b-105">
        <div class="container">

            <div class="row">
                <div class="col-md-6 p-t-45 p-b-30">
                    <div class="wrap-text-delicious t-center">
                        <span class="tit2 t-center">
                            Delicious
                        </span>
                        <h3 class="tit3 t-center m-b-35 m-t-5">
                            RECIPES
                        </h3>
                        <p class="t-center m-b-22 size3 m-l-r-auto">
                            Make quality meals at home with these tasty versions of takeout,
                            fast food and restaurant staples. In our restaurant their <br> are various varities of food.
                            That recipe is unique <br> to the restaurant and the creative ideas of the <br> person who created the dish.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 p-b-30">
                    <div class="wrap-pic-delicious size2 bo-rad-10 hov-img-zoom m-l-r-auto">
                        <img src="{{ asset('public/frontend/images/our-story-01.jpg') }}" alt="IMG-OUR">
                    </div>
                </div>
            </div>

            <div class="row p-t-170">
                <div class="col-md-6 p-b-30">
                    <div class="wrap-pic-romantic size2 bo-rad-10 hov-img-zoom m-l-r-auto">
                        <img src="{{ asset('public/frontend/images/our-story-02.jpg') }}" alt="IMG-OUR">
                    </div>
                </div>
                <div class="col-md-6 p-t-45 p-b-30">
                    <div class="wrap-text-romantic t-center">
                        <span class="tit2 t-center">
                            Romantic
                        </span>
                        <h3 class="tit3 t-center m-b-35 m-t-5">
                            Restaurant
                        </h3>
                        <p class="t-center m-b-22 size3 m-l-r-auto">
                            From candle-light dinner setup to Valentine’s Day special drinks and mocktails,
                            the restaurant makes all the necessary arrangements <br> to ensure you have a memorable evening.
                            If you visit this <br> restaurant, don’t forget to taste their Continental <br> and Chinese dishes.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="parallax0 parallax100"
        style="background-image: url({{ asset('public/frontend/images/bg-cover-video-02.jpg') }});">
        <div class="overlay0-parallax t-center size33"></div>
    </div>

    <section class="section-chef bgwhite p-t-115 p-b-95">
        <div class="container t-center">
            <span class="tit2 t-center">
                Meet Our
            </span>
            <h3 class="tit5 t-center m-b-50 m-t-5">
                Chef
            </h3>
            <div class="row">
                <div class="col-md-8 col-lg-4 m-l-r-auto p-b-30">

                    <div class="blo5 pos-relative p-t-60">
                        <div class="pic-blo5 size14 bo4 wrap-cir-pic hov-img-zoom ab-c-t">
                            <a href="#"><img src="{{ asset('public/frontend/images/avatar-02.jpg') }}"
                                    alt="IGM-AVATAR"></a>
                        </div>
                        <div class="text-blo5 size34 t-center bo-rad-10 bo7 p-t-90 p-l-35 p-r-35 p-b-30">
                            <a href="#" class="txt34 dis-block p-b-6">
                                Chef Joshua Hill
                            </a>
                            <span class="dis-block t-center txt35 p-b-25">
                                Chef
                            </span>
                            <p class="t-center">
                                He discovered an interest in food while spending time in
                                the kitchen with his grandmother. He loves elevated
                                versions of dishes that remind him of those experiences cooking with her.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-lg-4 m-l-r-auto p-b-30">

                    <div class="blo5 pos-relative p-t-60">
                        <div class="pic-blo5 size14 bo4 wrap-cir-pic hov-img-zoom ab-c-t">
                            <a href="#"><img src="{{ asset('public/frontend/images/avatar-03.jpg') }}"
                                    alt="IGM-AVATAR"></a>
                        </div>
                        <div class="text-blo5 size34 t-center bo-rad-10 bo7 p-t-90 p-l-35 p-r-35 p-b-30">
                            <a href="#" class="txt34 dis-block p-b-6">
                                Chef Kamal
                            </a>
                            <span class="dis-block t-center txt35 p-b-25">
                                Chef
                            </span>
                            <p class="t-center">
                                She transformed the shape of cuisine and cooking altogether through a glitzing career
                                of over 20 years. Growing up in northern India, Chef Kamal Gensgat relished the region’s.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-lg-4 m-l-r-auto p-b-30">

                    <div class="blo5 pos-relative p-t-60">
                        <div class="pic-blo5 size14 bo4 wrap-cir-pic hov-img-zoom ab-c-t">
                            <a href="#"><img src="{{ asset('public/frontend/images/avatar-05.jpg') }}"
                                    alt="IGM-AVATAR"></a>
                        </div>
                        <div class="text-blo5 size34 t-center bo-rad-10 bo7 p-t-90 p-l-35 p-r-35 p-b-30">
                            <a href="#" class="txt34 dis-block p-b-6">
                                Ashish Mehta
                            </a>
                            <span class="dis-block t-center txt35 p-b-25">
                                Chef
                            </span>
                            <p class="t-center">
                                Mehta improvises by adding Indian ingredients like cumin and garlic to Swedish food
                                like meat balls and has served Tandoori Salmon at official dinners at the Embassy.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="section-signup bg1-pattern p-t-85 p-b-85">
        <form class="flex-c-m flex-w flex-col-c-m-lg p-l-5 p-r-5">
            <span class="txt5 m-10">
                Specials Sign up
            </span>
            <div class="wrap-input-signup size17 bo2 bo-rad-10 bgwhite pos-relative txt10 m-10">
                <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="email-address"
                    placeholder="Email Adrress">
                <i class="fa fa-envelope ab-r-m m-r-18" aria-hidden="true"></i>
            </div>

            <button type="submit" class="btn3 flex-c-m size18 txt11 trans-0-4 m-10">
                Sign-up
            </button>
        </form>
    </div>
@endsection
