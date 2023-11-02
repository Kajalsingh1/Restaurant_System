@extends('frontend.master')
@section('body')
    <section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15"
        style="background-image: url({{ asset('public/frontend/images/bg-title-page-01.jpg') }});">
        <h2 class="tit6 t-center">
            Aapki Pasand
        </h2>
    </section>

    <section class="section-mainmenu p-t-110 p-b-70 bg1-pattern">
        <div class="container">
            <div class="row">

                @php
                    $i = 1;
                @endphp
                @foreach ($categories as $index => $category)
                    <div class="col-md-12">

                        <div class="wrap-item-mainmenu p-b-22">
                            <h3 class="tit-mainmenu tit10 p-b-25">
                                {{ $category->name }}
                            </h3>
                            @foreach ($items[$index] as $item)
                                <div class="item-mainmenu m-b-36">
                                    <div class="flex-w flex-b m-b-3">
                                        <a href="#" class="name-item-mainmenu txt21">
                                            {{ $item->name }}
                                        </a>
                                        <div class="line-item-mainmenu bg3-pattern"></div>
                                        <div class="price-item-mainmenu txt22">
                                            ₹{{ $item->price }}
                                        </div>
                                    </div>
                                    <span class="info-item-mainmenu txt23">
                                        {{ $item->description }}
                                    </span>
                                </div>
                            @endforeach
                        </div>

                    </div>
                    @php
                        $i++;
                    @endphp
                @endforeach
            </div>
        </div>
        </div>
    </section>
    {{-- ***************** --}}

    <section class="section-lunch bgwhite">
        @php
        $i = 1;
    @endphp
    @foreach ($foods as $index => $food)
        <div class="header-lunch parallax0 parallax100"
            style="background-image: url({{ asset('public/frontend/images/header-menu-01.jpg') }});">

                <div class="bg1-overlay t-center p-t-170 p-b-165">
                    <h2 class="tit4 t-center">
                        {{ $food->name }}
                    </h2>
                </div>
        </div>
        <div class="container">
            <div class="row p-t-108 p-b-70">
                @foreach ($fooditems[$index] as $fooditem)
                    <div class="col-md-8 col-lg-6 m-l-r-auto">
                        <div class="blo3 flex-w flex-col-l-sm m-b-30">
                            <div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
                                <a href="#"><img src="{{ asset('storage/app') }}/{{ $fooditem->imgpath }}"
                                        alt="IMG-MENU"></a>
                            </div>
                            <div class="text-blo3 size21 flex-col-l-m">
                                <a href="#" class="txt21 m-b-3">
                                    {{ $fooditem->name }}
                                </a>
                                <span class="txt23">
                                    {{ $fooditem->description }}
                                </span>
                                <span class="txt22 m-t-20">
                                    ₹{{ $fooditem->price }}
                                </span>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>
            @php
            $i++;
        @endphp

        </div>
            @endforeach

    </section>


    {{--<section class="section-dinner bgwhite">
        <div class="header-dinner parallax0 parallax100"
            style="background-image: url({{ asset('public/frontend/images/header-menu-02.jpg') }});">
            <div class="bg1-overlay t-center p-t-170 p-b-165">
                <h2 class="tit4 t-center">
                    {{ $food->name }}
                </h2>
            </div>
        </div>
        <div class="container">
            <div class="row p-t-108 p-b-70">
                <div class="col-md-8 col-lg-6 m-l-r-auto">

                    <div class="blo3 flex-w flex-col-l-sm m-b-30">
                        <div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
                            <a href="#"><img src="{{ asset('storage/app') }}/{{ $fooditem->imgpath }}"
                                    alt="IMG-MENU"></a>
                        </div>
                        <div class="text-blo3 size21 flex-col-l-m">
                            <a href="#" class="txt21 m-b-3">
                                {{ $fooditem->name }}
                            </a>
                            <span class="txt23">
                                {{ $fooditem->description }}
                            </span>
                            <span class="txt22 m-t-20">
                                {{ $fooditem->price }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </section> --}}

    {{-- ********************** --}}


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
