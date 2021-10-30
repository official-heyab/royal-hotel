<?php
    use App\Models\Service;
?>
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
                    <h2 class="page-cover-tittle">Services</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="active">Services</li>
                    </ol>
                </div>
            </div>
        </section>
        <!--================Breadcrumb Area =================-->

        <!--================ Accomodation Area  =================-->
        <section class="accomodation_area section_gap" id="bookRoom">
            <div class="container">
                <div class="section_title text-center">
                    <h2 class="title_color">Click to book services</h2>
                    <p>We all live in an age that belongs to the young at heart. Life that is becoming extremely fast, </p>
                </div>
                <div class="row mb_30">
                    @foreach ($services as $service)
                    <?php
                        $modalName = "service";
                        if($service->id==Service::IS_LAUNDRY) $modalName = "laundry";
                        elseif($service->id==Service::IS_BEAUTY_SALON) $modalName = "beauty";
                        elseif($service->id==Service::IS_GYM) $modalName = "gym";
                        elseif($service->id==Service::IS_SWIMMING_POOL) $modalName = "pool";
                        elseif($service->id==Service::IS_DINNER_TABLE) $modalName = "table";
                        elseif($service->id==Service::IS_PERSONAL_TRAINER) $modalName = "trainer";
                    ?>
                        <div class="col-lg-3 col-sm-6">
                            <div class="accomodation_item text-center">
                                <a href="#" data-toggle="modal" data-val="{{ $service }}"
                                data-target="#{{ $modalName }}ReserveModal">
                                    <i style="font-size:100px;" class="lnr lnr-{{$service->cover_image}}"></i>
                                    <h4 class="sec_h4">{{ $service->name }}</h4></a>
                                    <h6>{{ $service->description }}</h6>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!--================ Accomodation Area  =================-->



        @include('inc.footer')
        @include('inc.scripts')
        @include('service-forms')
    </body>
</html>
