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
                            <i class="lnr lnr-layers"></i><span> Service Reservations</span>
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
                            <h6 class="m-0 font-weight-bold text-primary">List of all service reservations</h6>
                        </div>
                        <div class="card-body">
                            <div class="table">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Service</th>
                                            <th>Name</th>
                                            <th>When</th>
                                            <th>Remarks</th>
                                            <th>Phone</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Service</th>
                                            <th>Name</th>
                                            <th>When</th>
                                            <th>Remarks</th>
                                            <th>Phone</th>
                                            <th>Status</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach($serviceReservations as $sr)
                                            @if($sr->reservation_id!='')
                                            <tr>
                                                <td>{{ $sr->name}}</td>
                                                <td>{{ $sr->reservation_name }}</td>
                                                <td>{{ $sr->arrival}}</td>
                                                <td>{{ $sr->remark }}</td>
                                                <td>{{ $sr->phone_number }}</td>
                                                <td>
                                                    @if ($sr->status)
                                                        <a href="{{ route('reserve.service.callback', ['sID' => $sr->service_id, 'id' => $sr->reservation_id]) }}" class="btn btn-primary btn-icon-split">
                                                            <span class="icon text-white-50"><i class="fas fa-info-circle"></i></span>
                                                            <span class="text">Call Back</span>
                                                        </a>
                                                        @else
                                                        <a href="{{ route('reserve.service.done', ['sID' => $sr->service_id, 'id' => $sr->reservation_id]) }}" class="btn btn-success btn-icon-split">
                                                            <span class="icon text-white-50"><i class="fas fa-check-double"></i></span>
                                                            <span class="text">Done</span>
                                                        </a>
                                                    @endif
                                                </td>
                                            </tr>
                                            @endif
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
