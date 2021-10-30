<style>
    .modal-dialog {
        max-width: 1000px;
    }
</style>

<!-- Create Modal -->
<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create New</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('room.store')}}" method='post' enctype='multipart/form-data'>
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Name">
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control" name="price" placeholder="Price per night">
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea rows=8 class="form-control" name="description"
                        placeholder="Enter description"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success btn-block">Create</button>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

<!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editing <span id="title"></span></h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('room.update')}}" method='post' enctype='multipart/form-data'>
                    @csrf
                    <input type="hidden" name="id">
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Name">
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control" name="price" placeholder="Price per night">
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea rows=8 class="form-control" name="description"
                        placeholder="Enter description"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Update</button>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>


<!-- Delete Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to delete <span id="title"></span>?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('room.delete')}}" method='post' enctype='multipart/form-data'>
                    @csrf
                    <input type="hidden" name="id">
                    <div class="form-group">
                        <input type="text" disabled class="form-control" name="name" placeholder="Name">
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" disabled class="form-control" name="price" placeholder="Price">
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea rows=8 class="form-control" name="description" disabled></textarea>
                    </div>
                    <button type="submit" class="btn btn-danger btn-block">Delete</button>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

<script>
    //get value links
    $('#editModal, #deleteModal').on('show.bs.modal', function (event) {
        var room = $(event.relatedTarget).data('val');

        $(this).find('span#title').html(room.name);
        $(this).find('input[name=id]').val(room.id);

        $(this).find('input[name=name]').val(room.name);
        $(this).find('input[name=price]').val(room.price_per_night);
        $(this).find('textarea[name=description]').val(room.description);
    });

</script>

<!-- Reservations Modal -->
<div class="modal fade" id="reservationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Reservations for <span id="title"></span></h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Phone Number</th>
                            <th>Arrival</th>
                            <th>Departure</th>
                            <th>Adults</th>
                            <th>Children</th>
                            <th>Remarks</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Phone Number</th>
                            <th>Arrival</th>
                            <th>Departure</th>
                            <th>Adults</th>
                            <th>Children</th>
                            <th>Remarks</th>
                            <th>Status</th>
                        </tr>
                    </tfoot>
                    <tbody>

                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

<script>
    //get value from links
    $('#reservationModal').on('show.bs.modal', function (event) {
        var reserveRoom = $("#reserveRoom").val();
        var tableBody="";
        var room  = $(event.relatedTarget).data('val');
        $(this).find('input[name=id]').val(room.id);
        $(this).find('span#title').html(room.name);


        for (var index in room.reservations) {
            var reservation = room.reservations[index].reservation;
            var arrivalDate = $.datepicker.formatDate('DD, MM d yy',
                                new Date(reservation.arrival));
            var departureDate = $.datepicker.formatDate('DD, MM d yy',
                                new Date(room.reservations[index].departure));

            tableBody +="<tr>";
            tableBody +="<td>"+reservation.reservation_name+"</td>";
            tableBody +="<td>"+reservation.phone_number+"</td>";
            tableBody +="<td>"+arrivalDate+"</td>";
            tableBody +="<td>"+departureDate+"</td>";
            tableBody +="<td>"+room.reservations[index].number_of_adults+"</td>";
            tableBody +="<td>"+room.reservations[index].number_of_children+"</td>";
            tableBody +="<td>"+room.reservations[index].remark+"</td>";
            tableBody +="<td>";
            if(room.reservations[index].status){
                tableBody += "<a href='"+reserveRoom+"/callback/"+room.reservations[index].id+"' ";
                tableBody += " class='btn btn-primary btn-icon-split'>";
                tableBody += " <span class='icon text-white-50'><i class='fas fa-info-circle'></i></span>";
                tableBody += " <span class='text'>Call Back</span></a>";
            } else {
                tableBody += "<a href='"+reserveRoom+"/done/"+room.reservations[index].id+"' ";
                tableBody += " class='btn btn-success btn-icon-split'>";
                tableBody += " <span class='icon text-white-50'><i class='fas fa-check-double'></i></span>";
                tableBody += " <span class='text'>Done</span></a>";
            }

            tableBody +="</td>";
            tableBody +="</tr>";
        }

        $(this).find('tbody').html(tableBody);
    });


</script>

