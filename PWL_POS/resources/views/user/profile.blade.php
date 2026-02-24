<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile - POS System</title>
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
            <a href="{{ route('home') }}" class="flex items-center gap-3 p-3 hover:bg-slate-700 rounded-xl transition-all">
                <i class="fa-solid fa-gauge-high text-slate-400"></i>
                <span>Dashboard</span>
            </a>
            
            <div class="pt-4 pb-2 text-xs font-bold text-slate-500 uppercase tracking-widest px-3">Products</div>
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
            <a href="{{ route('user.profile', ['id' => $id, 'name' => $name]) }}" class="flex items-center gap-3 p-3 bg-blue-600 rounded-xl font-bold shadow-lg shadow-blue-900/20">
                <i class="fa-solid fa-circle-user"></i>
                <span>User Profile</span>
            </a>
        </nav>
    </aside>

    <main class="flex-1 flex flex-col bg-slate-900 overflow-y-auto">
        <header class="h-16 border-b border-slate-800 bg-slate-900/50 backdrop-blur-md sticky top-0 z-30 flex items-center px-8">
            <h2 class="text-xl font-bold">Account Settings</h2>
        </header>

        <div class="p-8">
            <div class="max-w-2xl bg-slate-800 rounded-3xl border border-slate-700 overflow-hidden shadow-2xl">
                <div class="bg-blue-600 h-32 relative">
                    <div class="absolute -bottom-12 left-8 border-4 border-slate-800 rounded-2xl overflow-hidden">
                        <div class="w-24 h-24 bg-slate-700 flex items-center justify-center text-4xl font-black text-white">
                            {{ strtoupper(substr($name, 0, 1)) }}
                        </div>
                    </div>
                </div>
                <div class="pt-16 p-8">
                    <h3 class="text-2xl font-black">{{ $name }}</h3>
                    <p class="text-slate-400 font-medium">User ID: #{{ $id }}</p>
                    
                    <div class="mt-8 grid grid-cols-2 gap-8 border-t border-slate-700/50 pt-8">
                        <div>
                            <p class="text-xs font-bold text-slate-500 uppercase mb-1">Position</p>
                            <p class="font-bold">Store Manager</p>
                        </div>
                        <div>
                            <p class="text-xs font-bold text-slate-500 uppercase mb-1">Status</p>
                            <span class="px-2 py-0.5 bg-green-500/10 text-green-400 rounded-lg text-xs font-bold border border-green-500/20">Active</span>
                        </div>
                        <div>
                            <p class="text-xs font-bold text-slate-500 uppercase mb-1">Registered At</p>
                            <p class="font-bold">2024-01-15</p>
                        </div>
                        <div>
                            <p class="text-xs font-bold text-slate-500 uppercase mb-1">Permissions</p>
                            <p class="font-bold">Full Access</p>
                        </div>
                    </div>

                    <div class="mt-10 flex gap-4">
                        <button class="px-6 py-2 bg-slate-700 hover:bg-slate-650 rounded-xl font-bold transition-all text-sm">Edit Profile</button>
                        <button class="px-6 py-2 bg-red-600/10 hover:bg-red-600/20 text-red-400 border border-red-500/20 rounded-xl font-bold transition-all text-sm">Logout</button>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>
</html>
