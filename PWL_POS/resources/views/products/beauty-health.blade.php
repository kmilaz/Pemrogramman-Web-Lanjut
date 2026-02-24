<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beauty & Health - POS System</title>
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
            <a href="{{ route('category.beauty-health') }}" class="flex items-center gap-3 p-3 bg-blue-600 rounded-xl font-bold shadow-lg shadow-blue-900/20">
                <i class="fa-solid fa-heart-pulse"></i>
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
    </aside>

    <main class="flex-1 flex flex-col bg-slate-900 overflow-y-auto">
        <header class="h-16 border-b border-slate-800 bg-slate-900/50 backdrop-blur-md sticky top-0 z-30 flex items-center px-8">
            <h2 class="text-xl font-bold">Beauty & Health</h2>
        </header>

        <div class="p-8">
            <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-5 gap-6">
                <!-- Static Products -->
                <div class="bg-slate-800 p-4 rounded-3xl border border-slate-700 hover:border-pink-500 shadow-xl group cursor-pointer transition-all">
                    <div class="aspect-square bg-slate-900 rounded-2xl mb-4 flex items-center justify-center overflow-hidden">
                        <i class="fa-solid fa-face-smile text-4xl text-pink-400 group-hover:scale-110 transition-transform"></i>
                    </div>
                    <p class="font-bold text-sm">Face Cleanser 100ml</p>
                    <p class="text-blue-400 font-extrabold mt-1">$4.25</p>
                </div>
                <div class="bg-slate-800 p-4 rounded-3xl border border-slate-700 hover:border-pink-500 shadow-xl group cursor-pointer transition-all">
                    <div class="aspect-square bg-slate-900 rounded-2xl mb-4 flex items-center justify-center overflow-hidden">
                        <i class="fa-solid fa-spray-can text-4xl text-blue-300 group-hover:scale-110 transition-transform"></i>
                    </div>
                    <p class="font-bold text-sm">Sunscreen SPF 50</p>
                    <p class="text-blue-400 font-extrabold mt-1">$12.50</p>
                </div>
                <div class="bg-slate-800 p-4 rounded-3xl border border-slate-700 hover:border-pink-500 shadow-xl group cursor-pointer transition-all">
                    <div class="aspect-square bg-slate-900 rounded-2xl mb-4 flex items-center justify-center overflow-hidden">
                        <i class="fa-solid fa-prescription-bottle-medical text-4xl text-green-400 group-hover:scale-110 transition-transform"></i>
                    </div>
                    <p class="font-bold text-sm">Multivitamin 60ct</p>
                    <p class="text-blue-400 font-extrabold mt-1">$8.99</p>
                </div>
            </div>
        </div>
    </main>

</body>
</html>
