<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>test</h1>
<div>
    <table border="1">
        <tr>
            <th>id</th>
            <th>firstName</th>
            <th>description</th>
            <th>Edit</th>
        </tr>
        @foreach ($Tests as $test )
<tr>
    <td>{{ $test->id }}</td>
    <td>{{ $test->firstName }}</td>
    <td>{{ $test->description}}</td>
    <td><a href="{{ route('Test.edit',['test'=> $test ]) }}">Edit</a></td>
</tr>
        @endforeach
    </table>
</div>
</body>
</html>
