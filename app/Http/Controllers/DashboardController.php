<?php

namespace App\Http\Controllers;

use App\Models\Market;
use App\Models\News;
use App\Models\Event;

class DashboardController extends Controller
{
    public function index()
    {
        // Info Cards
        $infoCards = [
            [
                'title' => 'Kasus Darurat',
                'description' => 'Kami siap mendukung usaha Anda dengan cepat, bahkan dalam Kasus Darurat. Solusi Pemasaran Berkualitas dan Inovasi untuk Masyarakat adalah prioritas kami.',
                'link' => route('events.admin.index'),
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

        // Statistik
        $statistics = [
            'markets' => Market::count(),
            'news' => News::count(),
            'published_news' => News::whereNotNull('published_at')->count(),
            'draft_news' => News::whereNull('published_at')->count(),
        ];

        // Event Mendatang
        $upcomingEvents = Event::where('tanggal_acara', '>=', now())
            ->orderBy('tanggal_acara', 'asc')
            ->take(5)
            ->get();

        // Kirim data ke view
        return view('admin.dashboard', compact('infoCards', 'statistics', 'upcomingEvents'));
    }
}
