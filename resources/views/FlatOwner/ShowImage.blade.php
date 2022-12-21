<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="2">
    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>IMAGE</th>
    </tr>

    @foreach($data as $item)
    <tr>
        <td>{{ $item->id }}</td>
        <td>{{ $item->name }}</td>
        <td>{{ $item->address }}</td>
        <td>{{ $item->mobile }}</td>
        <td><img src="{{ asset($item->photo) }}" height="300" width="300"></td>
    </tr>
    @endforeach

</table>
</body>
</html>