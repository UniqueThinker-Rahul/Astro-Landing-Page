<?php include 'includes/header.php'; ?>

<section class="min-h-screen flex items-center justify-center relative overflow-hidden text-center px-6">
    <div class="absolute inset-0 bg-hero-glow bg-cover bg-center bg-no-repeat pointer-events-none"></div>

    <div class="relative z-10">
        <h1 class="text-9xl font-bold text-astroGold opacity-20 select-none">404</h1>
        
        <div class="relative -mt-20">
            <i data-lucide="compass" class="w-24 h-24 text-astroGold mx-auto mb-6 animate-spin-slow"></i>
            <h2 class="text-3xl font-bold text-white mb-4">Lost in the Stars?</h2>
            <p class="text-slate-400 max-w-md mx-auto mb-8">
                The page you are looking for does not exist in this universe. Let's guide you back to your path.
            </p>
            
            <a href="index.php" class="bg-white/10 border border-white/20 text-white px-8 py-3 rounded-xl hover:bg-white/20 transition flex items-center justify-center gap-2 inline-flex">
                <i data-lucide="arrow-left" class="w-4 h-4"></i> Return Home
            </a>
        </div>
    </div>
</section>

<style>
    .animate-spin-slow { animation: spin 8s linear infinite; }
    @keyframes spin { 100% { transform: rotate(360deg); } }
</style>

<?php include 'includes/footer.php'; ?>