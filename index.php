<?php
include('./includes/header.php');

// include "./includes/header.php";

// include "./includes/footer.php";

?>











<body class="text-white">

    <div id="vanta-bg"></div>



    <!-- Navbar -->

    <!-- <nav class="fixed w-full z-50 nav-blur"> -->

  <?php

  include './includes/navbar.php';

  ?>

    <!-- Hero Section -->

    <section class="min-h-screen pt-32 pb-20 relative overflow-hidden">

        <!-- Add a decorative background element -->

        <div class="absolute inset-0 z-0">

            <div

                class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-gradient-to-r from-[#00F5A0]/20 to-[#00D9F5]/20 rounded-full blur-3xl">

            </div>

            <div class="absolute top-20 right-20 w-72 h-72 bg-[#7C3AED]/20 rounded-full blur-3xl"></div>

        </div>



        <div class="container mx-auto px-6 relative z-10">

            <div class="text-center max-w-4xl mx-auto mb-20">

                <!-- Updated badge -->

                <div

                    class="inline-flex items-center space-x-2 bg-white/5 backdrop-blur-xl border border-white/10 text-[#00F5A0] px-4 py-2 rounded-full text-sm mb-8 animate-fade-in-up">

                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">

                        <path

                            d="M11 3a1 1 0 10-2 0v1a1 1 0 102 0V3zM15.657 5.757a1 1 0 00-1.414-1.414l-.707.707a1 1 0 001.414 1.414l.707-.707z" />

                    </svg>

                    <span class="relative">

                        Revolutionary DeFi Protocol

                        <span

                            class="absolute inset-0 bg-gradient-to-r from-[#00F5A0]/20 to-[#00D9F5]/20 blur animate-pulse"></span>

                    </span>

                </div>



                <!-- Updated heading with animated gradient -->

                <h1 class="clash-display text-7xl md:text-8xl font-bold leading-tight mb-8">

                    <span class="relative inline-block">The Future of</span>

                    <div class="relative">

                        <span class="gradient-text block my-2">DeFi Yield</span>

                        <div class="absolute -inset-1 bg-gradient-to-r from-[#00F5A0]/20 to-[#00D9F5]/20 blur-lg">

                        </div>

                    </div>

                    <span class="relative inline-block">Automation</span>

                </h1>



                <!-- Updated description -->

                <p class="text-gray-400 text-xl max-w-2xl mx-auto mb-12">

                    Experience institutional-grade yield optimization with AI-powered strategies.

                    Maximize your returns while minimizing risks.

                </p>



                <!-- Updated CTA buttons -->

                <div class="flex justify-center space-x-6 mb-16">

                    <button

                        class="group bg-gradient-to-r from-[#00F5A0] to-[#00D9F5] text-black font-semibold px-8 py-4 rounded-xl hover:scale-105 transition-all duration-300 btn-glow relative overflow-hidden">

                        <span class="relative z-10">Start Earning →</span>

                        <div

                            class="absolute inset-0 bg-white opacity-0 group-hover:opacity-20 transition-opacity duration-300">

                        </div>

                    </button>

                    <button

                        class="group px-8 py-4 rounded-xl gradient-border hover:scale-105 transition-all duration-300 relative">

                        <span class="relative z-10">View Documentation</span>

                        <div

                            class="absolute inset-0 bg-gradient-to-r from-[#00F5A0]/0 to-[#00D9F5]/0 group-hover:from-[#00F5A0]/10 group-hover:to-[#00D9F5]/10 transition-all duration-300">

                        </div>

                    </button>

                </div>



                <!-- Updated stats section with animated cards -->

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-4xl mx-auto">

                    <!-- TVL Card -->

                    <div

                        class="stats-card glass-card rounded-2xl p-6 hover:border-[#00F5A0]/30 border border-transparent transition-all duration-300">

                        <div class="flex flex-col items-center">

                            <div

                                class="w-12 h-12 rounded-xl bg-gradient-to-r from-[#00F5A0]/10 to-[#00D9F5]/10 flex items-center justify-center mb-4">

                                <svg class="w-6 h-6 text-[#00F5A0]" fill="none" stroke="currentColor"

                                    viewBox="0 0 24 24">

                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"

                                        d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />

                                </svg>

                            </div>

                            <div class="text-3xl font-bold gradient-wave mb-1 number-counter" data-value="5">$0B+

                            </div>

                            <div class="text-gray-400 mt-1">Total Value Locked</div>

                        </div>

                    </div>



                    <!-- Users Card -->

                    <div

                        class="stats-card glass-card rounded-2xl p-6 hover:border-[#00F5A0]/30 border border-transparent transition-all duration-300">

                        <div class="flex flex-col items-center">

                            <div

                                class="w-12 h-12 rounded-xl bg-gradient-to-r from-[#7C3AED]/10 to-[#EC4899]/10 flex items-center justify-center mb-4">

                                <svg class="w-6 h-6 text-[#7C3AED]" fill="none" stroke="currentColor"

                                    viewBox="0 0 24 24">

                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"

                                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />

                                </svg>

                            </div>

                            <div class="text-3xl font-bold gradient-wave mb-1 number-counter" data-value="250">0K+

                            </div>

                            <div class="text-gray-400 mt-1">Active Users</div>

                        </div>

                    </div>



                    <!-- APY Card -->

                    <div

                        class="stats-card glass-card rounded-2xl p-6 hover:border-[#00F5A0]/30 border border-transparent transition-all duration-300">

                        <div class="flex flex-col items-center">

                            <div

                                class="w-12 h-12 rounded-xl bg-gradient-to-r from-[#EC4899]/10 to-[#00F5A0]/10 flex items-center justify-center mb-4">

                                <svg class="w-6 h-6 text-[#EC4899]" fill="none" stroke="currentColor"

                                    viewBox="0 0 24 24">

                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"

                                        d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />

                                </svg>

                            </div>

                            <div class="text-3xl font-bold gradient-wave mb-1 number-counter" data-value="42">0%

                            </div>

                            <div class="text-gray-400 mt-1">Max APY</div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>



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

                    <div

                        class="inline-flex items-center space-x-2 bg-white/5 backdrop-blur-xl border border-white/10 text-[#00F5A0] px-6 py-3 rounded-full text-sm mb-12 hover:scale-105 transition-transform">

                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">

                            <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z" />

                            <path fill-rule="evenodd"

                                d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z"

                                clip-rule="evenodd" />

                        </svg>

                        <span class="font-medium">Next-Gen Trading Platform</span>

                    </div>



                    <!-- Heading with enhanced styling -->

                    <h2 class="clash-display text-6xl md:text-7xl font-bold mb-8 leading-tight">

                        <span class="gradient-wave inline-block mb-2">Trade Smarter</span>

                        <br />

                        <span class="text-white relative">

                            Not Harder

                            <span

                                class="absolute -bottom-2 left-0 w-1/2 h-1 bg-gradient-to-r from-[#00F5A0] to-transparent"></span>

                        </span>

                    </h2>



                    <p class="text-gray-400 text-xl mb-12 leading-relaxed max-w-xl">

                        Experience the future of trading with our AI-powered platform.

                        Advanced analytics, real-time insights, and automated strategies

                        all in the palm of your hand.

                    </p>



                    <!-- Enhanced Feature Items -->

                    <div class="space-y-8">

                        <div

                            class="group flex items-center space-x-6 feature-item p-4 rounded-2xl hover:bg-white/5 transition-all">

                            <div

                                class="w-16 h-16 rounded-2xl bg-gradient-to-r from-[#00F5A0]/10 to-[#00D9F5]/10 flex items-center justify-center group-hover:scale-110 transition-transform">

                                <svg class="w-8 h-8 text-[#00F5A0]" fill="none" stroke="currentColor"

                                    viewBox="0 0 24 24">

                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"

                                        d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />

                                </svg>

                            </div>

                            <div>

                                <h3 class="text-white text-xl font-semibold mb-2">Real-Time Analytics</h3>

                                <p class="text-gray-400 text-lg">Advanced insights powered by AI</p>

                            </div>

                        </div>



                        <div

                            class="group flex items-center space-x-6 feature-item p-4 rounded-2xl hover:bg-white/5 transition-all">

                            <div

                                class="w-16 h-16 rounded-2xl bg-gradient-to-r from-[#7C3AED]/10 to-[#EC4899]/10 flex items-center justify-center group-hover:scale-110 transition-transform">

                                <svg class="w-8 h-8 text-[#7C3AED]" fill="none" stroke="currentColor"

                                    viewBox="0 0 24 24">

                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"

                                        d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />

                                </svg>

                            </div>

                            <div>

                                <h3 class="text-white text-xl font-semibold mb-2">Bank-Grade Security</h3>

                                <p class="text-gray-400 text-lg">Enterprise-level protection</p>

                            </div>

                        </div>

                    </div>

                </div>



                <!-- Right Content - Enhanced Phone Mockup -->

                <div class="relative perspective-device lg:pl-10">

                    <div class="device-wrapper relative">

                        <!-- Decorative elements -->

                        <div

                            class="absolute -top-20 -right-20 w-40 h-40 bg-gradient-to-r from-[#00F5A0]/20 to-[#00D9F5]/20 rounded-full blur-2xl animate-pulse">

                        </div>

                        <div

                            class="absolute -bottom-20 -left-20 w-56 h-56 bg-gradient-to-r from-[#7C3AED]/20 to-[#EC4899]/20 rounded-full blur-2xl animate-pulse delay-150">

                        </div>



                        <!-- Phone Container with enhanced styling -->

                        <div

                            class="relative max-w-[380px] mx-auto transform rotate-6 hover:rotate-0 transition-transform duration-700">

                            <div class="relative rounded-[48px] p-4 bg-gray-900 shadow-2xl">

                                <!-- Phone Screen -->

                                <img src="./img/phone.jpg" alt="Mobile App Interface"

                                    class="rounded-[35px] w-full shadow-lg" />



                                <!-- Glowing effect -->

                                <div

                                    class="absolute inset-0 rounded-[48px] bg-gradient-to-tr from-[#00F5A0]/20 to-[#00D9F5]/20 opacity-60 pointer-events-none">

                                </div>



                                <!-- Screen reflection -->

                                <div

                                    class="absolute inset-0 rounded-[48px] bg-gradient-to-b from-transparent via-white/5 to-transparent">

                                </div>

                            </div>



                            <!-- Bottom reflection -->

                            <div

                                class="absolute -bottom-20 left-1/2 -translate-x-1/2 w-[80%] h-40 bg-gradient-to-b from-[#00F5A0]/30 to-transparent blur-2xl transform -scale-y-100 opacity-50">

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>









    <section class="relative min-h-screen py-32 overflow-hidden">

        <div id="visualization-container"></div>

        <div class="gradient-overlay"></div>



        <div class="content-wrapper container mx-auto px-6">

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

                <!-- Left Column -->

                <div class="lg:pr-10">

                    <div

                        class="inline-flex items-center space-x-2 bg-white/5 backdrop-blur-xl border border-white/10 text-[#00F5A0] px-6 py-3 rounded-full text-sm mb-12 hover:scale-105 transition-transform">

                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">

                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />

                            <path fill-rule="evenodd"

                                d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"

                                clip-rule="evenodd" />

                        </svg>

                        <span class="font-medium">AI-Powered Insights</span>

                    </div>



                    <h2 class="clash-display text-6xl font-bold mb-8 leading-tight">

                        <span class="gradient-wave">Intelligent</span>

                        <br />

                        <span class="text-white">Risk Management</span>

                    </h2>



                    <p class="text-gray-400 text-xl mb-12">

                        Our advanced AI algorithms analyze market patterns 24/7, helping you make informed decisions and

                        maximize returns while minimizing exposure.

                    </p>



                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-12">

                        <div class="glass-card p-6 rounded-2xl hover:scale-105 transition-all duration-300">

                            <div class="text-4xl font-bold gradient-text mb-2">98%</div>

                            <div class="text-gray-400">Risk Detection Rate</div>

                        </div>



                        <div class="glass-card p-6 rounded-2xl hover:scale-105 transition-all duration-300">

                            <div class="text-4xl font-bold gradient-text mb-2">0.1s</div>

                            <div class="text-gray-400">Response Time</div>

                        </div>

                    </div>



                    <button

                        class="bg-gradient-to-r from-[#00F5A0] to-[#00D9F5] text-black font-semibold px-8 py-4 rounded-xl hover:scale-105 transition-all duration-300 btn-glow">

                        Start Trading Now →

                    </button>

                </div>



                <!-- Right Column -->

                <div class="space-y-6">

                    <div class="feature-card glass-card p-6 rounded-2xl border border-white/10">

                        <div class="flex items-center space-x-4 mb-4">

                            <div

                                class="w-12 h-12 rounded-xl bg-gradient-to-r from-[#00F5A0]/20 to-[#00D9F5]/20 flex items-center justify-center">

                                <svg class="w-6 h-6 text-[#00F5A0]" fill="none" stroke="currentColor"

                                    viewBox="0 0 24 24">

                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"

                                        d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />

                                </svg>

                            </div>

                            <h3 class="text-xl font-semibold">Advanced Analytics</h3>

                        </div>

                        <p class="text-gray-400">Real-time market analysis with predictive modeling and trend

                            forecasting.</p>

                    </div>



                    <div class="feature-card glass-card p-6 rounded-2xl border border-white/10">

                        <div class="flex items-center space-x-4 mb-4">

                            <div

                                class="w-12 h-12 rounded-xl bg-gradient-to-r from-[#7C3AED]/20 to-[#EC4899]/20 flex items-center justify-center">

                                <svg class="w-6 h-6 text-[#7C3AED]" fill="none" stroke="currentColor"

                                    viewBox="0 0 24 24">

                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"

                                        d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />

                                </svg>

                            </div>

                            <h3 class="text-xl font-semibold">Secure Trading</h3>

                        </div>

                        <p class="text-gray-400">Multi-layer security with biometric authentication and encrypted

                            transactions.</p>

                    </div>



                    <div class="feature-card glass-card p-6 rounded-2xl border border-white/10">

                        <div class="flex items-center space-x-4 mb-4">

                            <div

                                class="w-12 h-12 rounded-xl bg-gradient-to-r from-[#EC4899]/20 to-[#00F5A0]/20 flex items-center justify-center">

                                <svg class="w-6 h-6 text-[#EC4899]" fill="none" stroke="currentColor"

                                    viewBox="0 0 24 24">

                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"

                                        d="M13 10V3L4 14h7v7l9-11h-7z" />

                                </svg>

                            </div>

                            <h3 class="text-xl font-semibold">Lightning Fast</h3>

                        </div>

                        <p class="text-gray-400">Execute trades at microsecond speeds with our optimized infrastructure.

                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>







    <!-- Features Section -->

    <section class="relative min-h-screen py-32 overflow-hidden">

        <div class="absolute inset-0 bg-gradient-to-b from-black to-gray-900"></div>

        <div class="container mx-auto px-6 relative z-10">

            <div class="text-center mb-20">

                <h2 class="clash-display text-6xl font-bold mb-8">

                    <span class="gradient-text">Advanced Features</span>

                    <br />

                    for Modern Finance

                </h2>

                <p class="text-gray-400 text-xl max-w-2xl mx-auto">

                    Experience the next generation of DeFi with our comprehensive suite of tools

                </p>

            </div>



            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                <div class="glass-card rounded-2xl p-8 hover:scale-105 transition-all duration-300">

                    <div

                        class="w-14 h-14 rounded-xl bg-gradient-to-r from-[#00F5A0]/10 to-[#00D9F5]/10 flex items-center justify-center mb-6">

                        <svg class="w-8 h-8 text-[#00F5A0]" fill="none" stroke="currentColor" viewBox="0 0 24 24">

                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"

                                d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />

                        </svg>

                    </div>

                    <h3 class="text-2xl font-bold mb-4">AI-Powered Analytics</h3>

                    <p class="text-gray-400">Advanced market analysis and predictive modeling for optimal trading

                        decisions</p>

                </div>



                <div class="glass-card rounded-2xl p-8 hover:scale-105 transition-all duration-300">

                    <div

                        class="w-14 h-14 rounded-xl bg-gradient-to-r from-[#7C3AED]/10 to-[#EC4899]/10 flex items-center justify-center mb-6">

                        <svg class="w-8 h-8 text-[#7C3AED]" fill="none" stroke="currentColor" viewBox="0 0 24 24">

                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"

                                d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />

                        </svg>

                    </div>

                    <h3 class="text-2xl font-bold mb-4">Smart Yield Farming</h3>

                    <p class="text-gray-400">Automated yield optimization across multiple protocols and chains</p>

                </div>



                <div class="glass-card rounded-2xl p-8 hover:scale-105 transition-all duration-300">

                    <div

                        class="w-14 h-14 rounded-xl bg-gradient-to-r from-[#EC4899]/10 to-[#00F5A0]/10 flex items-center justify-center mb-6">

                        <svg class="w-8 h-8 text-[#EC4899]" fill="none" stroke="currentColor" viewBox="0 0 24 24">

                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"

                                d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />

                        </svg>

                    </div>

                    <h3 class="text-2xl font-bold mb-4">Enterprise Security</h3>

                    <p class="text-gray-400">Multi-layer security with institutional-grade protection protocols</p>

                </div>

            </div>

        </div>

    </section>



    <!-- CTA Section -->

    <section class="relative py-32 overflow-hidden">

        <div class="absolute inset-0 bg-gradient-to-b from-gray-900 to-black"></div>

        <div class="container mx-auto px-6 relative z-10">

            <div class="max-w-4xl mx-auto text-center glass-card rounded-3xl p-12 border border-white/10">

                <h2 class="clash-display text-5xl font-bold mb-6">

                    Ready to Start Your <span class="gradient-text">DeFi Journey?</span>

                </h2>

                <p class="text-gray-400 text-xl mb-8">

                    Join thousands of traders and investors already using NexFin

                </p>

                <div class="flex flex-col sm:flex-row justify-center gap-4">

                    <button

                        class="bg-gradient-to-r from-[#00F5A0] to-[#00D9F5] text-black font-semibold px-8 py-4 rounded-xl hover:scale-105 transition-all duration-300">

                        Get Started Now →

                    </button>

                    <button class="px-8 py-4 rounded-xl gradient-border hover:scale-105 transition-all duration-300">

                        Schedule Demo

                    </button>

                </div>

            </div>

        </div>

    </section>



    <!-- Footer -->
<?php
 include('includes/Footer.php'); 
?>

    <script src="js/Flow.js"></script>

    <script>

    // Add mouse movement parallax effect to cards

    document.querySelectorAll('.glass-card, .feature-card').forEach(card => {

        card.addEventListener('mousemove', (e) => {

            const rect = card.getBoundingClientRect();

            const x = e.clientX - rect.left;

            const y = e.clientY - rect.top;



            const centerX = rect.width / 2;

            const centerY = rect.height / 2;



            const rotateX = (y - centerY) / 15;

            const rotateY = (centerX - x) / 15;



            card.style.transform =

                `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale3d(1.02, 1.02, 1.02)`;

        });



        card.addEventListener('mouseleave', () => {

            card.style.transform = 'perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1)';

        });

    });



    // Animate numbers in stats

    document.querySelectorAll('.gradient-text').forEach(stat => {

        const value = parseFloat(stat.textContent);

        const suffix = stat.textContent.replace(/[0-9.]/g, '');

        let start = 0;



        const increment = value / 50;

        const duration = 2000;

        const startTime = performance.now();



        function updateNumber(currentTime) {

            const elapsed = currentTime - startTime;

            const progress = Math.min(elapsed / duration, 1);



            start += increment;

            if (progress < 1) {

                stat.textContent = Math.min(start, value).toFixed(1) + suffix;

                requestAnimationFrame(updateNumber);

            } else {

                stat.textContent = value + suffix;

            }

        }



        requestAnimationFrame(updateNumber);

    });



    // Add floating effect to icons

    document.querySelectorAll('.w-12').forEach(icon => {

        let rotation = 0;

        let floating = 0;



        function animate() {

            rotation = Math.sin(Date.now() / 1000) * 5;

            floating = Math.sin(Date.now() / 1500) * 5;



            icon.style.transform = `rotate(${rotation}deg) translateY(${floating}px)`;

            requestAnimationFrame(animate);

        }



        animate();

    });



    // Create particle background effect

    const visualizationContainer = document.getElementById('visualization-container');

    const particles = [];

    const particleCount = 50;



    class Particle {

        constructor() {

            this.x = Math.random() * visualizationContainer.offsetWidth;

            this.y = Math.random() * visualizationContainer.offsetHeight;

            this.size = Math.random() * 2 + 1;

            this.speedX = Math.random() * 2 - 1;

            this.speedY = Math.random() * 2 - 1;

            this.color = `rgba(${Math.random() * 255}, ${Math.random() * 255}, 255, 0.5)`;

        }



        update() {

            this.x += this.speedX;

            this.y += this.speedY;



            if (this.x > visualizationContainer.offsetWidth) this.x = 0;

            if (this.x < 0) this.x = visualizationContainer.offsetWidth;

            if (this.y > visualizationContainer.offsetHeight) this.y = 0;

            if (this.y < 0) this.y = visualizationContainer.offsetHeight;

        }

    }



    // Initialize particles

    for (let i = 0; i < particleCount; i++) {

        particles.push(new Particle());

    }



    // Animation loop for particles

    function animateParticles() {

        const canvas = document.createElement('canvas');

        canvas.style.position = 'absolute';

        canvas.style.top = '0';

        canvas.style.left = '0';

        canvas.width = visualizationContainer.offsetWidth;

        canvas.height = visualizationContainer.offsetHeight;

        visualizationContainer.appendChild(canvas);



        const ctx = canvas.getContext('2d');



        function animate() {

            ctx.clearRect(0, 0, canvas.width, canvas.height);



            particles.forEach(particle => {

                particle.update();

                ctx.beginPath();

                ctx.arc(particle.x, particle.y, particle.size, 0, Math.PI * 2);

                ctx.fillStyle = particle.color;

                ctx.fill();

            });



            requestAnimationFrame(animate);

        }



        animate();

    }



    // Start animations when the page loads

    window.addEventListener('load', animateParticles);

    </script>

</body>