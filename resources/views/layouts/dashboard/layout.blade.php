<!DOCTYPE html>
<html lang="en" data-url-prefix="/" data-footer="true" @isset($html_tag_data) @foreach ($html_tag_data as $key => $value)
data-{{ $key }}='{{ $value }}'
@endforeach
@endisset

data-override='{"attributes": {"color": "light-green", "placement": "vertical"}}'
>

<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>{{ $title }}</title>
@include('layouts.dashboard.head')
</head>

<body>
<div id="root">
    <div id="nav" class="nav-container d-flex" @isset($custom_nav_data) @foreach ($custom_nav_data as $key => $value)
        data-{{ $key }}="{{ $value }}"
        @endforeach
    @endisset
    >
    @include('layouts.dashboard.nav')
</div>
<main>
    @yield('content')
</main>
@include('layouts.dashboard.footer')
</div>
{{-- @include('_layout.modal_settings')
@include('_layout.modal_search') --}}
@include('layouts.dashboard.scripts')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@include('alert.alert')
@yield('custom-js')
</body>

</html>
