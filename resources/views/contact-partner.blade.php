<x-app-layout>
    <div class="min-h-screen bg-slate-950">
        
        <div class="pointer-events-none fixed inset-0 z-0 opacity-20">
            <div
                class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI0MCIgaGVpZ2h0PSI0MCIgdmlld0JveD0iMCAwIDQwIDQwIj48cGF0aCBmaWxsPSJub25lIiBzdHJva2U9IndoaXRlIiBzdHJva2Utd2lkdGg9IjAuNSIgc3Ryb2tlLW9wYWNpdHk9IjAuMDgiIGQ9Ik0wIDQwTDQwIDBNNDAgNDBMMCAwIi8+PC9zdmc+')]"
            ></div>
        </div>

        <div
            class="relative z-10 mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8 lg:py-24"
        >
            <div class="mx-auto max-w-4xl">
                
                <div class="mb-10 text-center">
                    <div
                        class="mb-5 inline-flex items-center gap-2 rounded-full border border-cyan-500/30 bg-cyan-500/10 px-3 py-1 font-mono text-xs tracking-wider text-cyan-400"
                    >
                        <i class="fas fa-handshake text-xs"></i> STRATEGIC
                        PARTNERSHIP
                    </div>
                    <h1 class="mb-4 text-4xl font-bold text-white sm:text-5xl">
                        Let's Build the Future of Industry 4.0
                    </h1>
                    <p class="mx-auto max-w-2xl text-lg text-gray-400">Fill out this form to start your partnership journey. Our team will contact you within 48 hours.</p>
                </div>

                
                <div
                    class="rounded-2xl border border-slate-700 bg-slate-800/40 p-6 shadow-xl backdrop-blur-md md:p-8"
                >
                    <form
                        x-data="partnershipForm()"
                        x-init="initFromUrl()"
                        @submit.prevent="submitForm"
                        class="space-y-6"
                    >
                        
                        <div>
                            <label class="mb-3 block font-semibold text-white"
                                >Partnership Type *</label
                            >
                            <div class="grid grid-cols-1 gap-4 md:grid-cols-3">
                                <div
                                    @click="form.tier = 'corporate'"
                                    :class="form.tier === 'corporate'
                                        ? 'border-cyan-500 bg-cyan-500/10 ring-1 ring-cyan-500'
                                        : 'border-slate-700 hover:border-slate-500'"
                                    class="cursor-pointer rounded-xl border bg-slate-800/50 p-4 transition-all duration-200"
                                >
                                    <div
                                        class="flex flex-col items-center text-center"
                                    >
                                        <div
                                            class="mb-2 flex h-12 w-12 items-center justify-center rounded-lg bg-cyan-500/20"
                                        >
                                            <i
                                                class="fas fa-building text-xl text-cyan-400"
                                            ></i>
                                        </div>
                                        <span class="font-medium text-white"
                                            >Corporate</span
                                        >
                                        <p class="mt-1 text-xs text-gray-400">For manufacturers & enterprises</p>
                                    </div>
                                </div>
                                <div
                                    @click="form.tier = 'technology'"
                                    :class="form.tier === 'technology'
                                        ? 'border-cyan-500 bg-cyan-500/10 ring-1 ring-cyan-500'
                                        : 'border-slate-700 hover:border-slate-500'"
                                    class="cursor-pointer rounded-xl border bg-slate-800/50 p-4 transition-all duration-200"
                                >
                                    <div
                                        class="flex flex-col items-center text-center"
                                    >
                                        <div
                                            class="mb-2 flex h-12 w-12 items-center justify-center rounded-lg bg-cyan-500/20"
                                        >
                                            <i
                                                class="fas fa-microchip text-xl text-cyan-400"
                                            ></i>
                                        </div>
                                        <span class="font-medium text-white"
                                            >Technology</span
                                        >
                                        <p class="mt-1 text-xs text-gray-400">For tech providers & startups</p>
                                    </div>
                                </div>
                                <div
                                    @click="form.tier = 'research'"
                                    :class="form.tier === 'research'
                                        ? 'border-cyan-500 bg-cyan-500/10 ring-1 ring-cyan-500'
                                        : 'border-slate-700 hover:border-slate-500'"
                                    class="cursor-pointer rounded-xl border bg-slate-800/50 p-4 transition-all duration-200"
                                >
                                    <div
                                        class="flex flex-col items-center text-center"
                                    >
                                        <div
                                            class="mb-2 flex h-12 w-12 items-center justify-center rounded-lg bg-cyan-500/20"
                                        >
                                            <i
                                                class="fas fa-graduation-cap text-xl text-cyan-400"
                                            ></i>
                                        </div>
                                        <span class="font-medium text-white"
                                            >Research & Academia</span
                                        >
                                        <p class="mt-1 text-xs text-gray-400">Universities & institutions</p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="mt-4 grid grid-cols-1 gap-4 md:grid-cols-3"
                            >
                                <div
                                    @click="form.tier = 'ngo'"
                                    :class="form.tier === 'ngo'
                                        ? 'border-cyan-500 bg-cyan-500/10 ring-1 ring-cyan-500'
                                        : 'border-slate-700 hover:border-slate-500'"
                                    class="cursor-pointer rounded-xl border bg-slate-800/50 p-4 transition-all duration-200"
                                >
                                    <div
                                        class="flex flex-col items-center text-center"
                                    >
                                        <div
                                            class="mb-2 flex h-12 w-12 items-center justify-center rounded-lg bg-cyan-500/20"
                                        >
                                            <i
                                                class="fas fa-hand-holding-heart text-xl text-cyan-400"
                                            ></i>
                                        </div>
                                        <span class="font-medium text-white"
                                            >NGO / Non-profit</span
                                        >
                                        <p class="mt-1 text-xs text-gray-400">For social & environmental orgs</p>
                                    </div>
                                </div>
                                <div
                                    @click="form.tier = 'government'"
                                    :class="form.tier === 'government'
                                        ? 'border-cyan-500 bg-cyan-500/10 ring-1 ring-cyan-500'
                                        : 'border-slate-700 hover:border-slate-500'"
                                    class="cursor-pointer rounded-xl border bg-slate-800/50 p-4 transition-all duration-200"
                                >
                                    <div
                                        class="flex flex-col items-center text-center"
                                    >
                                        <div
                                            class="mb-2 flex h-12 w-12 items-center justify-center rounded-lg bg-cyan-500/20"
                                        >
                                            <i
                                                class="fas fa-landmark text-xl text-cyan-400"
                                            ></i>
                                        </div>
                                        <span class="font-medium text-white"
                                            >Government</span
                                        >
                                        <p class="mt-1 text-xs text-gray-400">Public sector agencies</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                        <div class="grid gap-5 md:grid-cols-2">
                            <div>
                                <label
                                    class="mb-2 block text-sm font-medium text-gray-300"
                                    >Organization Name *</label
                                >
                                <input
                                    type="text"
                                    x-model="form.organization"
                                    class="w-full rounded-lg border border-slate-700 bg-slate-900/50 px-4 py-2.5 text-white focus:border-transparent focus:ring-2 focus:ring-cyan-500"
                                    placeholder="e.g. PT Astra Manufacturing"
                                />
                            </div>
                            <div>
                                <label
                                    class="mb-2 block text-sm font-medium text-gray-300"
                                    >Website (optional)</label
                                >
                                <input
                                    type="url"
                                    x-model="form.website"
                                    class="w-full rounded-lg border border-slate-700 bg-slate-900/50 px-4 py-2.5 text-white focus:border-transparent focus:ring-2 focus:ring-cyan-500"
                                    placeholder="https://..."
                                />
                            </div>
                        </div>

                        
                        <div class="grid gap-5 md:grid-cols-2">
                            <div>
                                <label
                                    class="mb-2 block text-sm font-medium text-gray-300"
                                    >Contact Name *</label
                                >
                                <input
                                    type="text"
                                    x-model="form.contactName"
                                    class="w-full rounded-lg border border-slate-700 bg-slate-900/50 px-4 py-2.5 text-white"
                                    placeholder="Full name"
                                />
                            </div>
                            <div>
                                <label
                                    class="mb-2 block text-sm font-medium text-gray-300"
                                    >Job Title *</label
                                >
                                <input
                                    type="text"
                                    x-model="form.title"
                                    class="w-full rounded-lg border border-slate-700 bg-slate-900/50 px-4 py-2.5 text-white"
                                    placeholder="e.g. VP of Operations"
                                />
                            </div>
                        </div>

                        
                        <div class="grid gap-5 md:grid-cols-2">
                            <div>
                                <label
                                    class="mb-2 block text-sm font-medium text-gray-300"
                                    >Email Address *</label
                                >
                                <input
                                    type="email"
                                    x-model="form.email"
                                    class="w-full rounded-lg border border-slate-700 bg-slate-900/50 px-4 py-2.5 text-white"
                                />
                            </div>
                            <div>
                                <label
                                    class="mb-2 block text-sm font-medium text-gray-300"
                                    >Phone Number</label
                                >
                                <input
                                    type="tel"
                                    x-model="form.phone"
                                    class="w-full rounded-lg border border-slate-700 bg-slate-900/50 px-4 py-2.5 text-white"
                                />
                            </div>
                        </div>

                        
                        <div class="grid gap-5 md:grid-cols-2">
                            <div>
                                <label
                                    class="mb-2 block text-sm font-medium text-gray-300"
                                    >Number of Factories / Facilities</label
                                >
                                <select
                                    x-model="form.factories"
                                    class="w-full rounded-lg border border-slate-700 bg-slate-900/50 px-4 py-2.5 text-white"
                                >
                                    <option value="">Select</option>
                                    <option>1-5</option>
                                    <option>6-20</option>
                                    <option>21-50</option>
                                    <option>50+</option>
                                </select>
                            </div>
                            <div>
                                <label
                                    class="mb-2 block text-sm font-medium text-gray-300"
                                    >Primary Regions of Operation</label
                                >
                                <input
                                    type="text"
                                    x-model="form.regions"
                                    class="w-full rounded-lg border border-slate-700 bg-slate-900/50 px-4 py-2.5 text-white"
                                    placeholder="e.g. Java, Sumatra, Kalimantan"
                                />
                            </div>
                        </div>

                        <div>
                            <label
                                class="mb-2 block text-sm font-medium text-gray-300"
                                >Technologies You're Interested In
                                (multiple)</label
                            >
                            <div class="grid grid-cols-2 gap-3">
                                <label class="flex items-center gap-2"
                                    ><input
                                        type="checkbox"
                                        value="IIoT"
                                        x-model="form.techInterests"
                                        class="rounded border-slate-700 bg-slate-900 text-cyan-500"
                                    />
                                    <span class="text-sm text-gray-300"
                                        >IIoT Integration</span
                                    ></label
                                >
                                <label class="flex items-center gap-2"
                                    ><input
                                        type="checkbox"
                                        value="Predictive AI"
                                        x-model="form.techInterests"
                                        class="rounded border-slate-700 bg-slate-900 text-cyan-500"
                                    />
                                    <span class="text-sm text-gray-300"
                                        >Predictive AI</span
                                    ></label
                                >
                                <label class="flex items-center gap-2"
                                    ><input
                                        type="checkbox"
                                        value="Digital Twin"
                                        x-model="form.techInterests"
                                        class="rounded border-slate-700 bg-slate-900 text-cyan-500"
                                    />
                                    <span class="text-sm text-gray-300"
                                        >Digital Twin</span
                                    ></label
                                >
                                <label class="flex items-center gap-2"
                                    ><input
                                        type="checkbox"
                                        value="Energy Optimization"
                                        x-model="form.techInterests"
                                        class="rounded border-slate-700 bg-slate-900 text-cyan-500"
                                    />
                                    <span class="text-sm text-gray-300"
                                        >Energy Optimization</span
                                    ></label
                                >
                                <label class="flex items-center gap-2"
                                    ><input
                                        type="checkbox"
                                        value="Supply Chain Analytics"
                                        x-model="form.techInterests"
                                        class="rounded border-slate-700 bg-slate-900 text-cyan-500"
                                    />
                                    <span class="text-sm text-gray-300"
                                        >Supply Chain Analytics</span
                                    ></label
                                >
                            </div>
                        </div>

                        <div>
                            <label
                                class="mb-2 block text-sm font-medium text-gray-300"
                                >What are your partnership goals? *</label
                            >
                            <textarea
                                x-model="form.message"
                                rows="4"
                                class="w-full rounded-lg border border-slate-700 bg-slate-900/50 px-4 py-2.5 text-white"
                                placeholder="Tell us about your objectives, expected outcomes, or any specific requirements..."
                            ></textarea>
                        </div>

                        <div class="flex items-center">
                            <input
                                type="checkbox"
                                x-model="form.agreeTerms"
                                class="h-4 w-4 rounded border-slate-700 bg-slate-900 text-cyan-500"
                            />
                            <label class="ml-2 text-sm text-gray-400"
                                >I agree to receive communications about
                                partnership opportunities</label
                            >
                        </div>

                        <div class="flex gap-3 pt-2">
                            <button
                                type="submit"
                                :disabled="submitting"
                                :class="submitting
                                    ? 'opacity-70 cursor-not-allowed'
                                    : 'hover:shadow-lg hover:-translate-y-0.5'"
                                class="flex w-full items-center justify-center gap-2 rounded-lg bg-gradient-to-r from-cyan-500 to-blue-600 px-8 py-3 font-semibold text-white transition-all duration-200 md:w-auto"
                            >
                                <template x-if="submitting"
                                    ><>
                                    <div
                                        class="h-4 w-4 animate-spin rounded-full border-2 border-white border-t-transparent"
                                    ></div>
                                    Submitting...</>
                                >
                                <template x-if="!submitting"
                                    ><><i class="fas fa-paper-plane"></i> Submit
                                    Partnership Request</>
                                >
                            </button>
                            <button class="rounded-lg bg-gray-500 px-4 py-2">
                                <a href="{{ route('become') }}">Back</a>
                            </button>
                        </div>

                        <div
                            x-show="success"
                            x-transition
                            class="mt-4 rounded-lg border border-emerald-500/30 bg-emerald-500/10 p-4 text-center text-sm text-emerald-400"
                        >
                            <i class="fas fa-check-circle mr-1"></i> Thank you!
                            Our partnership team will contact you within 48
                            hours.
                        </div>
                        <div
                            x-show="error"
                            x-transition
                            class="mt-4 rounded-lg border border-red-500/30 bg-red-500/10 p-4 text-center text-sm text-red-400"
                        >
                            <i class="fas fa-exclamation-triangle mr-1"></i>
                            Please select a partnership type and fill all
                            required fields.
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
                    agreeTerms: false,
                },
                submitting: false,
                success: false,
                error: false,
                initFromUrl() {
                    const urlParams = new URLSearchParams(
                        window.location.search,
                    );
                    const type = urlParams.get('type');
                    if (
                        type &&
                        [
                            'corporate',
                            'technology',
                            'research',
                            'ngo',
                            'government',
                        ].includes(type)
                    ) {
                        this.form.tier = type;
                    }
                },
                submitForm() {
                    if (
                        !this.form.tier ||
                        !this.form.organization ||
                        !this.form.contactName ||
                        !this.form.title ||
                        !this.form.email ||
                        !this.form.message
                    ) {
                        this.error = true;
                        setTimeout(() => (this.error = false), 5000);
                        return;
                    }
                    this.submitting = true;
                    setTimeout(() => {
                        this.submitting = false;
                        this.success = true;
                        this.form = {
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
                            agreeTerms: false,
                        };
                        setTimeout(() => (this.success = false), 5000);
                    }, 1500);
                },
            }));
        });
    </script>
</x-app-layout>
