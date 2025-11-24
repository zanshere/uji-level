<section id="home" class="relative pt-24 bg-white text-gray-900 overflow-hidden">

    <!-- Background Layer (soft white glow tetap, tapi lebih halus supaya cocok dengan bg putih) -->
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute top-0 left-0 w-64 h-64 bg-white/60 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-72 h-72 bg-white/40 rounded-full blur-3xl"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 py-16 relative">
        <div class="grid grid-cols-1 lg:grid-cols-2 items-center gap-12">

            <!-- Left Text -->
            <div>
                <h1 class="text-4xl lg:text-5xl font-bold mb-4 text-gray-900">
                    Pesan tiket konser dengan cepat dan mudah
                </h1>

                <p class="text-gray-600 text-lg mb-6">
                    Nikmati pengalaman konser terbaik dengan mudah dan cepat. Pilih konser favoritmu dan pesan tiketnya di sini.
                </p>

                <a href="#konser"
                   class="inline-block bg-green-600 text-white font-semibold px-6 py-3 rounded-lg hover:bg-blue-700 transition">
                    Jelajahi Konser
                </a>
            </div>

            <!-- Search Card -->
            <div>
                <div class="p-6 bg-white text-gray-700 rounded-2xl shadow-xl">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                        <!-- Search Input -->
                        <div
                            class="flex items-center gap-2 bg-gray-100 hover:bg-gray-200 transition rounded-xl px-3 py-2 border border-transparent focus-within:border-blue-500 focus-within:bg-white focus-within:ring-2 focus-within:ring-blue-200">
                            <i data-feather="search" class="w-5 h-5 text-gray-500"></i>
                            <input
                                type="text"
                                class="bg-transparent w-full py-1.5 focus:outline-none"
                                placeholder="Cari konser atau artis">
                        </div>

                        <!-- City Select -->
                        <div
                            class="flex items-center gap-2 bg-gray-100 hover:bg-gray-200 transition rounded-xl px-3 py-2 border border-transparent focus-within:border-blue-500 focus-within:bg-white focus-within:ring-2 focus-within:ring-blue-200">
                            <i data-feather="map-pin" class="w-5 h-5 text-gray-500"></i>
                            <select
                                class="bg-transparent w-full py-1.5 focus:outline-none">
                                <option>Semua Kota</option>
                                <option>Jakarta</option>
                                <option>Bandung</option>
                                <option>Surabaya</option>
                            </select>
                        </div>

                    </div>
                </div>

                <button class="mt-4 w-full bg-green-600 text-white py-3 rounded-lg hover:bg-blue-700 transition">
                    Cari
                </button>

            </div>

        </div>
    </div>

</section>
