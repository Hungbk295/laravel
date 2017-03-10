<!DOCTYPE html>
<html>
<head>
	<title>Lap trinh-@yield('title')</title>
	<style type="text/css" media="screen">
	
		#header {height: 200px; width: auto; background: red;}
		#content {height: 500px; width: auto;background: blue}
		#footer {height: 300px; width: auto;background: yellow}
	</style>
</head>
<body>

<div id="wrapper">
@include("views.sub")
<div id="header"></div>
@yield("noidung") 
<div id="content"></div>

<div id="footer"></div>
</div>
</body>
</html>