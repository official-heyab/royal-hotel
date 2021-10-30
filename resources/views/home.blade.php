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


        <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="booking_table d_flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
						<h6>Welcome to Royal Hotel</h6>
						<h2>Relax Your Mind</h2>
						<p>If you are looking at blank cassettes on the web, you may be very confused at the<br> difference in price. You may see some for as low as $.17 each.</p>
						<a href="#bookRoom" class="btn theme_btn button_hover">Book Your Room</a>
					</div>
				</div>
            </div>
        </section>
        <!--================Banner Area =================-->

        <!--================ Book Your Room  =================-->
        <section class="accomodation_area section_gap" id="bookRoom">
            <div class="container">
                <div class="section_title text-center">
                    <h2 class="title_color">Book your room</h2>
                    <p>We all live in an age that belongs to the young at heart. Life that is becoming extremely fast, </p>
                </div>
                <div class="row mb_30">
                    @foreach($rooms as $room)
                        <div class="col-lg-3 col-sm-6">
                            <div class="accomodation_item text-center">
                                <div class="hotel_img">
                                    @if(substr($room->cover_image, 0, 4 ) == "http")
                                        <img width=100 src="{{$room->cover_image}}">
                                    @else
                                        <img width=100 src="{{asset('royal-theme/image')."/".$room->cover_image}}">
                                    @endif
                                </div>
                                <a href="#"><h4 class="sec_h4">{{ $room->name }}</h4></a>
                                <h5>${{ $room->price_per_night }}<small>/night</small></h5>
                            </div>
                        </div>
                    @endforeach
                </div>
                <br><br>
                <div class="hotel_booking_area position">
                    <div class="container">
                        <div class="hotel_booking_table">
                            <div class="col-md-3">
                                <h2>Book<br> Your Room</h2>
                            </div>
                            <div class="col-md-9">
                                <div class="boking_table">
                                    <form id="roomReserve">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="book_tabel_item">
                                                    <div class="form-group">
                                                        <div class='input-group date' id='datetimepicker11'>
                                                            <input type='text' name="arrival" class="form-control" placeholder="Arrival Date"/>
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class='input-group date' id='datetimepicker1'>
                                                            <input type='text' name="departure" class="form-control" placeholder="Departure Date"/>
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="book_tabel_item">
                                                    <div class="input-group">
                                                        <select class="wide" name="room">
                                                            <option data-display="Rooms">Select a room</option>
                                                            @foreach ($rooms as $room)
                                                                <option value="{{ $room->id }}">{{ $room->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="input-group">
                                                        <select class="wide" name="adults">
                                                            <option data-display="Adults">How many adults</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="book_tabel_item">
                                                    <div class="input-group">
                                                        <select class="wide" name="kids">
                                                            <option data-display="Children">How many kids</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                        </select>
                                                    </div>
                                                    <div class="input-group">
                                                        <a href="#" data-toggle="modal" data-target="#roomReserveModal"
                                                        class="book_now_btn button_hover">
                                                        Book Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================ Book Your Room  =================-->

        <style>
            .facilities_area .bg-parallax{
                opacity: 0.8;
            }
        </style>
        <!--================ Facilities Area  =================-->
        <section class="facilities_area section_gap">
            <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">
            </div>
            <div class="container">
                <div class="section_title text-center">
                    <h2 class="title_w">Click to book services</h2>
                    <p>Who are in extremely love with eco friendly system.</p>
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
                        <div class="col-lg-4 col-md-6">
                            <a href="#" data-toggle="modal" data-val="{{ $service }}"
                            data-target="#{{ $modalName }}ReserveModal">
                                <div class="facilities_item">
                                    <h4 class="sec_h4">
                                        <i class="lnr lnr-{{$service->cover_image}}"></i>
                                        {{ $service->name }}
                                    </h4>
                                    <p>{{ $service->description }}</p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!--================ Facilities Area  =================-->


        @include('inc.scripts')



        <!-- Room Reservation Modal -->
        <div class="modal fade" id="roomReserveModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Room Reservation</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div>
                            <label>Room: <span id="name"><span></label><br>
                            <label>Arrival: <span id="arrival"></label><br>
                            <label>Departure: <span id="departure"></label><br>
                            <label><span id="adults"></span> adults &
                            <span id="kids"></span> kids </label>
                        </div><br>
                        <h5>Enter your details</h5>
                        <form action="{{route('reserve.room')}}" method='post' enctype='multipart/form-data'>
                            @csrf
                            <input type="hidden" name="room">
                            <input type="hidden" name="arrival">
                            <input type="hidden" name="departure">
                            <input type="hidden" name="adults">
                            <input type="hidden" name="kids">

                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Enter name">
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control" name="contact" placeholder="Enter phone number">
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea rows=8 class="form-control" name="remark"
                                placeholder="Write us if you have any related requests..."></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Reserve</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>

        <script>
            //Room reservation modal
            $('#roomReserveModal').on('show.bs.modal', function (event) {
                var arrival = $("form#roomReserve input[name=arrival]").val();
                var departure = $("form#roomReserve input[name=departure]").val();
                var room = $("form#roomReserve select[name=room]").find(":selected").text();
                var adults = $("form#roomReserve select[name=adults]").find(":selected").text();
                var kids = $("form#roomReserve select[name=kids]").find(":selected").text();

                $('#roomReserveModal span#name').html(room);
                $('#roomReserveModal span#arrival').html(arrival);
                $('#roomReserveModal span#departure').html(departure);
                $('#roomReserveModal span#adults').html(adults);
                $('#roomReserveModal span#kids').html(kids);

                $('#roomReserveModal form input[name=room]').val(room);
                $('#roomReserveModal form input[name=arrival]').val(arrival);
                $('#roomReserveModal form input[name=departure]').val(departure);
                $('#roomReserveModal form input[name=adults]').val(adults);
                $('#roomReserveModal form input[name=kids]').val(kids);
            });
        </script>



    @include('service-forms')
    @include('inc.scripts')
    </body>
</html>
