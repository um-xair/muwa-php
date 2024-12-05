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

        <div class="bg-white rounded-[30px] p-8 mt-8">
            <h2 class="text-2xl font-bold mb-6">Add New User</h2>
            <form id="add-user-form" class="space-y-6">
                <div class="flex flex-wrap -mx-2">
                    <div class="w-full md:w-1/2 px-2 mb-4 md:mb-0">
                        <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                        <input type="text" id="username" name="username" required class="mt-1 block w-full p-3 border border-gray-300 rounded-[10px] focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <div class="w-full md:w-1/2 px-2">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" id="email" name="email" required class="mt-1 block w-full p-3 border border-gray-300 rounded-[10px] focus:ring-blue-500 focus:border-blue-500">
                    </div>
                </div>
    
                <div class="flex flex-wrap -mx-2">
                    <div class="w-full px-2 mb-4">
                        <label for="full-name" class="block text-sm font-medium text-gray-700">Full Name</label>
                        <input type="text" id="full-name" name="full-name" required class="mt-1 block w-full p-3 border border-gray-300 rounded-[10px] focus:ring-blue-500 focus:border-blue-500">
                    </div>
                </div>

                <div class="flex flex-wrap -mx-2">
                    <div class="w-full md:w-1/2 px-2">
                        <label for="role" class="block text-sm font-medium text-gray-700">Role</label>
                        <select id="role" name="role" required class="mt-1 block w-full p-3 border border-gray-300 rounded-[10px] focus:ring-blue-500 focus:border-blue-500">
                            <option value="admin">Admin</option>
                            <option value="editor">Editor</option>
                            <option value="viewer">Viewer</option>
                        </select>
                    </div>
                    <div class="w-full md:w-1/2 px-2 mb-4 md:mb-0">
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <div class="flex items-center">
                            <input 
                                type="password" 
                                id="password" 
                                name="password"  
                                class="mt-1 block w-full p-3 border border-gray-300 rounded-[10px] focus:ring-blue-500 focus:border-blue-500">
                            <button 
                                type="button" 
                                id="toggle-password" 
                                class="ml-2 text-gray-500">
                                <i id="eye-icon" class="fas fa-eye"></i>
                            </button>
                            <button 
                                type="button" 
                                id="generate-password" 
                                class="ml-4 text-white px-4 py-2 rounded-[20px] bg-[#419DF9]">Generate</button>
                        </div>
                    </div>
                </div>
                <div>
                    <button type="submit" class="w-1/4 items-center block py-3 px-4 bg-[#614EF7] text-white rounded-[30px] mt-2">Add New User</button>
                </div>
            </form>
        </div>
    </div>
    
    <script>
        document.getElementById("generate-password").addEventListener("click", function () {
            const randomPassword = Math.random().toString(36).slice(-8);
            document.getElementById("password").value = randomPassword;
        });
        document.getElementById("add-user-form").addEventListener("submit", function (event) {
            event.preventDefault();
            alert("New user has been added!");
        });
            const passwordInput = document.getElementById("password");
            const togglePasswordButton = document.getElementById("toggle-password");
            const eyeIcon = document.getElementById("eye-icon");
            togglePasswordButton.addEventListener("click", () => {
                const isPassword = passwordInput.type === "password";
                passwordInput.type = isPassword ? "text" : "password";
                eyeIcon.className = isPassword ? "fas fa-eye" : "fas fa-eye-slash";
        });
        document.getElementById("generate-password").addEventListener("click", () => {
            const randomPassword = Math.random().toString(36).slice(-8);
            passwordInput.value = randomPassword;
        });
    </script>