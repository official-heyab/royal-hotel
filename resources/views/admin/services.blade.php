<?php
    use App\Models\Service;
?>
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
                        <h1 class="h3 mb-0 text-gray-800">Services</h1>
                        <a href="#" data-toggle="modal" data-target="#createModal" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                            <i class="fas fa-plus fa-sm text-white-50"></i> Create New
                        </a>
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
                            <h6 class="m-0 font-weight-bold text-primary">List of all services</h6>
                        </div>
                        <div class="card-body">
                            <div class="table">
                                <input type="hidden" id="reserveService" value="{{ route('reserve.service')}}">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Reservations</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Reservations</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach($services as $service)
                                            <tr>
                                                <td>
                                                    <i class="lnr lnr-{{$service->cover_image}}"></i>
                                                    {{$service->name}}<br><br>
                                                    <strong>Price: </strong>{{$service->price}}
                                                    <br><br>

                                                    <a href="#" data-toggle="modal" data-target="#editModal"
                                                        class="btn btn-primary btn-icon-split" data-val="{{$service}}">
                                                        <span class="icon text-white-50"><i class="fas fa-info-circle"></i></span>
                                                        <span class="text">Edit</span>
                                                    </a>

                                                    <a href="#" data-toggle="modal" data-target="#deleteModal"
                                                        class="btn btn-danger btn-icon-split" data-val="{{$service}}">
                                                        <span class="icon text-white-50"><i class="fas fa-trash"></i></span>
                                                        <span class="text">Delete</span>
                                                    </a>

                                                </td>
                                                <td>
                                                    <strong>{{ $service->peopleWaiting() }} reservations waiting</strong><br>
                                                    @if($service->id==Service::IS_LAUNDRY)
                                                    <a href="{{ route('admin.waiting.laundry') }}" class="btn btn-primary btn-icon-split" >
                                                        <span class="icon text-white-50"><i class="fas fa-info-circle"></i></span>
                                                        <span class="text">View</span>
                                                    </a>
                                                    @elseif($service->id==Service::IS_BEAUTY_SALON)
                                                    <a href="{{ route('admin.waiting.beauty') }}" class="btn btn-primary btn-icon-split" >
                                                        <span class="icon text-white-50"><i class="fas fa-info-circle"></i></span>
                                                        <span class="text">View</span>
                                                    </a>
                                                    @elseif($service->id==Service::IS_GYM)
                                                    <a href="{{ route('admin.waiting.gym') }}" class="btn btn-primary btn-icon-split" >
                                                        <span class="icon text-white-50"><i class="fas fa-info-circle"></i></span>
                                                        <span class="text">View</span>
                                                    </a>
                                                    @elseif($service->id==Service::IS_SWIMMING_POOL)
                                                    <a href="{{ route('admin.waiting.pool') }}" class="btn btn-primary btn-icon-split" >
                                                        <span class="icon text-white-50"><i class="fas fa-info-circle"></i></span>
                                                        <span class="text">View</span>
                                                    </a>
                                                    @elseif($service->id==Service::IS_DINNER_TABLE)
                                                    <a href="{{ route('admin.waiting.table') }}" class="btn btn-primary btn-icon-split" >
                                                        <span class="icon text-white-50"><i class="fas fa-info-circle"></i></span>
                                                        <span class="text">View</span>
                                                    </a>
                                                    @elseif($service->id==Service::IS_PERSONAL_TRAINER)
                                                    <a href="{{ route('admin.waiting.trainer') }}" class="btn btn-primary btn-icon-split" >
                                                        <span class="icon text-white-50"><i class="fas fa-info-circle"></i></span>
                                                        <span class="text">View</span>
                                                    </a>
                                                    @else
                                                    <a href="#" data-toggle="modal" data-target="#reservationModal"
                                                        class="btn btn-primary btn-icon-split" data-val="{{$service}}">
                                                        <span class="icon text-white-50"><i class="fas fa-info-circle"></i></span>
                                                        <span class="text">History</span>
                                                    </a>
                                                    @endif
                                                </td>
                                            </tr>
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



    @include('admin.service-forms')

</body>

</html>
