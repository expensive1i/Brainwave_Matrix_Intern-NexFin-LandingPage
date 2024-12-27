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
                    <div class="inline-flex items-center px-4 py-2 rounded-full bg-white/5 border border-white/10 text-[#00F5A0] mb-6">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                        </svg>
                        Developer Portal
                    </div>
                    <h1 class="clash-display text-5xl md:text-7xl font-bold mb-6 leading-tight">
                        Build the Future of <br/>
                        <span class="bg-gradient-to-r from-[#00F5A0] to-[#00D9F5] text-transparent bg-clip-text">DeFi</span>
                    </h1>
                    <p class="text-gray-400 text-lg md:text-xl max-w-2xl mx-auto mb-8">
                        Access powerful APIs, comprehensive documentation, and developer tools to integrate with NexFin's DeFi protocol.
                    </p>
                    <div class="flex flex-col sm:flex-row justify-center gap-4">
                        <a href="#" class="px-8 py-4 rounded-xl bg-gradient-to-r from-[#00F5A0] to-[#00D9F5] text-black font-semibold hover:scale-105 transition-transform">
                            Get API Keys
                        </a>
                        <a href="#" class="px-8 py-4 rounded-xl border border-white/10 hover:border-[#00F5A0]/30 transition-all">
                            View Documentation
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Quick Start Section -->
    <section class="py-20 bg-black/50">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold mb-12">Quick Start Guides</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- REST API -->
                <div class="group">
                    <div class="h-full p-8 rounded-2xl bg-white/5 border border-white/10 hover:border-[#00F5A0]/30 transition-all duration-300">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 rounded-xl bg-gradient-to-r from-[#00F5A0]/10 to-[#00D9F5]/10 flex items-center justify-center group-hover:scale-110 transition-transform">
                                <svg class="w-6 h-6 text-[#00F5A0]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-xl font-bold mb-4">REST API</h3>
                        <p class="text-gray-400 mb-6">Integrate with our REST API for trading, account management, and market data.</p>
                        <div class="flex items-center text-[#00F5A0] hover:underline cursor-pointer">
                            View Documentation →
                        </div>
                    </div>
                </div>

                <!-- WebSocket API -->
                <div class="group">
                    <div class="h-full p-8 rounded-2xl bg-white/5 border border-white/10 hover:border-[#00F5A0]/30 transition-all duration-300">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 rounded-xl bg-gradient-to-r from-[#7C3AED]/10 to-[#EC4899]/10 flex items-center justify-center group-hover:scale-110 transition-transform">
                                <svg class="w-6 h-6 text-[#7C3AED]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-xl font-bold mb-4">WebSocket API</h3>
                        <p class="text-gray-400 mb-6">Real-time market data and order updates through WebSocket connections.</p>
                        <div class="flex items-center text-[#00F5A0] hover:underline cursor-pointer">
                            Learn More →
                        </div>
                    </div>
                </div>

                <!-- Smart Contracts -->
                <div class="group">
                    <div class="h-full p-8 rounded-2xl bg-white/5 border border-white/10 hover:border-[#00F5A0]/30 transition-all duration-300">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 rounded-xl bg-gradient-to-r from-[#EC4899]/10 to-[#00F5A0]/10 flex items-center justify-center group-hover:scale-110 transition-transform">
                                <svg class="w-6 h-6 text-[#EC4899]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-xl font-bold mb-4">Smart Contracts</h3>
                        <p class="text-gray-400 mb-6">Explore our smart contracts and learn how to interact with them.</p>
                        <div class="flex items-center text-[#00F5A0] hover:underline cursor-pointer">
                            Explore Contracts →
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Code Examples -->
    <section class="py-20 bg-black">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold mb-12">Code Examples</h2>
            
            <!-- REST API Example -->
            <div class="mb-12">
                <h3 class="text-xl font-bold mb-4">REST API Example</h3>
                <div class="rounded-xl bg-gray-900 p-6 overflow-hidden">
                    <pre class="text-sm overflow-x-auto"><code class="language-javascript">
const API_KEY = 'your-api-key';
const API_SECRET = 'your-api-secret';

// Create a new order
async function createOrder() {
    const response = await fetch('https://api.nexfin.com/v1/order', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-API-Key': API_KEY,
            'X-API-Secret': API_SECRET
        },
        body: JSON.stringify({
            symbol: 'BTC-USD',
            side: 'buy',
            type: 'limit',
            price: '50000',
            quantity: '1.0'
        })
    });
    
    return await response.json();
}
                    </code></pre>
                </div>
            </div>

            <!-- WebSocket Example -->
            <div class="mb-12">
                <h3 class="text-xl font-bold mb-4">WebSocket API Example</h3>
                <div class="rounded-xl bg-gray-900 p-6 overflow-hidden">
                    <pre class="text-sm overflow-x-auto"><code class="language-javascript">
const ws = new WebSocket('wss://ws.nexfin.com');

ws.onopen = () => {
    // Subscribe to market data
    ws.send(JSON.stringify({
        type: 'subscribe',
        channel: 'market_data',
        symbol: 'BTC-USD'
    }));
};

ws.onmessage = (event) => {
    const data = JSON.parse(event.data);
    console.log('Received market data:', data);
};
                    </code></pre>
                </div>
            </div>
        </div>
    </section>

    <!-- SDKs & Tools -->
    <section class="py-20 bg-black/50">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold mb-12">SDKs & Tools</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- JavaScript SDK -->
                <a href="#" class="group">
                    <div class="p-6 rounded-2xl bg-white/5 border border-white/10 hover:border-[#00F5A0]/30 transition-all duration-300">
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 rounded-xl bg-gradient-to-r from-[#00F5A0]/10 to-[#00D9F5]/10 flex items-center justify-center group-hover:scale-110 transition-transform">
                                <svg class="w-6 h-6 text-[#00F5A0]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                                </svg>
                            </div>
                            <span class="font-semibold">JavaScript SDK</span>
                        </div>
                    </div>
                </a>

                <!-- Python SDK -->
                <a href="#" class="group">
                    <div class="p-6 rounded-2xl bg-white/5 border border-white/10 hover:border-[#00F5A0]/30 transition-all duration-300">
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 rounded-xl bg-gradient-to-r from-[#7C3AED]/10 to-[#EC4899]/10 flex items-center justify-center group-hover:scale-110 transition-transform">
                                <svg class="w-6 h-6 text-[#7C3AED]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                                </svg>
                            </div>
                            <span class="font-semibold">Python SDK</span>
                        </div>
                    </div>
                </a>

                <!-- Java SDK -->
                <a href="#" class="group">
                    <div class="p-6 rounded-2xl bg-white/5 border border-white/10 hover:border-[#00F5A0]/30 transition-all duration-300">
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 rounded-xl bg-gradient-to-r from-[#EC4899]/10 to-[#00F5A0]/10 flex items-center justify-center group-hover:scale-110 transition-transform">
                                <svg class="w-6 h-6 text-[#EC4899]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                                </svg>
                            </div>
                            <span class="font-semibold">Java SDK</span>
                        </div>
                    </div>
                </a>

                <!-- Go SDK -->
                <a href="#" class="group">
                    <div class="p-6 rounded-2xl bg-white/5 border border-white/10 hover:border-[#00F5A0]/30 transition-all duration-300">
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 rounded-xl bg-gradient-to-r from-[#00F5A0]/10 to-[#7C3AED]/10 flex items-center justify-center group-hover:scale-110 transition-transform">
                                <svg class="w-6 h-6 text-[#00F5A0]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                                </svg>
                            </div>
                            <span class="font-semibold">Go SDK</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Developer Support -->
    <section class="py-20 bg-gradient-to-b from-black to-gray-900">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl font-bold mb-6">Developer Support</h2>
                <p class="text-gray-400 text-lg mb-8">
                    Get help from our developer community and support team
                </p>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <a href="#" class="p-6 rounded-2xl bg-white/5 border border-white/10 hover:border-[#00F5A0]/30 transition-all duration-300">
                        <svg class="w-8 h-8 text-[#00F5A0] mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                        </svg>
                        <h3 class="font-semibold mb-2">Discord Community</h3>
                        <p class="text-gray-400 text-sm">Join our developer chat</p>
                    </a>

                    <a href="#" class="p-6 rounded-2xl bg-white/5 border border-white/10 hover:border-[#00F5A0]/30 transition-all duration-300">
                        <svg class="w-8 h-8 text-[#00F5A0] mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        <h3 class="font-semibold mb-2">Email Support</h3>
                        <p class="text-gray-400 text-sm">Priority developer support</p>
                    </a>

                    <a href="#" class="p-6 rounded-2xl bg-white/5 border border-white/10 hover:border-[#00F5A0]/30 transition-all duration-300">
                        <svg class="w-8 h-8 text-[#00F5A0] mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                        </svg>
                        <h3 class="font-semibold mb-2">Documentation</h3>
                        <p class="text-gray-400 text-sm">Detailed API references</p>
                    </a>
                </div>
            </div>
        </div>
    </section>

<?php
include('./includes/footer.php');
?>
