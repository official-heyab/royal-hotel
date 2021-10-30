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
                    <h2 class="page-cover-tittle">Conference Halls</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="active">Conference Halls</li>
                    </ol>
                </div>
            </div>
        </section>
        <!--================Breadcrumb Area =================-->

        <!--================ Book Your Room  =================-->
        <section class="accomodation_area section_gap" id="bookRoom">
            <div class="container">
                <div class="section_title text-center">
                    <h2 class="title_color">Book Conference Hall</h2>
                    <p>We all live in an age that belongs to the young at heart. Life that is becoming extremely fast, </p>
                </div>
                <div class="row mb_30">
                    @foreach($halls as $hall)
                        <div class="col-lg-3 col-sm-6">
                            <div class="accomodation_item text-center">
                                <div class="hotel_img">
                                    @if(substr($hall->cover_image, 0, 4 ) == "http")
                                        <img width=100 src="{{$hall->cover_image}}">
                                    @else
                                        <img width=100 src="{{asset('royal-theme/image')."/".$hall->cover_image}}">
                                    @endif
                                </div>
                                <a href="#"><h4 class="sec_h4">{{ $hall->name }}</h4></a>
                                <h5>${{ $hall->price }}<small>/day</small></h5>
                            </div>
                        </div>
                    @endforeach
                </div>
                <br><br>
                <div class="hotel_booking_area position">
                    <div class="container">
                        <div class="hotel_booking_table">
                            <div class="col-md-3">
                                <h2>Conference<br> Hall Booking</h2>
                            </div>
                            <div class="col-md-9">
                                <div class="boking_table">
                                    <form id="hallReserve">
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
                                                        <select class="wide" name="hall">
                                                            <option data-display="Halls">Select conference hall</option>
                                                            @foreach ($halls as $hall)
                                                                <option value="{{ $hall->id }}">{{ $hall->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="input-group">
                                                        <a href="#" data-toggle="modal" data-target="#hallReserveModal"
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


        @include('inc.footer')
        @include('inc.scripts')

        <!-- Hall Reservation Modal -->
        <div class="modal fade" id="hallReserveModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Hall Reservation</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div>
                            <label>Hall: <span id="name"><span></label><br>
                            <label>Arrival: <span id="arrival"></label><br>
                            <label>Departure: <span id="departure"></label>
                        </div><br>
                        <h5>Enter your details</h5>
                        <form action="{{route('reserve.hall')}}" method='post' enctype='multipart/form-data'>
                            @csrf
                            <input type="hidden" name="hall">
                            <input type="hidden" name="arrival">
                            <input type="hidden" name="departure">

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
            //Hall reservation modal
            $('#hallReserveModal').on('show.bs.modal', function (event) {
                var arrival = $("form#hallReserve input[name=arrival]").val();
                var departure = $("form#hallReserve input[name=departure]").val();
                var hall = $("form#hallReserve select[name=hall]").find(":selected").text();

                $('#hallReserveModal span#name').html(hall);
                $('#hallReserveModal span#arrival').html(arrival);
                $('#hallReserveModal span#departure').html(departure);

                $('#hallReserveModal form input[name=hall]').val(hall);
                $('#hallReserveModal form input[name=arrival]').val(arrival);
                $('#hallReserveModal form input[name=departure]').val(departure);
            });
        </script>
    </body>
</html>
