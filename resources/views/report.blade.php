<x-app-layout>
  <div class="min-h-screen bg-slate-900 text-white pt-24 px-6" x-data="reportPage">

    <!-- 🌍 Introduction Modal -->
    <div 
      x-show="showIntro" 
      x-transition.opacity 
      class="fixed inset-0 bg-slate-950/70 flex items-center justify-center z-50">
      <div class="bg-slate-800 border border-slate-700 rounded-2xl p-8 max-w-lg text-center shadow-2xl">
        <h2 class="text-3xl font-bold mb-4 text-green-400">Welcome to Eco-Report Hub 🌿</h2>
        <p class="text-slate-300 mb-6 leading-relaxed">
          Join our mission to protect the environment!  
          You can discuss issues in the <strong>Community Forum</strong>  
          or directly report real-world conditions through the <strong>Report Form</strong>.
        </p>
        <button 
          @click="closeIntro" 
          class="bg-green-600 hover:bg-green-500 px-6 py-2 rounded-lg font-semibold">
          Let’s Get Started
        </button>
      </div>
    </div>

    <!-- Header -->
    <div class="flex justify-between items-center mb-6">
      <h1 class="text-4xl font-extrabold tracking-tight">📢 Eco-Report Hub</h1>
      <p class="text-slate-400">Together we protect the Earth 🌍</p>
    </div>

    <!-- Tab Switch -->
    <div class="flex space-x-4 mb-8 border-b border-slate-700 pb-2">
      <button 
        class="px-4 py-2 rounded-t-lg font-semibold transition"
        :class="tab === 'forum' ? 'bg-slate-800 text-green-400' : 'text-slate-400 hover:text-white'"
        @click="tab = 'forum'">
        💬 Community Forum
      </button>
      <button 
        class="px-4 py-2 rounded-t-lg font-semibold transition"
        :class="tab === 'report' ? 'bg-slate-800 text-green-400' : 'text-slate-400 hover:text-white'"
        @click="tab = 'report'">
        📸 Report Condition
      </button>
    </div>

    <!-- Forum Section -->
    <div x-show="tab === 'forum'" x-cloak class="flex h-[75vh] bg-slate-800 rounded-2xl overflow-hidden border border-slate-700 shadow-lg">
      <!-- Sidebar (Channels) -->
      <div class="w-64 bg-slate-850 border-r border-slate-700 p-4 flex flex-col">
        <h2 class="text-xl font-bold mb-4">🌿 Channels</h2>
        <template x-for="(ch, i) in channels" :key="i">
          <button 
            class="w-full text-left py-2 px-3 mb-1 rounded-lg hover:bg-slate-700 transition"
            :class="activeChannel === ch.name ? 'bg-slate-700 font-semibold' : ''"
            @click="setChannel(ch.name)">
            # <span x-text="ch.name"></span>
          </button>
        </template>
      </div>

      <!-- Chat Area -->
      <div class="flex-1 flex flex-col">
        <div class="px-5 py-3 border-b border-slate-700 flex justify-between items-center">
          <h3 class="text-lg font-bold"># <span x-text="activeChannel"></span></h3>
          <p class="text-slate-400 text-sm">Discussion and latest updates</p>
        </div>

        <!-- Chat Messages -->
        <div class="flex-1 overflow-y-auto p-5 space-y-4" id="chat-scroll">
          <template x-for="(msg, index) in messages[activeChannel]" :key="index">
            <div class="flex items-start space-x-3">
              <img :src="msg.avatar" class="w-10 h-10 rounded-full object-cover">
              <div>
                <p class="font-semibold">
                  <span x-text="msg.user"></span>
                  <span class="text-xs text-slate-400 ml-2" x-text="msg.time"></span>
                </p>
                <p x-text="msg.text" class="text-slate-200"></p>
                <template x-if="msg.image">
                  <img :src="msg.image" class="mt-2 w-56 rounded-lg border border-slate-700">
                </template>
              </div>
            </div>
          </template>
        </div>

        <!-- Input -->
        <div class="border-t border-slate-700 p-4 flex items-center space-x-3">
          <input type="text" placeholder="Type your message..." 
            class="flex-1 bg-slate-800 border border-slate-700 rounded-lg px-3 py-2 text-white focus:ring-2 focus:ring-green-500"
            x-model="newMessage" 
            @keydown.enter="sendMessage">
          <input type="file" x-ref="imageUpload" class="hidden" @change="uploadImage">
          <button @click="$refs.imageUpload.click()" class="p-2 hover:bg-slate-700 rounded-lg">📎</button>
          <button @click="sendMessage" class="bg-green-600 px-4 py-2 rounded-lg hover:bg-green-500">Send</button>
        </div>
      </div>
    </div>

    <!-- Report Form Section -->
    <div x-show="tab === 'report'" x-cloak class="bg-slate-800 rounded-2xl p-8 border border-slate-700 shadow-lg">
      <h2 class="text-2xl font-bold mb-6">📝 Report Environmental Condition</h2>
      <form @submit.prevent="submitReport" class="space-y-5">
        <div>
          <label class="block text-slate-300 mb-2">Report Title</label>
          <input type="text" x-model="report.title" class="w-full bg-slate-900 border border-slate-700 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-green-500">
        </div>

        <div>
          <label class="block text-slate-300 mb-2">Description</label>
          <textarea x-model="report.desc" rows="4" class="w-full bg-slate-900 border border-slate-700 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-green-500"></textarea>
        </div>

        <div class="grid sm:grid-cols-2 gap-4">
          <div>
            <label class="block text-slate-300 mb-2">Location (Coordinates / Address)</label>
            <input type="text" x-model="report.location" class="w-full bg-slate-900 border border-slate-700 rounded-lg px-4 py-2 text-white">
          </div>
          <div>
            <label class="block text-slate-300 mb-2">Category</label>
            <select x-model="report.category" class="w-full bg-slate-900 border border-slate-700 rounded-lg px-4 py-2 text-white">
              <option value="">Select category...</option>
              <option value="Waste">Waste</option>
              <option value="Water">Water</option>
              <option value="Air">Air</option>
              <option value="Energy">Energy</option>
            </select>
          </div>
        </div>

        <div>
          <label class="block text-slate-300 mb-2">Upload Photo (optional)</label>
          <input type="file" x-ref="reportImage" @change="uploadReportImage" class="w-full text-slate-300">
          <template x-if="report.image">
            <img :src="report.image" class="mt-3 w-56 rounded-lg border border-slate-700">
          </template>
        </div>

        <button type="submit" class="bg-green-600 hover:bg-green-500 px-6 py-2 rounded-lg font-semibold">
          Submit Report
        </button>
      </form>
    </div>
  </div>

  <!-- 🌱 Alpine.js Logic -->
  <script>
    document.addEventListener('alpine:init', () => {
      Alpine.data('reportPage', () => ({
        showIntro: false,
        tab: 'forum',
        username: 'Admin',
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
          // Show intro only on first visit
          if (!localStorage.getItem('ecoReportIntroShown')) {
            this.showIntro = true;
          }
        },

        closeIntro() {
          this.showIntro = false;
          localStorage.setItem('ecoReportIntroShown', 'true');
        },

        setChannel(name) { this.activeChannel = name; },

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
          this.$refs.imageUpload.value = '';
          this.$nextTick(() => {
            const chatScroll = document.getElementById('chat-scroll');
            chatScroll.scrollTop = chatScroll.scrollHeight;
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
          this.$refs.reportImage.value = '';
        }
      }))
    })
  </script>
</x-app-layout>
