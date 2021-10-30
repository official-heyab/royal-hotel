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
                            <h2 class="title title_color">Thank you {{ $reservation->reservation_name }}</h2>
                            <label>Arrival: {{ $reservation->arrival }}</label><br>
                            <label>Your phone: {{ $reservation->phone_number }}</label><br>
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
