<nav class="bg-white sticky top-0 z-30 w-full shadow-xs">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            
            <!-- SISI KIRI: Brand E-Rapor (Teks biasa tanpa icon) -->
            <div class="flex items-center">
                <a href="/" class="text-xl font-bold tracking-tight text-gray-800 hover:text-[#0057e7] transition-colors">
                    E-Rapor
                </a>
            </div>

            <!-- SISI KANAN: Menu Navigasi Kasual (Home & Rapor) -->
            <div class="flex items-center space-x-2 sm:space-x-4">
                
                <!-- Link Home -->
                <a href="/" 
                   class="px-3.5 py-1.5 text-sm font-medium rounded-md transition-colors duration-200 {{ request()->is('/') ? 'text-[#0057e7] bg-blue-50 font-semibold' : 'text-gray-600 hover:text-gray-900 hover:bg-gray-100' }}">
                    Home
                </a>

                <!-- Link Rapor -->
                <a href="/daftar_rapor" 
                   class="px-3.5 py-1.5 text-sm font-medium rounded-md transition-colors duration-200 {{ request()->is('daftar_rapor*') ? 'text-[#0057e7] bg-blue-50 font-semibold' : 'text-gray-600 hover:text-gray-900 hover:bg-gray-100' }}">
                    Daftar Rapor
                </a>

                <a href="/rapor" 
                   class="px-3.5 py-1.5 text-sm font-medium rounded-md transition-colors duration-200 {{ request()->is('rapor*') ? 'text-[#0057e7] bg-blue-50 font-semibold' : 'text-gray-600 hover:text-gray-900 hover:bg-gray-100' }}">
                    Rapor
                </a>

                <a href="/kelola_rapor" class="px-3.5 py-1.5 text-sm font-medium rounded-md transition-colors duration-200 {{ request()->is('kelola_rapor*') ? 'text-[#0057e7] bg-blue-50 font-semibold' : 'text-gray-600 hover:text-gray-900 hover:bg-gray-100' }}">
                    Kelola Rapor
                </a>

                <!-- 
                Catatan: Untuk menambah menu baru nanti, cukup duplikasi elemen <a> di atas.
                Contoh:
                <a href="/kelolarapor" class="px-3.5 py-1.5 text-sm font-medium rounded-md transition-colors duration-200 {{ request()->is('kelolarapor*') ? 'text-[#0057e7] bg-blue-50 font-semibold' : 'text-gray-600 hover:text-gray-900 hover:bg-gray-100' }}">
                    Kelola Rapor
                </a>
                -->
            </div>

        </div>
    </div>


    <div class="grid grid-cols-4 h-[3px] w-full">
        <div class="bg-[#0057e7]"></div> 
        <div class="bg-[#d62d20]"></div> 
        <div class="bg-[#ffa700]"></div> 
        <div class="bg-[#008744]"></div> 
    </div>


</nav>
