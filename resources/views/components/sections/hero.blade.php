<section id="home" class="pt-16 bg-linear-to-r from-blue-500 to-purple-600 text-white">
    <div class="max-w-7xl mx-auto px-4 py-20">
        <div class="text-center">
            <h1 class="text-5xl font-bold mb-6">Welcome to Our Platform</h1>
            <p class="text-xl mb-8 max-w-2xl mx-auto">Build amazing experiences with our cutting-edge solutions</p>
            <div class="space-x-4">
                <button class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100" onclick="window.location.href='{{ route('login') }}'">
                    Get Started
                </button>
                <button class="border border-white px-8 py-3 rounded-lg font-semibold hover:bg-white/10" onclick="window.location.href='#contact'">
                    Learn More
                </button>
            </div>
        </div>

        <div class="mt-20 grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="text-center p-6 bg-white/10 rounded-lg">
                <i data-lucide="zap" class="w-12 h-12 mx-auto mb-4"></i>
                <h3 class="text-xl font-semibold mb-2">Fast</h3>
                <p>Lightning fast performance</p>
            </div>
            <div class="text-center p-6 bg-white/10 rounded-lg">
                <i data-lucide="shield" class="w-12 h-12 mx-auto mb-4"></i>
                <h3 class="text-xl font-semibold mb-2">Secure</h3>
                <p>Enterprise-grade security</p>
            </div>
            <div class="text-center p-6 bg-white/10 rounded-lg">
                <i data-lucide="users" class="w-12 h-12 mx-auto mb-4"></i>
                <h3 class="text-xl font-semibold mb-2">Reliable</h3>
                <p>99.9% uptime guarantee</p>
            </div>
        </div>
    </div>
</section>
