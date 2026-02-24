<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POS Window - System</title>
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
            <a href="{{ route('sales.index') }}" class="flex items-center gap-3 p-3 bg-blue-600 rounded-xl font-bold shadow-lg shadow-blue-900/20">
                <i class="fa-solid fa-cart-shopping"></i>
                <span>POS Window</span>
            </a>

            <div class="pt-4 pb-2 text-xs font-bold text-slate-500 uppercase tracking-widest px-3">System</div>
            <a href="{{ route('user.profile', ['id' => 7, 'name' => 'JohnDoe']) }}" class="flex items-center gap-3 p-3 hover:bg-slate-700 rounded-xl transition-all">
                <i class="fa-solid fa-circle-user text-indigo-400"></i>
                <span>User Profile</span>
            </a>
        </nav>
    </aside>

    <main class="flex-1 flex flex-col bg-slate-900 overflow-hidden">
        <header class="h-16 border-b border-slate-800 bg-slate-900/50 flex items-center justify-between px-8 shrink-0">
            <h2 class="text-xl font-bold">POS Transaction</h2>
            <div class="text-slate-400 font-bold px-4 py-1 bg-slate-800 rounded-lg text-sm">
                ORDER #1042
            </div>
        </header>

        <div class="flex-1 flex overflow-hidden p-6 gap-6">
            <!-- Items Area -->
            <div class="flex-1 bg-slate-800 rounded-3xl border border-slate-700 flex flex-col overflow-hidden shadow-2xl">
                <div class="p-6 border-b border-slate-700 bg-slate-800/50 flex justify-between items-center shrink-0">
                    <span class="font-bold uppercase text-slate-500 text-xs">Current Basket</span>
                    <button class="text-xs text-red-400 font-bold hover:underline">CLEAR ALL</button>
                </div>
                
                <div class="flex-1 overflow-y-auto p-6 space-y-4">
                    <!-- Sample Items -->
                    <div class="flex items-center gap-4 p-4 bg-slate-900/50 rounded-2xl border border-slate-700">
                        <div class="w-12 h-12 bg-blue-500/10 rounded-xl flex items-center justify-center">
                            <i class="fa-solid fa-glass-water text-blue-400"></i>
                        </div>
                        <div class="flex-1">
                            <p class="font-bold">Mineral Water 500ml</p>
                            <p class="text-xs text-slate-500">$0.50 x 2</p>
                        </div>
                        <p class="font-black">$1.00</p>
                        <button class="w-8 h-8 rounded-full bg-red-400/10 text-red-400 hover:bg-red-400/20 text-xs">×</button>
                    </div>

                    <div class="flex items-center gap-4 p-4 bg-slate-900/50 rounded-2xl border border-slate-700">
                        <div class="w-12 h-12 bg-orange-500/10 rounded-xl flex items-center justify-center">
                            <i class="fa-solid fa-burger text-orange-400"></i>
                        </div>
                        <div class="flex-1">
                            <p class="font-bold">Beef Burger Extra Cheese</p>
                            <p class="text-xs text-slate-500">$3.50 x 1</p>
                        </div>
                        <p class="font-black">$3.50</p>
                        <button class="w-8 h-8 rounded-full bg-red-400/10 text-red-400 hover:bg-red-400/20 text-xs">×</button>
                    </div>
                </div>

                <div class="p-8 border-t border-slate-700 bg-slate-900/50 shrink-0">
                    <div class="flex justify-between text-slate-400 mb-2 font-medium">
                        <span>Subtotal</span>
                        <span>$4.50</span>
                    </div>
                    <div class="flex justify-between text-slate-400 mb-6 font-medium">
                        <span>Tax (11%)</span>
                        <span>$0.50</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-xl font-black italic">TOTAL</span>
                        <span class="text-4xl font-black text-blue-400">$5.00</span>
                    </div>
                </div>
            </div>

            <!-- Payment / Actions Area -->
            <div class="w-96 flex flex-col gap-6 shrink-0">
                <div class="bg-slate-800 rounded-3xl border border-slate-700 p-8 flex-1 flex flex-col shadow-2xl">
                    <h3 class="font-bold text-slate-500 text-xs uppercase mb-6 tracking-widest text-center">Payment Methods</h3>
                    
                    <div class="grid grid-cols-2 gap-4 mb-8">
                        <button class="p-6 bg-slate-900 border-2 border-blue-600 rounded-2xl flex flex-col items-center gap-2 group transition-all">
                            <i class="fa-solid fa-money-bill-1-wave text-blue-400 text-2xl group-hover:scale-110"></i>
                            <span class="text-xs font-black uppercase">Cash</span>
                        </button>
                        <button class="p-6 bg-slate-900 border border-slate-700 rounded-2xl flex flex-col items-center gap-2 group transition-all hover:border-slate-500">
                            <i class="fa-solid fa-credit-card text-slate-400 text-2xl group-hover:scale-110"></i>
                            <span class="text-xs font-black uppercase">Card</span>
                        </button>
                        <button class="p-6 bg-slate-900 border border-slate-700 rounded-2xl flex flex-col items-center gap-2 group transition-all hover:border-slate-500 col-span-2">
                            <i class="fa-solid fa-qrcode text-slate-400 text-2xl group-hover:scale-110"></i>
                            <span class="text-xs font-black uppercase">QRIS / Digital</span>
                        </button>
                    </div>

                    <div class="flex-1 flex flex-col justify-end">
                        <button class="w-full bg-blue-600 hover:bg-blue-500 text-white p-6 rounded-2xl font-black text-xl shadow-xl shadow-blue-900/40 transition-all active:scale-95">
                            COMPLETE PAYMENT
                        </button>
                        <button class="w-full mt-4 text-slate-500 font-bold text-sm hover:text-slate-300">PRINT LAST RECEIPT</button>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>
</html>
