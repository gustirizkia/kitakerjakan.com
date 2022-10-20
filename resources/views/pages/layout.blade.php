<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @yield('meta')
    <title>Kita Kerjakan | @yield('title')</title>
    @include('includes.style')

    @stack('add-style')
</head>

<body id="body">
    @include('includes.navbar')

    @yield('content')

    <footer>
        {{-- <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-6">
                    <img src="/assets/images/logo.jpg" alt="" />
                    <div class="">kitakerjakan20@gmail.com</div>
                    <div class="">0857-7888-4846</div>
                    <div class="">FB/IG kita kerjakan</div>
                </div>
                <div class="col-md-3 text-right">
                    MQR4+5CM, Jl. Ibnu Sina I, Pisangan, Kec. Ciputat Tim., Kota
                    Tangerang Selatan, Banten 15419
                </div>
            </div>
        </div> --}}
        {{--
        <hr> --}}
        <div class="py-3 text-center bg__primary text-white mt-5">
            &copy COPYRIGHT {{ \Carbon\Carbon::now()->format('Y') }}
        </div>
    </footer>

    <script src="{{ asset('assets/bootstrap-5/js/bootstrap.min.js') }}"></script>
    @stack('add-script')

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    @if (Session::has('success'))
    <script>
        swal('Berhasil', "{{ Session::get('success') }}", "success");
    </script>

    @endif
</body>

</html>
