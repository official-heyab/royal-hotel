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
                                    <img width=100 src="{{$room->cover_image}}" alt="">
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
                        <div class="col-lg-4 col-md-6">
                            <a href="#" data-toggle="modal" data-val="{{ $service }}"
                            data-target="#serviceReserveModal">
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

        <!--================ Latest Blog Area  =================-->
        <section class="latest_blog_area section_gap">
            <div class="container">
                <div class="section_title text-center">
                    <h2 class="title_color">latest posts from blog</h2>
                    <p>The French Revolution constituted for the conscience of the dominant aristocratic class a fall from </p>
                </div>
                <div class="row mb_30">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-recent-blog-post">
                            <div class="thumb">
                                <img class="img-fluid" src="{{ asset('royal-theme')}}/image/blog/blog-1.jpg" alt="post">
                            </div>
                            <div class="details">
                                <div class="tags">
                                    <a href="#" class="button_hover tag_btn">Travel</a>
                                    <a href="#" class="button_hover tag_btn">Life Style</a>
                                </div>
                                <a href="#"><h4 class="sec_h4">Low Cost Advertising</h4></a>
                                <p>Acres of Diamonds… you’ve read the famous story, or at least had it related to you. A farmer.</p>
                                <h6 class="date title_color">31st January,2018</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-recent-blog-post">
                            <div class="thumb">
                                <img class="img-fluid" src="{{ asset('royal-theme')}}/image/blog/blog-2.jpg" alt="post">
                            </div>
                            <div class="details">
                                <div class="tags">
                                    <a href="#" class="button_hover tag_btn">Travel</a>
                                    <a href="#" class="button_hover tag_btn">Life Style</a>
                                </div>
                                <a href="#"><h4 class="sec_h4">Creative Outdoor Ads</h4></a>
                                <p>Self-doubt and fear interfere with our ability to achieve or set goals. Self-doubt and fear are</p>
                                <h6 class="date title_color">31st January,2018</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-recent-blog-post">
                            <div class="thumb">
                                <img class="img-fluid" src="{{ asset('royal-theme')}}/image/blog/blog-3.jpg" alt="post">
                            </div>
                            <div class="details">
                                <div class="tags">
                                    <a href="#" class="button_hover tag_btn">Travel</a>
                                    <a href="#" class="button_hover tag_btn">Life Style</a>
                                </div>
                                <a href="#"><h4 class="sec_h4">Its Classified How To Utilize Free</h4></a>
                                <p>Why do you want to motivate yourself? Actually, just answering that question fully can </p>
                                <h6 class="date title_color">31st January,2018</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================ Recent Area  =================-->

        @include('inc.footer')
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



        <!-- Service Reservation Modal -->
        <div class="modal fade" id="serviceReserveModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Service Reservation</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div>
                            <label>Service: <span id="name"><span></label><br>
                            <label>Reservation Price: <span id="price"></label>
                        </div><br>
                        <h5>Enter your details</h5>
                        <form action="{{route('reserve.service')}}" method='post' enctype='multipart/form-data'>
                            @csrf
                            <input type="hidden" name="service">

                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Enter name">
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control" name="arrival" placeholder="When do you want this?">
                                </div>
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

            //Service reservation modal
            $('#serviceReserveModal').on('show.bs.modal', function (event) {
                var service = $(event.relatedTarget).data('val');

                $('#serviceReserveModal span#name').html(service.name);
                $('#serviceReserveModal span#price').html(service.price);
                $('#serviceReserveModal form input[name=service]').val(service.id);
            });
        </script>



    </body>
</html>
