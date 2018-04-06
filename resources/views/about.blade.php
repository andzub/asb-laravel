<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    @include('inc.head')
    <title>@lang('about.title-head')</title>
</head>

<body>
    
    @include('inc.header_pages')

	<main id="content">
		<article class="aboutContent__container">
		<h2 class="aboutContent__title">@lang('about.title')</h2>
			<p class="aboutContent__text">@lang('about.llc asb')</p>
			<p class="aboutContent__text">@lang('about.in the arsinal')</p>
			<p class="aboutContent__text">@lang('about.the most basic')</p>
			<ul class="aboutContent__activity">
				<li class="aboutContent__activity-item">@lang('about.architectural')</li>
				<li class="aboutContent__activity-item">@lang('about.technical')</li>
				<li class="aboutContent__activity-item">@lang('about.civil works')</li>
				<li class="aboutContent__activity-item">@lang('about.manufacturing of stall')</li>
				<li class="aboutContent__activity-item">@lang('about.designing')</li>
				<li class="aboutContent__activity-item">@lang('about.manufacturing of handrails')</li>
				<li class="aboutContent__activity-item">@lang('about.warming and decorative')</li>
				<li class="aboutContent__activity-item">@lang('about.manufacturing and installation')</li>
			</ul>
			<p class="aboutContent__text">@lang('about.during our work')</p>
			<ul class="aboutContent__work">
				<li class="aboutContent__work-item">@lang('about.designing and construction')</li>
				<li class="aboutContent__work-item">@lang('about.the construction of a potato')</li>
				<li class="aboutContent__work-item">@lang('about.production areas')</li>
				<li class="aboutContent__work-item">@lang('about.works on the design')</li>
				<li class="aboutContent__work-item">@lang('about.superstructure above')</li>
				<li class="aboutContent__work-item">@lang('about.superstructure of the gym')</li>
				<li class="aboutContent__work-item">@lang('about.reconstrunction of the building')</li>
				<li class="aboutContent__work-item">@lang('about.manufacturing of a set')</li>
				<li class="aboutContent__work-item">@lang('about.manufacturing and installation of rooflights')</li>
				<li class="aboutContent__work-item">@lang('about.manufacturing of cattle')</li>
			</ul>
			<p class="aboutContent__text">@lang('about.along with standart')</p>
			<p class="aboutContent__text">@lang('about.a new direction')</p>
			<p class="aboutContent__text">@lang('about.some of our customers')</p>
			<ul class="aboutContent__castomer">
				<li class="aboutContent__customer-item">@lang('about.s group')</li>
				<li class="aboutContent__customer-item">@lang('about.llc urkpoddon')</li>
				<li class="aboutContent__customer-item">@lang('about.llc caparol')</li>
				<li class="aboutContent__customer-item">@lang('about.llc argo')</li>
				<li class="aboutContent__customer-item">@lang('about.llc gyalos')</li>
				<li class="aboutContent__customer-item">@lang('about.llc ipc')</li>
				<li class="aboutContent__customer-item">@lang('about.pjsc')</li>
			</ul>
			<p class="aboutContent__text">@lang('about.we look forward')</p>
		</article>
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
