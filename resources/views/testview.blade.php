<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Local Address</th>
        <th>Permanent Address</th>
        <tr>  

      @forelse($data as $user)
           <tr>
                <td>{{$user->id}} </td>
                <td>{{$user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->local }}</td>
                <td>{{ $user->permanent }}</td>
            </tr>
        @empty
        <p>No data found</p>
        @endforelse
    </table>
</body>
</html>
