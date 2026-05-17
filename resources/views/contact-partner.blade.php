<x-app-layout>
<div class="min-h-screen bg-slate-950">
    <!-- Background pattern -->
    <div class="fixed inset-0 z-0 opacity-20 pointer-events-none">
        <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI0MCIgaGVpZ2h0PSI0MCIgdmlld0JveD0iMCAwIDQwIDQwIj48cGF0aCBmaWxsPSJub25lIiBzdHJva2U9IndoaXRlIiBzdHJva2Utd2lkdGg9IjAuNSIgc3Ryb2tlLW9wYWNpdHk9IjAuMDgiIGQ9Ik0wIDQwTDQwIDBNNDAgNDBMMCAwIi8+PC9zdmc+')]"></div>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 lg:py-24">
        <div class="max-w-4xl mx-auto">
            <!-- Header -->
            <div class="text-center mb-10">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-cyan-500/10 border border-cyan-500/30 text-cyan-400 text-xs font-mono tracking-wider mb-5">
                    <i class="fas fa-handshake text-xs"></i> STRATEGIC PARTNERSHIP
                </div>
                <h1 class="text-4xl sm:text-5xl font-bold text-white mb-4">Let's Build the Future of Industry 4.0</h1>
                <p class="text-lg text-gray-400 max-w-2xl mx-auto">
                    Fill out this form to start your partnership journey. Our team will contact you within 48 hours.
                </p>
            </div>

            <!-- Form Card -->
            <div class="bg-slate-800/40 backdrop-blur-md rounded-2xl border border-slate-700 p-6 md:p-8 shadow-xl">
                <form x-data="partnershipForm()" x-init="initFromUrl()" @submit.prevent="submitForm" class="space-y-6">
                    <!-- Partnership Type Selection (dengan pre-selection dari URL) -->
                    <div>
                        <label class="block text-white font-semibold mb-3">Partnership Type *</label>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div @click="form.tier = 'corporate'" 
                                 :class="form.tier === 'corporate' ? 'border-cyan-500 bg-cyan-500/10 ring-1 ring-cyan-500' : 'border-slate-700 hover:border-slate-500'"
                                 class="cursor-pointer rounded-xl border p-4 transition-all duration-200 bg-slate-800/50">
                                <div class="flex flex-col items-center text-center">
                                    <div class="w-12 h-12 bg-cyan-500/20 rounded-lg flex items-center justify-center mb-2"><i class="fas fa-building text-cyan-400 text-xl"></i></div>
                                    <span class="text-white font-medium">Corporate</span>
                                    <p class="text-gray-400 text-xs mt-1">For manufacturers & enterprises</p>
                                </div>
                            </div>
                            <div @click="form.tier = 'technology'" 
                                 :class="form.tier === 'technology' ? 'border-cyan-500 bg-cyan-500/10 ring-1 ring-cyan-500' : 'border-slate-700 hover:border-slate-500'"
                                 class="cursor-pointer rounded-xl border p-4 transition-all duration-200 bg-slate-800/50">
                                <div class="flex flex-col items-center text-center">
                                    <div class="w-12 h-12 bg-cyan-500/20 rounded-lg flex items-center justify-center mb-2"><i class="fas fa-microchip text-cyan-400 text-xl"></i></div>
                                    <span class="text-white font-medium">Technology</span>
                                    <p class="text-gray-400 text-xs mt-1">For tech providers & startups</p>
                                </div>
                            </div>
                            <div @click="form.tier = 'research'" 
                                 :class="form.tier === 'research' ? 'border-cyan-500 bg-cyan-500/10 ring-1 ring-cyan-500' : 'border-slate-700 hover:border-slate-500'"
                                 class="cursor-pointer rounded-xl border p-4 transition-all duration-200 bg-slate-800/50">
                                <div class="flex flex-col items-center text-center">
                                    <div class="w-12 h-12 bg-cyan-500/20 rounded-lg flex items-center justify-center mb-2"><i class="fas fa-graduation-cap text-cyan-400 text-xl"></i></div>
                                    <span class="text-white font-medium">Research & Academia</span>
                                    <p class="text-gray-400 text-xs mt-1">Universities & institutions</p>
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-4">
                            <div @click="form.tier = 'ngo'" 
                                 :class="form.tier === 'ngo' ? 'border-cyan-500 bg-cyan-500/10 ring-1 ring-cyan-500' : 'border-slate-700 hover:border-slate-500'"
                                 class="cursor-pointer rounded-xl border p-4 transition-all duration-200 bg-slate-800/50">
                                <div class="flex flex-col items-center text-center">
                                    <div class="w-12 h-12 bg-cyan-500/20 rounded-lg flex items-center justify-center mb-2"><i class="fas fa-hand-holding-heart text-cyan-400 text-xl"></i></div>
                                    <span class="text-white font-medium">NGO / Non-profit</span>
                                    <p class="text-gray-400 text-xs mt-1">For social & environmental orgs</p>
                                </div>
                            </div>
                            <div @click="form.tier = 'government'" 
                                 :class="form.tier === 'government' ? 'border-cyan-500 bg-cyan-500/10 ring-1 ring-cyan-500' : 'border-slate-700 hover:border-slate-500'"
                                 class="cursor-pointer rounded-xl border p-4 transition-all duration-200 bg-slate-800/50">
                                <div class="flex flex-col items-center text-center">
                                    <div class="w-12 h-12 bg-cyan-500/20 rounded-lg flex items-center justify-center mb-2"><i class="fas fa-landmark text-cyan-400 text-xl"></i></div>
                                    <span class="text-white font-medium">Government</span>
                                    <p class="text-gray-400 text-xs mt-1">Public sector agencies</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Organization Details -->
                    <div class="grid md:grid-cols-2 gap-5">
                        <div>
                            <label class="block text-gray-300 text-sm font-medium mb-2">Organization Name *</label>
                            <input type="text" x-model="form.organization" class="w-full px-4 py-2.5 bg-slate-900/50 border border-slate-700 rounded-lg text-white focus:ring-2 focus:ring-cyan-500 focus:border-transparent" placeholder="e.g. PT Astra Manufacturing">
                        </div>
                        <div>
                            <label class="block text-gray-300 text-sm font-medium mb-2">Website (optional)</label>
                            <input type="url" x-model="form.website" class="w-full px-4 py-2.5 bg-slate-900/50 border border-slate-700 rounded-lg text-white focus:ring-2 focus:ring-cyan-500 focus:border-transparent" placeholder="https://...">
                        </div>
                    </div>

                    <!-- Contact Person -->
                    <div class="grid md:grid-cols-2 gap-5">
                        <div>
                            <label class="block text-gray-300 text-sm font-medium mb-2">Contact Name *</label>
                            <input type="text" x-model="form.contactName" class="w-full px-4 py-2.5 bg-slate-900/50 border border-slate-700 rounded-lg text-white" placeholder="Full name">
                        </div>
                        <div>
                            <label class="block text-gray-300 text-sm font-medium mb-2">Job Title *</label>
                            <input type="text" x-model="form.title" class="w-full px-4 py-2.5 bg-slate-900/50 border border-slate-700 rounded-lg text-white" placeholder="e.g. VP of Operations">
                        </div>
                    </div>

                    <!-- Contact Info -->
                    <div class="grid md:grid-cols-2 gap-5">
                        <div>
                            <label class="block text-gray-300 text-sm font-medium mb-2">Email Address *</label>
                            <input type="email" x-model="form.email" class="w-full px-4 py-2.5 bg-slate-900/50 border border-slate-700 rounded-lg text-white">
                        </div>
                        <div>
                            <label class="block text-gray-300 text-sm font-medium mb-2">Phone Number</label>
                            <input type="tel" x-model="form.phone" class="w-full px-4 py-2.5 bg-slate-900/50 border border-slate-700 rounded-lg text-white">
                        </div>
                    </div>

                    <!-- Additional Industrial Context Fields -->
                    <div class="grid md:grid-cols-2 gap-5">
                        <div>
                            <label class="block text-gray-300 text-sm font-medium mb-2">Number of Factories / Facilities</label>
                            <select x-model="form.factories" class="w-full px-4 py-2.5 bg-slate-900/50 border border-slate-700 rounded-lg text-white">
                                <option value="">Select</option>
                                <option>1-5</option>
                                <option>6-20</option>
                                <option>21-50</option>
                                <option>50+</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-gray-300 text-sm font-medium mb-2">Primary Regions of Operation</label>
                            <input type="text" x-model="form.regions" class="w-full px-4 py-2.5 bg-slate-900/50 border border-slate-700 rounded-lg text-white" placeholder="e.g. Java, Sumatra, Kalimantan">
                        </div>
                    </div>

                    <div>
                        <label class="block text-gray-300 text-sm font-medium mb-2">Technologies You're Interested In (multiple)</label>
                        <div class="grid grid-cols-2 gap-3">
                            <label class="flex items-center gap-2"><input type="checkbox" value="IIoT" x-model="form.techInterests" class="rounded border-slate-700 bg-slate-900 text-cyan-500"> <span class="text-sm text-gray-300">IIoT Integration</span></label>
                            <label class="flex items-center gap-2"><input type="checkbox" value="Predictive AI" x-model="form.techInterests" class="rounded border-slate-700 bg-slate-900 text-cyan-500"> <span class="text-sm text-gray-300">Predictive AI</span></label>
                            <label class="flex items-center gap-2"><input type="checkbox" value="Digital Twin" x-model="form.techInterests" class="rounded border-slate-700 bg-slate-900 text-cyan-500"> <span class="text-sm text-gray-300">Digital Twin</span></label>
                            <label class="flex items-center gap-2"><input type="checkbox" value="Energy Optimization" x-model="form.techInterests" class="rounded border-slate-700 bg-slate-900 text-cyan-500"> <span class="text-sm text-gray-300">Energy Optimization</span></label>
                            <label class="flex items-center gap-2"><input type="checkbox" value="Supply Chain Analytics" x-model="form.techInterests" class="rounded border-slate-700 bg-slate-900 text-cyan-500"> <span class="text-sm text-gray-300">Supply Chain Analytics</span></label>
                        </div>
                    </div>

                    <div>
                        <label class="block text-gray-300 text-sm font-medium mb-2">What are your partnership goals? *</label>
                        <textarea x-model="form.message" rows="4" class="w-full px-4 py-2.5 bg-slate-900/50 border border-slate-700 rounded-lg text-white" placeholder="Tell us about your objectives, expected outcomes, or any specific requirements..."></textarea>
                    </div>

                    <div class="flex items-center">
                        <input type="checkbox" x-model="form.agreeTerms" class="w-4 h-4 rounded border-slate-700 bg-slate-900 text-cyan-500">
                        <label class="ml-2 text-sm text-gray-400">I agree to receive communications about partnership opportunities</label>
                    </div>

                    <div class="pt-2 flex gap-3">
                        <button type="submit" :disabled="submitting" :class="submitting ? 'opacity-70 cursor-not-allowed' : 'hover:shadow-lg hover:-translate-y-0.5'" class="w-full md:w-auto px-8 py-3 bg-gradient-to-r from-cyan-500 to-blue-600 text-white rounded-lg font-semibold transition-all duration-200 flex items-center justify-center gap-2">
                            <template x-if="submitting"><><div class="w-4 h-4 border-2 border-white border-t-transparent rounded-full animate-spin"></div> Submitting...</></template>
                            <template x-if="!submitting"><><i class="fas fa-paper-plane"></i> Submit Partnership Request</></template>
                        </button>
                        <button class="bg-gray-500 px-4 py-2 rounded-lg">
                            <a href="{{ route('become') }}">Back</a>
                        </button>
                    </div>

                    <div x-show="success" x-transition class="mt-4 p-4 bg-emerald-500/10 border border-emerald-500/30 rounded-lg text-emerald-400 text-center text-sm">
                        <i class="fas fa-check-circle mr-1"></i> Thank you! Our partnership team will contact you within 48 hours.
                    </div>
                    <div x-show="error" x-transition class="mt-4 p-4 bg-red-500/10 border border-red-500/30 rounded-lg text-red-400 text-center text-sm">
                        <i class="fas fa-exclamation-triangle mr-1"></i> Please select a partnership type and fill all required fields.
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('partnershipForm', () => ({
            form: {
                tier: '',
                organization: '',
                website: '',
                contactName: '',
                title: '',
                email: '',
                phone: '',
                factories: '',
                regions: '',
                techInterests: [],
                message: '',
                agreeTerms: false
            },
            submitting: false,
            success: false,
            error: false,
            initFromUrl() {
                const urlParams = new URLSearchParams(window.location.search);
                const type = urlParams.get('type');
                if (type && ['corporate', 'technology', 'research', 'ngo', 'government'].includes(type)) {
                    this.form.tier = type;
                }
            },
            submitForm() {
                if (!this.form.tier || !this.form.organization || !this.form.contactName || !this.form.title || !this.form.email || !this.form.message) {
                    this.error = true;
                    setTimeout(() => this.error = false, 5000);
                    return;
                }
                this.submitting = true;
                setTimeout(() => {
                    this.submitting = false;
                    this.success = true;
                    this.form = { tier: '', organization: '', website: '', contactName: '', title: '', email: '', phone: '', factories: '', regions: '', techInterests: [], message: '', agreeTerms: false };
                    setTimeout(() => this.success = false, 5000);
                }, 1500);
            }
        }));
    });
</script>
</x-app-layout>