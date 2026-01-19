<?php include 'includes/header.php'; ?>

<section class="min-h-screen flex items-center justify-center relative overflow-hidden pt-20">
    <div class="absolute inset-0 bg-hero-glow bg-cover bg-center bg-no-repeat pointer-events-none"></div>

    <div class="text-center p-8 max-w-2xl relative z-10">
        <div class="w-24 h-24 bg-green-500/20 rounded-full flex items-center justify-center mx-auto mb-8 animate-bounce">
            <i data-lucide="check-circle" class="w-12 h-12 text-green-400"></i>
        </div>

        <h1 class="text-4xl md:text-5xl font-bold text-white mb-6">
            Booking Confirmed!
        </h1>
        
        <p class="text-slate-400 text-lg mb-8 leading-relaxed">
            Thank you for choosing <strong>Param Shakti Astrologer</strong>. <br>
            Our team has received your request. We will call you at your provided number within <strong>30 minutes</strong>.
        </p>

        <div class="flex flex-col md:flex-row gap-4 justify-center">
            <a href="index.php" class="border border-white/20 text-white px-8 py-3 rounded-xl hover:bg-white/5 transition">
                Back to Home
            </a>
            <a href="https://wa.me/919511344850" class="bg-astroGold text-astroDark font-bold px-8 py-3 rounded-xl hover:bg-yellow-400 transition flex items-center justify-center gap-2">
                Chat Now <i data-lucide="message-circle" class="w-4 h-4"></i>
            </a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>