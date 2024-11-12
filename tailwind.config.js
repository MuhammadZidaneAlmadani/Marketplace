import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php', // Untuk pagination
        './storage/framework/views/*.php', // Untuk template cache
        './resources/**/*.blade.php', // Semua file Blade di resources
        './resources/**/*.js', // Semua file JS di resources
        './resources/**/*.vue', // Jika menggunakan Vue
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans], // Tambahkan font Figtree
            },
            colors: {
                disperindagGreen: '#004d00', // Warna hijau khusus untuk branding
                disperindagDark: '#003366', // Warna biru gelap untuk branding
            },
        },
    },
    plugins: [],
};
    