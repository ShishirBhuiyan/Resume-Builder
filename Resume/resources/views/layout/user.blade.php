<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Laravel CSRF Token -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}" />

  <!-- here show dynamic page title, which define from another blade file -->
  <title> @yield('title') </title>
  {{-- Title image --}}
  <link rel="icon" href="{{url('/Asset/image/msb.png')}}">



  <!-- CSS Link -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <link rel="stylesheet" href="{{ url('/Asset/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ url('/Asset/css/layout/default.css') }}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">


  <script src="{{ url('/Asset/js/plugin/jquery-3.5.1.min.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
  <script src="{{ url('/Asset/js/plugin/bootstrap.bundle.min.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js
"></script>
  <script src="{{ url('/Asset/js/plugin/printThis.js') }}"></script>
  <script src="{{ url('/Asset/js/cv/settings.js') }}"></script>

  @stack('styles')
  @stack('scripts')
</head>

<body>


  <!-- Here show dynamic blade.php file content -->
  @yield('content')


  <script>

    $(document).ready(function () {
        
        $("#print").click(function () {
            $('#wrapper').printThis({
                importCSS: true,
                importStyle: true,
                loadCSS: "/public/Asset/css/welcome.css" 
            });
        });

    });


  </script>

<script>
    @if(Session::has('message'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
        var type = "{{ Session::get('type') }}";
        switch(type){
            case 'info':
                toastr.info("{{ Session::get('message') }}");
                break;

            case 'warning':
                toastr.warning("{{ Session::get('message') }}");
                break;

            case 'success':
                toastr.success("{{ Session::get('message') }}");
                break;

            case 'error':
                toastr.error("{{ Session::get('message') }}");
                break;
        }
    @endif
</script>

</body>

</html>