<form wire:submit.prevent="submitReport" class="space-y-4" enctype="multipart/form-data" wire:ignore.self>
                <!-- Title & Type -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm text-gray-300">Title <span class="text-red-400">*</span></label>
                        <input type="text" wire:model.defer="reportForm.title"
                            class="w-full bg-gray-800 border border-gray-600 rounded-lg p-2.5 text-white text-sm focus:ring-2 focus:ring-green-500 focus:border-green-500">
                        @error('reportForm.title') <span class="text-red-400 text-xs">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label class="block text-sm text-gray-300">Issue Type <span class="text-red-400">*</span></label>
                        <select wire:model.defer="reportForm.type"
                            class="w-full bg-gray-800 border border-gray-600 rounded-lg p-2.5 text-white text-sm focus:ring-2 focus:ring-green-500 focus:border-green-500">
                            <option value="">Select Type</option>
                            <option value="Air Pollution">Air Pollution</option>
                            <option value="Water Pollution">Water Pollution</option>
                            <option value="Deforestation">Deforestation</option>
                            <option value="Illegal Dumping">Illegal Dumping</option>
                            <option value="Fire Hazard">Fire Hazard</option>
                        </select>
                        @error('reportForm.type') <span class="text-red-400 text-xs">{{ $message }}</span> @enderror
                    </div>
                </div>

                <!-- Description -->
                <div>
                    <label class="block text-sm text-gray-300">Description <span class="text-red-400">*</span></label>
                    <textarea wire:model.defer="reportForm.description" rows="4"
                        class="w-full bg-gray-800 border border-gray-600 rounded-lg p-2.5 text-white text-sm focus:ring-2 focus:ring-green-500 focus:border-green-500"></textarea>
                    @error('reportForm.description') <span class="text-red-400 text-xs">{{ $message }}</span> @enderror
                </div>

                <!-- Location -->
                <div>
                    <label class="block text-sm text-gray-300">Location <span class="text-red-400">*</span></label>
                    <div class="relative flex items-center gap-2">
                        <input id="location" type="text" readonly
                            class="w-full bg-gray-800 border border-gray-600 rounded-lg p-2.5 text-white text-sm placeholder-gray-400 focus:ring-2 focus:ring-green-500 focus:border-green-500"
                            placeholder="Click on map or use GPS button">
                        <button type="button" @click="useCurrentLocation()"
                            class="bg-green-600 hover:bg-green-700 text-white p-2 rounded-lg transition-colors">
                            <i class="fas fa-crosshairs"></i>
                        </button>
                    </div>
                    @error('reportForm.location') <span class="text-red-400 text-xs">{{ $message }}</span> @enderror
                </div>

                <!-- Modal Map -->
                <div>
                    <label class="block text-sm text-gray-300 mb-2">Select Location on Map</label>
                    <div id="modalMap" class="rounded-lg h-64 border border-gray-600" wire:ignore></div>
                </div>

                <!-- Photo Upload -->
                <div x-data="photoUploader()" class="space-y-2" wire:ignore>
                    <label class="block text-sm text-gray-300 mb-1">Upload Photo (Optional)</label>

                    <div
                        class="relative border-2 border-dashed border-gray-600 rounded-lg p-4 flex flex-col items-center justify-center cursor-pointer hover:border-green-500 transition-colors"
                        @click="$refs.fileInput.click()"
                        @dragover.prevent="$el.classList.add('border-green-500')"
                        @dragleave.prevent="$el.classList.remove('border-green-500')"
                        @drop.prevent="
                            $el.classList.remove('border-green-500');
                            const file = $event.dataTransfer.files[0];
                            if(file) handleFileChange(file)">
                        <template x-if="!photoPreview">
                            <div class="text-center text-gray-400">
                                <i class="fas fa-cloud-upload-alt text-3xl mb-2"></i>
                                <p class="text-sm">Drag & drop your photo here or click to select</p>
                            </div>
                        </template>

                        <template x-if="photoPreview">
                            <div class="relative w-32 h-32">
                                <img :src="photoPreview" class="w-full h-full object-cover rounded-lg shadow-lg">
                                <button type="button" @click="removePhoto" 
                                    class="absolute top-1 right-1 bg-red-500 text-white rounded-full w-6 h-6 flex items-center justify-center hover:bg-red-600 transition-colors">
                                    <i class="fas fa-times text-xs"></i>
                                </button>
                            </div>
                        </template>

                        <input type="file" x-ref="fileInput" wire:model="reportForm.photo" class="hidden"
                            @change="handleFileChange($event.target.files[0])">
                    </div>
                </div>

                <!-- Buttons -->
                <div class="flex justify-end gap-3 pt-4">
                    <button type="button" @click="closeModal()"
                        class="px-4 py-2 bg-gray-700 hover:bg-gray-600 rounded-lg text-white transition-colors">Cancel</button>
                    <button type="submit"
                        class="px-4 py-2 bg-gradient-to-r from-green-600 to-emerald-600 hover:from-green-700 hover:to-emerald-700 rounded-lg text-white transition-all">
                        Submit
                    </button>
                </div>
            </form>