<x-app-layout>
  <div class="min-h-screen bg-slate-900 text-white pt-24 px-6" x-data="reportPage">
    <!-- Header -->
    <div class="flex justify-between items-center mb-6">
      <h1 class="text-4xl font-extrabold tracking-tight">📢 Eco-Report Hub</h1>
      <p class="text-slate-400">Bersama menjaga bumi 🌍</p>
    </div>

    <!-- Tab Switch -->
    <div class="flex space-x-4 mb-8 border-b border-slate-700 pb-2">
      <button 
        class="px-4 py-2 rounded-t-lg font-semibold transition"
        :class="tab === 'forum' ? 'bg-slate-800 text-green-400' : 'text-slate-400 hover:text-white'"
        @click="tab = 'forum'">
        💬 Forum Komunitas
      </button>
      <button 
        class="px-4 py-2 rounded-t-lg font-semibold transition"
        :class="tab === 'report' ? 'bg-slate-800 text-green-400' : 'text-slate-400 hover:text-white'"
        @click="tab = 'report'">
        📸 Laporkan Kondisi
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
        <!-- Header -->
        <div class="px-5 py-3 border-b border-slate-700 flex justify-between items-center">
          <h3 class="text-lg font-bold"># <span x-text="activeChannel"></span></h3>
          <p class="text-slate-400 text-sm">Diskusi dan laporan terkini</p>
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
          <input type="text" placeholder="Ketik pesan atau laporan kamu..." 
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
      <h2 class="text-2xl font-bold mb-6">📝 Laporkan Kondisi Lingkungan</h2>
      <form @submit.prevent="submitReport" class="space-y-5">
        <div>
          <label class="block text-slate-300 mb-2">Judul Laporan</label>
          <input type="text" x-model="report.title" class="w-full bg-slate-900 border border-slate-700 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-green-500">
        </div>

        <div>
          <label class="block text-slate-300 mb-2">Deskripsi</label>
          <textarea x-model="report.desc" rows="4" class="w-full bg-slate-900 border border-slate-700 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-green-500"></textarea>
        </div>

        <div class="grid sm:grid-cols-2 gap-4">
          <div>
            <label class="block text-slate-300 mb-2">Lokasi (Koordinat / Alamat)</label>
            <input type="text" x-model="report.location" class="w-full bg-slate-900 border border-slate-700 rounded-lg px-4 py-2 text-white">
          </div>
          <div>
            <label class="block text-slate-300 mb-2">Kategori</label>
            <select x-model="report.category" class="w-full bg-slate-900 border border-slate-700 rounded-lg px-4 py-2 text-white">
              <option value="">Pilih kategori...</option>
              <option value="Sampah">Sampah</option>
              <option value="Air">Air</option>
              <option value="Udara">Udara</option>
              <option value="Energi">Energi</option>
            </select>
          </div>
        </div>

        <div>
          <label class="block text-slate-300 mb-2">Unggah Foto (opsional)</label>
          <input type="file" x-ref="reportImage" @change="uploadReportImage" class="w-full text-slate-300">
          <template x-if="report.image">
            <img :src="report.image" class="mt-3 w-56 rounded-lg border border-slate-700">
          </template>
        </div>

        <button type="submit" class="bg-green-600 hover:bg-green-500 px-6 py-2 rounded-lg font-semibold">
          Kirim Laporan
        </button>
      </form>
    </div>
  </div>

  <script>
    document.addEventListener('alpine:init', () => {
      Alpine.data('reportPage', () => ({
        tab: 'forum',
        username: 'Admin',
        channels: [
          { name: 'sampah' },
          { name: 'air' },
          { name: 'udara' },
          { name: 'energi' },
          { name: 'edukasi' }
        ],
        activeChannel: 'sampah',
        messages: {
          sampah: [
            { user: 'Fikri', text: 'Sampah plastik menumpuk di sungai 😢', time: '09:10', avatar: 'https://i.pravatar.cc/100?img=12' },
            { user: 'Mia', text: 'Kita bisa buat aksi bersih minggu depan!', time: '09:15', avatar: 'https://i.pravatar.cc/100?img=5' }
          ],
          air: [],
          udara: [],
          energi: [],
          edukasi: []
        },
        newMessage: '',
        newImage: null,
        report: { title: '', desc: '', location: '', category: '', image: null },

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
            alert('Mohon lengkapi judul dan deskripsi laporan.');
            return;
          }
          alert(`Laporan "${this.report.title}" berhasil dikirim!`);
          this.report = { title: '', desc: '', location: '', category: '', image: null };
          this.$refs.reportImage.value = '';
        }
      }))
    })
  </script>
</x-app-layout>
