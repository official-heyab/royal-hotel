<!doctype html>
<html lang="en">
    <head>
        @include('inc.head')
    </head>
    <body>
        @include('inc.navigation')


        <!--================Breadcrumb Area =================-->
        <section class="breadcrumb_area">
            <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="page-cover text-center">
                    <h2 class="page-cover-tittle">Thank You</h2>
                </div>
            </div>
        </section>
        <!--================Breadcrumb Area =================-->

        <!--================ About History Area  =================-->
        <section class="about_history_area section_gap">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 d_flex align-items-center">
                        <div class="about_content ">
                            <h2 class="title title_color">Thank you {{ $reservation->name }}</h2>
                            @if(count($reservation->roomsReserved())>0)
                                @foreach ($reservation->roomsReserved() as $rr)
                                    <label>Room: {{ $rr->room->name }}</label><br>
                                    <label>Price: ${{ $rr->room->price_per_night }}/night</label><br>
                                    <label>Arrival: {{ $rr->reservation->arrival }}</label><br>
                                    <label>Departure: {{ $rr->departure }}</label><br>
                                    <label>{{ $rr->number_of_adults }} adults &
                                    {{ $rr->number_of_kids }} kids </label><br>
                                    <label>Your phone: {{ $rr->reservation->phone_number }}</label><br>
                                    <label>Remark: </label><br>
                                    <textarea class="form-control" rows=10 disabled>{{ $rr->remark }}</textarea>
                                @endforeach
                            @else
                                @foreach ($reservation->servicesReserved() as $sr)
                                    <label>Service: {{ $sr->service->name }}</label><br>
                                    <label>Reservation Price: ${{ $sr->service->price }}</label><br>
                                    <label>When: {{ $sr->reservation->arrival }}</label><br>
                                    <label>Your phone: {{ $sr->reservation->phone_number }}</label><br>
                                    <label>Remark: </label><br>
                                    <textarea class="form-control" rows=10 disabled>{{ $sr->remark }}</textarea>
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img class="img-fluid" src="{{ asset('royal-theme') }}/image/about_bg.jpg" alt="img">
                    </div>
                </div>
            </div>
        </section>
        <!--================ About History Area  =================-->


        @include('inc.footer')
        @include('inc.scripts')



    </body>
</html>
