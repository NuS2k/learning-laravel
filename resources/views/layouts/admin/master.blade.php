<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="{{ asset('style.css') }}" rel="stylesheet">
    
    <title>{{ env('APP_NAME') }}</title>
  </head>
  <body>
    
        @include('partitions.navbar')
        @include('partitions.sidebar')

        <script src="https://kit.fontawesome.com/b33177e463.js" crossorigin="anonymous"></script>
    </body>
</html>