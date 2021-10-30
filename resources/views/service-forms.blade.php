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


<!-- Laundry Reservation Modal -->
<div class="modal fade" id="laundryReserveModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Laundry Reservation</h5>
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
                <form action="{{route('reserve.laundry')}}" method='post' enctype='multipart/form-data'>
                    @csrf
                    <input type="hidden" name="service">
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control" name="roomNum" placeholder="Room number">
                        </div>
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control" name="roomCode" placeholder="Room code">
                        </div>
                    </div>

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

<!-- GYM Reservation Modal -->
<div class="modal fade" id="gymReserveModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">GYM Reservation</h5>
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
                <form action="{{route('reserve.gym')}}" method='post' enctype='multipart/form-data'>
                    @csrf
                    <input type="hidden" name="service">

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

<!-- Swimming Pool Reservation Modal -->
<div class="modal fade" id="poolReserveModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Swimming Pool Reservation</h5>
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
                <form action="{{route('reserve.pool')}}" method='post' enctype='multipart/form-data'>
                    @csrf
                    <input type="hidden" name="service">

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

<!-- Dinner Table Reservation Modal -->
<div class="modal fade" id="tableReserveModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Dinner Table Reservation</h5>
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
                <form action="{{route('reserve.table')}}" method='post' enctype='multipart/form-data'>
                    @csrf
                    <input type="hidden" name="service">

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

<!-- Personal Trainer Reservation Modal -->
<div class="modal fade" id="trainerReserveModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Personal Trainer</h5>
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
                <form action="{{route('reserve.trainer')}}" method='post' enctype='multipart/form-data'>
                    @csrf
                    <input type="hidden" name="service">

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

<!-- Beauty Salon Reservation Modal -->
<div class="modal fade" id="beautyReserveModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Beauty Salon Reservation</h5>
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
                <form action="{{route('reserve.beauty')}}" method='post' enctype='multipart/form-data'>
                    @csrf
                    <input type="hidden" name="service">

                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Enter name">
                    </div>
                    <div class="form-group" style="margin-left: 50px;">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sex" value=0 id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                              Women Beauty Salon
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="sex" value=1 id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                              Men Beauty Salon
                            </label>
                          </div>
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
    $('#serviceReserveModal').on('show.bs.modal', function (event) {
        var service = $(event.relatedTarget).data('val');
        $('#serviceReserveModal span#name').html(service.name);
        $('#serviceReserveModal span#price').html(service.price);
        $('#serviceReserveModal form input[name=service]').val(service.id);
    });

    $('#laundryReserveModal').on('show.bs.modal', function (event) {
        var service = $(event.relatedTarget).data('val');
        $('#laundryReserveModal span#name').html(service.name);
        $('#laundryReserveModal span#price').html(service.price);
        $('#laundryReserveModal form input[name=service]').val(service.id);
    });

    $('#beautyReserveModal').on('show.bs.modal', function (event) {
        var service = $(event.relatedTarget).data('val');
        $('#beautyReserveModal span#name').html(service.name);
        $('#beautyReserveModal span#price').html(service.price);
        $('#beautyReserveModal form input[name=service]').val(service.id);
    });

    $('#gymReserveModal').on('show.bs.modal', function (event) {
        var service = $(event.relatedTarget).data('val');
        $('#gymReserveModal span#name').html(service.name);
        $('#gymReserveModal span#price').html(service.price);
        $('#gymReserveModal form input[name=service]').val(service.id);
    });

    $('#poolReserveModal').on('show.bs.modal', function (event) {
        var service = $(event.relatedTarget).data('val');
        $('#poolReserveModal span#name').html(service.name);
        $('#poolReserveModal span#price').html(service.price);
        $('#poolReserveModal form input[name=service]').val(service.id);
    });

    $('#tableReserveModal').on('show.bs.modal', function (event) {
        var service = $(event.relatedTarget).data('val');
        $('#tableReserveModal span#name').html(service.name);
        $('#tableReserveModal span#price').html(service.price);
        $('#tableReserveModal form input[name=service]').val(service.id);
    });

    $('#trainerReserveModal').on('show.bs.modal', function (event) {
        var service = $(event.relatedTarget).data('val');
        $('#trainerReserveModal span#name').html(service.name);
        $('#trainerReserveModal span#price').html(service.price);
        $('#trainerReserveModal form input[name=service]').val(service.id);
    });
</script>

