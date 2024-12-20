<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SurahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $surahs = [
            'Al-Fatihah',
            'Al-Baqarah',
            'Ali Imran',
            'An-Nisa',
            'Al-Ma’idah',
            'Al-An’am',
            'Al-A’raf',
            'Al-Anfal',
            'At-Taubah',
            'Yunus',
            'Hud',
            'Yusuf',
            'Ar-Ra’d',
            'Ibrahim',
            'Al-Hijr',
            'An-Nahl',
            'Al-Isra',
            'Al-Kahf',
            'Maryam',
            'Taha',
            'Al-Anbiya',
            'Al-Hajj',
            'Al-Mu’minun',
            'An-Nur',
            'Al-Furqan',
            'Ash-Shu’ara',
            'An-Naml',
            'Al-Qasas',
            'Al-Ankabut',
            'Ar-Rum',
            'Luqman',
            'As-Sajdah',
            'Al-Ahzab',
            'Saba’',
            'Fatir',
            'Ya-Sin',
            'As-Saffat',
            'Sad',
            'Az-Zumar',
            'Ghafir',
            'Fussilat',
            'Asy-Syura',
            'Az-Zukhruf',
            'Ad-Dukhan',
            'Al-Jatsiyah',
            'Al-Ahqaf',
            'Muhammad',
            'Al-Fath',
            'Al-Hujurat',
            'Qaf',
            'Adz-Dzariyat',
            'At-Tur',
            'An-Najm',
            'Al-Qamar',
            'Ar-Rahman',
            'Al-Waqi’ah',
            'Al-Hadid',
            'Al-Mujadilah',
            'Al-Hashr',
            'Al-Mumtahanah',
            'As-Saff',
            'Al-Jumu’ah',
            'Al-Munafiqun',
            'At-Taghabun',
            'At-Talaq',
            'At-Tahrim',
            'Al-Mulk',
            'Al-Qalam',
            'Al-Haqqa',
            'Al-Ma’arij',
            'Nuh',
            'Al-Jinn',
            'Al-Muzzammil',
            'Al-Muddassir',
            'Al-Qiyamah',
            'Al-Insan',
            'Al-Mursalat',
            'An-Naba',
            'An-Nazi’at',
            'Abasa',
            'At-Takwir',
            'Al-Infithar',
            'Al-Mutaffifin',
            'Al-Insyiqaq',
            'Al-Buruuj',
            'At-Thariq',
            'Al-A’la',
            'Al-Ghashiyah',
            'Al-Fajr',
            'Al-Balad',
            'Asy-Syams',
            'Al-Lail',
            'Ad-Duha',
            'Asy-Syarh',
            'At-Tin',
            'Al-Alaq',
            'Al-Qadr',
            'Al-Bayyinah',
            'Az-Zalzalah',
            'Al-’Adiyat',
            'Al-Qari’ah',
            'At-Takatsur',
            'Al-’Asr',
            'Al-Humazah',
            'Al-Fil',
            'Quraish',
            'Al-Ma’un',
            'Al-Kautsar',
            'Al-Kafirun',
            'An-Nasr',
            'Al-Lahab',
            'Al-Ikhlas',
            'Al-Falaq',
            'An-Nas'
        ];

        foreach ($surahs as $surah) {
            DB::table('surah')->insert(['surah' => $surah]);
        }
    }
}
