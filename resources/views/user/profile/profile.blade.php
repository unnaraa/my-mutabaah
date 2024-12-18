@extends('user.index')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }
        .profile-container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .profile-header {
            text-align: center;
            margin-bottom: 30px;
        }
        .profile-header img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            margin-bottom: 15px;
        }
        .profile-header h2 {
            font-size: 28px;
            margin: 10px 0;
            color: #333;
        }
        .profile-header p {
            font-size: 16px;
            color: #777;
        }
        .profile-info {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        .info-item {
            display: flex;
            justify-content: space-between;
            border-bottom: 1px solid #eee;
            padding-bottom: 10px;
        }
        .info-item:last-child {
            border-bottom: none;
        }
        .info-label {
            font-weight: 600;
            color: #555;
        }
        .info-value {
            color: #777;
        }
        .edit-profile {
            text-align: center;
            margin-top: 20px;
        }
        .edit-profile a {
            text-decoration: none;
            color: #fff;
            background-color: #007bff;
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: 600;
        }
        .edit-profile a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="profile-container">

        @if ($biodata)
        <div class="profile-header">
            <img src="{{ asset('storage/' . $biodata->foto) }}" alt="Profile Picture">
            {{-- <h2>{{ $profile->nama_lengkap }}</h2>
            <p>{{ $profile->user->email }}</p> --}}
        </div>
        <div class="profile-info">
        {{-- @foreach ($biodata as $profile) --}}
            <div class="info-item">
                <span class="info-label">Nama Lengkap:</span>
                <span class="info-value">{{ $biodata->nama_lengkap }}</span>
            </div>
            <div class="info-item">
                <span class="info-label">Tempat Lahir:</span>
                <span class="info-value">{{ $biodata->tempat_lahir }}</span>
            </div>
            <div class="info-item">
                <span class="info-label">Tanggal Lahir:</span>
                <span class="info-value">{{ $biodata->tanggal_lahir }}</span>
            </div>
            <div class="info-item">
                <span class="info-label">Umur:</span>
                <span class="info-value">{{ $biodata->umur }}</span>
            </div>
            <div class="info-item">
                <span class="info-label">Alamat :</span>
                <span class="info-value">{{ $biodata->alamat }}</span>
            </div>
            <div class="info-item">
                <span class="info-label">No. Telp :</span>
                <span class="info-value">{{ $biodata->nomor_hp }}</span>
            </div>
            <div class="info-item">
                <span class="info-label">Nama Ayah :</span>
                <span class="info-value">{{ $biodata->nama_ayah }}</span>
            </div>
            <div class="info-item">
                <span class="info-label">Nama Ibu :</span>
                <span class="info-value">{{ $biodata->nama_ibu }}</span>
            </div>
            <div class="info-item">
                <span class="info-label">Kelas :</span>
                <span class="info-value">{{ $biodata->kelas }}</span>
            </div>
{{-- @endforeach --}}

        </div>
        <div class="edit-profile">
            <a href="{{ route('form.profile') }}">Edit Profile</a>
        </div>
        @else
        <p>Data biodata tidak ditemukan.</p>
    @endif
    </div>
</body>
</html>
@endsection
