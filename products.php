<?php
include('./includes/header.php');
?>

<style>
body {
    background: var(--dark-bg);
    color: white;
}

#vanta-bg {
    background: linear-gradient(40deg, rgba(0, 245, 160, 0.1) 0%, rgba(0, 217, 245, 0.1) 100%);
    animation: gradientBG 15s ease infinite;
    background-size: 400% 400%;
}

@keyframes gradientBG {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}

.floating-card {
    animation: float 6s ease-in-out infinite;
}

@keyframes float {
    0% { transform: translateY(0px); }
    50% { transform: translateY(-20px); }
    100% { transform: translateY(0px); }
}

.gradient-glow {
    position: relative;
}

.gradient-glow::after {
    content: '';
    position: absolute;
    top: -20px;
    left: -20px;
    right: -20px;
    bottom: -20px;
    background: radial-gradient(circle at center, rgba(0, 245, 160, 0.2) 0%, transparent 70%);
    filter: blur(20px);
    z-index: -1;
}
</style>

<body class="text-white">
    <div id="vanta-bg"></div>
    <?php
    include './includes/navbar.php';
    ?>
    
    <!-- Products Hero Section -->
    <section class="relative min-h-screen py-32 overflow-hidden">
        <!-- Decorative background elements -->
        <div class="absolute inset-0 bg-gradient-to-b from-gray-900 to-black"></div>
        <div class="absolute top-0 left-0 w-full h-full">
            <div class="absolute top-20 left-10 w-72 h-72 bg-[#00F5A0]/10 rounded-full blur-3xl"></div>
            <div class="absolute bottom-20 right-10 w-96 h-96 bg-[#7C3AED]/10 rounded-full blur-3xl"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
                <!-- Left Content -->
                <div class="relative z-10 lg:pr-10">
                    <!-- Badge -->
                    <div class="inline-flex items-center space-x-2 bg-white/5 backdrop-blur-xl border border-white/10 text-[#00F5A0] px-6 py-3 rounded-full text-sm mb-12 hover:scale-105 transition-transform">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <span class="font-medium">Innovative Financial Solutions</span>
                    </div>

                    <!-- Heading with enhanced styling -->
                    <h2 class="clash-display text-6xl md:text-7xl font-bold mb-8 leading-tight">
                        <span class="gradient-text">Financial</span><br/>
                        <span class="gradient-text">Products</span><br/>
                        <span class="text-white">Reimagined</span>
                    </h2>

                    <p class="text-gray-400 text-xl mb-12 leading-relaxed max-w-xl">
                        Discover our comprehensive suite of next-generation financial products designed to revolutionize your financial journey.
                    </p>

                    <!-- Feature List -->
                    <div class="space-y-8 mb-12">
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 rounded-xl bg-gradient-to-r from-[#00F5A0]/20 to-[#00D9F5]/20 flex items-center justify-center">
                                <svg class="w-6 h-6 text-[#00F5A0]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <span class="text-gray-300">Advanced Security Protocols</span>
                        </div>
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 rounded-xl bg-gradient-to-r from-[#00F5A0]/20 to-[#00D9F5]/20 flex items-center justify-center">
                                <svg class="w-6 h-6 text-[#00F5A0]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                </svg>
                            </div>
                            <span class="text-gray-300">Lightning-Fast Transactions</span>
                        </div>
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 rounded-xl bg-gradient-to-r from-[#00F5A0]/20 to-[#00D9F5]/20 flex items-center justify-center">
                                <svg class="w-6 h-6 text-[#00F5A0]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                                </svg>
                            </div>
                            <span class="text-gray-300">AI-Powered Analytics</span>
                        </div>
                    </div>

                    <!-- CTA Buttons -->
                    <div class="flex flex-wrap gap-6">
                        <a href="#products" class="inline-flex items-center justify-center px-8 py-4 rounded-xl bg-gradient-to-r from-[#00F5A0] to-[#00D9F5] text-black font-semibold hover:opacity-90 transition-opacity">
                            Explore Products
                        </a>
                        <a href="#" class="inline-flex items-center justify-center px-8 py-4 rounded-xl gradient-border hover:scale-105 transition-all duration-300">
                            Watch Demo
                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Right Content - Floating Product Cards -->
                <div class="relative">
                    <div class="grid grid-cols-2 gap-6">
                        <!-- Floating Product Cards -->
                        <div class="glass-card rounded-2xl p-6 border border-white/10 gradient-glow floating-card" style="animation-delay: 0s">
                            <div class="w-12 h-12 rounded-xl bg-gradient-to-r from-[#00F5A0]/20 to-[#00D9F5]/20 flex items-center justify-center mb-4">
                                <svg class="w-6 h-6 text-[#00F5A0]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold mb-2">Digital Banking</h3>
                            <p class="text-gray-400 text-sm">Next-gen banking with AI-powered insights</p>
                        </div>
                        
                        <div class="glass-card rounded-2xl p-6 border border-white/10 gradient-glow floating-card" style="animation-delay: 0.5s">
                            <div class="w-12 h-12 rounded-xl bg-gradient-to-r from-[#00F5A0]/20 to-[#00D9F5]/20 flex items-center justify-center mb-4">
                                <svg class="w-6 h-6 text-[#00F5A0]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold mb-2">Smart Investing</h3>
                            <p class="text-gray-400 text-sm">AI-powered portfolio management</p>
                        </div>
                        
                        <div class="glass-card rounded-2xl p-6 border border-white/10 gradient-glow floating-card" style="animation-delay: 1s">
                            <div class="w-12 h-12 rounded-xl bg-gradient-to-r from-[#00F5A0]/20 to-[#00D9F5]/20 flex items-center justify-center mb-4">
                                <svg class="w-6 h-6 text-[#00F5A0]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold mb-2">Crypto Wallet</h3>
                            <p class="text-gray-400 text-sm">Secure multi-chain support</p>
                        </div>
                        
                        <div class="glass-card rounded-2xl p-6 border border-white/10 gradient-glow floating-card" style="animation-delay: 1.5s">
                            <div class="w-12 h-12 rounded-xl bg-gradient-to-r from-[#00F5A0]/20 to-[#00D9F5]/20 flex items-center justify-center mb-4">
                                <svg class="w-6 h-6 text-[#00F5A0]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold mb-2">Smart Payments</h3>
                            <p class="text-gray-400 text-sm">Global payments made simple</p>
                        </div>
                    </div>

                    <!-- Stats Section -->
                    <div class="mt-12 grid grid-cols-2 gap-6">
                        <div class="text-center glass-card rounded-2xl p-6 border border-white/10">
                            <h3 class="text-3xl font-bold mb-2 gradient-text">$1B+</h3>
                            <p class="text-gray-400">Transaction Volume</p>
                        </div>
                        <div class="text-center glass-card rounded-2xl p-6 border border-white/10">
                            <h3 class="text-3xl font-bold mb-2 gradient-text">100K+</h3>
                            <p class="text-gray-400">Active Users</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Rest of your sections... -->
    <?php
include('./includes/footer.php');
?>
    <script src="js/Flow.js"></script>
