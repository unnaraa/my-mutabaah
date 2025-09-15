@extends('user.index')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mutabaah</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">
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

        table th,
        table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }

        table th {
            background-color: #007bff;
            color: #fff;
            font-weight: 600;
            text-align: center;

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
        <table id="mutabaah" class="display nowrap" style="width:100%">
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
                    <th>Respon</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($form as $row)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $row->tanggal }}</td>
                    <td>{{ $row->surah->surah }}</td>
                    <td>{{ $row->juz }}</td>
                    <td>{{ $row->ayat_mulai }}</td>
                    <td>{{ $row->ayat_akhir }}</td>
                    <td>{{ $row->status }}</td>
                    <td>{{ $row->desc }}</td>
                    <td>{{ $row->ripiu ? $row->ripiu->respon : 'Belum ada respon' }}</td>
                    <td>
                        <form action="{{ route('hapus.mutabaah', $row->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="background-color: red;" onclick="return confirm('Are you sure you want to delete this?')">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- Include DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <!-- Include DataTables Buttons JS -->
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#mutabaah').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
        });

    </script>
</body>
</body>

</html>
@endsection