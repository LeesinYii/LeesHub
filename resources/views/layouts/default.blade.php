<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>LeesHub|@yield('title','首页') - 基于Laravel的开源社区</title>
	<link rel="stylesheet" href="/css/app.css">
</head>
<body>
	@include('layouts._header')

   	<div class="container">
      <div class="col-md-offset-1 col-md-10">
        @yield('content')
        @include('layouts._footer')
      </div>
    </div> 
   
</body>
</html>