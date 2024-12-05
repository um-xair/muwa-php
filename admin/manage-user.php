<?php include 'sidebar.php'; ?>

    <div class="flex-1 md:ml-80 p-8">
        <div class="bg-[#FFFFFF] text-black p-4 flex justify-between items-center rounded-[30px]">
            <button id="menu-btn" class="md:hidden ml-4">
                <i class="fas fa-bars text-2xl"></i>
            </button>
            <div class="flex items-center space-x-2 ml-4">
                <h1 class="text-sm font-bold lg:text-xl">Muwababy Dashboard</h1>
            </div>
            <div>
                <button class="mr-4 bg-red-600 hover:bg-blue-500 text-white px-6 py-2 rounded-[15px]">Logout</button>
            </div>
        </div>

        <div class="mt-8">
            <button id="add-role-btn" class="bg-[#614EF7] w-60 text-white px-6 py-3 rounded-[20px]" onclick="window.location.href='add-user.php'">
                Add New User
            </button>
        </div>

        <div class="bg-white rounded-[30px] p-8 mt-8">
            <table class="min-w-full table-auto">
                <thead>
                    <tr class="border-b border-gray-300">
                        <th class="py-3 px-6 text-left">#</th>
                        <th class="py-3 px-6 text-left">Username</th>
                        <th class="py-3 px-6 text-left">Full Name</th>
                        <th class="py-3 px-6 text-left">Email</th>
                        <th class="py-3 px-6 text-left">Role</th>
                        <th class="py-3 px-6 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b border-gray-300" data-role-id="1">
                        <td class="py-3 px-6">1</td>
                        <td class="py-3 px-6">johndoe</td>
                        <td class="py-3 px-6">John Doe</td>
                        <td class="py-3 px-6">johndoe@example.com</td>
                        <td class="py-3 px-6">Admin</td>
                        <td class="py-3 px-6">
                            <button class="bg-blue-600 text-white px-4 py-2 rounded-[7px] mr-2 edit-btn">Edit</button>
                            <button class="bg-green-600 text-white px-4 py-2 rounded-[7px] mr-2 view-btn">View</button>
                            <button class="bg-red-600 text-white px-4 py-2 rounded-[7px] mr-2 delete-btn">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    
        <div id="edit-modal" class="hidden fixed inset-0 flex justify-center items-center bg-black bg-opacity-50">
            <div class="bg-white rounded-[30px] p-8 w-1/3 relative">
                <h2 class="text-xl font-bold mb-4">Edit User</h2>
                <form id="edit-form">
                    <label for="edit-username" class="block text-sm font-medium text-gray-700">Username</label>
                    <input type="text" id="edit-username" class="mt-1 block w-full p-3 border border-gray-300 rounded-[10px] focus:ring-blue-500 focus:border-blue-500" required>
                    
                    <label for="edit-name" class="block text-sm font-medium text-gray-700 mt-4">Full Name</label>
                    <input type="text" id="edit-name" class="mt-1 block w-full p-3 border border-gray-300 rounded-[10px] focus:ring-blue-500 focus:border-blue-500" required>
    
                    <label for="edit-email" class="block text-sm font-medium text-gray-700 mt-4">Email</label>
                    <input type="email" id="edit-email" class="mt-1 block w-full p-3 border border-gray-300 rounded-[10px] focus:ring-blue-500 focus:border-blue-500" required>
    
                    <label for="edit-role" class="block text-sm font-medium text-gray-700 mt-4">Role</label>
                    <select id="edit-role" class="mt-1 block w-full p-3 border border-gray-300 rounded-[10px] focus:ring-blue-500 focus:border-blue-500">
                        <option value="Admin">Admin</option>
                        <option value="User">User</option>
                    </select>
    
                    <div class="flex justify-end mt-4">
                        <button type="button" id="close-edit-modal" class="absolute top-4 right-4 bg-red-600 text-white rounded-full px-2">
                            <i class="fas fa-times text-xl"></i>
                        </button>
                        <button type="submit" class="bg-blue-600 hover:bg-blue-800 text-white px-6 py-3 rounded-[15px]">
                            Save Edits
                        </button>
                    </div>
                </form>
            </div>
        </div>
    
        <div id="view-modal" class="hidden fixed inset-0 flex justify-center items-center bg-black bg-opacity-50">
            <div class="bg-white rounded-[30px] p-8 w-1/3 relative">
                <h2 class="text-xl font-bold mb-4">User Details</h2>
                <div id="view-details">
                </div>
                <div class="absolute top-4 right-4">
                    <button type="button" id="close-view-modal" class="bg-red-600 text-white rounded-full px-2">
                        <i class="fas fa-times text-xl"></i>
                    </button>
                </div>
            </div>
        </div>

        <div id="delete-modal" class="hidden fixed inset-0 flex justify-center items-center bg-black bg-opacity-50">
            <div class="bg-white rounded-[30px] p-8 w-1/3">
                <h2 class="text-xl font-bold mb-4">Are you sure you want to delete this user?</h2>
                <div class="flex justify-end mt-4">
                    <button type="button" id="close-delete-modal" class="bg-gray-500 text-white px-6 py-2 rounded-[15px] mr-2">
                        Cancel
                    </button>
                    <button type="button" id="confirm-delete-btn" class="bg-red-600 text-white px-6 py-2 rounded-[15px]">
                        Yes, Delete
                    </button>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        const editButtons = document.querySelectorAll(".edit-btn");
        const viewButtons = document.querySelectorAll(".view-btn");
        const deleteButtons = document.querySelectorAll(".delete-btn");
    
        const editModal = document.getElementById("edit-modal");
        const viewModal = document.getElementById("view-modal");
        const deleteModal = document.getElementById("delete-modal");
    
        const closeEditModal = document.getElementById("close-edit-modal");
        const closeViewModal = document.getElementById("close-view-modal");
        const closeDeleteModal = document.getElementById("close-delete-modal");
    
        const confirmDeleteBtn = document.getElementById("confirm-delete-btn");
    
        editButtons.forEach(button => {
            button.addEventListener("click", (e) => {
                const row = e.target.closest("tr");
                const username = row.children[1].textContent;
                const name = row.children[2].textContent;
                const email = row.children[3].textContent;
                const role = row.children[4].textContent;
    
                document.getElementById("edit-username").value = username;
                document.getElementById("edit-name").value = name;
                document.getElementById("edit-email").value = email;
                document.getElementById("edit-role").value = role;
    
                editModal.classList.remove("hidden");
            });
        });
    
        closeEditModal.addEventListener("click", () => {
            editModal.classList.add("hidden");
        });
    
        viewButtons.forEach(button => {
            button.addEventListener("click", (e) => {
                const row = e.target.closest("tr");
                const username = row.children[1].textContent;
                const name = row.children[2].textContent;
                const email = row.children[3].textContent;
                const role = row.children[4].textContent;
    
                const details = `
                    <p><strong>Username:</strong> ${username}</p>
                    <p><strong>Name:</strong> ${name}</p>
                    <p><strong>Email:</strong> ${email}</p>
                    <p><strong>Role:</strong> ${role}</p>
                `;
                document.getElementById("view-details").innerHTML = details;
    
                viewModal.classList.remove("hidden");
            });
        });
    
        closeViewModal.addEventListener("click", () => {
            viewModal.classList.add("hidden");
        });
    
        deleteButtons.forEach(button => {
            button.addEventListener("click", (e) => {
                const row = e.target.closest("tr");
                const userId = row.getAttribute("data-role-id");
    
                confirmDeleteBtn.onclick = () => {
                    row.remove();
                    deleteModal.classList.add("hidden");
                };
    
                deleteModal.classList.remove("hidden");
            });
        });
    
        closeDeleteModal.addEventListener("click", () => {
            deleteModal.classList.add("hidden");
        });
    </script>