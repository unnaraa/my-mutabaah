{{-- {{ dd($videop) }} --}}

<html>
<head>
    <title>My Mutabaah</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&amp;family=Roboto:wght@400&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('front/css/ini.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-F9uk3XeDNqj/JsyuoecdoDvoUwKYQQXP6vNxyUFD/OK9l0RpJ5H9u1BpQoCjZ1aXhvzqCPgkCsdvjZ9BUWqvg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <nav>
        <div class="navbar">
            <img alt="Company logo" height="70" src="{{ asset('front/IMG/logo.png') }}" width="70" />
            <div class="hamburger" onclick="toggleMenu()">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="navbar-center" id="menu">
                <a href="#">HOME</a>
                <a href="#">TENTANG</a>
                <div class="dropdown">
                    <a class="dropbtn" href="#">FITUR</a>
                    <div class="dropdown-content">
                        <a href="{{ route('myartikel') }}">ARTIKEL</a>
                        <a href="#">VIDEO</a>
                        <a href="{{ route('mymurottal')}}">MUROTTAL</a>
                    </div>
                </div>
                <a href="#">KONTAK</a>
            </div>
            <div class="navbar-right">
                @guest
                    <div class="dropdown">
                        <img 
                            alt="Profile logo" 
                            height="40" 
                            src="{{ asset('front/IMG/profile.png') }}" 
                            width="40" 
                            class="dropbtn" 
                            onclick="toggleDropdown('guest-dropdown')" 
                            style="cursor: pointer;"
                        />
                        <div id="guest-dropdown" class="dropdown-content" style="display: none;">
                            <a href="{{ route('login') }}">LOGIN</a>
                            <a href="{{ route('register') }}">REGIS</a>
                        </div>
                    </div>
                @endguest
    
                @auth
                    <div class="dropdown">
                        <img 
                            alt="Profile logo" 
                            height="40" 
                            src="{{ asset('front/IMG/profile.png') }}" 
                            width="40" 
                            class="dropbtn" 
                            onclick="toggleDropdown('user-dropdown')" 
                            style="cursor: pointer;"
                        />
                        <a>{{ Auth::user()->name }}</a>
                        <div id="user-dropdown" class="dropdown-content" style="display: none;">
                            <a href="{{ route('mutabaah') }}">Profile</a>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>
                @endauth
            </div>
        </div>
    </nav>
    
    

    <!-- Home -->
    <section id="home" class="home">
        <div class="content">
            <h1>Ahlan wa Sahlan</h1>
            <p>Selamat Datang di Website My Mutabaah <br> Kami Siap Menjadi Sahabat Menghafal Al-Qur'an mu!</p>
            
        </div>
    </section>

    <!-- About -->
    <section class="about-section">
        <div class="about-content">
            <h2>Mengapa Memilih Website Ini?</h2>
            <p>
                Website ini dirancang khusus untuk memberikan pengalaman yang lebih mudah dalam menghafal dan memahami Al-Qur'an. Kami menawarkan fitur 
                unggulan yang akan mendampingi Anda setiap langkah dalam perjalanan spiritual, seperti artikel inspiratif, video edukasi, audio murottal berkualitas, 
                serta panduan tentang keamanan data pribadi.
            </p>
            <p>
                Bergabunglah dengan kami dan nikmati berbagai manfaat dalam menjaga hafalan, memperdalam pemahaman Al-Qur'an, serta meningkatkan kualitas ibadah Anda. 
                Kami berkomitmen untuk menjadi mitra yang dapat diandalkan dalam setiap aspek pembelajaran agama.
            </p>
        </div>
        <div class="about-image">
            <img src="{{ asset('front/IMG/al-quran_3D-removebg-preview.png') }}" alt="Logo Al-Qur'an 3D" />
        </div>
    </section>
    
    
    <!-- fitur -->
     <section class="fitur">
        <h2>Fitur Unggulan</h2>
        <div class="features-grid">
            <div class="feature-card" onmouseover="animateCard(this)" onmouseout="resetCard(this)">
                <i class="icon">📚</i>
                <h3>Artikel Inspiratif</h3>
                <p>Kumpulan artikel yang membimbing perjalanan hafalan Anda.</p>
            </div>
            <div class="feature-card" onmouseover="animateCard(this)" onmouseout="resetCard(this)">
                <i class="icon">🎥</i>
                <h3>Video Pendukung</h3>
                <p>Video berkualitas untuk memahami dan menghafal Al-Qur'an.</p>
            </div>
            <div class="feature-card" onmouseover="animateCard(this)" onmouseout="resetCard(this)">
                <i class="icon">🎧</i>
                <h3>Audio Murottal</h3>
                <p>Dengarkan bacaan Al-Qur'an dari qari terbaik.</p>
            </div>
            <div class="feature-card" onmouseover="animateCard(this)" onmouseout="resetCard(this)">
                <i class="icon">🛡️</i>
                <h3>Data Safety</h3>
                <p>Keamanan data Anda adalah prioritas kami.</p>
            </div>
        </div>
    </section>
    

     <!-- ARTIKEL -->
     <section class="artikel">
        <h2 class="section-title">Artikel Inspiratif</h2>
        <p class="section-description">Jelajahi berbagai artikel menarik untuk mendukung perjalanan hafalan Anda.</p>
        <div class="slider">
            <button class="nav-button left" onclick="slideLeft()">❮</button>
            <div class="slider-container">
                <!-- Kartu Artikel -->
                <div class="card">
                    <img alt="" src="https://i.pinimg.com/236x/fd/e3/27/fde327718bd25521706dff36e47d9d4d.jpg" />
                    <div class="card-content">
                        <div class="card-subtitle">Rumaysho.com</div>
                        <div class="card-title">Inilah Keutamaan Luar Biasa Penghafal Al-Qur’an</div>
                        <a class="card-button" href="https://rumaysho.com/37174-inilah-keutamaan-luar-biasa-penghafal-al-quran-di-surga.html">Baca<i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="card">
                    <img alt="" src="https://i.pinimg.com/736x/df/25/98/df2598a479cc55a9dba6076860bffa90.jpg" />
                    <div class="card-content">
                        <div class="card-subtitle">.com</div>
                        <div class="card-title">Inilah Keutamaan Luar Biasa Penghafal Al-Qur’an</div>
                        <a class="card-button" href="https://rumaysho.com/37174-inilah-keutamaan-luar-biasa-penghafal-al-quran-di-surga.html">Baca<i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="card">
                    <img alt="" src="https://i.pinimg.com/736x/a8/24/2d/a8242dbbaf9c77ed161ea195265dcb0f.jpg" />
                    <div class="card-content">
                        <div class="card-subtitle">Rumaysho.com</div>
                        <div class="card-title">Inilah Keutamaan Luar Biasa Penghafal Al-Qur’an</div>
                        <a class="card-button" href="https://rumaysho.com/37174-inilah-keutamaan-luar-biasa-penghafal-al-quran-di-surga.html">Baca<i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="card">
                    <img alt="" src="https://i.pinimg.com/736x/02/95/a4/0295a443ae784d2048f5b7a904d9fd65.jpg" />
                    <div class="card-content">
                        <div class="card-subtitle">Rumaysho.com</div>
                        <div class="card-title">Inilah Keutamaan Luar Biasa Penghafal Al-Qur’an</div>
                        <a class="card-button" href="https://rumaysho.com/37174-inilah-keutamaan-luar-biasa-penghafal-al-quran-di-surga.html">Baca<i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="card">
                    <img alt="" src="https://i.pinimg.com/736x/d9/cb/c7/d9cbc724f6d54215667d6ad2e94f2e10.jpg" />
                    <div class="card-content">
                        <div class="card-subtitle">Rumaysho.com</div>
                        <div class="card-title">Inilah Keutamaan Luar Biasa Penghafal Al-Qur’an</div>
                        <a class="card-button" href="https://rumaysho.com/37174-inilah-keutamaan-luar-biasa-penghafal-al-quran-di-surga.html">Baca<i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <button class="nav-button right" onclick="slideRight()">❯</button>
        </div>
        <div>
            <a href="{{ route('myartikel') }}">
            <button class="btn">
                <i class="animation"></i>Lihat lainnya<i class="animation"></i>
            </button>
        </a>
        </div>
    </section>
    
{{-- <section class="section">
    <div class="container py-5">
        <h2 class="text-center">Artikel Pilihan</h2>
        <div class="row">
            @foreach($artikel as $item)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('storage/'.$item->img) }}" class="card-img-top" alt="{{ $item->judul }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->judul }}</h5>
                            <p class="card-text">{{ \Str::limit($item->konten, 100) }}</p>
                            <a href="{{ route('artikel.show', $item->id) }}" class="btn btn-primary">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section> --}}


    <!-- VIDEO -->
    <section id="video-section">
        <h2 class="section-title">Video Pendukung</h2>
        <p class="section-description">Temukan berbagai video berkualitas untuk membantu hafalan dan pemahaman Al-Qur'an.</p>
        
        <!-- Video Grid Container -->
        <div class="video-grid">
           <div class="video-card" data-video="https://www.youtube.com/embed/Fj8GQ2wenqI?si=OuwwOJu7uKnWP18k">
            <img src="https://img.youtube.com/vi/Fj8GQ2wenqI/hqdefault.jpg" alt="Video Thumbnail" />
            <h3>Rahasia Hafalan Kuat</h3>
            <button class="play-btn">Tonton</button>
        </div>
        <div class="video-card" data-video="https://www.youtube.com/embed/fTZUuGwk4Z8">
            <img src="https://img.youtube.com/vi/fTZUuGwk4Z8/hqdefault.jpg" alt="Video Thumbnail" />
            <h3>Tips Menghafal</h3>
            <button class="play-btn">Tonton</button>
        </div>
        <div class="video-card" data-video="https://www.youtube.com/embed/OWDPzNGdoKc">
            <img src="https://img.youtube.com/vi/OWDPzNGdoKc/hqdefault.jpg" alt="Video Thumbnail" />
            <h3>Metode Ulama Dalam Menghafal</h3>
            <button class="play-btn">Tonton</button>
        </div>
        </div>
        {{-- <div class="video-grid">
            @foreach ($videop as $video)
            <div class="video-card" data-video="{{ $video->link }}">
                <img src="{{ $video->img }}" alt="Video Thumbnail" />
                <h3>{{ $video->judul }}</h3>
                <button class="play-btn">Tonton</button>
            </div>
            @endforeach
        </div> --}}
        
        <!-- Popup for Video -->
        <div class="video-popup" id="videoPopup">
            <div class="popup-content">
                <span class="close-btn">&times;</span>
                <iframe id="videoFrame" src="" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </section>
    

    <!-- Murottal -->
    <section class="audio-section">
        <h2>Murottal Pilihan</h2>
        <p class="section-description">
            Dengarkan lantunan indah ayat-ayat suci Al-Qur'an dari qari pilihan. 
            Fitur ini dirancang untuk menemani perjalanan ibadah Anda dan membantu memperdalam cinta terhadap Al-Qur'an.
        </p>
        <div class="audio-list">
            <div class="audio-card">
                <h3>Surah Al-Fatihah</h3>
                <p>Qari: Sheikh Mishary Rasyid Alafasy</p>
                <audio id="audio1" src="{{ asset('front/murottal/001.mp3') }}"></audio>
                <button onclick="togglePlayPause('audio1', this)">▶️ Play</button>
            </div>
            <div class="audio-card">
                <h3>Surah Al-Baqarah</h3>
                <p>Qari: Sheikh Mishary Rasyid Alafasy</p>
                <audio id="audio2" src="{{ asset('front/murottal/002.mp3') }}"></audio>
                <button onclick="togglePlayPause('audio2', this)">▶️ Play</button>
            </div>
            <div class="audio-card">
                <h3>Surah Al-Kahf</h3>
                <p>Qari: Sheikh Abdul Basit</p>
                <audio id="audio3" src="{{ asset('front/murottal/018.mp3') }}"></audio>
                <button onclick="togglePlayPause('audio3', this)">▶️ Play</button>
            </div>
        </div> <br>
        <div>
            <a href="{{ route('mymurottal') }}">
            <button class="btn">
                <i class="animation"></i>Dengar Murottal lainnya<i class="animation"></i>
            </button>
        </a>
        </div>
    </section>
    
    {{-- Join --}}

    <section class="join-section">
        <div class="join-content">
            <h2>Gabung Bersama Kami</h2>
            <p>Jadilah bagian dari komunitas yang bersemangat dalam menghafal dan memahami Al-Qur'an. Dapatkan akses ke berbagai fitur inspiratif dan dukungan untuk memperkuat hafalan Anda.</p>
            <a href="{{ route('register') }}"><button class="join-btn" id="joinNow">Daftar Sekarang</button></a>
        </div>
        <div class="join-image">
            <img src="{{ asset('front/IMG/alquran-bg-removebg-preview.png') }}" alt="" />
        </div>
    </section>
    
    

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <p>&copy; 2024 MyMutabaah. All rights reserved.</p>
            <a 
                href="https://wa.me/6282190545220" 
                target="_blank" 
                class="whatsapp-btn">
                <i class="fab fa-whatsapp"></i>
                 Chat via WhatsApp
            </a>
        </div>
    </footer>
    

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="{{ asset('front/JS/ini.js') }}"></script>

</body>
</html>