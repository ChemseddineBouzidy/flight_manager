<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

<link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
{{-- <link rel="stylesheet" href="{{ asset('css/profileShow.css') }}"> --}}
    <title>Welcome to {{$title}}</title>

</head>
<body>
    @include('partials.nav')
    <main>
     
        <div class="container mx-auto ">
            <!-- ... -->   {{$slot}}
          </div>
    </main>
    @include('partials.footer')

</body>
</html>
