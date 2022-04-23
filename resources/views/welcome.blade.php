<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
    
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="
{{ URL::asset('css/app.css'); }} " />

        <title>Interest App V2</title>

    </head>
    
    <body>
       <x:mainnav />
       <x:frontpagecontents />
    </body>
    
</html>
