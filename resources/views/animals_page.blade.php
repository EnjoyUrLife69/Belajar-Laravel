<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    King of the jungle : {{ $kings }} <br><br>
    list of animals :
    @foreach ($animals as $data)
        @if ($data == 'Lion')
            <li> {{ $data }} - dia hewan setia </li>
        @else
            <li> {{$data}} </li>
        @endif
    @endforeach
</body>

</html>
