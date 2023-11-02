@extends('frontend.master')
@section('body')
    <section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15"
        style="background-image: url({{ asset('public/frontend/images/bg-title-page-02.jpg') }});">
        <h2 class="tit6 t-center">
            Contact
        </h2>
    </section>

    <section class="section-contact bg1-pattern p-t-90 p-b-113">

        <div class="container">
            <div class="map bo8 bo-rad-10 of-hidden">

                {{-- <iframe class="contact-map size37"
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14391.955129460606!2d85.141017!3d25.605289!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf4bfd9ca4bbbaf8d!2sAnByte%20Infotech%20Private%20Limited!5e0!3m2!1sen!2sin!4v1638020110022!5m2!1sen!2sin"
                    title="Google Map" width="" height="" allowfullscreen=""></iframe> --}}
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14391.955129460606!2d85.141017!3d25.605289!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ed586766883fe3%3A0xf4bfd9ca4bbbaf8d!2sAnByte%20Infotech%20Private%20Limited!5e0!3m2!1sen!2sin!4v1694852529795!5m2!1sen!2sin" width="1400" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                {{-- <div class="contact-map size37" id="google_map" data-map-x="25.6406443" data-map-y="85.116814"
            data-scrollwhell="0" data-draggable="1"></div> --}}
            </div>
        </div>
        <div class="container">
            <h3 class="tit7 t-center p-b-62 p-t-105">
                Send us a Message
            </h3>
            <form class="wrap-form-reservation size22 m-l-r-auto" action="{{ route('contacts') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-4">

                        <span class="txt9">
                            Name
                        </span>
                        <div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
                            <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="name" placeholder="Name">
                        </div>
                    </div>
                    <div class="col-md-4">

                        <span class="txt9">
                            Email
                        </span>
                        <div class="wrap-inputemail size12 bo2 bo-rad-10 m-t-3 m-b-23">
                            <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="email"
                                placeholder="Email">
                        </div>
                    </div>
                    <div class="col-md-4">

                        <span class="txt9">
                            Phone
                        </span>
                        <div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
                            <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="phone"
                                placeholder="Phone">
                        </div>
                    </div>
                    <div class="col-12">

                        <span class="txt9">
                            Message
                        </span>
                        <textarea class="bo-rad-10 size35 bo2 txt10 p-l-20 p-t-15 m-b-10 m-t-3" name="message" placeholder="Message"></textarea>
                    </div>
                </div>
                <div class="wrap-btn-booking flex-c-m m-t-13">

                    <button type="submit" class="btn3 flex-c-m size36 txt11 trans-0-4">
                        Submit
                    </button>
                </div>
            </form>
            <div class="row p-t-135">
                <div class="col-sm-8 col-md-4 col-lg-4 m-l-r-auto p-t-30">
                    <div class="dis-flex m-l-23">
                        <div class="p-r-40 p-t-6">
                            <img src="{{ asset('public/frontend/images/icons/map-icon.png') }}" alt="IMG-ICON">
                        </div>
                        <div class="flex-col-l">
                            <span class="txt5 p-b-10">
                                Location
                            </span>
                            <span class="txt23 size38">
                                8th floor, 379 Hudson St, New York, NY 10018
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8 col-md-3 col-lg-4 m-l-r-auto p-t-30">
                    <div class="dis-flex m-l-23">
                        <div class="p-r-40 p-t-6">
                            <img src="{{ asset('public/frontend/images/icons/phone-icon.png') }}" alt="IMG-ICON">
                        </div>
                        <div class="flex-col-l">
                            <span class="txt5 p-b-10">
                                Call Us
                            </span>
                            <span class="txt23 size38">
                                (+1) 96 716 6879
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8 col-md-5 col-lg-4 m-l-r-auto p-t-30">
                    <div class="dis-flex m-l-23">
                        <div class="p-r-40 p-t-6">
                            <img src="{{ asset('public/frontend/images/icons/clock-icon.png') }}" alt="IMG-ICON">
                        </div>
                        <div class="flex-col-l">
                            <span class="txt5 p-b-10">
                                Opening Hours
                            </span>
                            <span class="txt23 size38">
                                09:30 AM – 11:00 PM <br />Every Day
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
