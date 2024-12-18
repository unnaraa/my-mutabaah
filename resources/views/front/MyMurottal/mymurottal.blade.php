<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Murottal</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .track-list li:hover .play-icon {
            opacity: 1;
        }
        .play-icon {
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        .playing .play-icon {
            opacity: 1;
        }
    </style>
</head>
<body class="bg-gray-100">
    <header class="bg-teal-500 p-4 flex justify-between items-center">
        <div class="flex items-center">
            <a href="{{ route('home') }}" class="text-white text-2xl">
                <i class="fas fa-home"></i>
            </a>
        </div>
        <h1 class="justify-items-center text-white text-3xl mb-4 font-extrabold">My Murottal</h1>
        <div class="flex items-center space-x-4">
            <a href="https://quran.com/" target="_blank" class="text-white text-2xl">
                <i class="fas fa-book"></i>
            </a>
        </div>
    </header>
    <main class="bg-teal-500 py-8">
        <div class="container mx-auto text-center">
            <h1 class="text-white text-3xl mb-4">Mishary Bin Rashid Alafasy</h1>
            <button id="shuffle" class="bg-white text-teal-500 px-4 py-2 rounded-full">Putar Selanjutnya</button>
        </div>
    </main>
    <section class="container mx-auto mt-8">
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
             {{-- <!-- Input Search -->
             <div class="mb-4">
                <input 
                    type="text" 
                    id="search-bar" 
                    placeholder="Cari Surat..." 
                    class="w-full border border-gray-300 rounded-lg px-4 py-2"
                />
            </div> --}}
        <!-- Daftar Track -->
            <ul class="track-list">
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/001.mp3') }}" data-duration="">
                    <span>1. Surat Al-Fatihah</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/002.mp3') }}" data-duration="">
                    <span>2. Surat Al-Baqarah</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/003.mp3') }}" data-duration="">
                    <span>3. Surat Ali 'Imran</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/004.mp3') }}" data-duration="">
                    <span>4. Surat An-Nisa'</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/005.mp3') }}" data-duration="">
                    <span>5. Surat Al-Maidah</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/006.mp3') }}" data-duration="">
                    <span>6. Surat Al-An-An'am</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/007.mp3') }}" data-duration="">
                    <span>7. Surat Al-A'raf</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/008.mp3') }}" data-duration="">
                    <span>8. Surat Al-Anfal</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/009.mp3') }}" data-duration="">
                    <span>9. Surat At-Taubah</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/010.mp3') }}" data-duration="">
                    <span>10. Surat Hud</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/011.mp3') }}" data-duration="">
                    <span>11. Surat Yunus</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/012.mp3') }}" data-duration="">
                    <span>12. Surat Yusuf</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/013.mp3') }}" data-duration="">
                    <span>13. Surat Ar-Ra’d</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/014.mp3') }}" data-duration="">
                    <span>14. Surat Ibrahim</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/015.mp3') }}" data-duration="">
                    <span>15. Surat Al-Hijr </span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/016.mp3') }}" data-duration="">
                    <span>16. Surat An-Nahl </span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/017.mp3') }}" data-duration="">
                    <span>17. Surat Al-Isra'</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/018.mp3') }}" data-duration="">
                    <span>18. Surat Al-Kahfi</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/019.mp3') }}" data-duration="">
                    <span>19. Surat Maryam</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/020.mp3') }}" data-duration="">
                    <span>20. Surat Thaha</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/021.mp3') }}" data-duration="">
                    <span>21. Surat Al-Anbiya'</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/022.mp3') }}" data-duration="">
                    <span>22. Surat Al-Hajj</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/023.mp3') }}" data-duration="">
                    <span>23. Surat Al-Mu'minun</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/024.mp3') }}" data-duration="">
                    <span>24. Surat An-Nur</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/025.mp3') }}" data-duration="">
                    <span>25. Surat Al-Furqon</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/026.mp3') }}" data-duration="">
                    <span>26. Surat Asy-Syu'ara</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/027.mp3') }}" data-duration="">
                    <span>27. Surat An-Naml</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/028.mp3') }}" data-duration="">
                    <span>28. Surat Al-Qasas</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/029.mp3') }}" data-duration="">
                    <span>29. Surat Al-Ankabut</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/030.mp3') }}" data-duration="">
                    <span>30. Surat Ar-Rum</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/031.mp3') }}" data-duration="">
                    <span>31. Surat Luqman</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/032.mp3') }}" data-duration="">
                    <span>32. Surat As-Sajdah</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/033.mp3') }}" data-duration="">
                    <span>33. Surat Al-Ahzab</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/034.mp3') }}" data-duration="">
                    <span>34. Surat Saba'</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/035.mp3') }}" data-duration="">
                    <span>35. Surat Fathir</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/036.mp3') }}" data-duration="">
                    <span>36. Surat Ya Sin</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/037.mp3') }}" data-duration="">
                    <span>37. Surat Ash-Shaffat</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/038.mp3') }}" data-duration="">
                    <span>38. Surat Shad</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/039.mp3') }}" data-duration="">
                    <span>39. Surat Az-Zumar</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/040.mp3') }}" data-duration="">
                    <span>40. Surat Ghafir</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/041.mp3') }}" data-duration="">
                    <span>41. Surat Fushshilat</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/042.mp3') }}" data-duration="">
                    <span>42. Surat Asy-Syura</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/043.mp3') }}" data-duration="">
                    <span>43. Surat Az-Zukhruf</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/044.mp3') }}" data-duration="">
                    <span>44. Surat Ad-Dukhan</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/045.mp3') }}" data-duration="">
                    <span>45. Surat Al-Jatsiyah</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/046.mp3') }}" data-duration="">
                    <span>46. Surat Al-Ahqaf</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/047.mp3') }}" data-duration="">
                    <span>47. Surat Muhammad</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/048.mp3') }}" data-duration="">
                    <span>48. Surat Al-Fath</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/049.mp3') }}" data-duration="">
                    <span>49. Surat Al-Hujurat</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/050.mp3') }}" data-duration="">
                    <span>50. Surat Qaf</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/051.mp3') }}" data-duration="">
                    <span>51. Surat Adz-Dzariyat</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/052.mp3') }}" data-duration="">
                    <span>52. Surat Ath-Thur</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/053.mp3') }}" data-duration="">
                    <span>53. Surat An-Najm</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/054_mishary_qamar.mp3') }}" data-duration="">
                    <span>54. Surat Al-Qamar</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/055_mishary_rahman.mp3') }}" data-duration="">
                    <span>55. Surat Ar-Rahman</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/056.mp3') }}" data-duration="">
                    <span>56. Surat Al-Waqi'ah</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/057_mishary_hadeed.mp3') }}" data-duration="">
                    <span>57. Surat Al-Hadid</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/058_mishary_mujadila.mp3') }}" data-duration="">
                    <span>58. Surat Al-Mujadilah</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/059_mishary_hashr.mp3') }}" data-duration="">
                    <span>59. Surat Al-Hasyr</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/060_mishary_mumtahana.mp3') }}" data-duration="">
                    <span>60. Surat Al-Mumtanah</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/061_mishary_saff.mp3') }}" data-duration="">
                    <span>61. Surat Ash-Shaf</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/062.mp3') }}" data-duration="">
                    <span>62. Surat Al-Jumu'ah</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/063_mishary_munafiqoon.mp3') }}" data-duration="">
                    <span>63. Surat Al-Munafiqun</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/064_mishary_taghabon.mp3') }}" data-duration="">
                    <span>64. Surat Ath-Thaghabun</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/065_mishary_talaq.mp3') }}" data-duration="">
                    <span>65. Surat Ath-Thalaq</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/066_mishary_tahreem.mp3') }}" data-duration="">
                    <span>66. Surat At-Tahrim</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/067_mishary_mulk.mp3') }}" data-duration="">
                    <span>67. Surat Al-Mulk</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/068_mishary_qalam.mp3') }}" data-duration="">
                    <span>68. Surat Al-Qalam</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/069_mishary_haaqa.mp3') }}" data-duration="">
                    <span>69. Surat Al-Haqqah</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/070.mp3') }}" data-duration="">
                    <span>70. Surat Al-Ma'arij</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/071_mishary_nooh.mp3') }}" data-duration="">
                    <span>71. Surat Nuh</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/072_mishary_jinn.mp3') }}" data-duration="">
                    <span>72. Surat Al-Jin</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/073_mishary_muzzamil.mp3') }}" data-duration="">
                    <span>73. Surat Al-Muzammil</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/074_mishary_muddathir.mp3') }}" data-duration="">
                    <span>74. Surat Al-Muddatstsir</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/075_mishary_qiyama.mp3') }}" data-duration="">
                    <span>75. Surat Al-Qiyamah</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/076_mishary_insaan.mp3') }}" data-duration="">
                    <span>76. Surat Al-Insan</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/077_mishary_mursalat.mp3') }}" data-duration="">
                    <span>77. Surat Al-Mursalat </span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/078.mp3') }}" data-duration="">
                    <span>78. Surat An-Naba'</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/079.mp3') }}" data-duration="">
                    <span>79. Surat An-Nazi'at</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/080_mishary_abas.mp3') }}" data-duration="">
                    <span>80. Surat Abasa</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/081_mishary_takweer.mp3') }}" data-duration="">
                    <span>81. Surat At-Takwir </span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/082_mishary_infitar.mp3') }}" data-duration="">
                    <span>82. Surat Al-Infithar</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/083_mishary_mutafifeen.mp3') }}" data-duration="">
                    <span>83. Surat Al-Muthaffifin</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/084_mishary_inshiqaq.mp3') }}" data-duration="">
                    <span>84. Surat Al-Insyiqaq </span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/085_mishary_burooj.mp3') }}" data-duration="">
                    <span>85. Surat Al-Buruj</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/086_mishary_tariq.mp3') }}" data-duration="">
                    <span>86. Surat Ath-Thariq</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/087.mp3') }}" data-duration="">
                    <span>87. Surat Al-A’laa</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/088_mishary_ghashiya.mp3') }}" data-duration="">
                    <span>88. Surat Al-Ghasyiyah</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/089_mishary_fajr.mp3') }}" data-duration="">
                    <span>89. Surat Al-Fajr</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/090_mishary_balad.mp3') }}" data-duration="">
                    <span>90. Surat Al-Balad</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/091_mishary_shams.mp3') }}" data-duration="">
                    <span>91. Surat Asy-Syams </span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/092_mishary_layl.mp3') }}" data-duration="">
                    <span>92. Surat Al-Lail </span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/093_mishary_dhuha.mp3') }}" data-duration="">
                    <span>93. Surat Adh-Dhuha</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/094_mishary_sharh.mp3') }}" data-duration="">
                    <span>94. Surat Al-Insyirah</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/095_mishary_teen.mp3') }}" data-duration="">
                    <span>95. Surat At-Tin</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/096_mishary_alaq.mp3') }}" data-duration="">
                    <span>96. Surat Al-'Alaq</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/097_mishary_qadr.mp3') }}" data-duration="">
                    <span>97. Surat Al-Qadr</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/098_mishary_bayyina.mp3') }}" data-duration="">
                    <span>98. Surat Al-Bayyinah</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/099_mishary_zalzala.mp3') }}" data-duration="">
                    <span>99. Surat Al-Zalzalah</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/100_mishary_aadiyat.mp3') }}" data-duration="">
                    <span>100. Surat Al-'Adiyat </span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/101.mp3') }}" data-duration="">
                    <span>101. Surat Al-Qari'ah</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/102.mp3') }}" data-duration="">
                    <span>102. Surat At-Takatsur </span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/103.mp3') }}" data-duration="">
                    <span>103. Surat Al-'Ashr</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/104.mp3') }}" data-duration="">
                    <span>104. Surat Al-Humazah</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/105.mp3') }}" data-duration="">
                    <span>105. Surat Al-Fil</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/106.mp3') }}" data-duration="">
                    <span>106. Surat Quraysh</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/107.mp3') }}" data-duration="">
                    <span>107. Surat Al-Ma'un </span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/108.mp3') }}" data-duration="">
                    <span>108. Surat Al-Kautsar</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/109.mp3') }}" data-duration="">
                    <span>109. Surat Al-Kafirun</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/110.mp3') }}" data-duration="">
                    <span>110. Surat An-Nashr</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/111.mp3') }}" data-duration="">
                    <span>111. Surat Al-Lahab</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/112.mp3') }}" data-duration="">
                    <span>112. Surat Al-Ikhlas</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/113.mp3') }}" data-duration="">
                    <span>113. Surat Al-Falaq</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
                <li class="p-4 border-b flex justify-between items-center cursor-pointer" data-src="{{ asset('front/murottal/114.mp3') }}" data-duration="">
                    <span>114. Surat An-Nas</span>
                    <i class="fas fa-play play-icon text-teal-500 text-lg"></i>
                </li>
            </ul>
        </div>
    </section>
    <footer class="fixed bottom-0 left-0 right-0 bg-white shadow-md p-4 flex justify-between items-center">
        <div class="text-gray-800 font-semibold" id="track-title"></div>
        <div class="flex flex-col items-center">
            <div class="flex items-center space-x-4">
                <button id="prev" class="text-teal-500 text-2xl">
                    <i class="fas fa-step-backward"></i>
                </button>
                <button id="play" class="text-teal-500 text-2xl">
                    <i class="fas fa-play"></i>
                </button>
                <button id="next" class="text-teal-500 text-2xl">
                    <i class="fas fa-step-forward"></i>
                </button>
            </div>
        </div>
        <div class="text-gray-500 text-sm" id="current-time">
            <span id="elapsed-time">00:00</span> / <span id="total-duration">00:00</span>
        </div>
    </footer>
    

    {{-- <script>
        const searchBar = document.getElementById('search-bar');
        const trackList = document.getElementById('track-list');
        const tracks = trackList.querySelectorAll('li');

        // Fungsi untuk menangani pencarian
        searchBar.addEventListener('input', function() {
            const query = this.value.toLowerCase(); // Ambil input pencarian dan ubah ke lowercase
            tracks.forEach(track => {
                const trackName = track.querySelector('span').textContent.toLowerCase();
                if (trackName.includes(query)) {
                    track.style.display = 'flex'; // Tampilkan track yang sesuai dengan query
                } else {
                    track.style.display = 'none'; // Sembunyikan track yang tidak sesuai dengan query
                }
            });
        });
    </script> --}}
    <script>
        const playButton = document.getElementById('play');
        const prevButton = document.getElementById('prev');
        const nextButton = document.getElementById('next');
        const shuffleButton = document.getElementById('shuffle');
        const trackList = document.querySelectorAll('.track-list li');
        const trackTitle = document.getElementById('track-title');
        const currentTimeDisplay = document.getElementById('current-time');
        const elapsedTime = document.getElementById('elapsed-time');
        const totalDuration = document.getElementById('total-duration');
    
        let currentTrackIndex = 0;
        let audio = new Audio(trackList[currentTrackIndex].dataset.src);
    
        function updateTrackInfo() {
            const track = trackList[currentTrackIndex];
            trackTitle.textContent = track.textContent.trim();
            trackList.forEach(t => t.classList.remove('playing'));
            track.classList.add('playing');
    
            // Set total duration after metadata is loaded
            audio.addEventListener('loadedmetadata', () => {
                totalDuration.textContent = formatTime(audio.duration);
            });
        }
    
        function playAudio() {
            if (audio.paused) {
                audio.play();
                playButton.innerHTML = '<i class="fas fa-pause"></i>';
            } else {
                audio.pause();
                playButton.innerHTML = '<i class="fas fa-play"></i>';
            }
        }
    
        function loadTrack(index) {
            audio.pause();
            audio = new Audio(trackList[index].dataset.src);
            currentTrackIndex = index;
            updateTrackInfo();
            playAudio();
    
            // Update elapsed time as audio plays
            audio.addEventListener('timeupdate', updateElapsedTime);
        }
    
        function updateElapsedTime() {
            elapsedTime.textContent = formatTime(audio.currentTime);
        }
    
        function nextTrack() {
            currentTrackIndex = (currentTrackIndex + 1) % trackList.length;
            loadTrack(currentTrackIndex);
        }
    
        function prevTrack() {
            currentTrackIndex = (currentTrackIndex - 1 + trackList.length) % trackList.length;
            loadTrack(currentTrackIndex);
        }
    
        function shufflePlay() {
            currentTrackIndex = Math.floor(Math.random() * trackList.length);
            loadTrack(currentTrackIndex);
        }
    
        function formatTime(seconds) {
            const mins = Math.floor(seconds / 60);
            const secs = Math.floor(seconds % 60);
            return `${mins}:${secs.toString().padStart(2, '0')}`;
        }
    
        playButton.addEventListener('click', playAudio);
        prevButton.addEventListener('click', prevTrack);
        nextButton.addEventListener('click', nextTrack);
        shuffleButton.addEventListener('click', shufflePlay);
    
        trackList.forEach((track, index) => {
            track.addEventListener('click', () => loadTrack(index));
        });
    
        audio.addEventListener('ended', nextTrack);
    </script>
    
</body>
</html>
