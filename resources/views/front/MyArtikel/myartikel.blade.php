<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Artikel</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
        }
        /* Scroll Container */
        .scroll-container {
            overflow-x: auto;
            white-space: inherit;
            margin: 0;
            padding-bottom: 5px;
        }
        /* Card Style */
        .scroll-container .card {
            display: inline-block;
            min-width: 200px;
            max-width: 200px;
            height: 300px;
            margin-right: 15px;
            margin-bottom: 0;
            border: none;
            transition: transform 0.3s ease;
        }
        .card img {
            height: 150px;
            object-fit: cover;
        }
        .card:hover {
            transform: scale(1.05);
        }
        .card-title, .card-text {
            text-overflow: ellipsis;
            overflow: hidden;
            white-space: nowrap;
        }
        /* Responsif */
        @media (max-width: 768px) {
            .scroll-container .card {
                min-width: 150px;
                max-width: 150px;
                height: 250px;
            }
            .card-title, .card-text {
                font-size: 12px;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('front/IMG/logo.png') }}" alt="Logo" class="me-2" width="70">
                My Artikel
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="btn btn-primary" href="{{ route('home') }}">Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

<!-- Filter Kategori -->
<div class="container py-4">
    <div class="mb-3">
        <select id="kategori" class="form-select">
            <option value="">Semua Kategori</option>
            @foreach ($kategoris as $kategori)
                <option value="{{ $kategori }}">{{ $kategori }}</option>
            @endforeach
        </select>
    </div>
</div>

    <!-- Search Bar -->
<div class="container py-4">
    <div class="mb-3">
        <input type="text" id="search" class="form-control" placeholder="Cari artikel..." aria-label="Search">
    </div>
</div>
   <!-- Content -->
<div class="container py-4">
    {{-- <h4 class="mb-3">Keutamaan Menghafal Qur'an</h4> --}}
    <div id="artikel-container" class="scroll-container">
        @foreach ($artikels as $myartikel)
        <a href="{{ $myartikel->link }}" target="_blank">
            <div class="card">
                <img src="{{ asset('storage/'.$myartikel->img) }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h6 class="card-title">{{ $myartikel->judul }}</h6>
                    <p class="card-text small mb-0">{{ $myartikel->sumber }}</p>
                </div>
            </div>
        </a>
        @endforeach
    </div>
</div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Search Logic -->
    <script>
        document.getElementById('search').addEventListener('keyup', function() {
            const query = this.value;
            const container = document.getElementById('artikel-container');
            
            // Fetch data menggunakan AJAX
            fetch(`/search-artikel?query=${query}`)
                .then(response => response.json())
                .then(data => {
                    container.innerHTML = ''; // Kosongkan container
    
                    // Cek apakah ada hasil
                    if (data.length > 0) {
                        data.forEach(item => {
                            container.innerHTML += `
                                <a href="${item.link}" target="_blank">
                                    <div class="card">
                                        <img src="/storage/${item.img}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h6 class="card-title">${item.judul}</h6>
                                            <p class="card-text small mb-0">${item.sumber}</p>
                                        </div>
                                    </div>
                                </a>
                            `;
                        });
                    } else {
                        container.innerHTML = '<p>Tidak ada artikel ditemukan.</p>';
                    }
                })
                .catch(error => console.error('Error:', error));
        });
    </script>
    {{-- Filter kategori --}}
    <script>
        document.getElementById('kategori').addEventListener('change', function() {
            const kategori = this.value;
            const container = document.getElementById('artikel-container');
    
            // Fetch data berdasarkan kategori
            fetch(`/filter-artikel?kategori=${kategori}`)
                .then(response => response.json())
                .then(data => {
                    container.innerHTML = ''; // Kosongkan container
    
                    // Cek apakah ada hasil
                    if (data.length > 0) {
                        data.forEach(item => {
                            container.innerHTML += `
                                <a href="${item.link}" target="_blank">
                                    <div class="card">
                                        <img src="/storage/${item.img}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h6 class="card-title">${item.judul}</h6>
                                            <p class="card-text small mb-0">${item.sumber}</p>
                                        </div>
                                    </div>
                                </a>
                            `;
                        });
                    } else {
                        container.innerHTML = '<p>Tidak ada artikel ditemukan untuk kategori ini.</p>';
                    }
                })
                .catch(error => console.error('Error:', error));
        });
    </script>
    
    
</body>
</html>
