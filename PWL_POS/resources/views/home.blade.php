<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - POS System</title>
    <!-- Using Tailwind CDN to ensure styling works without build process -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-slate-900 text-slate-100 font-sans flex h-screen overflow-hidden">

    <!-- Sidebar (Shared in all pages manually) -->
    <aside class="w-64 bg-slate-800 border-r border-slate-700 flex flex-col shrink-0">
        <div class="p-6 border-b border-slate-700">
            <h1 class="text-2xl font-black text-blue-400">⚡ POS SYSTEM</h1>
        </div>
        
        <nav class="flex-1 p-4 space-y-2 overflow-y-auto">
            <a href="{{ route('home') }}" class="flex items-center gap-3 p-3 bg-blue-600 rounded-xl font-bold shadow-lg shadow-blue-900/20">
                <i class="fa-solid fa-gauge-high"></i>
                <span>Dashboard</span>
            </a>
            
            <div class="pt-4 pb-2">
                <p class="text-xs font-bold text-slate-500 uppercase tracking-widest px-3">Products</p>
            </div>
            <a href="{{ route('category.food-beverage') }}" class="flex items-center gap-3 p-3 hover:bg-slate-700 rounded-xl transition-all">
                <i class="fa-solid fa-utensils text-orange-400"></i>
                <span>Food & Beverage</span>
            </a>
            <a href="{{ route('category.beauty-health') }}" class="flex items-center gap-3 p-3 hover:bg-slate-700 rounded-xl transition-all">
                <i class="fa-solid fa-heart-pulse text-pink-400"></i>
                <span>Beauty & Health</span>
            </a>
            <a href="{{ route('category.home-care') }}" class="flex items-center gap-3 p-3 hover:bg-slate-700 rounded-xl transition-all">
                <i class="fa-solid fa-house-chimney text-green-400"></i>
                <span>Home Care</span>
            </a>
            <a href="{{ route('category.baby-kid') }}" class="flex items-center gap-3 p-3 hover:bg-slate-700 rounded-xl transition-all">
                <i class="fa-solid fa-baby text-blue-300"></i>
                <span>Baby & Kid</span>
            </a>

            <div class="pt-4 pb-2 text-xs font-bold text-slate-500 uppercase tracking-widest px-3">Transaction</div>
            <a href="{{ route('sales.index') }}" class="flex items-center gap-3 p-3 hover:bg-slate-700 rounded-xl transition-all">
                <i class="fa-solid fa-cart-shopping text-emerald-400"></i>
                <span>POS Window</span>
            </a>

            <div class="pt-4 pb-2 text-xs font-bold text-slate-500 uppercase tracking-widest px-3">System</div>
            <a href="{{ route('user.profile', ['id' => 7, 'name' => 'JohnDoe']) }}" class="flex items-center gap-3 p-3 hover:bg-slate-700 rounded-xl transition-all">
                <i class="fa-solid fa-circle-user text-indigo-400"></i>
                <span>User Profile</span>
            </a>
        </nav>

        <div class="p-4 border-t border-slate-700">
            <div class="flex items-center gap-3 p-2 bg-slate-700/50 rounded-lg">
                <div class="w-8 h-8 rounded-full bg-blue-500 flex items-center justify-center font-bold">JD</div>
                <div class="text-xs">
                    <p class="font-bold">John Doe</p>
                    <p class="text-slate-400">Administrator</p>
                </div>
            </div>
        </div>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 flex flex-col min-w-0 bg-slate-900 overflow-y-auto">
        <!-- Topbar -->
        <header class="h-16 border-b border-slate-800 bg-slate-900/50 backdrop-blur-md sticky top-0 z-30 flex items-center justify-between px-8">
            <h2 class="text-xl font-bold">Dashboard Summary</h2>
            <div class="flex items-center gap-4 text-slate-400">
                <span id="currentTime">Tuesday, Feb 24, 2026</span>
                <i class="fa-solid fa-bell hover:text-white cursor-pointer transition-colors"></i>
            </div>
        </header>

        <!-- Content Area -->
        <div class="p-8">
            <!-- Stats -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <div class="bg-slate-800 p-6 rounded-3xl border border-slate-700 hover:border-blue-500/50 transition-all">
                    <div class="flex justify-between items-start mb-4">
                        <div class="p-3 bg-blue-500/20 text-blue-400 rounded-xl">
                            <i class="fa-solid fa-dollar-sign text-xl"></i>
                        </div>
                        <span class="text-xs text-green-400 font-bold bg-green-400/10 px-2 py-1 rounded-lg">+12.5%</span>
                    </div>
                    <p class="text-slate-400 text-sm font-medium">Daily Revenue</p>
                    <p class="text-2xl font-black mt-1">$4,250.00</p>
                </div>

                <div class="bg-slate-800 p-6 rounded-3xl border border-slate-700 hover:border-emerald-500/50 transition-all">
                    <div class="flex justify-between items-start mb-4">
                        <div class="p-3 bg-emerald-500/20 text-emerald-400 rounded-xl">
                            <i class="fa-solid fa-receipt text-xl"></i>
                        </div>
                        <span class="text-xs text-green-400 font-bold bg-green-400/10 px-2 py-1 rounded-lg">+4.2%</span>
                    </div>
                    <p class="text-slate-400 text-sm font-medium">Transactions</p>
                    <p class="text-2xl font-black mt-1">128</p>
                </div>

                <div class="bg-slate-800 p-6 rounded-3xl border border-slate-700 hover:border-orange-500/50 transition-all">
                    <div class="flex justify-between items-start mb-4">
                        <div class="p-3 bg-orange-500/20 text-orange-400 rounded-xl">
                            <i class="fa-solid fa-boxes-stacked text-xl"></i>
                        </div>
                    </div>
                    <p class="text-slate-400 text-sm font-medium">Items Out-of-Stock</p>
                    <p class="text-2xl font-black mt-1 text-orange-400">12</p>
                </div>

                <div class="bg-slate-800 p-6 rounded-3xl border border-slate-700 hover:border-indigo-500/50 transition-all">
                    <div class="flex justify-between items-start mb-4">
                        <div class="p-3 bg-indigo-500/20 text-indigo-400 rounded-xl">
                            <i class="fa-solid fa-users text-xl"></i>
                        </div>
                    </div>
                    <p class="text-slate-400 text-sm font-medium">New Customers</p>
                    <p class="text-2xl font-black mt-1">45</p>
                </div>
            </div>

            <!-- Recent Activity Placeholder -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <div class="bg-slate-800 p-8 rounded-3xl border border-slate-700">
                    <h3 class="text-lg font-bold mb-6">Recent Sales</h3>
                    <div class="space-y-6">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-4">
                                <div class="w-10 h-10 bg-slate-700 rounded-full flex items-center justify-center">
                                    <i class="fa-solid fa-user text-xs"></i>
                                </div>
                                <div>
                                    <p class="font-bold">Transaction #4592</p>
                                    <p class="text-xs text-slate-500">2 minutes ago</p>
                                </div>
                            </div>
                            <p class="font-black text-blue-400">$120.00</p>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-4">
                                <div class="w-10 h-10 bg-slate-700 rounded-full flex items-center justify-center">
                                    <i class="fa-solid fa-user text-xs"></i>
                                </div>
                                <div>
                                    <p class="font-bold">Transaction #4591</p>
                                    <p class="text-xs text-slate-500">15 minutes ago</p>
                                </div>
                            </div>
                            <p class="font-black text-blue-400">$45.50</p>
                        </div>
                    </div>
                </div>

                <div class="bg-slate-800 p-8 rounded-3xl border border-slate-700">
                    <h3 class="text-lg font-bold mb-6">Quick Actions</h3>
                    <div class="grid grid-cols-2 gap-4">
                        <a href="{{ route('sales.index') }}" class="flex flex-col items-center justify-center p-6 bg-emerald-600/10 border border-emerald-500/20 rounded-2xl hover:bg-emerald-600/20 transition-all text-emerald-400">
                            <i class="fa-solid fa-circle-plus text-2xl mb-2"></i>
                            <span class="font-bold">New Sale</span>
                        </a>
                        <a href="{{ route('category.food-beverage') }}" class="flex flex-col items-center justify-center p-6 bg-orange-600/10 border border-orange-500/20 rounded-2xl hover:bg-orange-600/20 transition-all text-orange-400">
                            <i class="fa-solid fa-list text-2xl mb-2"></i>
                            <span class="font-bold">Product List</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>
</html>
