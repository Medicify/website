
<!DOCTYPE html>
<html lang="en">

@include('home.head')
<body>

    <!-- Preloader Start -->
      <div class="se-pre-con">

      </div>
      <!-- Preloader Ends -->
      @include('home.topbar')

      @yield('content')



@include('home.footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>

</body>

</html>
