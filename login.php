<!DOCTYPE html>
<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>BOOKA - Clean Login</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,typography,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet"/>
<script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        primary: "#EF4444",
                        "background-light": "#F9FAFB",
                        "background-dark": "#0A0A0A",
                    },
                    fontFamily: {
                        display: ["Plus Jakarta Sans", "sans-serif"],
                    },
                    borderRadius: {
                        DEFAULT: "12px",
                    },
                },
            },
        };
    </script>
<style type="text/tailwindcss">
        .glass-effect {
            background: rgba(255, 255, 255, 0.12);
            backdrop-filter: blur(24px);
            -webkit-backdrop-filter: blur(24px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        .dark .glass-effect {
            background: rgba(15, 15, 15, 0.4);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        .gradient-bg {
            background: radial-gradient(circle at top left, #EF4444 0%, #991B1B 45%, #450A0A 100%);
        }
        .hero-mesh {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: 
                radial-gradient(at 0% 0%, hsla(0, 84%, 60%, 0.15) 0, transparent 50%), 
                radial-gradient(at 100% 0%, hsla(0, 84%, 40%, 0.15) 0, transparent 50%);
            pointer-events: none;
        }
    </style>
</head>
<body class="font-display bg-background-light dark:bg-background-dark min-h-screen flex flex-col antialiased">
<main class="flex-grow flex items-center justify-center p-4 md:p-8 gradient-bg relative overflow-hidden">
<div class="hero-mesh"></div>
<div class="absolute top-[-10%] left-[-10%] w-[500px] h-[500px] bg-red-500 rounded-full mix-blend-soft-light filter blur-[120px] opacity-20"></div>
<div class="absolute bottom-[-10%] right-[-10%] w-[600px] h-[600px] bg-red-900 rounded-full mix-blend-multiply filter blur-[120px] opacity-40"></div>
<div class="container max-w-7xl w-full flex flex-col md:flex-row items-center justify-center gap-8 md:gap-20 relative z-10">
<div class="w-full md:w-1/2 flex flex-col items-center md:items-start space-y-12">
<div class="flex items-center space-x-4 text-white group cursor-default">
<div class="bg-white/10 backdrop-blur-md p-3 rounded-2xl border border-white/20 shadow-xl transition-all duration-300 group-hover:scale-110">
<span class="material-symbols-outlined text-white text-4xl fill-1">auto_stories</span>
</div>
<div>
<h1 class="text-4xl font-black tracking-tighter">BOOKA</h1>
<p class="text-red-200 text-[10px] font-bold tracking-[0.3em] uppercase opacity-80">Empower Your Mind</p>
</div>
</div>
<div class="relative w-full max-w-lg group">
<div class="relative z-10 transition-transform duration-700 group-hover:scale-[1.02]">
<img alt="Professional 3D character reading on a stack of books" class="rounded-[40px] shadow-2xl w-full h-auto object-cover ring-1 ring-white/20" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAER9UapwKNOk8y-n6BNG1bzkw-dIgMFIC8PSLQUz7O5ik09o-iCn3xq9CKg_pjMcPebNf83iDFZPqeBtd4sLk6WSTxCwUSvE_NwpuMgUSGHGNw8tMIYoFy5M4b7Ketfnpmuot1uw-oJdH7_v9c2Wg6ieWYnB1aHR3flznmHRAIrRfndrbf96CoxWv4fLctxgApNaiggYdNCOj5zJCReDD4c5SPLgDvWmi6U5-SzdHAbQkRBJNiF8z5lLWTdqB7RvjDdN32zaPqHStU"/>
</div>
<div class="absolute -bottom-10 -right-6 bg-white/95 dark:bg-zinc-900/95 backdrop-blur-xl p-6 rounded-[24px] shadow-2xl hidden lg:block border border-white/20 z-20">
<div class="flex items-center gap-4">
<div class="w-14 h-14 bg-red-50 rounded-2xl flex items-center justify-center">
<span class="material-symbols-outlined text-red-600 text-3xl font-bold">local_library</span>
</div>
<div>
<p class="text-zinc-500 dark:text-zinc-400 text-xs font-bold uppercase tracking-wider">Library Stats</p>
<p class="text-zinc-900 dark:text-white font-extrabold text-lg">12.5k+ Books</p>
</div>
</div>
</div>
<div class="absolute inset-0 bg-red-500/10 rounded-[40px] -rotate-3 -z-10 group-hover:rotate-0 transition-transform duration-500"></div>
</div>
<div class="hidden md:block max-w-md">
<h2 class="text-white text-5xl font-extrabold leading-[1.1] tracking-tight">
                    Read. Learn. <br/>
<span class="text-red-400">Grow Together.</span>
</h2>
<p class="text-red-100/70 mt-4 text-lg font-medium">Join our community of over 500,000 active readers worldwide.</p>
</div>
</div>
<div class="w-full max-w-[480px]">
<div class="glass-effect rounded-[40px] p-8 md:p-14 shadow-[0_32px_64px_-16px_rgba(0,0,0,0.3)] text-white">
<div class="mb-12">
<h2 class="text-4xl font-black mb-3 tracking-tight">Sign In</h2>
<p class="text-red-100/60 font-medium">Access your personalized reading list.</p>
</div>
<form class="space-y-8" onsubmit="event.preventDefault();">
<div class="space-y-3">
<label class="block text-xs font-bold text-red-50/80 uppercase tracking-[0.15em] ml-1" for="email">Email Address</label>
<div class="relative group">
<input class="w-full bg-white/5 border-0 border-b-2 border-white/20 py-4 px-1 focus:ring-0 focus:border-white transition-all duration-300 placeholder:text-red-200/30 text-lg font-medium" id="email" placeholder="name@example.com" required="" type="email"/>
<span class="material-symbols-outlined absolute right-1 bottom-4 text-red-100/40 group-focus-within:text-white transition-colors">alternate_email</span>
</div>
</div>
<div class="space-y-3">
<label class="block text-xs font-bold text-red-50/80 uppercase tracking-[0.15em] ml-1" for="password">Password</label>
<div class="relative group">
<input class="w-full bg-white/5 border-0 border-b-2 border-white/20 py-4 px-1 focus:ring-0 focus:border-white transition-all duration-300 placeholder:text-red-200/30 text-lg font-medium" id="password" placeholder="••••••••" required="" type="password"/>
<button class="absolute right-1 bottom-4 text-red-100/40 hover:text-white transition-colors" type="button">
<span class="material-symbols-outlined">visibility</span>
</button>
</div>
</div>
<div class="flex items-center justify-between text-sm">
<label class="flex items-center cursor-pointer group">
<input class="w-5 h-5 rounded border-white/30 bg-white/10 text-primary focus:ring-0 focus:ring-offset-0 transition-all cursor-pointer" type="checkbox"/>
<span class="ml-3 text-red-100/80 group-hover:text-white transition-colors">Keep me signed in</span>
</label>
<a class="text-red-100/80 hover:text-white font-bold transition-colors" href="#">Forgot Password?</a>
</div>
<button class="w-full bg-white text-red-600 font-extrabold py-5 rounded-2xl shadow-xl hover:shadow-white/10 hover:scale-[1.02] transition-all active:scale-95 text-lg" type="submit">
                        Login to BOOKA
                    </button>
<div class="text-center pt-2">
<p class="text-red-100/60 text-sm font-medium">
                            Don't have an account? 
                            <a class="font-black text-white hover:underline underline-offset-8 ml-1" href="#">Create Account</a>
</p>
</div>
</form>
<div class="mt-12">
<div class="relative flex items-center justify-center mb-8">
<div class="border-t border-white/10 w-full"></div>
<span class="absolute bg-white/10 backdrop-blur-md px-6 text-[10px] font-black text-white uppercase tracking-[0.2em] rounded-full py-2 border border-white/10">Quick Connect</span>
</div>
<div class="flex gap-4">
<button class="flex-1 bg-white/5 border border-white/10 py-4 rounded-2xl flex items-center justify-center hover:bg-white/10 hover:border-white/20 transition-all duration-300 group">
<img alt="Google" class="w-6 h-6 grayscale opacity-80 group-hover:grayscale-0 group-hover:opacity-100 transition-all" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA52o-NM03Kr7gdQKOa98Xfe5suU7SvPStoLnCQSXiahBvdo0drjtNJtLC5_IG2MfRjF-3oHx9TSTdT7k8jX0wE86nckn7QtvcBLa0A5DrdHYM2-PyzmR9L0dQUwTLF46OjW8JMIPB37TZdry9tJragiVRVDMuKyrfaFGhiiA9HwyiUbkOp1QTbdG2IQc3saQBeQ8-MDxyuFqRFUWfQvGjGW9tf5GzCkE4Y0okshPOhKQSVAFfeR0k6hmyb0C6T0yxpgwbgf42o-E1A"/>
</button>
<button class="flex-1 bg-white/5 border border-white/10 py-4 rounded-2xl flex items-center justify-center hover:bg-white/10 hover:border-white/20 transition-all duration-300 group">
<img alt="LinkedIn" class="w-6 h-6 grayscale opacity-80 group-hover:grayscale-0 group-hover:opacity-100 transition-all" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBIIDOb7-hL8MF_bSLmDN-AzE4sv6wr7IVaOsfG7VzAgIpH9E_EN7h-gt7bQQzz786ZnRhyz062uYDqHXshJnamNc3D6EKF1A4il5OxbPKRysZ5d_mRiAEv6E3ioMmD0A7x8AwyawhTez4Pur8MmmCVirNiX0yjzhnR9d_jQvWVTuNkJcicrIFm_wXAsuTXoB8FY0xi5k5vNyEJN8Oan8ccQLCs8YRwfuVHVIZwRbiXb4HaxBipcyzUJifV6wY31nuYZuf2ohvXiBWP"/>
</button>
</div>
</div>
</div>
</div>
</div>
</main>
<button class="fixed bottom-8 right-8 p-4 bg-white/10 backdrop-blur-xl border border-white/20 text-white rounded-full shadow-2xl z-50 hover:scale-110 active:scale-90 transition-all flex items-center justify-center" onclick="document.documentElement.classList.toggle('dark')">
<span class="material-symbols-outlined dark:hidden">dark_mode</span>
<span class="material-symbols-outlined hidden dark:block text-yellow-400">light_mode</span>
</button>

</body></html>