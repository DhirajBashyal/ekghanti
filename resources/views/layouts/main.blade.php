<x-app-layout>
    @section('mainContent')

        <div class="wrapper">
            <!-- Preloader -->
            <div class="preloader flex-column justify-content-center align-items-center">
                <img class="animation__wobble" src="{{URL::asset('assets/dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">
            </div>

                @include('Backend.layouts.sidebar')

                @include('Backend.layouts.page-content')

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
             @include('Backend.layouts.footer')
        </div>
    @endsection

</x-app-layout>
