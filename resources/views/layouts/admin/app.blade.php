<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>House Designs</title>

    <!-- Custom fonts for this template-->


    <link href="{{ asset('admins/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('admins/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>


    @livewireStyles
</head>

<body id="page-top">
    @livewireScripts
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('layouts.admin.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="mb-4 bg-white shadow navbar navbar-expand navbar-light topbar static-top">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="mr-3 btn btn-link d-md-none rounded-circle">
                        <i class="fa fa-bars"></i>
                    </button>
                    <!-- Topbar Navbar -->
                    <ul class="ml-auto navbar-nav">
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 text-gray-600 d-none d-lg-inline small">{{ config('app.name')}}</span>
                                <img class="img-profile rounded-circle" src="{{ asset('admins/img/undraw_profile_1.svg') }}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="shadow dropdown-menu dropdown-menu-right animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="mr-2 text-gray-400 fas fa-user fa-sm fa-fw"></i>
                                    Profile
                                </a>

                                <div class="dropdown-divider"></div>
                                {{-- --}}

                                <a class="dropdown-item" href="{{ route('admin.logout') }}">
                                    <i class="mr-2 text-gray-400 fas fa-sign-out-alt"></i>
                                    Logout
                                </a>

                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container">
                    @yield('content')
                </div>
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="my-auto text-center copyright">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="rounded scroll-to-top" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>




    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('admins/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('admins/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('admins/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <!-- <script src="{{ asset('admins/vendor/chart.js/Chart.min.js') }}"></script> -->

    <!-- Page level custom scripts -->
    <!-- <script src="{{ asset('admins/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('admins/js/demo/chart-pie-demo.js') }}"></script> -->
    <script>
        $(document).ready(function() {
            $('#table_id').DataTable();
        });
        /**
         *  Delete Portfolio Images
         */
        function deleteImage(id) {
            $.ajax({
                url: "{{ route('imageDelete') }}"
                , data: {
                    "_token": "{{ csrf_token() }}"
                    , id: id
                }
                , type: "post"
                , success: function(res) {
                    if (res.status == 'success') {
                        $("#img-wrap-" + id).fadeOut();
                    }
                }
            , });
        }
        /**
         * Add Proposal button
         */
        var counter = 0;
        $(document).ready(function() {
            $('#submit').click(function() {
                $('.proposal,.add').show();
            });
            $('.add').click(function() {
                if (counter = 2) {
                    $('.proposal').last().clone().appendTo("#pro");
                    return false;
                }
                counter++;
                return true;
            });
        });
        /**
         * Milestone button click
         */

        //  $(document).ready(function() {
        //     $('#status').change(function(){
        //           $(this).attr('disabled','disabled');
        //     }) ;
        //     $('#task').change(function(){
        //     $(this).attr('disabled','disabled');
        //     }) ;

        //  });

        $(function() {
            document.getElementById("task").onchange = function() {
                document.getElementById("task").setAttribute("disabled", true);
            };
        });
    </script>




</body>

</html>
