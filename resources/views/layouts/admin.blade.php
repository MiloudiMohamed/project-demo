<!DOCTYPE html>
<html lang="en">
<head>
<title>LRI</title>
<meta charset="utf-8">
<meta name="format-detection" content="telephone=no" />
<!-- CSRF Token -->

<meta name="csrf-token" content="{{ csrf_token() }}">

{{-- <link rel="icon" href="{{ asset('images/favicon.ico') }}"> --}}
{{-- <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" /> --}}
{{-- <link rel="stylesheet" href="{{ asset('css/contact-form.css')}}"> --}}
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
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

{{-- <script src="{{ asset('js/jquery.js') }}"></script> --}}
{{-- <script src="{{ asset('js/jquery-migrate-1.1.1.js') }}"></script> --}}
{{-- <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script> --}}
{{-- <script src="{{ asset('js/script.js') }}"></script> --}}
{{-- <script src="{{ asset('js/superfish.js') }}"></script> --}}
{{-- <script src="{{ asset('js/jquery.equalheights.js') }}"></script> --}}
{{-- <script src="{{ asset('js/jquery.mobilemenu.js') }}"></script> --}}
{{-- <script src="{{ asset('js/tmStickUp.js') }}"></script> --}}
{{-- <script src="{{ asset('js/jquery.ui.totop.js') }}"></script> --}}
{{-- <script src="{{ asset('js/TMForm.js') }}"></script> --}}
{{-- <script src="{{ asset('js/modal.js') }}"></script> --}}

</head>
<body class="text-gray-700">

@include('layouts.partials._nav')
@include('sweetalert::alert')

<div id="app" class="bg-white px-8 py-16">
	@include('admins.partials._nav')
    @yield('content')
</div>

@include('layouts.partials._footer')

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>