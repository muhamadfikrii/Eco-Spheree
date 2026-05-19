<x-app-layout>
<div class="min-h-screen bg-slate-950 pb-24">
    <!-- Background pattern -->
    <div class="fixed inset-0 z-0 opacity-10 pointer-events-none">
        <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI4MCIgaGVpZ2h0PSI4MCIgdmlld0JveD0iMCAwIDgwIDgwIj48cGF0aCBmaWxsPSJub25lIiBzdHJva2U9IndoaXRlIiBzdHJva2Utd2lkdGg9IjAuNSIgc3Ryb2tlLW9wYWNpdHk9IjAuMDgiIGQ9Ik0wIDQwTDQwIDBNNDAgODBMODAgNDBNODAgNDBMMTAgNzAiLz48L3N2Zz4=')]"></div>
    </div>

    <!-- Hero -->
    <section class="relative z-10 pt-24 lg:pt-32 pb-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-cyan-500/10 border border-cyan-500/30 text-cyan-400 text-xs font-mono tracking-wider mb-6">
                <i class="fas fa-envelope text-xs"></i> GET IN TOUCH
            </div>
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white leading-tight">
                Let’s Talk 
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-blue-500">Industrial Solutions</span>
            </h1>
            <p class="text-gray-300 text-lg mt-6 max-w-2xl mx-auto">
                Have a question about our platform, need support, or want to discuss a custom project? Our team is ready to help.
            </p>
        </div>
    </section>

    <!-- Contact Info & Form -->
    <section class="relative z-10 py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12">
                <!-- Contact Info Cards -->
                <div class="space-y-6">
                    <div class="bg-slate-800/40 backdrop-blur-md rounded-2xl p-6 border border-slate-700">
                        <h3 class="text-xl font-bold text-white mb-5 flex items-center gap-2"><i class="fas fa-address-card text-cyan-400"></i> Contact Information</h3>
                        <div class="space-y-4">
                            <div class="flex items-start gap-3"><div class="w-10 h-10 bg-cyan-500/20 rounded-lg flex items-center justify-center"><i class="fas fa-map-marker-alt text-cyan-400"></i></div><div><p class="text-white font-medium">Headquarters</p><p class="text-gray-400 text-sm">NovaForge Tower, Jl. Sudirman No. 45, Jakarta 12910, Indonesia</p></div></div>
                            <div class="flex items-start gap-3"><div class="w-10 h-10 bg-cyan-500/20 rounded-lg flex items-center justify-center"><i class="fas fa-phone-alt text-cyan-400"></i></div><div><p class="text-white font-medium">Phone</p><p class="text-gray-400 text-sm">+62 21 1234 5678</p></div></div>
                            <div class="flex items-start gap-3"><div class="w-10 h-10 bg-cyan-500/20 rounded-lg flex items-center justify-center"><i class="fas fa-envelope text-cyan-400"></i></div><div><p class="text-white font-medium">Email</p><p class="text-gray-400 text-sm">hello@novaforge.com</p></div></div>
                            <div class="flex items-start gap-3"><div class="w-10 h-10 bg-cyan-500/20 rounded-lg flex items-center justify-center"><i class="fas fa-clock text-cyan-400"></i></div><div><p class="text-white font-medium">Support Hours</p><p class="text-gray-400 text-sm">Monday - Friday: 9:00 AM - 6:00 PM (WIB)</p></div></div>
                        </div>
                    </div>
                    <div class="bg-slate-800/40 backdrop-blur-md rounded-2xl p-6 border border-slate-700">
                        <h3 class="text-xl font-bold text-white mb-4 flex items-center gap-2"><i class="fas fa-share-alt text-cyan-400"></i> Connect With Us</h3>
                        <div class="flex gap-4">
                            <a href="https://linkedin.com/company/novaforge" target="_blank" class="w-10 h-10 bg-slate-700/50 rounded-full flex items-center justify-center text-gray-300 hover:bg-cyan-500 hover:text-white transition"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://twitter.com/novaforge" target="_blank" class="w-10 h-10 bg-slate-700/50 rounded-full flex items-center justify-center text-gray-300 hover:bg-cyan-500 hover:text-white transition"><i class="fab fa-x-twitter"></i></a>
                            <a href="https://github.com/novaforge" target="_blank" class="w-10 h-10 bg-slate-700/50 rounded-full flex items-center justify-center text-gray-300 hover:bg-cyan-500 hover:text-white transition"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="bg-slate-800/40 backdrop-blur-md rounded-2xl p-6 md:p-8 border border-slate-700">
                    <h2 class="text-2xl font-bold text-white mb-6 flex items-center gap-2"><i class="fas fa-paper-plane text-cyan-400"></i> Send us a message</h2>
                    <form x-data="contactForm()" @submit.prevent="submitForm" class="space-y-5">
                        <div class="grid md:grid-cols-2 gap-5">
                            <div><label class="block text-gray-300 text-sm font-medium mb-2">Full Name *</label><input type="text" x-model="form.name" class="w-full px-4 py-2.5 bg-slate-900/50 border border-slate-700 rounded-lg text-white focus:ring-2 focus:ring-cyan-500"></div>
                            <div><label class="block text-gray-300 text-sm font-medium mb-2">Email *</label><input type="email" x-model="form.email" class="w-full px-4 py-2.5 bg-slate-900/50 border border-slate-700 rounded-lg text-white"></div>
                        </div>
                        <div><label class="block text-gray-300 text-sm font-medium mb-2">Subject *</label><input type="text" x-model="form.subject" class="w-full px-4 py-2.5 bg-slate-900/50 border border-slate-700 rounded-lg text-white"></div>
                        <div><label class="block text-gray-300 text-sm font-medium mb-2">Message *</label><textarea x-model="form.message" rows="4" class="w-full px-4 py-2.5 bg-slate-900/50 border border-slate-700 rounded-lg text-white"></textarea></div>
                        <button type="submit" :disabled="submitting" :class="submitting ? 'opacity-70 cursor-not-allowed' : 'hover:shadow-lg'" class="w-full md:w-auto px-8 py-3 bg-gradient-to-r from-cyan-500 to-blue-600 text-white rounded-lg font-semibold transition flex items-center justify-center gap-2">
                            <template x-if="submitting"><><div class="w-4 h-4 border-2 border-white border-t-transparent rounded-full animate-spin"></div> Sending...</></template>
                            <template x-if="!submitting"><><i class="fas fa-paper-plane"></i> Send Message</></template>
                        </button>
                        <div x-show="success" x-transition class="p-4 bg-emerald-500/10 border border-emerald-500/30 rounded-lg text-emerald-400 text-center text-sm">✓ Message sent! We'll reply within 24 hours.</div>
                        <div x-show="error" x-transition class="p-4 bg-red-500/10 border border-red-500/30 rounded-lg text-red-400 text-center text-sm">⚠️ Please fill all required fields.</div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Map -->
    <section class="relative z-10 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="rounded-2xl overflow-hidden border border-slate-700">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.521758078341!2d106.822105!3d-6.217544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3f1b2b5b5b5%3A0x0!2sSudirman%2C%20Jakarta!5e0!3m2!1sen!2sid!4v1700000000000!5m2!1sen!2sid" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" class="opacity-80 hover:opacity-100 transition"></iframe>
            </div>
        </div>
    </section>
</div>

<script>
    function contactForm() {
        return {
            form: { name: '', email: '', subject: '', message: '' },
            submitting: false,
            success: false,
            error: false,
            submitForm() {
                if (!this.form.name || !this.form.email || !this.form.subject || !this.form.message) {
                    this.error = true;
                    setTimeout(() => this.error = false, 4000);
                    return;
                }
                this.submitting = true;
                setTimeout(() => {
                    this.submitting = false;
                    this.success = true;
                    this.form = { name: '', email: '', subject: '', message: '' };
                    setTimeout(() => this.success = false, 5000);
                }, 1500);
            }
        };
    }
</script>
</x-app-layout>