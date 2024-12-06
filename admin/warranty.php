<?php include 'sidebar.php'; ?>

        <div class="mt-8 flex items-center gap-4">
            <button id="filter-all" class="bg-gray-400 text-black px-4 py-2 rounded-[20px] focus:ring focus:ring-gray-400">
                All <span class="bg-white text-black text-xs px-2 py-1 rounded-full ml-2">10</span>
            </button>
            <button id="filter-pending" class="bg-yellow-400 text-black px-4 py-2 rounded-[20px] focus:ring focus:ring-yellow-500">
                Pending <span class="bg-white text-black text-xs px-2 py-1 rounded-full ml-2">4</span>
            </button>
            <button id="filter-approved" class="bg-green-400 text-black px-4 py-2 rounded-[20px] focus:ring focus:ring-green-500">
                Approved <span class="bg-white text-black text-xs px-2 py-1 rounded-full ml-2">3</span>
            </button>
            <button id="filter-rejected" class="bg-red-400 text-black px-4 py-2 rounded-[20px] focus:ring focus:ring-red-500">
                Rejected <span class="bg-white text-black text-xs px-2 py-1 rounded-full ml-2">3</span>
            </button>
        </div>
        
        <div class="bg-white rounded-[30px] p-8 mt-8">
            <table class="min-w-full table-auto">
                <thead>
                    <tr class="border-b border-gray-300">
                        <th class="py-3 px-6 text-left">#</th>
                        <th class="py-3 px-6 text-left">Name</th>
                        <th class="py-3 px-6 text-left">Email</th>
                        <th class="py-3 px-6 text-left">Product</th>
                        <th class="py-3 px-6 text-left">Document</th>
                        <th class="py-3 px-6 text-left">Invoice Number</th>
                        <th class="py-3 px-6 text-left">Status</th>
                        <th class="py-3 px-6 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b border-gray-300">
                        <td class="py-3 px-6">1</td>
                        <td class="py-3 px-6">John Doe</td>
                        <td class="py-3 px-6">johndoe@example.com</td>
                        <td class="py-3 px-6">Model XYZ Stroller</td>
                        <td class="py-3 px-6">
                            <a href="path/to/document.pdf" target="_blank" class="text-blue-600 underline">View</a>
                        </td>
                        <td class="py-3 px-6">INV12345</td>
                        <td class="py-3 px-6">
                            <span class="bg-yellow-300 text-black px-4 py-2 rounded-full text-sm">Pending</span>
                        </td>
                        <td class="py-3 px-6">
                            <button class="bg-green-600 text-white px-4 py-3 rounded-[15px] mr-2 update-status-btn">Update</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div id="update-status-modal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
            <div class="bg-white rounded-[20px] p-8 w-[40wh] relative">
                <h2 class="text-2xl font-semibold mb-4">Update Warranty Application</h2>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium">Name:</label>
                        <p id="modal-name" class="text-gray-700"></p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium">Email:</label>
                        <p id="modal-email" class="text-gray-700"></p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium">Phone Number:</label>
                        <p id="modal-phone" class="text-gray-700">123-456-7890</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium">Date of Purchase:</label>
                        <p id="modal-date" class="text-gray-700">2024-12-01</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium">Product:</label>
                        <p id="modal-product" class="text-gray-700"></p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium">Invoice Number:</label>
                        <p id="modal-invoice" class="text-gray-700"></p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium">Q: Is this your first Quinton product?</label>
                        <p id="modal-first-product" class="text-gray-700">Yes</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium">Q: How did you find out about the Quinton Brand?</label>
                        <p id="modal-find-out" class="text-gray-700">Online Search</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium">Q: What prompted you to choose a Quinton product?</label>
                        <p id="modal-prompt-choice" class="text-gray-700">High reviews</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium">Rating:</label>
                        <p id="modal-rating" class="text-gray-700">⭐⭐⭐⭐⭐</p>
                    </div>
                    <div class="col-span-2 mt-4">
                        <label class="block text-sm font-medium">Uploaded Document:</label>
                        <div id="modal-document" class="text-blue-600 underline">
                            <a href="#" target="_blank">View Document</a>
                        </div>
                    </div>
                    <div class="col-span-2 mt-8">
                        <label class="block text-sm font-medium">Status:</label>
                        <select id="modal-status" class="w-full px-3 py-2 border border-gray-300 rounded-[10px]">
                            <option value="Pending">Pending</option>
                            <option value="Approved">Approved</option>
                            <option value="Rejected">Rejected</option>
                        </select>
                    </div>
                </div>
                <div class="flex justify-between gap-4 mt-6">
                    <button type="button" id="modal-close-btn" class="absolute top-4 right-4 bg-red-600 text-white rounded-full px-2">
                        <i class="fas fa-times text-xl"></i>
                    </button>
                    <button id="modal-save-btn" class="bg-green-600 text-white px-4 py-2 rounded-[7px]">Save</button>
                </div>
            </div>
        </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
        const updateButtons = document.querySelectorAll('.update-status-btn');
        const modal = document.getElementById('update-status-modal');
        const modalCloseBtn = document.getElementById('modal-close-btn');
        const modalSaveBtn = document.getElementById('modal-save-btn');

        const openModal = (row) => {
            const name = row.querySelector('td:nth-child(2)').textContent;
            const email = row.querySelector('td:nth-child(3)').textContent;
            const product = row.querySelector('td:nth-child(4)').textContent;
            const invoiceNumber = row.querySelector('td:nth-child(6)').textContent;
            const status = row.querySelector('td:nth-child(7) span').textContent.trim();
            const documentLink = row.querySelector('td:nth-child(5) a') ? row.querySelector('td:nth-child(5) a').href : "#"; 

            document.getElementById('modal-name').textContent = name;
            document.getElementById('modal-email').textContent = email;
            document.getElementById('modal-product').textContent = product;
            document.getElementById('modal-invoice').textContent = invoiceNumber;

            document.getElementById('modal-phone').textContent = "123-456-7890";
            document.getElementById('modal-date').textContent = "2024-12-01"; 
            document.getElementById('modal-first-product').textContent = "Yes";
            document.getElementById('modal-find-out').textContent = "Online Search";
            document.getElementById('modal-prompt-choice').textContent = "High reviews";
            document.getElementById('modal-rating').textContent = "⭐⭐⭐⭐⭐";

            document.getElementById('modal-status').value = status;

            const documentDisplay = document.getElementById('modal-document');
            if (documentLink.endsWith(".pdf")) {
                documentDisplay.innerHTML = `<a href="${documentLink}" target="_blank" class="text-blue-600 underline">View Document</a>`;
            } else {
                documentDisplay.innerHTML = `<img src="${documentLink}" alt="Uploaded Document" class="w-full h-auto mt-4" />`;
            }

            modal.classList.remove('hidden');
            };

            const closeModal = () => {
            modal.classList.add('hidden');
            };

            const saveStatus = () => {
            const selectedStatus = document.getElementById('modal-status').value;
            console.log(`New Status: ${selectedStatus}`);

            const row = document.querySelector(`tr[data-id='${currentRowId}']`); 
            row.querySelector('td:nth-child(7) span').textContent = selectedStatus;
            closeModal();
            };

            updateButtons.forEach((button) => {
            button.addEventListener('click', () => {
                const row = button.closest('tr');
                currentRowId = row.dataset.id;
                openModal(row);
            });
        });

            modalCloseBtn.addEventListener('click', closeModal);
            modalSaveBtn.addEventListener('click', saveStatus);
        });
    </script>
  
    </div>
    </div>