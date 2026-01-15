<!DOCTYPE html>
<html class="light dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>BOOKA Dashboard - Stats &amp; Theme Toggle</title>
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
                        DEFAULT: "0.25rem", 
                        lg: "0.5rem", 
                        xl: "0.75rem", 
                        "2xl": "1rem",
                        "3xl": "1.5rem",
                        full: "9999px"
                    }
                }
            }
        };
    </script>
<style type="text/tailwindcss">
        @layer base {
            body {
                @apply font-sans;
            }
        }
        .hero-gradient {
            background: linear-gradient(135deg, #e11d48 0%, #be123c 100%);
        }
        .sidebar-item-active {
            background: linear-gradient(90deg, #e11d48 0%, #fb7185 100%);
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 transition-colors duration-300">
<div class="flex min-h-screen">
<aside class="w-64 bg-white dark:bg-slate-900 border-r border-slate-200 dark:border-slate-800 flex flex-col fixed h-full z-20 transition-colors duration-300">
<div class="p-8 flex items-center gap-3">
<div class="w-10 h-10 bg-primary flex items-center justify-center rounded-xl text-white shadow-lg shadow-red-500/20">
<span class="material-symbols-outlined text-2xl">menu_book</span>
</div>
<span class="text-2xl font-bold tracking-tight text-slate-900 dark:text-white">BOOKA</span>
</div>
<nav class="flex-1 px-4 space-y-2">
<a class="sidebar-item-active flex items-center gap-3 px-4 py-3 text-white rounded-xl font-semibold shadow-md shadow-rose-200 dark:shadow-none transition-all" href="dashboard.php">
<span class="material-symbols-outlined">dashboard</span>
                    Dashboard
                </a>
<a class="flex items-center gap-3 px-4 py-3 text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-xl transition-all" href="admin.php">
<span class="material-symbols-outlined">shield_person</span>
                    Admin
                </a>
<a class="flex items-center gap-3 px-4 py-3 text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-xl transition-all" href="buyer.php">
<span class="material-symbols-outlined">group</span>
                    Users
                </a>
</nav>
<div class="p-4 mt-auto border-t border-slate-100 dark:border-slate-800 space-y-2">
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
<a class="flex items-center gap-3 px-4 py-3 text-slate-600 dark:text-slate-400 hover:text-primary dark:hover:text-rose-400 transition-all" href="#">
<span class="material-symbols-outlined">logout</span>
                    Sign Out
                </a>
<a class="flex items-center gap-3 px-4 py-3 text-slate-600 dark:text-slate-400 hover:text-primary dark:hover:text-rose-400 transition-all" href="#">
<span class="material-symbols-outlined">help</span>
                    Help
                </a>
</div>
</aside>
<main class="flex-1 ml-64 p-8 bg-slate-50 dark:bg-slate-950 min-h-screen transition-colors duration-300">
<header class="flex justify-end mb-8">
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
<section class="hero-gradient rounded-[2.5rem] p-12 mb-10 flex items-center justify-between text-white shadow-2xl shadow-rose-200 dark:shadow-none overflow-hidden relative group">
<div class="max-w-xl z-10">
<h1 class="text-5xl font-extrabold leading-tight mb-6">
                        BOOKA melayani kebutuhan bacaan anda
                    </h1>
<div class="flex gap-4">
<button class="bg-white text-primary px-8 py-3 rounded-full font-bold hover:bg-slate-100 transition-all shadow-lg">
                            Get Started
                        </button>
<button class="border-2 border-white/50 bg-white/10 backdrop-blur-sm px-8 py-3 rounded-full font-bold hover:bg-white/20 transition-all">
                            Learn More
                        </button>
</div>
</div>
<div class="relative w-72 h-72 z-10 transition-transform group-hover:scale-110 duration-500">
<img alt="Stack of colorful books" class="w-full h-full object-contain" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC44DhUTlww8Er-GDl74YJ-bpi4Meo4tIxF0GtaX61EXh0a2UNldh7CowORPTERqFtCvv4rYA7Hg3bevNmNOvCs83sXTE5MYwtobAkRKPzVOD0R-463YVwwhi9cUXeo8jlpZf_L-cs1mH0oo18NwrwP0wShmekhzzWWJP48_Il0WuMyk_txFTC6I81axfO7TDtRa7tRNWIa9qZkWoazwcFbN3UJY65_xhyuqY8yGiGMSR4VOGyhvKpV_t5i9QgKOvUlCzleFqfMlje7"/>
</div>
<div class="absolute -right-20 -bottom-20 w-80 h-80 bg-white/10 rounded-full blur-3xl"></div>
<div class="absolute -left-20 -top-20 w-64 h-64 bg-black/5 rounded-full blur-2xl"></div>
</section>
<section class="mb-10">
<h2 class="text-2xl font-bold text-slate-800 dark:text-white mb-6 px-2">Platform Overview</h2>
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<div class="bg-white dark:bg-slate-900 p-6 rounded-[2rem] border border-slate-200 dark:border-slate-800 shadow-sm flex items-center justify-between group hover:border-primary/30 transition-all">
<div class="flex items-center gap-5">
<div class="w-16 h-16 bg-rose-50 dark:bg-rose-900/20 rounded-2xl flex items-center justify-center text-primary transition-transform group-hover:scale-110">
<span class="material-symbols-outlined text-4xl">shield_person</span>
</div>
<div>
<p class="text-slate-500 dark:text-slate-400 font-medium">Registered Admins</p>
<p class="text-4xl font-extrabold text-slate-900 dark:text-white">12</p>
</div>
</div>
<div class="text-emerald-500 flex items-center gap-1 bg-emerald-50 dark:bg-emerald-500/10 px-3 py-1 rounded-full text-sm font-bold">
<span class="material-symbols-outlined text-sm">trending_up</span>
                            +2
                        </div>
</div>
<div class="bg-white dark:bg-slate-900 p-6 rounded-[2rem] border border-slate-200 dark:border-slate-800 shadow-sm flex items-center justify-between group hover:border-primary/30 transition-all">
<div class="flex items-center gap-5">
<div class="w-16 h-16 bg-rose-50 dark:bg-rose-900/20 rounded-2xl flex items-center justify-center text-primary transition-transform group-hover:scale-110">
<span class="material-symbols-outlined text-4xl">group</span>
</div>
<div>
<p class="text-slate-500 dark:text-slate-400 font-medium">Total Users (Pembeli)</p>
<p class="text-4xl font-extrabold text-slate-900 dark:text-white">1,482</p>
</div>
</div>
<div class="text-emerald-500 flex items-center gap-1 bg-emerald-50 dark:bg-emerald-500/10 px-3 py-1 rounded-full text-sm font-bold">
<span class="material-symbols-outlined text-sm">trending_up</span>
                            +12%
                        </div>
</div>
</div>
</section>
<section>
<h2 class="text-2xl font-bold text-slate-800 dark:text-white mb-6 px-2">My Account</h2>
<div class="hero-gradient rounded-[2.5rem] p-12 text-white shadow-xl relative overflow-hidden">
<div class="flex justify-between items-start">
<div class="space-y-8">
<h3 class="text-3xl font-bold opacity-90">Personal Information</h3>
<div class="grid grid-cols-1 md:grid-cols-2 gap-x-24 gap-y-6">
<div>
<p class="text-sm font-medium opacity-70 mb-1">Full Name</p>
<p class="text-xl font-bold">Fadilla</p>
</div>
<div>
<p class="text-sm font-medium opacity-70 mb-1">Access Level</p>
<p class="text-xl font-bold">Super Admin</p>
</div>
<div class="md:col-span-2">
<p class="text-sm font-medium opacity-70 mb-1">Email Address</p>
<p class="text-xl font-bold">nurhayatulfadilla@gmail.com</p>
</div>
</div>
</div>
<button class="bg-black/20 hover:bg-black/30 backdrop-blur-md px-6 py-3 rounded-2xl flex items-center gap-2 transition-all border border-white/20 group">
<span class="font-bold">EDIT</span>
<span class="material-symbols-outlined group-hover:rotate-12 transition-transform">edit_square</span>
</button>
</div>
<div class="absolute right-0 bottom-0 opacity-10 p-8 select-none pointer-events-none">
<span class="material-symbols-outlined text-[200px]">person</span>
</div>
</div>
</section>
<footer class="mt-12 text-center text-slate-400 dark:text-slate-600 text-sm">
                @nurhayatulfadilla © 2023 BOOKA Dashboard. All rights reserved.
            </footer>
</main>
</div>

</body></html>
