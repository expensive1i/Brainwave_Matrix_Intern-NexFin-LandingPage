<?php
include('./includes/header.php');
?>

<body class="text-white bg-gray-900">
    <?php
    include './includes/navbar.php';
    ?>

    <!-- Hero Section -->
    <section class="pt-32 pb-20 relative overflow-hidden bg-gradient-to-b from-gray-900 to-black">
        <!-- Gradient Orbs -->
        <div class="absolute top-20 right-0 w-96 h-96 bg-[#00F5A0]/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-[#00D9F5]/10 rounded-full blur-3xl"></div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12">
                    <h1 class="clash-display text-5xl md:text-7xl font-bold mb-6 leading-tight">
                        Resources & <br/>
                        <span class="bg-gradient-to-r from-[#00F5A0] to-[#00D9F5] text-transparent bg-clip-text">Documentation</span>
                    </h1>
                    <p class="text-gray-400 text-lg md:text-xl max-w-2xl mx-auto">
                        Explore our comprehensive guides, documentation, and community resources to make the most of NexFin.
                    </p>
                </div>

                <!-- Enhanced Search Bar -->
                <div class="relative max-w-2xl mx-auto">
                    <div class="absolute inset-y-0 left-4 flex items-center pointer-events-none">
                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                    </div>
                    <input type="text" 
                           placeholder="Search documentation, guides, and more..." 
                           class="w-full pl-12 pr-4 py-4 bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl text-white placeholder-gray-400 focus:outline-none focus:border-[#00F5A0] transition-all"
                    >
                </div>
            </div>
        </div>
    </section>

    <!-- Quick Links Section -->
    <section class="py-20 bg-black/50">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <a href="#" class="group">
                    <div class="p-6 rounded-2xl bg-white/5 border border-white/10 hover:border-[#00F5A0]/30 transition-all duration-300">
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 rounded-xl bg-gradient-to-r from-[#00F5A0]/10 to-[#00D9F5]/10 flex items-center justify-center group-hover:scale-110 transition-transform">
                                <svg class="w-6 h-6 text-[#00F5A0]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                                </svg>
                            </div>
                            <span class="font-semibold">Guides</span>
                        </div>
                    </div>
                </a>

                <a href="#" class="group">
                    <div class="p-6 rounded-2xl bg-white/5 border border-white/10 hover:border-[#00F5A0]/30 transition-all duration-300">
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 rounded-xl bg-gradient-to-r from-[#7C3AED]/10 to-[#EC4899]/10 flex items-center justify-center group-hover:scale-110 transition-transform">
                                <svg class="w-6 h-6 text-[#7C3AED]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                                </svg>
                            </div>
                            <span class="font-semibold">API</span>
                        </div>
                    </div>
                </a>

                <a href="#" class="group">
                    <div class="p-6 rounded-2xl bg-white/5 border border-white/10 hover:border-[#00F5A0]/30 transition-all duration-300">
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 rounded-xl bg-gradient-to-r from-[#EC4899]/10 to-[#00F5A0]/10 flex items-center justify-center group-hover:scale-110 transition-transform">
                                <svg class="w-6 h-6 text-[#EC4899]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"/>
                                </svg>
                            </div>
                            <span class="font-semibold">Support</span>
                        </div>
                    </div>
                </a>

                <a href="#" class="group">
                    <div class="p-6 rounded-2xl bg-white/5 border border-white/10 hover:border-[#00F5A0]/30 transition-all duration-300">
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 rounded-xl bg-gradient-to-r from-[#00F5A0]/10 to-[#7C3AED]/10 flex items-center justify-center group-hover:scale-110 transition-transform">
                                <svg class="w-6 h-6 text-[#00F5A0]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                                </svg>
                            </div>
                            <span class="font-semibold">Community</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Documentation Grid -->
    <section class="py-20 bg-black">
        <div class="container mx-auto px-6">
            <div class="mb-12">
                <h2 class="text-3xl font-bold mb-4">Popular Documentation</h2>
                <p class="text-gray-400">Most frequently accessed resources and guides</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Getting Started -->
                <div class="group">
                    <div class="h-full p-8 rounded-2xl bg-white/5 border border-white/10 hover:border-[#00F5A0]/30 transition-all duration-300">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 rounded-xl bg-gradient-to-r from-[#00F5A0]/10 to-[#00D9F5]/10 flex items-center justify-center group-hover:scale-110 transition-transform">
                                <svg class="w-6 h-6 text-[#00F5A0]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-xl font-bold mb-4">Getting Started</h3>
                        <p class="text-gray-400 mb-6">Complete guide to getting started with NexFin's trading platform.</p>
                        <div class="flex items-center text-sm text-gray-500">
                            <span class="flex items-center">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                5 min read
                            </span>
                        </div>
                    </div>
                </div>

                <!-- API Documentation -->
                <div class="group">
                    <div class="h-full p-8 rounded-2xl bg-white/5 border border-white/10 hover:border-[#00F5A0]/30 transition-all duration-300">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 rounded-xl bg-gradient-to-r from-[#7C3AED]/10 to-[#EC4899]/10 flex items-center justify-center group-hover:scale-110 transition-transform">
                                <svg class="w-6 h-6 text-[#7C3AED]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-xl font-bold mb-4">API Reference</h3>
                        <p class="text-gray-400 mb-6">Complete API documentation for developers building on NexFin.</p>
                        <div class="flex items-center text-sm text-gray-500">
                            <span class="flex items-center">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                </svg>
                                Technical
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Security -->
                <div class="group">
                    <div class="h-full p-8 rounded-2xl bg-white/5 border border-white/10 hover:border-[#00F5A0]/30 transition-all duration-300">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 rounded-xl bg-gradient-to-r from-[#EC4899]/10 to-[#00F5A0]/10 flex items-center justify-center group-hover:scale-110 transition-transform">
                                <svg class="w-6 h-6 text-[#EC4899]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-xl font-bold mb-4">Security Guide</h3>
                        <p class="text-gray-400 mb-6">Learn about our security features and best practices.</p>
                        <div class="flex items-center text-sm text-gray-500">
                            <span class="flex items-center">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                3 min read
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Help & Support -->
    <section class="py-20 bg-gradient-to-b from-black to-gray-900">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl font-bold mb-6">Need Help?</h2>
                <p class="text-gray-400 text-lg mb-8">
                    Our support team is available 24/7 to assist you with any questions
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <button class="px-8 py-4 rounded-xl bg-gradient-to-r from-[#00F5A0] to-[#00D9F5] text-black font-semibold hover:scale-105 transition-transform">
                        Contact Support
                    </button>
                    <button class="px-8 py-4 rounded-xl border border-white/10 hover:border-[#00F5A0]/30 transition-all">
                        Join Discord
                    </button>
                </div>
            </div>
        </div>
    </section>

<?php
include('./includes/footer.php');
?>
