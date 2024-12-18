@extends('user.index')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Mutabaah</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }
        .form-container {
            max-width: 600px;
            margin: 30px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            font-weight: 600;
            color: #555;
            margin-bottom: 5px;
        }
        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }
        .form-group textarea {
            resize: none;
            height: 100px;
        }
        .ayat-group {
            display: flex;
            gap: 10px;
        }
        .form-actions {
            text-align: center;
            margin-top: 20px;
        }
        .form-actions button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        .form-actions button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Form Mutabaah</h2>
        <form action="{{ route('create.mutabaah') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="date">Tanggal</label>
                <input type="date" id="tanggal" name="tanggal" required>
            </div>
            <div class="form-group">
                <label for="surah">Nama Surah</label>
                <select id="surah_id" name="surah_id" required>
                    <option value="">Pilih Surah</option>
                    @foreach($surah as $surahs)
                    <option value="{{$surahs->id}}" {{old('surah_id') == $surahs->id ? 'selected' : ''}}>{{$surahs->surah}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="juz">Juz</label>
                <select id="juz" name="juz" required>
                    <option value="">Pilih Juz</option>
                </select>
            </div>
            <div class="form-group">
                <label>Ayat</label>
                <div class="ayat-group">
                    <input type="number" name="ayat_mulai" required>
                    <span>:</span>
                    <input type="number" name="ayat_akhir" required>
                </div>
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select id="status" name="status" required>
                    <option value="">Pilih Status</option>
                    <option value="ziyadah">ziyadah</option>
                    <option value="murojaah">murojaah</option>
                </select>
            </div>
            <div class="form-group">
                <label for="description">Deskripsi</label>
                <textarea id="desc" name="desc" placeholder="Tambahkan catatan..."></textarea>
            </div>
            <div class="form-actions">
                <button type="submit">Simpan</button>
            </div>
        </form>
    </div>
    <script>
        // Mendapatkan elemen select
        const juzSelect = document.getElementById('juz');
    
        // Membuat opsi untuk 1-30
        for (let i = 1; i <= 30; i++) {
            const option = document.createElement('option');
            option.value = i; // Nilai opsi
            option.textContent = `Juz ${i}`; // Teks yang ditampilkan
            juzSelect.appendChild(option); // Menambahkan opsi ke elemen select
        }
    </script>
</body>
</html>
@endsection