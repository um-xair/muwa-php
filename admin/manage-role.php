<?php include 'sidebar.php'; ?>

        <div class="mt-8">
            <button id="add-role-btn" class="bg-[#614EF7] w-60 text-white px-6 py-3 rounded-[20px]" onclick="window.location.href='#'">
                Add Role
            </button>
        </div>

        <div id="role-modal" class="hidden fixed inset-0 flex justify-center items-center bg-black bg-opacity-50">
            <div class="bg-white rounded-[30px] p-8 w-1/3 relative">
                <h2 class="text-xl font-bold mb-4">Add New Role</h2>
                <form>
                    <label for="role-name" class="block text-sm font-medium text-gray-700">Role Name</label>
                    <input type="text" id="role-name" class="mt-1 block w-full p-3 border border-gray-300 rounded-[10px] focus:ring-blue-500 focus:border-blue-500" required>
        
                    <div class="flex justify-end mt-4">
                        <button type="button" id="close-modal-btn" class="absolute top-4 right-4 bg-red-600 text-white rounded-full px-2">
                            <i class="fas fa-times text-xl"></i>
                        </button>
                        <button type="submit" class="bg-blue-600 hover:bg-blue-800 text-white px-6 py-3 rounded-[15px]">
                            Add Role
                        </button>
                    </div>
                </form>
            </div>
        </div>
    
        <div id="confirm-delete-modal" class="hidden fixed inset-0 flex justify-center items-center bg-black bg-opacity-50">
            <div class="bg-white rounded-[30px] p-8 w-1/3 relative">
                <h2 class="text-xl font-bold mb-4">Are you sure you want to delete this role?</h2>
                <div class="flex justify-end space-x-4">
                    <button type="button" id="cancel-delete-btn" class="bg-gray-500 hover:bg-gray-700 text-white px-6 py-2 rounded-[15px]">
                        No
                    </button>
                    <button type="button" id="confirm-delete-btn" class="bg-red-600 hover:bg-red-800 text-white px-6 py-2 rounded-[15px]">
                        Yes
                    </button>
                </div>
            </div>
        </div>
    
        <div class="bg-white rounded-[30px] p-8 mt-8">
            <table class="min-w-full table-auto">
                <thead>
                    <tr class="border-b border-gray-300">
                        <th class="py-3 px-6 text-left">#</th>
                        <th class="py-3 px-6 text-left">Role</th>
                        <th class="py-3 px-6 text-left">Date Created</th>
                        <th class="py-3 px-6 text-left">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b border-gray-300" data-role-id="1">
                        <td class="py-3 px-6">1</td>
                        <td class="py-3 px-6">Admin</td>
                        <td class="py-3 px-6">2024-12-04</td>
                        <td class="py-3 px-6">
                            <button class="bg-red-600 text-white px-4 py-2 rounded-[7px] delete-role-btn">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    
    <script>
        const addRoleBtn = document.getElementById("add-role-btn");
        const roleModal = document.getElementById("role-modal");
        const closeModalBtn = document.getElementById("close-modal-btn");
        const confirmDeleteModal = document.getElementById("confirm-delete-modal");
        const cancelDeleteBtn = document.getElementById("cancel-delete-btn");
        const confirmDeleteBtn = document.getElementById("confirm-delete-btn");
        let roleToDelete = null;
    
        addRoleBtn.addEventListener("click", () => {
            roleModal.classList.remove("hidden");
        });
    
        closeModalBtn.addEventListener("click", () => {
            roleModal.classList.add("hidden");
        });
    
        const deleteButtons = document.querySelectorAll(".delete-role-btn");
        deleteButtons.forEach(button => {
            button.addEventListener("click", (e) => {
                const row = e.target.closest("tr");
                roleToDelete = row;
                confirmDeleteModal.classList.remove("hidden");
            });
        });
    
        cancelDeleteBtn.addEventListener("click", () => {
            confirmDeleteModal.classList.add("hidden");
            roleToDelete = null;
        });
    
        confirmDeleteBtn.addEventListener("click", () => {
            if (roleToDelete) {
                roleToDelete.remove();
            }
            confirmDeleteModal.classList.add("hidden");
            roleToDelete = null;
        });
    </script>