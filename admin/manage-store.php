<?php include 'sidebar.php'; ?>

        <div class="mt-8">
            <button id="add-role-btn" class="bg-[#614EF7] w-60 text-white px-6 py-3 rounded-[20px]" onclick="window.location.href='add-store.php'">
                Add New Store
            </button>
        </div>

        <div class="bg-white rounded-[30px] p-8 mt-8">
            <table class="min-w-full table-auto">
                <thead>
                    <tr class="border-b border-gray-300">
                        <th class="py-3 px-6 text-left">#</th>
                        <th class="py-3 px-6 text-left">Store Name</th>
                        <th class="py-3 px-6 text-left">Address</th>
                        <th class="py-3 px-6 text-left">Latitude</th>
                        <th class="py-3 px-6 text-left">Longitude</th>
                        <th class="py-3 px-6 text-left">State</th>
                        <th class="py-3 px-6 text-left">District</th>
                        <th class="py-3 px-6 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b border-gray-300">
                        <td class="py-3 px-6">1</td>
                        <td class="py-3 px-6">Store 1</td>
                        <td class="py-3 px-6">123 Main Street, City, ZIP</td>
                        <td class="py-3 px-6">1.3521</td>
                        <td class="py-3 px-6">103.8198</td>
                        <td class="py-3 px-6">Selangor</td>
                        <td class="py-3 px-6">Petaling</td>
                        <td class="py-3 px-6">
                            <button class="bg-blue-600 text-white px-4 py-2 rounded-[7px] mr-2 edit-btn">Edit</button>
                            <button class="bg-green-600 text-white px-4 py-2 rounded-[7px] mr-2 view-btn">View</button>
                            <button class="bg-red-600 text-white px-4 py-2 rounded-[7px] mr-2 delete-btn">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <div id="edit-store-modal" class="fixed inset-0 bg-gray-500 bg-opacity-50 flex items-center justify-center hidden">
            <div class="bg-white rounded-[30px] p-8 w-1/3 relative">
                <h2 class="text-xl font-semibold mb-4">Edit Store</h2>
                <form id="edit-store-form">
                    <div class="mb-4">
                        <label for="store-name" class="block text-sm font-medium">Store Name</label>
                        <input id="store-name" type="text" class="w-full p-2 border border-gray-300 rounded-[10px]" required />
                    </div>
                    <div class="mb-4">
                        <label for="store-address" class="block text-sm font-medium">Address</label>
                        <textarea id="store-address" class="w-full p-2 border border-gray-300 rounded-[10px]" rows="2" required></textarea>
                    </div>
                    <div class="grid grid-cols-2 gap-4 mb-4">
                        <div>
                            <label for="latitude" class="block text-sm font-medium">Latitude</label>
                            <input id="latitude" type="text" class="w-full p-2 border border-gray-300 rounded-[10px]" required />
                        </div>
                        <div>
                            <label for="longitude" class="block text-sm font-medium">Longitude</label>
                            <input id="longitude" type="text" class="w-full p-2 border border-gray-300 rounded-[10px]" required />
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="state" class="block text-sm font-medium">State</label>
                        <input id="state" type="text" class="w-full p-2 border border-gray-300 rounded-[10px]" required />
                    </div>
                    <div class="mb-4">
                        <label for="district" class="block text-sm font-medium">District</label>
                        <input id="district" type="text" class="w-full p-2 border border-gray-300 rounded-[10px]" required />
                    </div>
                    <div class="mb-4">
                        <label for="store-img" class="block text-sm font-medium">Store Image</label>
                        <label for="store-img" class="mt-2 w-full border-2 border-dashed border-gray-300 p-4 rounded-[20px] flex flex-col items-center justify-center mb-4 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#263D5F">
                                <path d="M480-260q75 0 127.5-52.5T660-440q0-75-52.5-127.5T480-620q-75 0-127.5 52.5T300-440q0 75 52.5 127.5T480-260Zm0-80q-42 0-71-29t-29-71q0-42 29-71t71-29q42 0 71 29t29 71q0 42-29 71t-71 29ZM160-120q-33 0-56.5-23.5T80-200v-480q0-33 23.5-56.5T160-760h126l74-80h240l74 80h126q33 0 56.5 23.5T880-680v480q0 33-23.5 56.5T800-120H160Zm0-80h640v-480H638l-73-80H395l-73 80H160v480Zm320-240Z" />
                            </svg>
                            <span class="text-[#263D5F] text-sm">Upload New Image Here</span>
                            <input type="file" id="store-img" class="hidden" accept="image/*" required>
                        </label>
                        <img id="store-image-preview" class="mt-4 w-24 h-24 object-cover rounded-[10px] hidden" />
                    </div>                    
                    <div class="flex justify-end mt-4">
                        <button type="button" id="cancel-edit" class="absolute top-4 right-4 bg-red-600 text-white rounded-full px-2">
                            <i class="fas fa-times text-xl"></i>
                        </button>
                        <button type="submit" class="bg-blue-600 hover:bg-blue-800 text-white px-6 py-3 rounded-[15px]">
                            Save Edits
                        </button>
                    </div>
                </form>
            </div>
        </div>
        
        <script>
        document.addEventListener('DOMContentLoaded', () => {
            const editStoreModal = document.getElementById('edit-store-modal');
            const editStoreForm = document.getElementById('edit-store-form');
            const cancelEditButton = document.getElementById('cancel-edit');
        
            const storeNameInput = document.getElementById('store-name');
            const storeAddressInput = document.getElementById('store-address');
            const latitudeInput = document.getElementById('latitude');
            const longitudeInput = document.getElementById('longitude');
            const stateInput = document.getElementById('state');
            const districtInput = document.getElementById('district');
            const storeImageInput = document.getElementById('store-img'); // Updated ID
            const storeImagePreview = document.getElementById('store-image-preview');
        
            let editingRow = null;
        
            const openEditModal = (row) => {
                editingRow = row;
                const cells = row.querySelectorAll('td');
                storeNameInput.value = cells[1]?.innerText || '';
                storeAddressInput.value = cells[2]?.innerText || '';
                latitudeInput.value = cells[3]?.innerText || '';
                longitudeInput.value = cells[4]?.innerText || '';
                stateInput.value = cells[5]?.innerText || '';
                districtInput.value = cells[6]?.innerText || '';
                const imageUrl = cells[7]?.dataset.image || '';
                if (imageUrl) {
                    storeImagePreview.src = imageUrl;
                    storeImagePreview.classList.remove('hidden');
                } else {
                    storeImagePreview.classList.add('hidden');
                }
        
                editStoreModal.classList.remove('hidden');
            };
        
            const closeEditModal = () => {
                editStoreModal.classList.add('hidden');
                editingRow = null;
                storeImageInput.value = '';
                storeImagePreview.classList.add('hidden');
            };
        
            storeImageInput.addEventListener('change', (event) => {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = (e) => {
                    storeImagePreview.src = e.target.result;
                    storeImagePreview.classList.remove('hidden');
                };
                reader.readAsDataURL(file);
            }
            });
        
            editStoreForm.addEventListener('submit', (event) => {
                event.preventDefault();
                if (editingRow) {
                    const cells = editingRow.querySelectorAll('td');
                    cells[1].innerText = storeNameInput.value;
                    cells[2].innerText = storeAddressInput.value;
                    cells[3].innerText = latitudeInput.value;
                    cells[4].innerText = longitudeInput.value;
                    cells[5].innerText = stateInput.value;
                    cells[6].innerText = districtInput.value;
        
                    if (storeImageInput.files[0]) {
                        const imageUrl = storeImagePreview.src;
                        cells[7].dataset.image = imageUrl;
                    }
                }
                closeEditModal();
            });
        
            cancelEditButton.addEventListener('click', closeEditModal);
        
            document.querySelectorAll('.edit-btn').forEach((button) => {
                button.addEventListener('click', (event) => {
                    const row = event.target.closest('tr');
                    openEditModal(row);
                });
            });
        });
        </script>

        <div id="view-store-modal" class="fixed inset-0 bg-gray-500 bg-opacity-50 flex items-center justify-center hidden">
            <div class="bg-white rounded-[30px] p-8 w-1/3 relative">
                <h2 class="text-xl font-semibold mb-4">View Store</h2>
                <div id="store-details">
                    <p><strong>Store Name:</strong> <span id="view-store-name"></span></p>
                    <p><strong>Address:</strong> <span id="view-store-address"></span></p>
                    <p><strong>Latitude:</strong> <span id="view-latitude"></span></p>
                    <p><strong>Longitude:</strong> <span id="view-longitude"></span></p>
                    <p><strong>State:</strong> <span id="view-state"></span></p>
                    <p><strong>District:</strong> <span id="view-district"></span></p>
                    <div class="mt-4">
                        <strong>Store Image:</strong>
                        <img id="view-store-image" class="mt-2 w-32 h-32 object-cover rounded-[10px] border" alt="Store Image" />
                    </div>
                </div>
                <button id="close-view-modal" class="absolute top-4 right-4 bg-red-600 text-white rounded-full px-2">
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>
        </div>

        <script>
           document.addEventListener('DOMContentLoaded', () => {
                const viewStoreModal = document.getElementById('view-store-modal');
                const closeViewModal = document.getElementById('close-view-modal');
                const viewStoreName = document.getElementById('view-store-name');
                const viewStoreAddress = document.getElementById('view-store-address');
                const viewLatitude = document.getElementById('view-latitude');
                const viewLongitude = document.getElementById('view-longitude');
                const viewState = document.getElementById('view-state');
                const viewDistrict = document.getElementById('view-district');
                const viewStoreImage = document.getElementById('view-store-image');
                const openViewModal = (row) => {
                    const cells = row.querySelectorAll('td');
                    viewStoreName.innerText = cells[1].innerText;
                    viewStoreAddress.innerText = cells[2].innerText;
                    viewLatitude.innerText = cells[3].innerText;
                    viewLongitude.innerText = cells[4].innerText;
                    viewState.innerText = cells[5].innerText;
                    viewDistrict.innerText = cells[6].innerText;
                    const imageUrl = cells[7]?.dataset.image || '';
                    if (imageUrl) {
                        viewStoreImage.src = imageUrl;
                        viewStoreImage.classList.remove('hidden');
                    } else {
                        viewStoreImage.src = '';
                        viewStoreImage.classList.add('hidden');
                    }
                
                    viewStoreModal.classList.remove('hidden');
                };

                const closeView = () => {
                    viewStoreModal.classList.add('hidden');
                };

                document.querySelectorAll('.view-btn').forEach((button) => {
                    button.addEventListener('click', (event) => {
                        const row = event.target.closest('tr'); 
                        openViewModal(row);
                    });
                });

                closeViewModal.addEventListener('click', closeView);
            });
        </script>


        <div id="delete-confirmation-modal" class="hidden fixed inset-0 flex justify-center items-center bg-black bg-opacity-50">
            <div class="bg-white rounded-[30px] p-8 w-1/3">
                <h2 class="text-xl font-bold mb-4">Are you sure you want to delete this store?</h2>
                <div class="flex justify-end mt-4">
                    <button type="button" id="cancel-delete" class="bg-gray-500 text-white px-6 py-2 rounded-[15px] mr-2">
                        Cancel
                    </button>
                    <button type="button" id="confirm-delete" class="bg-red-600 text-white px-6 py-2 rounded-[15px]">
                        Yes, Delete
                    </button>
                </div>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', () => {
            const deleteModal = document.getElementById('delete-confirmation-modal');
            const cancelDeleteButton = document.getElementById('cancel-delete');
            const confirmDeleteButton = document.getElementById('confirm-delete');
            let rowToDelete = null;
            const openDeleteModal = (row) => {
                rowToDelete = row;
                deleteModal.classList.remove('hidden');
            };
        
            const closeDeleteModal = () => {
                deleteModal.classList.add('hidden');
                rowToDelete = null;
            };
        
            const deleteRow = () => {
                if (rowToDelete) {
                    rowToDelete.remove();
                    rowToDelete = null;
                }
                closeDeleteModal();
            };

            document.querySelectorAll('.delete-btn').forEach((button) => {
                button.addEventListener('click', (event) => {
                    const row = event.target.closest('tr');
                    openDeleteModal(row);
                });
            });

            cancelDeleteButton.addEventListener('click', closeDeleteModal);
            confirmDeleteButton.addEventListener('click', deleteRow);
        });
        </script>
    </div>
    </div>