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
    
        .container {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 0 3rem;
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .card {
            background: white;
            padding: 1.5rem;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
            width: 100%;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card h3 {
            margin: 0;
            color: #0e2aca;
        }

        .card p {
            margin: 0.5rem 0 0;
            line-height: 1.6;
        }

        .card .date {
            font-size: 0.9rem;
            color: #666;
            margin-top: 0.5rem;
        }
   </style>
</head>

<body>
    <div class="container">
        @foreach ($laporan as $row)        
        <div class="card">
            <h3>{{ $row->judul }}</h3>
            <p>{{ $row->isi_laporan }}</p>
            <div class="date">Dipublikasikan pada: {{ date('d F Y', strtotime($row->created_at)) }}</div>
        </div>
        @endforeach
    </div>
</body>

</html>
@endsection