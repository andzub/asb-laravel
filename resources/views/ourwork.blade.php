<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    @include('inc.head')
    <title>@lang('ourwork.title-head')</title>
</head>

<body>
    
    @include('inc.header_pages')

    <main id="content">
		<div class="contentContainer">
			<h2 class="aboutContent__title">@lang('ourwork.title-page')</h2>
		</div>
	</main>

    @include('inc.footer')
    @include('inc.script')
</body>

</html>
