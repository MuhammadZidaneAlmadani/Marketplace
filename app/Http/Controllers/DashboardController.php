<?php  

namespace App\Http\Controllers;  

use Illuminate\Http\Request;  

class DashboardController extends Controller  
{  
    public function index()  
    {  
        $infoCards = [  
            [
                'title' => 'Kasus Darurat',
                'description' => 'Kami siap mendukung usaha Anda dengan cepat, bahkan dalam Kasus Darurat. Solusi Pemasaran Berkualitas dan Inovasi untuk Masyarakat adalah prioritas kami.',
                'link' => '#',
            ],
            [
                'title' => 'Jadwal Karyawan',
                'description' => 'Dengan manajemen Jadwal Karyawan yang efektif, kami memastikan layanan kami selalu optimal untuk Anda.',
                'link' => '#',
            ],
            [
                'title' => 'Jam Buka',
                'description' => 'Senin - Kamis: 07:00 - 15:00 <br> Jum\'at: 07:00 - 13:00',
                'link' => '#',
            ],
        ];  

        $additionalInfo = [  
            [
                'title' => 'Berita Pasar',
                'description' => 'Kami menyediakan berbagai informasi terkini tentang berita dari pasar.',
                'link' => '#',
            ],
            [
                'title' => 'Solusi Pemasaran yang Berkualitas',
                'description' => 'Kami menyediakan solusi pemasaran yang efektif untuk mendukung bisnis Anda.',
                'link' => '#',
            ],
            [
                'title' => 'Inovasi Pemasaran untuk Masyarakat',
                'description' => 'Kami selalu berupaya memberikan inovasi pemasaran terbaru.',
                'link' => '#',
            ],
        ];  

        return view('dashboard', compact('infoCards', 'additionalInfo'));  
    }  
}
