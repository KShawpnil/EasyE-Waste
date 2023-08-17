<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QFD</title>
</head>
<body>
    <form action="{{url('/')}}/qfd" method="POST">
        @csrf
        <input type="number" name="qfd" id="qfd">
        <input type="submit">
    </form>
</body>
</html>