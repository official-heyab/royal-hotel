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
                    <h2 class="page-cover-tittle">Foods & Drinks</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="active">Foods & Drinks</li>
                    </ol>
                </div>
            </div>
        </section>
        <!--================Breadcrumb Area =================-->

        <!--================ Order foods & drinks  =================-->
        <section class="accomodation_area section_gap" id="bookRoom">
            <div class="container">
                <div class="section_title text-center">
                    <h2 class="title_color">Order to your Room/Dinning table</h2>

                </div>
                <div class="row mb_30">
                    <div class="table">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Menu</th>
                                    <th>Order</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Menu</th>
                                    <th>Order</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach($menu as $row)
                                    <tr>
                                        <td>
                                            {{$row->name}}<br>
                                            @if($row->isFood) <h5>Food</h5>
                                            @else <h5>Drink</h5>
                                            @endif
                                            <strong>Price: </strong>{{$row->price}}
                                        </td>
                                        <td>
                                            <a href="#" data-toggle="modal" data-target="#reserveMenuModal"
                                                class="btn btn-primary btn-icon-split" data-val="{{$row}}">
                                                <span class="text">Order</span>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <!--================ Order foods & drinks  =================-->


        @include('inc.footer')
        @include('inc.scripts')

        <!-- Menu Order Modal -->
        <div class="modal fade" id="reserveMenuModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ordering foods & drinks</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div>
                            <label>Item: <span id="name"><span></label><br>
                            <label>Type: <span id="type"></label><br>
                            <label>Price: <span id="price"></label>
                        </div><br>
                        <h5>Enter your details</h5>
                        <form action="{{route('reserve.menu')}}" method='post' enctype='multipart/form-data'>
                            @csrf
                            <input type="hidden" name="menuID">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Enter name">
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <div class='input-group date' id='datetimepicker1'>
                                        <input type='text' name="arrival" class="form-control" placeholder="When"/>
                                        <span class="input-group-addon">
                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control" name="contact" placeholder="Enter phone number">
                                </div>
                            </div>
                            <div class="form-group" style="margin-left: 50px;">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="isTable" value=0 id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        To my room
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="isTable" value=1 id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        To my dinning table
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="orderedBy" placeholder="Enter room/table number">
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
            //Menu reservation modal
            $('#reserveMenuModal').on('show.bs.modal', function (event) {
                var item = $(event.relatedTarget).data('val');

                $('#reserveMenuModal span#name').html(item.name);
                if(item.isFood)
                    $('#reserveMenuModal span#type').html("Food");
                else
                    $('#reserveMenuModal span#type').html("Drink");
                $('#reserveMenuModal span#price').html(item.price);
                $('#reserveMenuModal form input[name=menuID]').val(item.id);
            });
        </script>

        @include('inc.scripts')
    </body>
</html>
