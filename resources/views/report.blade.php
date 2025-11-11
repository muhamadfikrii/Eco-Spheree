<x-app-layout>
    <div class="min-h-screen bg-slate-900 text-white pt-20 md:pt-24 px-4 md:px-6" x-data="reportPage">

        <!-- 🌍 Introduction Modal -->
        <template x-if="showIntro">
            <div 
                x-show="showIntro" 
                x-transition.opacity 
                class="fixed inset-0 bg-slate-950/70 flex items-center justify-center z-50"
                style="pointer-events: auto; display: none;"
                x-cloak>
                <div class="bg-slate-800 border border-slate-700 rounded-2xl p-6 md:p-8 max-w-lg mx-4 text-center shadow-2xl">
                    <h2 class="text-2xl md:text-3xl font-bold mb-4 text-green-400">Welcome to Eco-Report Hub 🌿</h2>
                    <p class="text-slate-300 mb-6 leading-relaxed text-sm md:text-base">
                        Join our mission to protect the environment!  
                        You can discuss issues in the <strong>Community Forum</strong>  
                        or directly report real-world conditions through the <strong>Report Form</strong>.
                    </p>
                    <button 
                        @click="closeIntro" 
                        class="bg-green-600 hover:bg-green-500 px-6 py-2 rounded-lg font-semibold w-full md:w-auto transition-colors">
                        Let's Get Started
                    </button>
                </div>
            </div>
        </template>

        <!-- Header -->
        <div class="flex flex-col md:flex-row md:justify-between md:items-center mb-6 gap-4 relative z-10">
            <h1 class="text-3xl md:text-4xl font-extrabold tracking-tight text-center md:text-left">📢 Eco-Report Hub</h1>
            <p class="text-slate-400 text-center md:text-left text-sm md:text-base">Together we protect the Earth 🌍</p>
        </div>

        <!-- Tab Switch -->
        <div class="flex space-x-2 md:space-x-4 mb-6 md:mb-8 border-b border-slate-700 pb-2 overflow-x-auto relative z-10">
            <button 
                class="px-3 py-2 md:px-4 md:py-2 rounded-t-lg font-semibold transition whitespace-nowrap text-sm md:text-base"
                :class="tab === 'forum' ? 'bg-slate-800 text-green-400' : 'text-slate-400 hover:text-white'"
                @click="tab = 'forum'">
                💬 Community Forum
            </button>
            <button 
                class="px-3 py-2 md:px-4 md:py-2 rounded-t-lg font-semibold transition whitespace-nowrap text-sm md:text-base"
                :class="tab === 'report' ? 'bg-slate-800 text-green-400' : 'text-slate-400 hover:text-white'"
                @click="tab = 'report'">
                📸 Report Condition
            </button>
        </div>

        <!-- Forum Section -->
        <div x-show="tab === 'forum'" x-cloak class="flex flex-col md:flex-row h-[70vh] md:h-[75vh] bg-slate-800 rounded-2xl overflow-hidden border border-slate-700 shadow-lg" style="pointer-events: auto; position: relative; z-index: 1;">
            <!-- Sidebar (Channels) - Mobile Collapsible -->
            <div class="md:w-64 bg-slate-850 border-b md:border-r border-slate-700 p-4 flex flex-col">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-xl font-bold">🌿 Channels</h2>
                    <button @click="mobileSidebarOpen = !mobileSidebarOpen" class="md:hidden text-slate-400">
                        <svg x-show="!mobileSidebarOpen" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                        </svg>
                        <svg x-show="mobileSidebarOpen" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
                
                <div class="flex flex-col" :class="{'hidden md:flex': !mobileSidebarOpen}">
                    <template x-for="(ch, i) in channels" :key="i">
                        <button 
                            class="w-full text-left py-2 px-3 mb-1 rounded-lg hover:bg-slate-700 transition text-sm md:text-base"
                            :class="activeChannel === ch.name ? 'bg-slate-700 font-semibold' : ''"
                            @click="setChannel(ch.name); mobileSidebarOpen = false">
                            # <span x-text="ch.name"></span>
                        </button>
                    </template>
                </div>
            </div>

            <!-- Chat Area -->
            <div class="flex-1 flex flex-col">
                <div class="px-4 md:px-5 py-3 border-b border-slate-700 flex flex-col md:flex-row md:justify-between md:items-center gap-2">
                    <h3 class="text-lg font-bold"># <span x-text="activeChannel"></span></h3>
                    <p class="text-slate-400 text-xs md:text-sm">Discussion and latest updates</p>
                </div>

                <!-- Chat Messages -->
                <div class="flex-1 overflow-y-auto p-4 md:p-5 space-y-4" id="chat-scroll">
                    <template x-for="(msg, index) in messages[activeChannel]" :key="index">
                        <div class="flex items-start space-x-3">
                            <img :src="msg.avatar" class="w-8 h-8 md:w-10 md:h-10 rounded-full object-cover">
                            <div class="flex-1 min-w-0">
                                <p class="font-semibold text-sm md:text-base">
                                    <span x-text="msg.user"></span>
                                    <span class="text-xs text-slate-400 ml-2" x-text="msg.time"></span>
                                </p>
                                <p x-text="msg.text" class="text-slate-200 text-sm md:text-base break-words"></p>
                                <template x-if="msg.image">
                                    <img :src="msg.image" class="mt-2 max-w-full md:w-56 rounded-lg border border-slate-700">
                                </template>
                            </div>
                        </div>
                    </template>
                </div>

                <!-- Input -->
                <div class="border-t border-slate-700 p-3 md:p-4 flex items-center space-x-2 md:space-x-3">
                    <input 
                        type="text" 
                        placeholder="Type your message..." 
                        class="flex-1 bg-slate-800 border border-slate-700 rounded-lg px-3 py-2 text-white focus:ring-2 focus:ring-green-500 focus:outline-none text-sm md:text-base"
                        style="pointer-events: auto;"
                        x-model="newMessage" 
                        @keydown.enter="sendMessage">
                    <input type="file" x-ref="imageUpload" class="hidden" @change="uploadImage" accept="image/*">
                    <button @click="$refs.imageUpload.click()" class="p-2 hover:bg-slate-700 rounded-lg flex-shrink-0">📎</button>
                    <button @click="sendMessage" class="bg-green-600 px-3 md:px-4 py-2 rounded-lg hover:bg-green-500 text-sm md:text-base flex-shrink-0">Send</button>
                </div>
            </div>
        </div>

        <!-- Report Form Section -->
        <div x-show="tab === 'report'" x-cloak class="bg-slate-800 rounded-2xl p-4 md:p-8 border border-slate-700 shadow-lg mb-6" style="pointer-events: auto; position: relative; z-index: 1;">
            <h2 class="text-xl md:text-2xl font-bold mb-4 md:mb-6">📝 Report Environmental Condition</h2>
            <form @submit.prevent="submitReport" class="space-y-4 md:space-y-5">
                <div>
                    <label class="block text-slate-300 mb-2 text-sm md:text-base">Report Title</label>
                    <input 
                        type="text" 
                        x-model="report.title" 
                        class="w-full bg-slate-900 border border-slate-700 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-green-500 focus:outline-none text-sm md:text-base"
                        style="pointer-events: auto;"
                        placeholder="Enter report title">
                </div>

                <div>
                    <label class="block text-slate-300 mb-2 text-sm md:text-base">Description</label>
                    <textarea 
                        x-model="report.desc" 
                        rows="4" 
                        class="w-full bg-slate-900 border border-slate-700 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-green-500 focus:outline-none text-sm md:text-base"
                        style="pointer-events: auto;"
                        placeholder="Describe the environmental issue"></textarea>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-slate-300 mb-2 text-sm md:text-base">Location (Coordinates / Address)</label>
                        <input 
                            type="text" 
                            x-model="report.location" 
                            class="w-full bg-slate-900 border border-slate-700 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-green-500 focus:outline-none text-sm md:text-base"
                            style="pointer-events: auto;"
                            placeholder="Enter location">
                    </div>
                    <div>
                        <label class="block text-slate-300 mb-2 text-sm md:text-base">Category</label>
                        <select 
                            x-model="report.category" 
                            class="w-full bg-slate-900 border border-slate-700 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-green-500 focus:outline-none text-sm md:text-base"
                            style="pointer-events: auto;">
                            <option value="">Select category...</option>
                            <option value="Waste">Waste</option>
                            <option value="Water">Water</option>
                            <option value="Air">Air</option>
                            <option value="Energy">Energy</option>
                        </select>
                    </div>
                </div>

                <div>
                    <label class="block text-slate-300 mb-2 text-sm md:text-base">Upload Photo (optional)</label>
                    <input type="file" x-ref="reportImage" @change="uploadReportImage" class="w-full text-slate-300 text-sm md:text-base" style="pointer-events: auto;" accept="image/*">
                    <template x-if="report.image">
                        <img :src="report.image" class="mt-3 max-w-full md:w-56 rounded-lg border border-slate-700">
                    </template>
                </div>

                <button type="submit" class="bg-green-600 hover:bg-green-500 px-6 py-2 rounded-lg font-semibold w-full md:w-auto text-sm md:text-base">
                    Submit Report
                </button>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('reportPage', () => ({
                showIntro: false,
                tab: 'forum',
                mobileSidebarOpen: false,
                username: @json(Auth::user()->name ?? 'Guest'),
                channels: [
                    { name: 'waste' },
                    { name: 'water' },
                    { name: 'air' },
                    { name: 'energy' },
                    { name: 'education' }
                ],
                activeChannel: 'waste',
                messages: {
                    waste: [
                        { user: 'Fikri', text: 'Plastic waste is piling up in the river 😢', time: '09:10', avatar: 'https://i.pravatar.cc/100?img=12' },
                        { user: 'Mia', text: 'We should organize a cleanup next week!', time: '09:15', avatar: 'https://i.pravatar.cc/100?img=5' }
                    ],
                    water: [],
                    air: [],
                    energy: [],
                    education: []
                },
                newMessage: '',
                newImage: null,
                report: { title: '', desc: '', location: '', category: '', image: null },

                init() {
                    console.log('🚀 Eco-Report Hub initialized');

                    if (!localStorage.getItem('ecoReportIntroShown')) {

                        setTimeout(() => {
                            this.showIntro = true;
                            console.log('📢 Showing intro modal');
                        }, 500);
                    } else {
                        this.showIntro = false;
                        console.log('✅ Intro already shown, skipping modal');
                    }
                    
                    // Auto-close mobile sidebar on desktop
                    if (window.innerWidth >= 768) {
                        this.mobileSidebarOpen = true;
                    }
                    
                    // Handle window resize
                    window.addEventListener('resize', () => {
                        if (window.innerWidth >= 768) {
                            this.mobileSidebarOpen = true;
                        }
                    });
                    
                    // Force enable pointer events setelah Alpine selesai init
                    this.$nextTick(() => {
                        document.querySelectorAll('input, textarea, select').forEach(el => {
                            el.style.pointerEvents = 'auto';
                        });
                    });
                },

                closeIntro() {
                    console.log('🔒 Closing intro modal');
                    this.showIntro = false;
                    localStorage.setItem('ecoReportIntroShown', 'true');
                    
                    // Pastikan semua input bisa diklik setelah modal tertutup
                    this.$nextTick(() => {
                        document.querySelectorAll('input, textarea, select').forEach(el => {
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
                        time: new Date().toLocaleTimeString([], {hour: '2-digit', minute:'2-digit'}),
                        avatar: 'https://i.pravatar.cc/100?u=' + this.username,
                        image: this.newImage
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
                        alert('Please complete the title and description.');
                        return;
                    }
                    alert(`Report "${this.report.title}" has been submitted successfully!`);
                    this.report = { title: '', desc: '', location: '', category: '', image: null };
                    if (this.$refs.reportImage) {
                        this.$refs.reportImage.value = '';
                    }
                }
            }))
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

        .fixed[style*="display: none"] {
            display: none !important;
        }
        
        input, textarea, select {
            pointer-events: auto !important;
        }
        
        /* Custom scrollbar untuk mobile */
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
        
        /* Improve touch targets on mobile */
        @media (max-width: 768px) {
            button, input, select, textarea {
                min-height: 44px;
            }
        }
        
        /* Animasi untuk modal */
        .modal-enter {
            opacity: 0;
            transform: scale(0.95);
        }
        .modal-enter-active {
            opacity: 1;
            transform: scale(1);
            transition: opacity 200ms ease-out, transform 200ms ease-out;
        }
    </style>
</x-app-layout>