<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data User</title>
</head>
<body>
    <h1>Data User</h1>
    {{-- <table border="1" cellpadding="2" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Nama</th>
            <th>Level Pengguna</th>
        </tr>
        @foreach ($data as $u)
            <tr>
                <td>{{ $data->user_id }}</td>
                <td>{{ $data->username }}</td>
                <td>{{ $data->nama }}</td>
                <td>{{ $data->level_id }}</td>
            </tr>
        @endforeach
    </table> --}}
    <table border="1" cellpadding="2" cellspacing="0">
        <tr>
            <th>Jumlah Pengguna</th>
        </tr>
        <td>{{ $data }}</td>
    </table>
</body>
</html>
