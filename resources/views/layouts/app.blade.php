<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS And JavaScript -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/app.css">
</head>

<body>
<div class="container">
    <div class="task-list">
        <div class="task-list__header">
            <a class="task-list__link" href="{{ url('/')  }}">Task List</a>
        </div>
        @yield('content')
    </div>

</div>
</body>
</html>