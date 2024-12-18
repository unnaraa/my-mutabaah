<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terima Kasih</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
            text-align: center;
            padding: 20px;
        }
        .button {
            padding: 10px 20px;
            background-color: #4CAF50; /* Hijau */
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            font-size: 16px;
            margin-top: 20px;
        }
        .button:hover {
            background-color: #45a049;
        }
        img {
            margin-bottom: 20px;
  max-width: 700px;
  animation: float 3s ease-in-out infinite;
}

@keyframes float {
  0%, 100% {
      transform: translateY(0);
  }
  50% {
      transform: translateY(-10px);
  }
}
    </style>
</head>
<body>
    <h1>Terima Kasih!</h1>
    <p>Terima kasih sudah bergabung dengan kami dalam website myMutabaah. Silahkan mengisi data diri dengan lengkap!</p>
    <img src="{{ asset('front/IMG/alquran-bg-removebg-preview.png') }}" alt="" />
    
    <a href="{{route('form.profile')}}" class="button">Isi Data Diri</a>
</body>
</html>