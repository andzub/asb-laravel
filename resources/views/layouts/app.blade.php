<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    @include('inc.head')
    <title>@lang('service.title-head')</title>
</head>

<body>
    {{-- header --}}
    @include('inc.header_pages')

    <main id="content">
        {{-- content --}}
        @yield('content')
    </main>

    {{-- footer --}}
    @include('inc.footer')
    @include('inc.script')

</body>

</html>