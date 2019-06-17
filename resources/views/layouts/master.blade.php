<!DOCTYPE html>
<html lang="en">
<head>
<title>Contacts</title>
<meta charset="utf-8">
<meta name="format-detection" content="telephone=no" />

<link rel="icon" href="{{ asset('images/favicon.ico') }}">
<link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" />
<link rel="stylesheet" href="{{ asset('css/contact-form.css')}}">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/tailwind.min.css') }}">

<style>
    .primary {
      fill: #B2B7FF;
    }

    .secondary {
      fill: #2F365F;
    }
</style>

<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/jquery-migrate-1.1.1.js') }}"></script>
<script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
<script src="{{ asset('js/superfish.js') }}"></script>
<script src="{{ asset('js/jquery.equalheights.js') }}"></script>
<script src="{{ asset('js/jquery.mobilemenu.js') }}"></script>
<script src="{{ asset('js/tmStickUp.js') }}"></script>
<script src="{{ asset('js/jquery.ui.totop.js') }}"></script>
<script src="{{ asset('js/TMForm.js') }}"></script>
<script src="{{ asset('js/modal.js') }}"></script>
<script>
 $(window).load(function(){
  $().UItoTop({ easingType: 'easeOutQuart' });
  $('#stuck_container').tmStickUp({});

 });
</script>
</head>
<body class="text-gray-700">

@include('layouts.partials._nav')

<div class="bg-white px-8 py-16">
    @yield('content')
</div>

@include('layouts.partials._footer')

</body>
</html>