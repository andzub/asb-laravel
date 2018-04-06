<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    @include('inc.head')
    <title>АСБ - Наши работы</title>
</head>

<body>
    
    @include('inc.header_pages')

    <main id="content">
		<div class="contentContainer">

		</div>
	</main>

    @include('inc.footer')

	<div class="hidden"></div>
	<!-- Mandatory for Responsive Bootstrap Toolkit to operate -->
	<div class="device-xs visible-xs"></div>
	<div class="device-sm visible-sm"></div>
	<div class="device-md visible-md"></div>
	<div class="device-lg visible-lg"></div>
	<!-- end mandatory -->

    @include('inc.script')

	<!-- Yandex.Metrika counter -->
	<!-- /Yandex.Metrika counter -->
	<!-- Google Analytics counter -->
	<!-- /Google Analytics counter -->
</body>

</html>
