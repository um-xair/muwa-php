<?php include 'sidebar.php'; ?>

        <div class="bg-white rounded-[30px] p-8 mt-8">
            <table class="min-w-full table-auto">
                <thead>
                    <tr class="border-b border-gray-300">
                        <th class="py-3 px-6 text-left">Order</th>
                        <th class="py-3 px-6 text-left">Date</th>
                        <th class="py-3 px-6 text-left">Status</th>
                        <th class="py-3 px-6 text-left">Total</th>
                        <th class="py-3 px-6 text-left">Actions</th> <!-- Added actions column -->
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b border-gray-300">
                        <td class="py-3 px-6">#ORD001 ali</td>
                        <td class="py-3 px-6">2024-12-01</td>
                        <td class="py-3 px-6">
                            <span class="bg-green-300 text-black px-6 py-3 rounded-full text-sm">Completed</span>
                        </td>
                        <td class="py-3 px-6">RM500.00</td>
                        <td class="py-3 px-6">
                            <button class="bg-green-600 text-white px-4 py-2 rounded-[7px] mr-2 view-btn">View</button>
                            <button class="bg-red-600 text-white px-4 py-2 rounded-[7px] mr-2 delete-btn">Delete</button>
                        </td>
                    </tr>
                    <tr class="border-b border-gray-300">
                        <td class="py-3 px-6">#ORD002 siti</td>
                        <td class="py-3 px-6">2024-12-05</td>
                        <td class="py-3 px-6">
                            <span class="bg-yellow-300 text-black px-6 py-3 rounded-full text-sm">Pending</span>
                        </td>
                        <td class="py-3 px-6">RM300.00</td>
                        <td class="py-3 px-6">
                            <button class="bg-green-600 text-white px-4 py-2 rounded-[7px] mr-2 view-btn">View</button>
                            <button class="bg-red-600 text-white px-4 py-2 rounded-[7px] mr-2 delete-btn">Delete</button>
                        </td>
                    </tr>
                    <tr class="border-b border-gray-300">
                        <td class="py-3 px-6">#ORD003 lim</td>
                        <td class="py-3 px-6">2024-12-03</td>
                        <td class="py-3 px-6">
                            <span class="bg-red-300 text-black px-6 py-3 rounded-full text-sm">Rejected</span>
                        </td>
                        <td class="py-3 px-6">RM1,200.00</td>
                        <td class="py-3 px-6">
                            <button class="bg-green-600 text-white px-4 py-2 rounded-[7px] mr-2 view-btn">View</button>
                            <button class="bg-red-600 text-white px-4 py-2 rounded-[7px] mr-2 delete-btn">Delete</button>
                        </td>
                    </tr>
                    <!-- Repeat rows for other orders -->
                </tbody>
            </table>
            
            
        </div>

        <div id="order-modal" class="fixed inset-0 bg-black bg-opacity-50 hidden flex justify-center items-center">
            <div class="bg-white rounded-[30px] p-8 max-w-4xl w-full relative">
                <h2 id="modal-order-header" class="text-xl font-bold mb-4">Order #ORD001</h2>
        
                <!-- Billing and Shipping Details -->
                <div class="grid grid-cols-2 gap-8 mb-6 mt-10">
                    <div>
                        <h3 class="text-lg font-semibold mb-2">Billing Details</h3>
                        <p><strong>Email:</strong> john.doe@example.com</p>
                        <p><strong>Phone:</strong> 123-456-7890</p>
                        <p><strong>Payment Method:</strong> Credit Card</p>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold mb-2">Shipping Details</h3>
                        <p><strong>Address:</strong> 123 Street, Kuala Lumpur</p>
                        <p><strong>Shipping Method:</strong> Standard Shipping</p>
                        <p><strong>Country:</strong> Malaysia</p>
                    </div>
                </div>
        
                <!-- Products Section -->
                <div class="mb-6">
                    <h3 class="text-lg font-semibold mb-2">Products</h3>
                    <table class="min-w-full table-auto mb-4">
                        <thead>
                            <tr class="border-b border-gray-300">
                                <th class="py-3 px-6 text-left">Product</th>
                                <th class="py-3 px-6 text-left">Quantity</th>
                                <th class="py-3 px-6 text-left">Variation</th>
                                <th class="py-3 px-6 text-left">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b border-gray-300">
                                <td class="py-3 px-6">XYZ Stroller</td>
                                <td class="py-3 px-6">1</td>
                                <td class="py-3 px-6">Blue</td>
                                <td class="py-3 px-6">RM500.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
        
                <!-- Status Update Section -->
                <div class="mb-6">
                    <h3 class="text-lg font-semibold mb-2">Order Status</h3>
                    <select id="modal-order-status" class="px-4 py-2 border rounded-[7px] w-full mb-4">
                        <option value="processing">Processing</option>
                        <option value="completed">Completed</option>
                    </select>
                </div>
        
                <!-- Modal Actions -->
                <div class="flex justify-between">
                    <button type="button" id="modal-close-btn" class="absolute top-4 right-4 bg-red-600 text-white rounded-full px-2">
                        <i class="fas fa-times text-xl"></i>
                    </button>
                    <button id="modal-save-btn" class="bg-green-600 text-white px-6 py-2 rounded-[7px]">Save Status</button>
                </div>
            </div>
        </div>
    
        <script>
            document.addEventListener('DOMContentLoaded', () => {
    const viewButtons = document.querySelectorAll('.view-btn'); // Select all "View" buttons
    const modal = document.getElementById('order-modal'); // Modal element
    const closeModalBtn = document.getElementById('modal-close-btn'); // Close button in modal

    // Open Modal Function
    const openModal = (order) => {
        // Update modal header with order details
        document.getElementById('modal-order-header').textContent = `Order ${order.id} - ${order.customerName}`;
        
        // Show the modal
        modal.classList.remove('hidden');
    };

    // Close Modal Function
    const closeModal = () => {
        modal.classList.add('hidden');
    };

    // Attach click events to all "View" buttons
    viewButtons.forEach((button) => {
        button.addEventListener('click', () => {
            const row = button.closest('tr');
            const orderData = {
                id: row.querySelector('td:nth-child(1)').textContent.trim(),
                customerName: 'Ali', // Replace with dynamic data if needed
            };
            openModal(orderData);
        });
    });

    // Attach click event to close button
    closeModalBtn.addEventListener('click', closeModal);

    // Optional: Close modal when clicking outside of it
    modal.addEventListener('click', (event) => {
        if (event.target === modal) closeModal();
    });
});

        </script>
        
    </div>