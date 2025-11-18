<x-app-layout>
    <section id="contact" class="py-20 bg-gradient-to-br from-gray-900 via-blue-900 to-gray-900">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-gray-800/60 backdrop-blur-xl rounded-3xl p-8 lg:p-12 border border-gray-700/50 shadow-2xl">
                <div class="text-center mb-12">
                    <h2 class="text-4xl font-bold mb-4 text-white">Start Your Partnership Journey</h2>
                    <p class="text-xl text-gray-300">
                        Complete form below and our partnership team will contact you within 48 hours
                    </p>
                </div>

                <form x-data="partnershipForm()" @submit.prevent="submitForm" class="space-y-6">
                    <!-- Partnership Type Selection with Visual Cards -->
                    <div class="mb-8">
                        <label class="block text-white font-medium mb-4 text-lg">Partnership Type *</label>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <!-- Corporate Partnership -->
                            <div class="partnership-type-card"
                                @click="form.tier = 'corporate'"
                                :class="form.tier === 'corporate' ? 'ring-2 ring-blue-500 bg-blue-900/30' : 'bg-gray-800/50 hover:bg-gray-800/70'">
                                <div class="p-6 rounded-xl border border-gray-700/50 transition-all duration-300">
                                    <div class="flex items-center justify-center mb-4">
                                        <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center">
                                            <i class="fas fa-building text-white text-2xl"></i>
                                        </div>
                                    </div>
                                    <h3 class="text-xl font-bold text-white mb-2">Corporate Partnership</h3>
                                    <p class="text-gray-400 text-sm">For businesses driving sustainability</p>
                                </div>
                            </div>

                            <!-- Research & Academia -->
                            <div class="partnership-type-card"
                                @click="form.tier = 'research'"
                                :class="form.tier === 'research' ? 'ring-2 ring-green-500 bg-green-900/30' : 'bg-gray-800/50 hover:bg-gray-800/70'">
                                <div class="p-6 rounded-xl border border-gray-700/50 transition-all duration-300">
                                    <div class="flex items-center justify-center mb-4">
                                        <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-green-600 rounded-2xl flex items-center justify-center">
                                            <i class="fas fa-graduation-cap text-white text-2xl"></i>
                                        </div>
                                    </div>
                                    <h3 class="text-xl font-bold text-white mb-2">Research & Academia</h3>
                                    <p class="text-gray-400 text-sm">For universities and research institutions</p>
                                </div>
                            </div>

                            <!-- NGO & Government -->
                            <div class="partnership-type-card"
                                @click="form.tier = 'ngo'"
                                :class="form.tier === 'ngo' ? 'ring-2 ring-purple-500 bg-purple-900/30' : 'bg-gray-800/50 hover:bg-gray-800/70'">
                                <div class="p-6 rounded-xl border border-gray-700/50 transition-all duration-300">
                                    <div class="flex items-center justify-center mb-4">
                                        <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center">
                                            <i class="fas fa-hands-helping text-white text-2xl"></i>
                                        </div>
                                    </div>
                                    <h3 class="text-xl font-bold text-white mb-2">NGO & Government</h3>
                                    <p class="text-gray-400 text-sm">For public service organizations</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-white font-medium mb-2">Organization Name *</label>
                            <div class="relative">
                                <input type="text"
                                    x-model="form.organization"
                                    class="w-full px-4 py-3 bg-gray-800/50 border border-gray-700/50 rounded-xl text-white focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300"
                                    placeholder="Your organization name">
                                <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                    <i class="fas fa-building text-gray-500"></i>
                                </div>
                            </div>
                        </div>

                        <div>
                            <label class="block text-white font-medium mb-2">Contact Name *</label>
                            <div class="relative">
                                <input type="text"
                                    x-model="form.contactName"
                                    class="w-full px-4 py-3 bg-gray-800/50 border border-gray-700/50 rounded-xl text-white focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300"
                                    placeholder="Your full name">
                                <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                    <i class="fas fa-user text-gray-500"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-white font-medium mb-2">Email Address *</label>
                            <div class="relative">
                                <input type="email"
                                    x-model="form.email"
                                    class="w-full px-4 py-3 bg-gray-800/50 border border-gray-700/50 rounded-xl text-white focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300"
                                    placeholder="your@email.com">
                                <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                    <i class="fas fa-envelope text-gray-500"></i>
                                </div>
                            </div>
                        </div>

                        <div>
                            <label class="block text-white font-medium mb-2">Phone Number</label>
                            <div class="relative">
                                <input type="tel"
                                    x-model="form.phone"
                                    class="w-full px-4 py-3 bg-gray-800/50 border border-gray-700/50 rounded-xl text-white focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300"
                                    placeholder="+1 (555) 000-0000">
                                <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                    <i class="fas fa-phone text-gray-500"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <label class="block text-white font-medium mb-2">Tell us about your goals *</label>
                        <div class="relative">
                            <textarea x-model="form.message"
                                    rows="4"
                                    class="w-full px-4 py-3 bg-gray-800/50 border border-gray-700/50 rounded-xl text-white focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300"
                                    placeholder="Describe your organization's mission and how you envision collaborating with EcoSphere..."></textarea>
                            <div class="absolute top-3 right-3 text-gray-500 pointer-events-none">
                                <i class="fas fa-comment-alt"></i>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center">
                        <input type="checkbox"
                            x-model="form.agreeTerms"
                            class="w-4 h-4 text-blue-500 bg-gray-800/50 border border-gray-700/50 rounded focus:ring-2 focus:ring-blue-500">
                        <label class="ml-3 text-gray-300 text-sm">
                            I agree to receive communications about partnership opportunities
                        </label>
                    </div>

                    <div class="text-center">
                        <button type="submit"
                                :disabled="submitting"
                                :class="submitting ? 'opacity-50 cursor-not-allowed' : 'hover:transform hover:-translate-y-1'"
                                class="w-full md:w-auto px-12 py-4 bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white rounded-xl font-semibold transition-all duration-500 shadow-lg hover:shadow-xl flex items-center justify-center">
                            <template x-if="submitting">
                                <div class="flex items-center">
                                    <div class="w-5 h-5 border-2 border-white border-t-transparent rounded-full animate-spin mr-3"></div>
                                    Sending Message...
                                </div>
                            </template>
                            <template x-if="!submitting">
                                <div class="flex items-center">
                                    <i class="fas fa-paper-plane mr-3"></i>
                                    Send Partnership Inquiry
                                </div>
                            </template>
                        </button>
                    </div>

                    <!-- Success Message -->
                    <div x-show="success"
                        x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 transform scale-95"
                        x-transition:enter-end="opacity-100 transform scale-100"
                        class="mt-6 p-6 bg-blue-500/10 border border-blue-500/30 rounded-xl text-white text-center">
                        <i class="fas fa-check-circle text-blue-500 text-xl mb-2"></i>
                        <div class="font-semibold">Application Submitted Successfully!</div>
                        <p class="text-sm mt-1">Our partnership team will contact you within 48 hours.</p>
                    </div>

                    <!-- Error Message -->
                    <div x-show="error"
                        x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 transform scale-95"
                        x-transition:enter-end="opacity-100 transform scale-100"
                        class="mt-6 p-6 bg-red-500/10 border border-red-500/30 rounded-xl text-white text-center">
                        <i class="fas fa-exclamation-triangle text-red-500 text-xl mb-2"></i>
                        <div class="font-semibold">Please fill in all required fields</div>
                        <p class="text-sm mt-1">Make sure to select a partnership type and complete all required information.</p>
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-app-layout>

<script>
document.addEventListener('alpine:init', () => {
    Alpine.data('partnershipForm', () => ({
        form: {
            organization: '',
            contactName: '',
            email: '',
            phone: '',
            tier: '',
            message: '',
            agreeTerms: false
        },
        submitting: false,
        success: false,
        error: false,

        submitForm() {
            if (!this.validateForm()) {
                this.error = true;
                setTimeout(() => {
                    this.error = false;
                }, 5000);
                return;
            }

            this.submitting = true;

            // Simulate API call
            setTimeout(() => {
                this.submitting = false;
                this.success = true;

                // Reset form after success
                setTimeout(() => {
                    this.form = {
                        organization: '',
                        contactName: '',
                        email: '',
                        phone: '',
                        tier: '',
                        message: '',
                        agreeTerms: false
                    };
                    this.success = false;
                }, 5000);
            }, 2000);
        },

        validateForm() {
            const required = ['organization', 'contactName', 'email', 'tier', 'message'];
            for (let field of required) {
                if (!this.form[field]) {
                    return false;
                }
            }
            return true;
        }
    }));
});
</script>
