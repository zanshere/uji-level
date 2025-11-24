<nav class="bg-white shadow-lg fixed w-full top-0 z-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex justify-between items-center h-16">
            <div class="flex items-center">
                <i data-lucide="rocket" class="w-8 h-8 text-blue-600"></i>
                <span class="ml-2 text-xl font-bold">Brand</span>
            </div>

            <div class="hidden md:block">
                <div class="ml-10 flex items-baseline space-x-4">
                    <a href="#home" class="text-gray-900 hover:text-blue-600 px-3 py-2 rounded-md flex items-center">
                        <i data-lucide="home" class="w-4 h-4 mr-1"></i>Home
                    </a>
                    <a href="#pricing" class="text-gray-900 hover:text-blue-600 px-3 py-2 rounded-md flex items-center">
                        <i data-lucide="circle-dollar-sign" class="w-4 h-4 mr-1"></i>Pricing
                    </a>
                    <a href="#contact" class="text-gray-900 hover:text-blue-600 px-3 py-2 rounded-md flex items-center">
                        <i data-lucide="phone" class="w-4 h-4 mr-1"></i>Contact
                    </a>
                </div>
            </div>

            <button 
                class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md"
                onclick="window.location.href='{{ route('login') }}'">
                Get Started
            </button>
        </div>
    </div>
</nav>