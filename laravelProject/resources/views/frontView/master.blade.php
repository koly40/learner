
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Soft-Buy - Responsive Template">
	<meta name="keywords" content="best html5 template, bootstrap, template ,best premium template, best Soft-Buy template, Soft-Buy template">
	<meta name="author" content="shiplu">
	<meta name="apple-mobile-web-app-capable" content="yes">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Soft-Buy : @yield('title_area')</title>
	@yield('css_js')
</head>
<body>
	@include('frontView.inc.header_bot')
	@include('frontView.inc.manue')
	@yield('feature')
	@yield('maincontent')
	@yield('fasion')					
	@yield('momo')
	@include('frontView.inc.footer')
	@yield('js_link')	
	
</body>
</html>