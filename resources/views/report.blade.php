<x-app-layout>
    <div
        class="min-h-screen bg-slate-900 px-4 pt-20 text-white md:px-6 md:pt-24"
        x-data="reportPage"
    >
        
        <template x-if="showIntro">
            <div
                x-show="showIntro"
                x-transition.opacity
                class="fixed inset-0 z-50 flex items-center justify-center bg-slate-950/70"
                style="pointer-events: auto; display: none"
                x-cloak
            >
                <div
                    class="mx-4 max-w-lg rounded-2xl border border-slate-700 bg-slate-800 p-6 text-center shadow-2xl md:p-8"
                >
                    <h2
                        class="mb-4 text-2xl font-bold text-green-400 md:text-3xl"
                    >
                        Welcome to Eco-Report Hub 🌿
                    </h2>
                    <p class="mb-6 text-sm leading-relaxed text-slate-300 md:text-base">Join our mission to protect the environment! You can discuss issues in the <strong>Community Forum</strong> or directly report real-world conditions through the <strong>Report Form</strong>.</p>
                    <button
                        @click="closeIntro"
                        class="w-full rounded-lg bg-green-600 px-6 py-2 font-semibold transition-colors hover:bg-green-500 md:w-auto"
                    >
                        Let's Get Started
                    </button>
                </div>
            </div>
        </template>

        
        <div
            class="relative z-10 mb-6 flex flex-col gap-4 md:flex-row md:items-center md:justify-between"
        >
            <h1
                class="text-center text-3xl font-extrabold tracking-tight md:text-left md:text-4xl"
            >
                📢 Eco-Report Hub
            </h1>
            <p class="text-center text-sm text-slate-400 md:text-left md:text-base">Together we protect the Earth 🌍</p>
        </div>

        
        <div
            class="relative z-10 mb-6 flex space-x-2 overflow-x-auto border-b border-slate-700 pb-2 md:mb-8 md:space-x-4"
        >
            <button
                class="whitespace-nowrap rounded-t-lg px-3 py-2 text-sm font-semibold transition md:px-4 md:py-2 md:text-base"
                :class="tab === 'forum'
                    ? 'bg-slate-800 text-green-400'
                    : 'text-slate-400 hover:text-white'"
                @click="tab = 'forum'"
            >
                💬 Community Forum
            </button>
            <button
                class="whitespace-nowrap rounded-t-lg px-3 py-2 text-sm font-semibold transition md:px-4 md:py-2 md:text-base"
                :class="tab === 'report'
                    ? 'bg-slate-800 text-green-400'
                    : 'text-slate-400 hover:text-white'"
                @click="tab = 'report'"
            >
                📸 Report Condition
            </button>
        </div>

        
        <div
            x-show="tab === 'forum'"
            x-cloak
            class="flex h-[70vh] flex-col overflow-hidden rounded-2xl border border-slate-700 bg-slate-800 shadow-lg md:h-[75vh] md:flex-row"
            style="pointer-events: auto; position: relative; z-index: 1"
        >
            <div
                class="bg-slate-850 flex flex-col border-b border-slate-700 p-4 md:w-64 md:border-r"
            >
                <div class="mb-4 flex items-center justify-between">
                    <h2 class="text-xl font-bold">🌿 Channels</h2>
                    <button
                        @click="mobileSidebarOpen = !mobileSidebarOpen"
                        class="text-slate-400 md:hidden"
                    >
                        <svg x-show="
                                !mobileSidebarOpen
                            " class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                        </svg>
                        <svg x-show="
                                mobileSidebarOpen
                            " class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>

                <div
                    class="flex flex-col"
                    :class="{ 'hidden md:flex': !mobileSidebarOpen }"
                >
                    <template x-for="(ch, i) in channels" :key="i">
                        <button
                            class="mb-1 w-full rounded-lg px-3 py-2 text-left text-sm capitalize transition hover:bg-slate-700 md:text-base"
                            :class="activeChannel === ch.name
                                ? 'bg-slate-700 font-semibold'
                                : ''"
                            @click="
                                setChannel(ch.name);
                                mobileSidebarOpen = false;
                            "
                        >
                            # <span x-text="ch.name"></span>
                        </button>
                    </template>
                </div>
            </div>

            
            <div class="flex flex-1 flex-col">
                <div
                    class="flex flex-col gap-2 border-b border-slate-700 px-4 py-3 md:flex-row md:items-center md:justify-between md:px-5"
                >
                    <h3 class="text-lg font-bold capitalize">
                        # <span x-text="activeChannel"></span>
                    </h3>
                    <p class="text-xs text-slate-400 md:text-sm">Discussion and latest updates</p>
                </div>

                <div
                    class="flex-1 space-y-4 overflow-y-auto p-4 md:p-5"
                    id="chat-scroll"
                >
                    <template
                        x-for="(msg, index) in messages[activeChannel]"
                        :key="index"
                    >
                        <div class="flex items-start space-x-3">
                            <img
                                :src="msg.avatar"
                                class="h-8 w-8 rounded-full object-cover md:h-10 md:w-10"
                            />
                            <div class="min-w-0 flex-1">
                                <p class="text-sm font-semibold md:text-base">
                                    <span x-text="msg.user"></span>
                                    <span
                                        class="ml-2 text-xs text-slate-400"
                                        x-text="msg.time"
                                    ></span>
                                </p>
                                <p x-text="
                                        msg.text
                                    " class="break-words text-sm text-slate-200 md:text-base"></p>
                                <template x-if="msg.image">
                                    <img
                                        :src="msg.image"
                                        @click="selectedImage = msg.image"
                                        class="mt-2 w-40 cursor-pointer rounded-xl border border-slate-700 object-cover shadow-lg transition duration-300 hover:scale-105 md:w-56"
                                    />
                                </template>
                            </div>
                        </div>
                    </template>
                </div>

                
                <div
                    class="flex items-center space-x-2 border-t border-slate-700 p-3 md:space-x-3 md:p-4"
                >
                    <input
                        type="text"
                        placeholder="Type your message..."
                        class="flex-1 rounded-lg border border-slate-700 bg-slate-800 px-3 py-2 text-sm text-white focus:outline-none focus:ring-2 focus:ring-green-500 md:text-base"
                        style="pointer-events: auto"
                        x-model="newMessage"
                        @keydown.enter="sendMessage"
                    />
                    <input
                        type="file"
                        x-ref="imageUpload"
                        class="hidden"
                        @change="uploadImage"
                        accept="image/*"
                    />
                    <button
                        @click="$refs.imageUpload.click()"
                        class="flex-shrink-0 rounded-lg p-2 hover:bg-slate-700"
                    >
                        📎
                    </button>
                    <button
                        @click="sendMessage"
                        class="flex-shrink-0 rounded-lg bg-green-600 px-3 py-2 text-sm hover:bg-green-500 md:px-4 md:text-base"
                    >
                        Send
                    </button>
                </div>
            </div>
        </div>

        
        <div
            x-show="tab === 'report'"
            x-cloak
            class="mb-6 rounded-2xl border border-slate-700 bg-slate-800 p-4 shadow-lg md:p-8"
            style="pointer-events: auto; position: relative; z-index: 1"
        >
            <h2 class="mb-4 text-xl font-bold md:mb-6 md:text-2xl">
                📝 Report Environmental Condition
            </h2>
            <form @submit.prevent="submitReport" class="space-y-4 md:space-y-5">
                <div>
                    <label
                        class="mb-2 block text-sm text-slate-300 md:text-base"
                        >Report Title</label
                    >
                    <input
                        type="text"
                        x-model="report.title"
                        class="w-full rounded-lg border border-slate-700 bg-slate-900 px-4 py-2 text-sm text-white focus:outline-none focus:ring-2 focus:ring-green-500 md:text-base"
                        style="pointer-events: auto"
                        placeholder="Enter report title"
                    />
                </div>

                <div>
                    <label
                        class="mb-2 block text-sm text-slate-300 md:text-base"
                        >Description</label
                    >
                    <textarea
                        x-model="report.desc"
                        rows="4"
                        class="w-full rounded-lg border border-slate-700 bg-slate-900 px-4 py-2 text-sm text-white focus:outline-none focus:ring-2 focus:ring-green-500 md:text-base"
                        style="pointer-events: auto"
                        placeholder="Describe the environmental issue"
                    ></textarea>
                </div>

                <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                    <div>
                        <label
                            class="mb-2 block text-sm text-slate-300 md:text-base"
                            >Location (Coordinates / Address)</label
                        >
                        <input
                            type="text"
                            x-model="report.location"
                            class="w-full rounded-lg border border-slate-700 bg-slate-900 px-4 py-2 text-sm text-white focus:outline-none focus:ring-2 focus:ring-green-500 md:text-base"
                            style="pointer-events: auto"
                            placeholder="Enter location"
                        />
                    </div>
                    <div>
                        <label
                            class="mb-2 block text-sm text-slate-300 md:text-base"
                            >Category</label
                        >
                        <select
                            x-model="report.category"
                            class="w-full rounded-lg border border-slate-700 bg-slate-900 px-4 py-2 text-sm text-white focus:outline-none focus:ring-2 focus:ring-green-500 md:text-base"
                            style="pointer-events: auto"
                        >
                            <option value="">Select category...</option>
                            <option value="Waste">Waste</option>
                            <option value="Water">Water</option>
                            <option value="Air">Air</option>
                            <option value="Energy">Energy</option>
                        </select>
                    </div>
                </div>

                <div>
                    <label
                        class="mb-2 block text-sm text-slate-300 md:text-base"
                        >Upload Photo (optional)</label
                    >
                    <input
                        type="file"
                        x-ref="reportImage"
                        @change="uploadReportImage"
                        class="w-full text-sm text-slate-300 md:text-base"
                        style="pointer-events: auto"
                        accept="image/*"
                    />
                    <template x-if="report.image">
                        <img
                            :src="report.image"
                            @click="selectedImage = report.image"
                            class="mt-3 w-40 cursor-pointer rounded-xl border border-slate-700 object-cover shadow-lg transition duration-300 hover:scale-105 md:w-56"
                        />
                    </template>
                </div>

                <button
                    type="submit"
                    class="w-full rounded-lg bg-green-600 px-6 py-2 text-sm font-semibold hover:bg-green-500 md:w-auto md:text-base"
                >
                    Submit Report
                </button>
            </form>
        </div>

        
        <div
            x-show="selectedImage"
            x-transition.opacity
            class="fixed inset-0 z-[9999] flex items-center justify-center bg-black/80 p-6 backdrop-blur-sm"
            @click.self="selectedImage = null"
            x-cloak
        >
            
            <button
                @click="selectedImage = null"
                class="absolute right-5 top-5 text-4xl text-white transition hover:scale-110"
            >
                ✕
            </button>

            
            <img
                :src="selectedImage"
                class="max-h-[90vh] max-w-5xl animate-fade-in rounded-2xl border border-slate-700 shadow-2xl"
            />
        </div>
    </div>

    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('reportPage', () => ({
                showIntro: false,
                tab: 'forum',
                mobileSidebarOpen: false,
                username: @json (Auth::user()->name ?? 'Guest'),
                channels: [
                    { name: 'general' },
                    { name: 'climate' },
                    { name: 'water' },
                    { name: 'energy' },
                    { name: 'waste' },
                    { name: 'wildlife' },
                    { name: 'community-action' },
                    { name: 'report-condition' },
                ],
                activeChannel: 'waste',
                messages: {
                    waste: [
                        {
                            user: 'Fikri',
                            text: 'Plastic waste is piling up in the river 😢',
                            time: '09:10',
                            avatar: 'https://i.pravatar.cc/100?img=12',
                        },
                        {
                            user: 'Mia',
                            text: 'We should organize a cleanup next week!',
                            time: '09:15',
                            avatar: 'https://i.pravatar.cc/100?img=5',
                        },
                    ],
                    water: [],
                    air: [],
                    energy: [],
                    education: [],
                },
                newMessage: '',
                newImage: null,
                selectedImage: null,
                report: {
                    title: '',
                    desc: '',
                    location: '',
                    category: '',
                    image: null,
                },

                init() {
                    if (!localStorage.getItem('ecoReportIntroShown')) {
                        setTimeout(() => {
                            this.showIntro = true;
                        }, 500);
                    } else {
                        this.showIntro = false;
                    }

                    if (window.innerWidth >= 768) {
                        this.mobileSidebarOpen = true;
                    }

                    window.addEventListener('resize', () => {
                        if (window.innerWidth >= 768) {
                            this.mobileSidebarOpen = true;
                        }
                    });

                    this.$nextTick(() => {
                        document
                            .querySelectorAll('input, textarea, select')
                            .forEach((el) => {
                                el.style.pointerEvents = 'auto';
                            });
                    });
                },

                closeIntro() {
                    this.showIntro = false;
                    localStorage.setItem('ecoReportIntroShown', 'true');

                    this.$nextTick(() => {
                        document
                            .querySelectorAll('input, textarea, select')
                            .forEach((el) => {
                                el.style.pointerEvents = 'auto';
                                el.disabled = false;
                            });
                    });
                },

                setChannel(name) {
                    this.activeChannel = name;
                },

                sendMessage() {
                    if (!this.newMessage && !this.newImage) return;
                    this.messages[this.activeChannel].push({
                        user: this.username,
                        text: this.newMessage,
                        time: new Date().toLocaleTimeString([], {
                            hour: '2-digit',
                            minute: '2-digit',
                        }),
                        avatar: 'https://i.pravatar.cc/100?u=' + this.username,
                        image: this.newImage,
                    });
                    this.newMessage = '';
                    this.newImage = null;
                    if (this.$refs.imageUpload) {
                        this.$refs.imageUpload.value = '';
                    }
                    this.$nextTick(() => {
                        const chatScroll = document.getElementById('chat-scroll');
                        if (chatScroll) {
                            chatScroll.scrollTop = chatScroll.scrollHeight;
                        }
                    });
                },

                uploadImage(e) {
                    const file = e.target.files[0];
                    if (file) this.newImage = URL.createObjectURL(file);
                },

                uploadReportImage(e) {
                    const file = e.target.files[0];
                    if (file) this.report.image = URL.createObjectURL(file);
                },

                submitReport() {
                    if (!this.report.title || !this.report.desc) {
                        return;
                    }
                    this.report = {
                        title: '',
                        desc: '',
                        location: '',
                        category: '',
                        image: null,
                    };
                    if (this.$refs.reportImage) {
                        this.$refs.reportImage.value = '';
                    }
                },
            }));
        });
    </script>

    <style>
        [x-cloak] {
            display: none !important;
        }

        .relative.z-10 {
            position: relative;
            z-index: 10 !important;
        }

        .fixed[style*='display: none'] {
            display: none !important;
        }

        input,
        textarea,
        select {
            pointer-events: auto !important;
        }

        #chat-scroll::-webkit-scrollbar {
            width: 4px;
        }
        #chat-scroll::-webkit-scrollbar-track {
            background: #334155;
        }
        #chat-scroll::-webkit-scrollbar-thumb {
            background: #64748b;
            border-radius: 2px;
        }

        @media (max-width: 768px) {
            button,
            input,
            select,
            textarea {
                min-height: 44px;
            }
        }

        .modal-enter {
            opacity: 0;
            transform: scale(0.95);
        }
        .modal-enter-active {
            opacity: 1;
            transform: scale(1);
            transition:
                opacity 200ms ease-out,
                transform 200ms ease-out;
        }
    </style>
</x-app-layout>
