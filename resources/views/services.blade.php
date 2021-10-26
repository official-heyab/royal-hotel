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
                        <div class="col-lg-3 col-sm-6">
                            <div class="accomodation_item text-center">
                                <a href="#" data-toggle="modal" data-val="{{ $service }}"
                                data-target="#serviceReserveModal">
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
