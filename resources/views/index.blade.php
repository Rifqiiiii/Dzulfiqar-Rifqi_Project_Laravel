<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destinasi Wisata Keluarga</title>
    @vite('resources/css/app.css')
</head>
<body>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekomendasi Destinasi Wisata Keluarga</title>
</head>
<body class="font-sans">
    <div class="relative min-h-screen">
        <!-- Background Image -->
        <div class="absolute inset-0 z-0">
            <img src="assets/Foto-Foto/Foto.jpg" alt="Pemandangan alam" class="w-full h-full object-cover">
        </div>

        <!-- Content Overlay -->
        <div class="relative z-10 min-h-screen flex flex-col">
            <!-- Navigation -->
            <nav class="bg-transparent p-4">
                <div class="container mx-auto flex justify-between items-center">
                    <div class="text-white text-2xl font-bold">Logo</div>
                    <div class="hidden md:flex space-x-4">
                        <a href="#" class="text-white hover:text-gray-200">Beranda</a>
                        <a href="#" class="text-white hover:text-gray-200">Layanan</a>
                        <a href="#" class="text-white hover:text-gray-200">Rekomendasi</a>
                        <a href="#" class="text-white hover:text-gray-200">Kontak</a>
                        <a href="{{ route('about') }}">About Me</a>
                    </div>
                    <button class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Login</button>
                </div>
            </nav>

            <!-- Main Content -->
            <main class="flex-grow container mx-auto px-4 py-8">
                <!-- Hero Section -->
                <div class="text-white mb-12">
                    <h1 class="text-4xl md:text-5xl font-bold mb-4">Rekomendasi Destinasi Wisata Keluarga</h1>
                    <p class="text-xl md:text-2xl">Temukan tempat liburan keluarga terbaik di Indonesia</p>
                </div>

                <!-- Services Section -->
                <div class="mb-12">
                    <h2 class="text-2xl font-bold text-white mb-6">Layanan Kami</h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="bg-white p-6 rounded-lg shadow-md">
                            <svg class="w-12 h-12 mb-4 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"></path></svg>
                            <p class="text-gray-700">Daftar destinasi wisata keluarga terbaik</p>
                        </div>
                        <div class="bg-white p-6 rounded-lg shadow-md">
                            <svg class="w-12 h-12 mb-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <p class="text-gray-700">Rekomendasi paket wisata sesuai budget</p>
                        </div>
                        <div class="bg-white p-6 rounded-lg shadow-md">
                            <svg class="w-12 h-12 mb-4 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                            <p class="text-gray-700">Panduan wisata lengkap untuk keluarga</p>
                        </div>
                    </div>
                </div>

                <!-- Recommendations Section -->
                <div class="mb-12">
                    <h2 class="text-2xl font-bold text-white mb-6">Rekomendasi Wisata</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                        <div class="bg-white rounded-lg overflow-hidden shadow-md">
                            <img src="assets\Foto-Foto\TS.jpg" alt="Air Terjun" class="w-full h-48 object-cover">
                            <div class="p-4">
                                <h3 class="font-bold text-lg mb-2">Air Terjun Indah</h3>
                                <p class="text-gray-600 mb-4">Nikmati keindahan alam air terjun yang memukau</p>
                                <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Detail</button>
                            </div>
                        </div>
                        <div class="bg-white rounded-lg overflow-hidden shadow-md">
                            <img src="assets\Foto-Foto\Gorengan.jpg" alt="Kuliner" class="w-full h-48 object-cover">
                            <div class="p-4">
                                <h3 class="font-bold text-lg mb-2">Wisata Kuliner</h3>
                                <p class="text-gray-600 mb-4">Jelajahi aneka ragam kuliner khas daerah</p>
                                <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Detail</button>
                            </div>
                        </div>
                        <div class="bg-white rounded-lg overflow-hidden shadow-md">
                            <img src="assets\Foto-Foto\JenSud.jpg" alt="Museum" class="w-full h-48 object-cover">
                            <div class="p-4">
                                <h3 class="font-bold text-lg mb-2">Museum Sejarah</h3>
                                <p class="text-gray-600 mb-4">Pelajari sejarah dan budaya lokal yang menarik</p>
                                <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Detail</button>
                            </div>
                        </div>
                        <div class="bg-white rounded-lg overflow-hidden shadow-md">
                            <img src="assets\Foto-Foto\Rumah Lengger.jpg" alt="Taman Hiburan" class="w-full h-48 object-cover">
                            <div class="p-4">
                                <h3 class="font-bold text-lg mb-2">Taman Hiburan</h3>
                                <p class="text-gray-600 mb-4">Bersenang-senang di taman hiburan keluarga</p>
                                <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Detail</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="bg-blue-500 rounded-lg p-6 shadow-lg">
                    <h2 class="text-2xl font-bold text-white mb-4">Masih Bingung? Butuh Konsultasi?</h2>
                    <form class="space-y-4">
                        <input type="text" placeholder="Nama" class="w-full p-2 rounded">
                        <input type="email" placeholder="Email" class="w-full p-2 rounded">
                        <textarea placeholder="Pesan" class="w-full p-2 rounded" rows="3"></textarea>
                        <button type="submit" class="bg-white text-blue-500 px-6 py-2 rounded font-bold hover:bg-gray-100">Kirim</button>
                    </form>
                </div>
            </main>

            <!-- Footer -->
            <footer class="bg-gray-800 text-white py-4">
                <div class="container mx-auto text-center">
                    <p>&copy; 2024 Rekomendasi Wisata Keluarga. All rights reserved.</p>
                </div>
            </footer>
        </div>
    </div>
</body>
</html>
</body>
</html>