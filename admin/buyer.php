<!DOCTYPE html>
<html class="light dark" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>BOOKA - Buyer Management</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;family=Newsreader:opsz,wght,FILL,GRAD@24,400,0,0&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    <script>
        tailwind.config = {
            darkMode: "class", 
            theme: {
                extend: {
                    colors: {
                        primary: "#ec1313", 
                        "background-light": "#f8f6f6", 
                        "background-dark": "#1a0a0a"
                    }, 
                    fontFamily: {
                        display: "Newsreader",
                        sans: ['Plus Jakarta Sans', 'sans-serif']
                    }, 
                    borderRadius: {
                        DEFAULT: "0.25rem", lg: "0.5rem", xl: "0.75rem", "2xl": "1rem", "3xl": "1.5rem", full: "9999px"
                    }
                }
            }
        };
    </script>
    <style type="text/tailwindcss">
        @layer base { body { @apply font-sans; } }
        .hero-gradient { background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); }
        .sidebar-item-active { background: linear-gradient(90deg, #e11d48 0%, #fb7185 100%); color: white !important; }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 transition-colors duration-300">
<div class="flex min-h-screen">
    <!-- Sidebar -->
    <aside class="w-64 bg-white dark:bg-slate-900 border-r border-slate-200 dark:border-slate-800 flex flex-col fixed h-full z-20 transition-colors duration-300">
        <div class="p-8 flex items-center gap-3">
            <div class="w-10 h-10 bg-primary flex items-center justify-center rounded-xl text-white shadow-lg shadow-red-500/20">
                <span class="material-symbols-outlined text-2xl">menu_book</span>
            </div>
            <span class="text-2xl font-bold tracking-tight text-slate-900 dark:text-white">BOOKA</span>
        </div>
        <nav class="flex-1 px-4 space-y-2">
            <a class="flex items-center gap-3 px-4 py-3 text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-xl transition-all" href="dashboard.php">
                <span class="material-symbols-outlined">dashboard</span> Dashboard
            </a>
            <a class="flex items-center gap-3 px-4 py-3 text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-xl transition-all" href="admin.php">
                <span class="material-symbols-outlined">shield_person</span> Admin
            </a>
            <!-- Active State for Buyer/Users -->
            <a class="sidebar-item-active flex items-center gap-3 px-4 py-3 rounded-xl font-semibold shadow-md shadow-rose-200 dark:shadow-none transition-all" href="buyer.php">
                <span class="material-symbols-outlined">group</span> Users
            </a>
        </nav>
        
        <!-- Bottom Sidebar Actions -->
        <div class="p-4 mt-auto border-t border-slate-100 dark:border-slate-800 space-y-2">
            <!-- Theme Toggle -->
            <button class="w-full flex items-center justify-between px-4 py-3 text-slate-600 dark:text-slate-400 bg-slate-50 dark:bg-slate-800/50 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-xl transition-all group" onclick="document.documentElement.classList.toggle('dark')">
                <div class="flex items-center gap-3">
                    <span class="material-symbols-outlined dark:hidden">dark_mode</span>
                    <span class="material-symbols-outlined hidden dark:block">light_mode</span>
                    <span class="font-medium">Theme Mode</span>
                </div>
                <div class="w-10 h-5 bg-slate-300 dark:bg-slate-600 rounded-full relative transition-colors">
                    <div class="absolute top-1 left-1 dark:left-6 w-3 h-3 bg-white rounded-full transition-all"></div>
                </div>
            </button>
            
            <!-- Sign Out -->
            <a class="flex items-center gap-3 px-4 py-3 text-slate-600 dark:text-slate-400 hover:text-primary dark:hover:text-rose-400 transition-all" href="#">
                <span class="material-symbols-outlined">logout</span> Sign Out
            </a>
            
            <!-- Help (RESTORED HERE) -->
            <a class="flex items-center gap-3 px-4 py-3 text-slate-600 dark:text-slate-400 hover:text-primary dark:hover:text-rose-400 transition-all" href="#">
                <span class="material-symbols-outlined">help</span> Help
            </a>
        </div>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 ml-64 p-8 bg-slate-50 dark:bg-slate-950 min-h-screen transition-colors duration-300">
        <!-- Header -->
        <header class="flex justify-between items-center mb-8">
            <h1 class="text-2xl font-bold text-slate-800 dark:text-white">Buyer Management</h1>
            <div class="flex items-center gap-4 bg-white dark:bg-slate-900 p-2 pr-6 rounded-2xl shadow-sm border border-slate-200 dark:border-slate-800">
                <div class="text-right">
                    <div class="text-sm font-bold text-slate-900 dark:text-white">Super Admin</div>
                    <div class="text-xs text-slate-500 dark:text-slate-400">@nurhayatulfadilla</div>
                </div>
                <div class="w-10 h-10 rounded-full bg-slate-200 dark:bg-slate-700 overflow-hidden ring-2 ring-rose-100 dark:ring-rose-900/30">
                    <img alt="Profile avatar" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC1TOF2c_ur80ok49rKyi0kt1o35zrpECDtT2l8RuCWC7w9diENj2uz-UBS6fCYvzY8AIvndPNGQi2wJKgPQ4dZ6od3xiGVyYMo-OejHjWaETIIOaexmYrKSA1YPtZleeL90qotaHbE9_DZqXRgOxPwWTqWSTwKO3h9azQwFnszQZdoQ_jCUvD7T9zjAexFm7uks6Xk8tJme6DKAr4XTINLb3Kr3WX1tStMg_wSqUPCuH87_OLHJWLiyymlfDb-gg1gxs84WQDwtWA3"/>
                </div>
            </div>
        </header>

        <!-- Form Section (Create/Edit) -->
        <section class="mb-8">
            <div class="bg-white dark:bg-slate-900 rounded-[2rem] border border-slate-200 dark:border-slate-800 shadow-sm p-8">
                <div class="flex items-center gap-3 mb-6">
                    <span class="material-symbols-outlined text-primary">person_add</span>
                    <h2 class="text-xl font-bold text-slate-800 dark:text-white">Add New Buyer</h2>
                </div>
                <form action="" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <label class="text-sm font-semibold text-slate-600 dark:text-slate-300">NIK</label>
                        <input type="text" name="nik" placeholder="Enter Buyer NIK" class="w-full px-4 py-3 rounded-xl bg-slate-50 dark:bg-slate-800 border-slate-200 dark:border-slate-700 text-slate-900 dark:text-white focus:ring-primary focus:border-primary transition-colors">
                    </div>
                    <div class="space-y-2">
                        <label class="text-sm font-semibold text-slate-600 dark:text-slate-300">Username</label>
                        <input type="text" name="username" placeholder="Enter Username" class="w-full px-4 py-3 rounded-xl bg-slate-50 dark:bg-slate-800 border-slate-200 dark:border-slate-700 text-slate-900 dark:text-white focus:ring-primary focus:border-primary transition-colors">
                    </div>
                    <div class="space-y-2">
                        <label class="text-sm font-semibold text-slate-600 dark:text-slate-300">Email Address</label>
                        <input type="email" name="email" placeholder="buyer@example.com" class="w-full px-4 py-3 rounded-xl bg-slate-50 dark:bg-slate-800 border-slate-200 dark:border-slate-700 text-slate-900 dark:text-white focus:ring-primary focus:border-primary transition-colors">
                    </div>
                    <div class="space-y-2">
                        <label class="text-sm font-semibold text-slate-600 dark:text-slate-300">Password</label>
                        <input type="password" name="password" placeholder="••••••••" class="w-full px-4 py-3 rounded-xl bg-slate-50 dark:bg-slate-800 border-slate-200 dark:border-slate-700 text-slate-900 dark:text-white focus:ring-primary focus:border-primary transition-colors">
                    </div>
                    <div class="space-y-2 md:col-span-2">
                        <label class="text-sm font-semibold text-slate-600 dark:text-slate-300">Alamat (Address)</label>
                        <textarea name="alamat" rows="2" placeholder="Enter buyer address for shipping" class="w-full px-4 py-3 rounded-xl bg-slate-50 dark:bg-slate-800 border-slate-200 dark:border-slate-700 text-slate-900 dark:text-white focus:ring-primary focus:border-primary transition-colors resize-none"></textarea>
                    </div>
                    <div class="md:col-span-2 flex justify-end gap-3 mt-2">
                        <button type="reset" class="px-6 py-2.5 rounded-xl font-bold text-slate-500 hover:bg-slate-100 dark:hover:bg-slate-800 transition-all">Clear</button>
                        <button type="submit" class="px-8 py-2.5 rounded-xl font-bold text-white bg-primary hover:bg-rose-600 shadow-lg shadow-red-500/20 transition-all flex items-center gap-2">
                            <span class="material-symbols-outlined">save</span> Save Buyer
                        </button>
                    </div>
                </form>
            </div>
        </section>

        <!-- Data Table Section -->
        <section>
            <div class="bg-white dark:bg-slate-900 rounded-[2rem] border border-slate-200 dark:border-slate-800 shadow-sm overflow-hidden">
                <div class="p-8 border-b border-slate-100 dark:border-slate-800 flex flex-col md:flex-row justify-between md:items-center gap-4">
                    <div>
                        <h2 class="text-xl font-bold text-slate-800 dark:text-white">Registered Buyers</h2>
                        <p class="text-slate-500 text-sm mt-1">List of all users registered as buyers</p>
                    </div>
                    <div class="flex gap-2">
                        <input type="text" placeholder="Search buyer..." class="px-4 py-2 rounded-xl bg-slate-50 dark:bg-slate-800 border-slate-200 dark:border-slate-700 text-sm focus:ring-primary">
                    </div>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-slate-50 dark:bg-slate-800/50 text-slate-500 dark:text-slate-400 text-sm uppercase tracking-wider">
                                <th class="p-6 font-semibold rounded-tl-2xl">NIK</th>
                                <th class="p-6 font-semibold">Username</th>
                                <th class="p-6 font-semibold">Email</th>
                                <th class="p-6 font-semibold">Alamat</th>
                                <th class="p-6 font-semibold text-center rounded-tr-2xl">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100 dark:divide-slate-800">
                            <!-- Row 1 -->
                            <tr class="group hover:bg-slate-50 dark:hover:bg-slate-800/30 transition-colors">
                                <td class="p-6 font-medium text-slate-700 dark:text-slate-300">12345678901234</td>
                                <td class="p-6 text-slate-600 dark:text-slate-400">
                                    <div class="flex items-center gap-3">
                                        <div class="w-8 h-8 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center font-bold text-xs">BU</div>
                                        budi_reader
                                    </div>
                                </td>
                                <td class="p-6 text-slate-600 dark:text-slate-400">budi@gmail.com</td>
                                <td class="p-6 text-slate-600 dark:text-slate-400 max-w-xs truncate">Jl. Kenanga No. 8, Surabaya</td>
                                <td class="p-6 text-center">
                                    <div class="flex items-center justify-center gap-2">
                                        <button class="w-8 h-8 rounded-lg flex items-center justify-center text-amber-500 hover:bg-amber-50 dark:hover:bg-amber-900/20 transition-all" title="Edit">
                                            <span class="material-symbols-outlined text-lg">edit</span>
                                        </button>
                                        <button class="w-8 h-8 rounded-lg flex items-center justify-center text-rose-500 hover:bg-rose-50 dark:hover:bg-rose-900/20 transition-all" title="Delete">
                                            <span class="material-symbols-outlined text-lg">delete</span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <!-- Row 2 -->
                            <tr class="group hover:bg-slate-50 dark:hover:bg-slate-800/30 transition-colors">
                                <td class="p-6 font-medium text-slate-700 dark:text-slate-300">98765432109876</td>
                                <td class="p-6 text-slate-600 dark:text-slate-400">
                                    <div class="flex items-center gap-3">
                                        <div class="w-8 h-8 rounded-full bg-purple-100 text-purple-600 flex items-center justify-center font-bold text-xs">SI</div>
                                        siti_books
                                    </div>
                                </td>
                                <td class="p-6 text-slate-600 dark:text-slate-400">siti.n@yahoo.com</td>
                                <td class="p-6 text-slate-600 dark:text-slate-400 max-w-xs truncate">Apartemen Green View Lt. 5, Jakarta</td>
                                <td class="p-6 text-center">
                                    <div class="flex items-center justify-center gap-2">
                                        <button class="w-8 h-8 rounded-lg flex items-center justify-center text-amber-500 hover:bg-amber-50 dark:hover:bg-amber-900/20 transition-all">
                                            <span class="material-symbols-outlined text-lg">edit</span>
                                        </button>
                                        <button class="w-8 h-8 rounded-lg flex items-center justify-center text-rose-500 hover:bg-rose-50 dark:hover:bg-rose-900/20 transition-all">
                                            <span class="material-symbols-outlined text-lg">delete</span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="p-6 border-t border-slate-100 dark:border-slate-800 flex justify-center">
                    <button class="text-sm font-bold text-primary hover:text-rose-700 transition-colors">View All Buyers</button>
                </div>
            </div>
        </section>
        
        <footer class="mt-12 text-center text-slate-400 dark:text-slate-600 text-sm">
            @nurhayatulfadilla © 2023 BOOKA Dashboard. All rights reserved.
        </footer>
    </main>
</div>
</body>
</html>