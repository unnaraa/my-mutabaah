<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }
        .join-us-form-section {
            padding: 50px 15px;
        }
        .join-us-form-container {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            padding: 40px;
            max-width: 600px;
            margin: 0 auto;
        }
        .join-us-form-content h2 {
            font-size: 28px;
            font-weight: 600;
            color: #007bff;
            text-align: center;
            margin-bottom: 20px;
        }
        .join-us-form-content p {
            font-size: 16px;
            color: #555;
            text-align: center;
            margin-bottom: 30px;
        }
        .form-label {
            font-weight: 500;
            color: #333;
        }
        .form-control {
            font-size: 14px;
            border-radius: 5px;
        }
        .form-submit-btn {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: 600;
            border-radius: 5px;
            width: 100%;
            transition: background-color 0.3s;
        }
        .form-submit-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <section class="join-us-form-section">
        <div class="join-us-form-container">
            <div class="join-us-form-content">
                <h2>Edit Profile Anda</h2>
            </div>
            <form action="{{ route('form.edit.profile') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label">Nama Lengkap :</label>
                    <input value="{{ $profile->nama_lengkap }}" type="text" class="form-control" name="nama_lengkap" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Tempat Lahir :</label>
                    <input value="{{ $profile->tempat_lahir }}" type="text" class="form-control" name="tempat_lahir" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Tanggal Lahir :</label>
                    <input type="date" class="form-control" name="tanggal_lahir"  value="{{ $profile->tanggal_lahir }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Umur :</label>
                    <input type="number" class="form-control" name="umur" value="{{ $profile->umur }}"  min="1" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Nomor Telepon :</label>
                    <input type="number" class="form-control" name="nomor_hp" value="{{ $profile->nomor_hp }}" min="1" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Alamat :</label>
                    <textarea class="form-control" name="alamat" value="{{ $profile->alamat }}" rows="3" required></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama Ayah :</label>
                    <input type="text" class="form-control" name="nama_ayah" value="{{ $profile->nama_ayah }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama Ibu :</label>
                    <input type="text" class="form-control" name="nama_ibu" value="{{ $profile->nama_ibu }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Kelas :</label>
                    <select class="form-select" name="kelas" required>
                        <option value="{{ $profile->nama_ibu }}" disabled selected>{{ $profile->nama_ibu }}</option>
                        <option value="lancar-tahsin">Lancar Tahsin</option>
                        <option value="pemula">Pemula</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Foto :</label>
                    <input type="file" class="form-control" name="foto" accept="image/*" required>
                </div>
                <button type="submit" class="form-submit-btn">Daftar</button>
            </form>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
