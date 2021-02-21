<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('admin-title')</title>
    <link rel="stylesheet" href="style.css">
    @yield('admin-css')
    <style>
        body {
            background-color: #333;
            color: white;
        }

    </style>
</head>
<body>
    
    <section class="container">
        <h1> Admin page </h1>
        @yield('admin-main')
    </section>


<script src=""></script>
</body>
</html>