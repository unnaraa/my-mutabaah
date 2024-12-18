@extends('user.index')

@section('style')
<style>
    .home-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}
.welcome {
    text-align: center;
    margin-bottom: 30px;
}
.welcome h1 {
    font-size: 32px;
    color: #333;
}
.welcome p {
    font-size: 18px;
    color: #666;
}
.stats {
    display: flex;
    justify-content: space-around;
    margin-bottom: 30px;
}
.stat-item {
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;
    width: 25%;
}
.stat-item h2 {
    font-size: 28px;
    margin: 10px 0;
    color: #444;
}
.stat-item p {
    font-size: 16px;
    color: #777;
}
.articles {
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin-bottom: 30px;
}
.articles h3 {
    font-size: 24px;
    color: #333;
    margin-bottom: 15px;
}
.articles ul {
    list-style: none;
    padding: 0;
    margin: 0;
}
.articles ul li {
    padding: 10px 0;
    border-bottom: 1px solid #eee;
}
.articles ul li:last-child {
    border-bottom: none;
}
.articles ul li a {
    text-decoration: none;
    color: #007bff;
    font-size: 18px;
}
.articles ul li a:hover {
    text-decoration: underline;
}
.quote {
    background-color: #eef6ff;
    padding: 20px;
    border-radius: 10px;
    text-align: center;
    font-style: italic;
    color: #555;
}
</style>
@endsection

@section('content')
<div class="home-container">
    <div class="welcome">
        <h1>Selamat Datang di MyMutabaah</h1>
        <p>Platform terbaik untuk membantu Anda menjaga hafalan Al-Qur'an dan meningkatkan ibadah.</p>
    </div>
    <div class="articles">
        <h3>Artikel Terbaru</h3>
        <ul>
            <li><a href="#">5 Tips Menghafal Al-Qur'an dengan Mudah</a></li>
            <li><a href="#">Keutamaan Membaca Al-Qur'an di Waktu Fajar</a></li>
            <li><a href="#">Cara Efektif Menjaga Hafalan</a></li>
        </ul>
    </div>
    <div class="quote">
        "Barangsiapa membaca satu huruf dari Kitab Allah, maka ia akan mendapatkan satu kebaikan, dan satu kebaikan itu dilipatgandakan menjadi sepuluh." <br> <strong>(HR. At-Tirmidzi)</strong>
    </div>
</div>
@endsection