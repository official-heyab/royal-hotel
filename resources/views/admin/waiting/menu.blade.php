<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    @include('admin.inc.head')

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('admin.inc.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('admin.inc.topbar')
                <!-- End of Topbar -->

                <!-- Message -->
                @include('admin.inc.message')
                <!-- End of Message -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">
                            <i class="lnr lnr-cart"></i><span> Food & Drink Orders</span>
                        </h1>
                    </div>

                    <!-- Statics -->
                    @include('admin.inc.stats')
                    <!-- End of Statics -->

                </div>
                <!-- /.container-fluid -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">List of all food and drink orders</h6>
                        </div>
                        <div class="card-body">
                            <div class="table">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Item</th>
                                            <th>Type</th>
                                            <th>Where</th>
                                            <th>When</th>
                                            <th>Remarks</th>
                                            <th>Phone</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Item</th>
                                            <th>Type</th>
                                            <th>Where</th>
                                            <th>When</th>
                                            <th>Remarks</th>
                                            <th>Phone</th>
                                            <th>Status</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach($menus as $menu)
                                            @foreach($menu->reservations as $row)
                                                <tr>
                                                    <td>{{ $row->reservation->reservation_name}}</td>
                                                    <td>{{ $menu->name}}</td>
                                                    <td>
                                                        @if($menu->isFood)
                                                        <h5>Food</h5>
                                                    @else
                                                        <h5>Drinks</h5>
                                                    @endif
                                                    </td>

                                                    <td>
                                                    @if($row->isTable)
                                                        <h5>Table</h5>
                                                    @else
                                                        <h5>Room</h5>
                                                    @endif
                                                    {{ $row->ordered_by }}</td>
                                                    <td>{{ $row->reservation->arrival }}</td>
                                                    <td>{{ $row->remark }}</td>
                                                    <td>{{ $row->reservation->phone_number }}</td>
                                                    <td>
                                                        @if ($row->status)
                                                        <a href="{{ route('reserve.menu.callback',$row->id) }}" class="btn btn-primary btn-icon-split">
                                                            <span class="icon text-white-50"><i class="fas fa-info-circle"></i></span>
                                                            <span class="text">Call Back</span>
                                                        </a>
                                                        @else
                                                        <a href="{{ route('reserve.menu.done',$row->id) }}" class="btn btn-success btn-icon-split">
                                                            <span class="icon text-white-50"><i class="fas fa-check-double"></i></span>
                                                            <span class="text">Done</span>
                                                        </a>
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->



            <!-- Footer -->
            @include('admin.inc.footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    @include('admin.inc.scripts')


    <!-- Page level plugins -->
    <script src="{{ asset('sb-theme/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('sb-theme/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('sb-theme/js/demo/datatables-demo.js')}}"></script>
    <style>
        #dataTable_wrapper > div:first-of-type label {
            display: inline-flex;
        }
    </style>


</body>

</html>
