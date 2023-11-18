
<!DOCTYPE html>
<html lang="en">

@include('dashboard/head')
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

@include('dashboard/sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

@include('dashboard/topbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                  @yield('content')

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

@include('dashboard/footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
@include('dashboard/button-topbar')

    <!-- Logout Modal-->
@include('dashboard/logoutmodal')

{{-- javascript --}}
@include('dashboard/js')
</body>

</html>
