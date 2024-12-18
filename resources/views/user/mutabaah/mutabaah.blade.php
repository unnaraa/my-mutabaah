@extends('user.index')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mutabaah</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }
        .container {
            /* max-width: 800px; */
            margin: 30px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table th, table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }
        table th {
            background-color: #007bff;
            color: #fff;
            font-weight: 600;
        }
        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .actions {
            display: flex;
            justify-content: center;
            gap: 10px;
        }
        .actions button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
        }
        .actions button:hover {
            background-color: #0056b3;
        }
        form {
    margin-bottom: 20px;
}

form label {
    font-weight: bold;
    margin-right: 10px;
}

form select {
    margin-right: 10px;
    padding: 5px;
}

form button {
    padding: 5px 10px;
    background-color: #007BFF;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

form button:hover {
    background-color: #0056b3;
}

    </style>
</head>
<body>
    <div class="container">
        <h2>Data Mutabaah</h2>
        <form action="{{ route('user.mutabaah') }}" method="GET" style="margin-bottom: 20px;">
            <label for="filter_status">Filter Status:</label>
            <select name="filter_status" id="filter_status">
                <option value="">Semua Status</option>
                <option value="murojaah">Murojaah</option>
                <option value="ziyadah">Ziyadah</option>
            </select>
            <button type="submit">Filter</button>
        </form>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Surah</th>
                    <th>Juz</th>
                    <th>Ayat Mulai</th>
                    <th>Ayat Akhir</th>
                    <th>Status</th>
                    <th>Deskripsi</th>
                </tr>
            </thead>
            <tbody>
                <!-- Data Rows -->
                @foreach ($form as $row)
               <tr>
                <td> {{ $loop->iteration }} </td>
                <td> {{ $row->tanggal }} </td>
                <td> {{ $row->surah->surah }} </td>
                <td> {{ $row->juz }} </td>
                <td> {{ $row->ayat_mulai }} </td>
                <td> {{ $row->ayat_akhir }} </td>
                <td> {{ $row->status }} </td>
                <td> {{ $row->desc }} </td>
               </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
@endsection