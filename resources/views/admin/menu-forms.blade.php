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
                <form action="{{route('menu.store')}}" method='post' enctype='multipart/form-data'>
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Name">
                    </div>
                    <div class="form-group" style="margin-left: 50px;">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="isFood" value=0 id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                              Drink
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="isFood" value=1 id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                              Food
                            </label>
                          </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control" name="price" placeholder="Price">
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
                <form action="{{route('menu.update')}}" method='post' enctype='multipart/form-data'>
                    @csrf
                    <input type="hidden" name="id">
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Name">
                    </div>
                    <div class="form-group" style="margin-left: 50px;">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="isFood" value=0 id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                              Drink
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="isFood" value=1 id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                              Food
                            </label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control" name="price" placeholder="Price">
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
                <form action="{{route('menu.delete')}}" method='post' enctype='multipart/form-data'>
                    @csrf
                    <input type="hidden" name="id">
                    <div class="form-group">
                        <input type="text" disabled class="form-control" name="name" placeholder="Name">
                    </div>
                    <div class="form-group" style="margin-left: 50px;">
                        <div class="form-check">
                            <input disabled class="form-check-input" type="radio" name="isFood" value=0 id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                              Drink
                            </label>
                        </div>
                        <div class="form-check">
                            <input disabled class="form-check-input" type="radio" name="isFood" value=1 id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                              Food
                            </label>
                        </div>
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
        var menu = $(event.relatedTarget).data('val');

        $(this).find('span#title').html(menu.name);
        $(this).find('input[name=id]').val(menu.id);

        $(this).find('input[name=name]').val(menu.name);
        if(!menu.isFood)
            $(this).find('input[name=isFood]')[0].checked = true;
        else
            $(this).find('input[name=isFood]')[1].checked = true;
        $(this).find('input[name=price]').val(menu.price);
        $(this).find('textarea[name=description]').val(menu.description);
    });

</script>


