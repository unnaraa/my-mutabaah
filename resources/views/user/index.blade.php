<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>User Dashboard</title>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
       <link rel="shortcut icon" href="{{asset('front/IMG/logo.png')}}" type="image/x-icon">
        <style>
            body {
                font-family: 'Poppins', sans-serif;
                display: flex;
                flex-direction: column;
                min-height: 100vh;
                margin: 0;
                padding: 0;
                background-color: #f4f4f4;
                outline: 1px solid red;
                /* Membantu lihat elemen tersembunyi */
    
            }
    
            main {
                flex: 1;
            }
    
            .container {
                display: flex;
                flex-direction: column;
                align-items: center;
                padding: 20px;
                position: relative;
                overflow: visible;
            }
    
            .profile {
                background-color: #fff;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                text-align: center;
                width: 300px;
            }
    
            .profile img {
                border-radius: 50%;
                width: 100px;
                height: 100px;
            }
    
            .profile h2 {
                margin: 10px 0;
                font-size: 24px;
            }
    
            .profile p {
                color: #777;
                margin: 5px 0;
            }
    
            .navigation {
                margin-top: 20px;
                width: 100%;
                background-color: #fff;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                border-radius: 10px;
                overflow: hidden;
                z-index: 10;
                /* Pastikan angka cukup besar */
                position: relative;
            }
    
            .navigation ul {
                list-style: none;
                padding: 0;
                margin: 0;
                display: flex;
                justify-content: space-around;
            }
    
            .navigation ul li {
                flex: 1;
                text-align: center;
            }
    
            .navigation ul li a {
                display: block;
                padding: 15px;
                text-decoration: none;
                color: #333;
                font-size: 18px;
            }
    
            .navigation ul li a:hover {
                background-color: #f4f4f4;
            }
    
            .logout-icon {
                position: absolute;
                top: 10px;
                right: 20px;
                display: flex;
                flex-direction: column;
                align-items: center;
                gap: 10px;
                /* Jarak antara logout dan profile */
            }
    
            .logout-icon a {
                font-size: 20px;
                color: #333;
                text-decoration: none;
                transition: color 0.3s ease;
            }
    
            .logout-icon a:hover {
                color: #555;
            }
    
            .logout-icon .profile-icon {
                font-size: 25px;
                /* Icon Profile lebih besar */
            }
    
            footer {
                margin-top: 50px;
                text-align: center;
                padding: 10px 0;
                background-color: #fff;
                box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
                width: 100%;
            }
    
            footer p {
                margin: 0;
                color: #777;
                font-size: 14px;
            }
    
        </style>
    
        @yield('style')
    </head>
<body>
    <header>
        <div class="container">
            <div class="profile-header">
                {{-- <img src="{{ asset('storage/'.$biodata->foto) }}" alt="Profile picture"> --}}
                <h2>{{ Auth::user()->nama }}</h2>
                <p>{{ Auth::user()->email }}</p>
            </div>
            <div class="navigation">
                <ul>
                    <li>
                        <a href="{{ route('home.user') }}">
                            <i class="fas fa-home"></i>
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('laporan.user') }}">
                            <i class="fas fa-file"></i>
                            Laporan
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('form.mutabaah') }}">
                            <i class="fas fa-edit"></i>
                            Form Mutabaah
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('user.mutabaah', ['slug' => $slug ?? 'default-slug']) }}">
                            <i class="fas fa-table"></i>
                            Mutabaah
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('profile.user') }}">
                            <i class="fas fa-user"></i>
                            Profile
                        </a>
                    </li>
                </ul>
            </div>
            <div class="logout-icon">
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt"></i>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>

                  <!-- Profile Icon -->
    {{-- <a href="{{ route('profile.user') }}" class="profile-icon">
        <i class="fas fa-user-circle"></i>
    </a> --}}
            </div>        
        </div>  
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <p>&copy; 2024 MyMutabaah. All rights reserved.</p>
    </footer>

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script> --}}

</body>
</html>
