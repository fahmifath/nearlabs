<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NearLabs - Jasa Pembuatan Website Profesional</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap');
        
        body {
            font-family: 'Inter', sans-serif;
        }
        
        .gradient-primary {
            background: #2d3748;
        }
        
        .gradient-text {
            color: #2d3748;
            font-weight: 700;
        }
        
        .btn-primary {
            background: #2d3748;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(45, 55, 72, 0.4);
            background: #1a202c;
        }
        
        .card-hover {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .card-hover:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }
        
        .floating {
            animation: floating 3s ease-in-out infinite;
        }
        
        @keyframes floating {
            0%, 100% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-20px);
            }
        }
    </style>
</head>
<body class="bg-white">
    <!-- Navbar -->
    <nav class="bg-white shadow-lg sticky top-0 z-50">
        <div class="container mx-auto px-6 md:px-12 py-5 flex justify-between items-center">
            <div class="flex items-center">
                <span class="text-2xl font-bold gradient-text">NearLabs</span>
            </div>
            <div class="hidden md:flex space-x-8">
                <a href="#services" class="text-gray-700 hover:gradient-text transition">Layanan</a>
                <a href="#portfolio" class="text-gray-700 hover:gradient-text transition">Portfolio</a>
                <a href="#testimonials" class="text-gray-700 hover:gradient-text transition">Testimoni</a>
                <a href="#contact" class="text-gray-700 hover:gradient-text transition">Kontak</a>
            </div>
            <button class="btn-primary text-white px-6 py-2 rounded-lg font-semibold">
                Hubungi Kami
            </button>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="bg-gray-800 text-white py-24 md:py-15">
        <div class="container mx-auto px-6 md:px-12 grid md:grid-cols-2 gap-16 items-center">
            <div class="floating">
                <h1 class="text-5xl md:text-6xl font-bold mb-6 leading-tight">
                    Wujudkan <span class="text-gray-400">Visi Digital</span> Anda Bersama NearLabs
                </h1>
                <p class="text-xl text-gray-300 mb-8 leading-relaxed">
                    Kami adalah tim profesional yang siap membangun website berkualitas tinggi untuk meningkatkan bisnis Anda di era digital.
                </p>
                <div class="flex flex-col md:flex-row gap-4">
                    <button class="bg-white text-gray-800 px-8 py-3 rounded-lg font-bold hover:shadow-lg transition">
                        Konsultasi Gratis
                    </button>
                    <button class="border-2 border-white text-white px-8 py-3 rounded-lg font-bold hover:bg-white hover:text-gray-800 transition">
                        Lihat Portfolio
                    </button>
                </div>
            </div>
            <div class="hidden md:block">
                <div class="bg-white bg-opacity-10 backdrop-blur-lg rounded-2xl p-8 border border-white border-opacity-20">
                    <svg class="w-full h-auto" viewBox="0 0 400 300" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="50" y="30" width="300" height="240" rx="8" fill="white" opacity="0.1"/>
                        <line x1="80" y1="60" x2="320" y2="60" stroke="white" stroke-width="2"/>
                        <line x1="80" y1="80" x2="180" y2="80" stroke="white" stroke-width="2" opacity="0.5"/>
                        <circle cx="100" cy="120" r="30" fill="white" opacity="0.2"/>
                        <rect x="80" y="160" width="240" height="80" rx="4" fill="white" opacity="0.1"/>
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-24 md:py-40 bg-gray-50">
        <div class="container mx-auto px-6 md:px-12">
            <div class="text-center mb-20">
                <h2 class="text-4xl md:text-5xl font-bold mb-6 text-gray-900">
                    Layanan <span class="gradient-text">Unggulan Kami</span>
                </h2>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                    Kami menyediakan berbagai layanan web development yang disesuaikan dengan kebutuhan bisnis Anda
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div class="card-hover bg-white rounded-2xl p-10 shadow-md border border-gray-200">
                    <div class="w-16 h-16 bg-gray-700 rounded-lg flex items-center justify-center mb-6">
                        <span class="text-3xl">🎨</span>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Web Design</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Desain website yang menarik, modern, dan responsif dengan mempertimbangkan user experience terbaik.
                    </p>
                    <a href="#" class="text-gray-700 font-semibold hover:text-gray-900 transition">Pelajari Lebih Lanjut →</a>
                </div>

                <!-- Service 2 -->
                <div class="card-hover bg-white rounded-2xl p-10 shadow-md border border-gray-200">
                    <div class="w-16 h-16 bg-gray-700 rounded-lg flex items-center justify-center mb-6">
                        <span class="text-3xl">⚙️</span>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Web Development</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Pengembangan website dengan teknologi terkini, performa optimal, dan scalable untuk pertumbuhan bisnis.
                    </p>
                    <a href="#" class="text-gray-700 font-semibold hover:text-gray-900 transition">Pelajari Lebih Lanjut →</a>
                </div>

                <!-- Service 3 -->
                <div class="card-hover bg-white rounded-2xl p-10 shadow-md border border-gray-200">
                    <div class="w-16 h-16 bg-gray-700 rounded-lg flex items-center justify-center mb-6">
                        <span class="text-3xl">📱</span>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">E-Commerce</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Platform e-commerce yang lengkap dengan sistem pembayaran, inventory, dan analytics untuk penjualan online.
                    </p>
                    <a href="#" class="text-gray-700 font-semibold hover:text-gray-900 transition">Pelajari Lebih Lanjut →</a>
                </div>

                <!-- Service 4 -->
                <div class="card-hover bg-white rounded-2xl p-10 shadow-md border border-gray-200">
                    <div class="w-16 h-16 bg-gray-700 rounded-lg flex items-center justify-center mb-6">
                        <span class="text-3xl">🔧</span>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Maintenance & Support</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Layanan maintenance rutin, security updates, dan technical support 24/7 untuk website Anda.
                    </p>
                    <a href="#" class="text-gray-700 font-semibold hover:text-gray-900 transition">Pelajari Lebih Lanjut →</a>
                </div>

                <!-- Service 5 -->
                <div class="card-hover bg-white rounded-2xl p-10 shadow-md border border-gray-200">
                    <div class="w-16 h-16 bg-gray-700 rounded-lg flex items-center justify-center mb-6">
                        <span class="text-3xl">📊</span>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">SEO Optimization</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Optimasi search engine untuk meningkatkan visibility website Anda di hasil pencarian Google.
                    </p>
                    <a href="#" class="text-gray-700 font-semibold hover:text-gray-900 transition">Pelajari Lebih Lanjut →</a>
                </div>

                <!-- Service 6 -->
                <div class="card-hover bg-white rounded-2xl p-10 shadow-md border border-gray-200">
                    <div class="w-16 h-16 bg-gray-700 rounded-lg flex items-center justify-center mb-6">
                        <span class="text-3xl">💡</span>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Konsultasi IT</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Konsultasi gratis untuk menentukan strategi digital terbaik dan solusi teknologi yang tepat untuk bisnis.
                    </p>
                    <a href="#" class="text-gray-700 font-semibold hover:text-gray-900 transition">Pelajari Lebih Lanjut →</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-24 md:py-40 bg-white">
        <div class="container mx-auto px-6 md:px-12">
            <div class="grid md:grid-cols-2 gap-20 items-center">
                <div>
                    <h2 class="text-4xl md:text-5xl font-bold mb-8 text-gray-900">
                        Mengapa Memilih <span class="gradient-text">NearLabs?</span>
                    </h2>
                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-gray-700 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                                <span class="text-white font-bold">✓</span>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Tim Berpengalaman</h3>
                                <p class="text-gray-600">Tim developer dan designer berpengalaman dengan portfolio yang terbukti.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-gray-700 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                                <span class="text-white font-bold">✓</span>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Teknologi Terkini</h3>
                                <p class="text-gray-600">Menggunakan tech stack modern dan best practices dalam development.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-gray-700 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                                <span class="text-white font-bold">✓</span>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900 mb-2">On-Time Delivery</h3>
                                <p class="text-gray-600">Komitmen untuk menyelesaikan project tepat waktu sesuai deadline.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-gray-700 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                                <span class="text-white font-bold">✓</span>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Harga Kompetitif</h3>
                                <p class="text-gray-600">Paket harga yang flexible dan transparan tanpa biaya tersembunyi.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-gray-700 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                                <span class="text-white font-bold">✓</span>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Komunikasi Terbuka</h3>
                                <p class="text-gray-600">Komunikasi rutin dan transparan sepanjang proses development.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="bg-gradient-to-br from-gray-100 to-gray-200 rounded-2xl p-8 h-96 flex items-center justify-center">
                        <svg class="w-full h-auto" viewBox="0 0 400 400" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="200" cy="200" r="150" fill="#2d3748" opacity="0.1"/>
                            <path d="M150 200 L200 150 L250 200 L200 250 Z" fill="#4b5563" opacity="0.3"/>
                            <circle cx="200" cy="200" r="50" fill="#2d3748" opacity="0.2"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="py-24 md:py-40 bg-gray-50">
        <div class="container mx-auto px-6 md:px-12">
            <div class="text-center mb-20">
                <h2 class="text-4xl md:text-5xl font-bold mb-6 text-gray-900">
                    <span class="gradient-text">Portfolio</span> Kami
                </h2>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                    Berikut adalah beberapa project yang telah kami kerjakan untuk berbagai klien
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Portfolio Item 1 -->
                <div class="card-hover bg-white rounded-2xl overflow-hidden shadow-md border border-gray-200">
                    <div class="bg-gradient-to-br from-blue-400 to-blue-600 h-48 flex items-center justify-center">
                        <span class="text-5xl">🏪</span>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">E-Commerce Store</h3>
                        <p class="text-gray-600 mb-4">Platform e-commerce lengkap dengan inventory management dan payment gateway.</p>
                        <button class="text-gray-700 font-semibold hover:text-gray-900 transition">Lihat Detail →</button>
                    </div>
                </div>

                <!-- Portfolio Item 2 -->
                <div class="card-hover bg-white rounded-2xl overflow-hidden shadow-md border border-gray-200">
                    <div class="bg-gradient-to-br from-green-400 to-green-600 h-48 flex items-center justify-center">
                        <span class="text-5xl">🏢</span>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">Corporate Website</h3>
                        <p class="text-gray-600 mb-4">Website profil perusahaan dengan design modern dan SEO optimized.</p>
                        <button class="text-gray-700 font-semibold hover:text-gray-900 transition">Lihat Detail →</button>
                    </div>
                </div>

                <!-- Portfolio Item 3 -->
                <div class="card-hover bg-white rounded-2xl overflow-hidden shadow-md border border-gray-200">
                    <div class="bg-gradient-to-br from-pink-400 to-pink-600 h-48 flex items-center justify-center">
                        <span class="text-5xl">📱</span>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">Mobile App</h3>
                        <p class="text-gray-600 mb-4">Aplikasi mobile dengan teknologi React Native dan custom backend API.</p>
                        <button class="text-gray-700 font-semibold hover:text-gray-900 transition">Lihat Detail →</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-24 md:py-40 bg-white">
        <div class="container mx-auto px-6 md:px-12">
            <div class="text-center mb-20">
                <h2 class="text-4xl md:text-5xl font-bold mb-6 text-gray-900">
                    <span class="gradient-text">Testimoni</span> Klien Kami
                </h2>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                    Kepuasan klien adalah prioritas utama kami
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="card-hover bg-gray-50 rounded-2xl p-10 border border-gray-200">
                    <div class="flex items-center gap-2 mb-4">
                        <span class="text-yellow-400">★ ★ ★ ★ ★</span>
                    </div>
                    <p class="text-gray-700 mb-6 leading-relaxed">
                        "NearLabs berhasil mewujudkan website impian kami. Tim mereka profesional, responsif, dan menghasilkan karya yang melampaui ekspektasi."
                    </p>
                    <div>
                        <h4 class="font-bold text-gray-900">Budi Santoso</h4>
                        <p class="text-gray-600 text-sm">CEO, PT. Digital Indonesia</p>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="card-hover bg-gray-50 rounded-2xl p-10 border border-gray-200">
                    <div class="flex items-center gap-2 mb-4">
                        <span class="text-yellow-400">★ ★ ★ ★ ★</span>
                    </div>
                    <p class="text-gray-700 mb-6 leading-relaxed">
                        "Hasil kerjanya luar biasa! Website yang dibuat tidak hanya cantik tapi juga sangat responsif dan loading-nya cepat."
                    </p>
                    <div>
                        <h4 class="font-bold text-gray-900">Siti Nurhaliza</h4>
                        <p class="text-gray-600 text-sm">Founder, E-Shop Fashion</p>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="card-hover bg-gray-50 rounded-2xl p-10 border border-gray-200">
                    <div class="flex items-center gap-2 mb-4">
                        <span class="text-yellow-400">★ ★ ★ ★ ★</span>
                    </div>
                    <p class="text-gray-700 mb-6 leading-relaxed">
                        "Komunikasi terbaik, hasil terbaik, dan harga yang fair. Saya rekomendasikan NearLabs untuk semua kebutuhan web development."
                    </p>
                    <div>
                        <h4 class="font-bold text-gray-900">Ahmad Wijaya</h4>
                        <p class="text-gray-600 text-sm">Director, Tech Startup</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="bg-gray-800 text-white py-24 md:py-40">
        <div class="container mx-auto px-6 md:px-12">
            <div class="grid md:grid-cols-4 gap-8 text-center">
                <div>
                    <h3 class="text-5xl font-bold mb-2">50+</h3>
                    <p class="text-xl text-gray-300">Project Selesai</p>
                </div>
                <div>
                    <h3 class="text-5xl font-bold mb-2">40+</h3>
                    <p class="text-xl text-gray-300">Klien Puas</p>
                </div>
                <div>
                    <h3 class="text-5xl font-bold mb-2">8+</h3>
                    <p class="text-xl text-gray-300">Tahun Pengalaman</p>
                </div>
                <div>
                    <h3 class="text-5xl font-bold mb-2">24/7</h3>
                    <p class="text-xl text-gray-300">Customer Support</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="contact" class="py-24 md:py-40 bg-gray-50">
        <div class="container mx-auto px-6 md:px-12 text-center">
            <h2 class="text-4xl md:text-5xl font-bold mb-6 text-gray-900">
                Siap Memulai <span class="gradient-text">Project Anda?</span>
            </h2>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto mb-12">
                Hubungi kami hari ini untuk konsultasi gratis dan dapatkan penawaran terbaik untuk website Anda.
            </p>
            <div class="flex flex-col md:flex-row justify-center gap-4">
                <button class="btn-primary text-white px-8 py-4 rounded-lg font-bold text-lg">
                    Hubungi Kami Sekarang
                </button>
                <button class="border-2 border-gray-700 text-gray-700 px-8 py-4 rounded-lg font-bold text-lg hover:bg-gray-100 transition">
                    Jadwalkan Konsultasi
                </button>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-20">
        <div class="container mx-auto px-6 md:px-12">
            <div class="grid md:grid-cols-4 gap-12 mb-8">
                <div>
                    <h3 class="text-2xl font-bold mb-4 gradient-text">NearLabs</h3>
                    <p class="text-gray-400">
                        Jasa pembuatan website profesional untuk mengembangkan bisnis Anda di era digital.
                    </p>
                </div>
                <div>
                    <h4 class="text-lg font-bold mb-4">Layanan</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white transition">Web Design</a></li>
                        <li><a href="#" class="hover:text-white transition">Web Development</a></li>
                        <li><a href="#" class="hover:text-white transition">E-Commerce</a></li>
                        <li><a href="#" class="hover:text-white transition">SEO Optimization</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-bold mb-4">Perusahaan</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white transition">Tentang Kami</a></li>
                        <li><a href="#" class="hover:text-white transition">Portfolio</a></li>
                        <li><a href="#" class="hover:text-white transition">Blog</a></li>
                        <li><a href="#" class="hover:text-white transition">Karir</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-bold mb-4">Kontak</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li>📧 info@nearlabs.com</li>
                        <li>📱 +62 812 3456 7890</li>
                        <li>📍 Jakarta, Indonesia</li>
                        <li class="pt-2">
                            <div class="flex gap-4">
                                <a href="#" class="hover:text-white transition">Facebook</a>
                                <a href="#" class="hover:text-white transition">Twitter</a>
                                <a href="#" class="hover:text-white transition">Instagram</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <hr class="border-gray-800 my-8">
            <div class="flex flex-col md:flex-row justify-between items-center text-gray-400">
                <p>&copy; 2025 NearLabs. All rights reserved.</p>
                <div class="flex gap-6 mt-4 md:mt-0">
                    <a href="#" class="hover:text-white transition">Privacy Policy</a>
                    <a href="#" class="hover:text-white transition">Terms of Service</a>
                    <a href="#" class="hover:text-white transition">Cookie Policy</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Smooth scroll untuk anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth' });
                }
            });
        });

        // Mobile menu toggle
        const navToggle = document.querySelector('.nav-toggle');
        const navMenu = document.querySelector('.nav-menu');
        
        if (navToggle) {
            navToggle.addEventListener('click', () => {
                navMenu.classList.toggle('active');
            });
        }
    </script>
</body>
</html>
