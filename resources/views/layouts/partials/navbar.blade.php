<nav class="bg-green-600 shadow-lg fixed w-full top-0 z-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex justify-between items-center h-16">

            <!-- Brand -->
            <div class="flex items-center">
                <i data-lucide="rocket" class="w-8 h-8 text-white"></i>
                <span class="ml-2 text-xl font-bold text-white">Brand</span>
            </div>

            <!-- Menu -->
            <div class="hidden md:block">
                <div class="ml-10 flex items-baseline space-x-4">
                    <a href="#home" class="text-white/90 hover:text-white px-3 py-2 rounded-md flex items-center">
                        <i data-lucide="home" class="w-4 h-4 mr-1 text-white"></i>Home
                    </a>

                    <a href="#konser" class="text-white/90 hover:text-white px-3 py-2 rounded-md flex items-center">
                        <i data-lucide="circle-dollar-sign" class="w-4 h-4 mr-1 text-white"></i>Pricing
                    </a>

                    <a href="#contact" class="text-white/90 hover:text-white px-3 py-2 rounded-md flex items-center">
                        <i data-lucide="phone" class="w-4 h-4 mr-1 text-white"></i>Contact
                    </a>
                </div>
            </div>

            <!-- Button -->
            <button 
                class="bg-white text-green-700 font-semibold px-4 py-2 rounded-md hover:bg-gray-100 transition"
                onclick="window.location.href='{{ route('login') }}'">
                Get Started
            </button>

        </div>
    </div>
</nav>
