<?php include 'sidebar.php'; ?>

        <div class="bg-white rounded-[30px] p-8 mt-8">
            <h2 class="text-2xl font-bold mb-6">Add New Store</h2>
            <form id="add-store-form" class="space-y-6">
                <div class="flex flex-wrap -mx-2">
                    <div class="w-full px-2 mb-4">
                        <label for="store-name" class="block text-sm font-medium text-gray-700">Store Name</label>
                        <input 
                            type="text" 
                            id="store-name" 
                            name="store-name" 
                            required 
                            class="mt-1 block w-full p-3 border border-gray-300 rounded-[10px] focus:ring-blue-500 focus:border-blue-500">
                    </div>
                </div>
                <div class="flex flex-wrap -mx-2">
                    <div class="w-full px-2 mb-4">
                        <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                        <textarea 
                            id="address" 
                            name="address" 
                            required 
                            class="mt-1 block w-full p-3 border border-gray-300 rounded-[10px] focus:ring-blue-500 focus:border-blue-500"></textarea>
                    </div>
                </div>
                <div class="flex flex-wrap -mx-2">
                    <div class="w-full md:w-1/2 px-2">
                        <label for="district" class="block text-sm font-medium text-gray-700">District</label>
                        <select 
                            id="district" 
                            name="district" 
                            required 
                            class="mt-1 block w-full p-3 border border-gray-300 rounded-[10px] focus:ring-blue-500 focus:border-blue-500">
                            <option value="">Select District</option>
                            <!-- Add more district options here -->
                        </select>
                    </div>
                    <div class="w-full md:w-1/2 px-2 mb-4 md:mb-0">
                        <label for="state" class="block text-sm font-medium text-gray-700">State</label>
                        <select 
                            id="state" 
                            name="state" 
                            required 
                            class="mt-1 block w-full p-3 border border-gray-300 rounded-[10px] focus:ring-blue-500 focus:border-blue-500">
                            <option value="">Select State</option>
                            <!-- Add more state options here -->
                        </select>
                    </div>
                </div>
                <div class="flex flex-wrap -mx-2">
                    <div class="w-full md:w-1/2 px-2 mb-4 md:mb-0">
                        <label for="latitude" class="block text-sm font-medium text-gray-700">Latitude</label>
                        <input 
                            type="text" 
                            id="latitude" 
                            name="latitude" 
                            required 
                            class="mt-1 block w-full p-3 border border-gray-300 rounded-[10px] focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <div class="w-full md:w-1/2 px-2">
                        <label for="longitude" class="block text-sm font-medium text-gray-700">Longitude</label>
                        <input 
                            type="text" 
                            id="longitude" 
                            name="longitude" 
                            required 
                            class="mt-1 block w-full p-3 border border-gray-300 rounded-[10px] focus:ring-blue-500 focus:border-blue-500">
                    </div>
                </div>
                <div class="flex flex-wrap -mx-2">
                    <div class="w-full px-2 mb-4">
                        <label for="store-img" class="block text-sm font-medium text-gray-700">Store Image</label>
                        <label for="store-img" class="mt-2 w-full border-2 border-dashed border-gray-300 p-4 rounded-[20px] flex flex-col items-center justify-center mb-4 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#263D5F">
                                <path d="M480-260q75 0 127.5-52.5T660-440q0-75-52.5-127.5T480-620q-75 0-127.5 52.5T300-440q0 75 52.5 127.5T480-260Zm0-80q-42 0-71-29t-29-71q0-42 29-71t71-29q42 0 71 29t29 71q0 42-29 71t-71 29ZM160-120q-33 0-56.5-23.5T80-200v-480q0-33 23.5-56.5T160-760h126l74-80h240l74 80h126q33 0 56.5 23.5T880-680v480q0 33-23.5 56.5T800-120H160Zm0-80h640v-480H638l-73-80H395l-73 80H160v480Zm320-240Z"/>
                            </svg>
                            <span class="text-[#263D5F] text-sm">Upload New Image Here</span>
                            <input type="file" id="store-img" name="product-img" class="hidden" required>
                        </label>
                    </div>
                </div>
                <div>
                    <button 
                        type="submit" 
                        class="w-1/4 items-center block py-3 px-4 bg-[#614EF7] text-white rounded-[30px] mt-2">
                        Add New Store
                    </button>
                </div>
            </form>
        </div>
    </div>