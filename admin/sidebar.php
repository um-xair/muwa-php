<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-slate-100 via-slate-200 to-slate-100 flex flex-col md:flex-row">

    <div id="sidebar" class="bg-[#FFFFFF] text-black w-80 h-screen flex flex-col fixed left-0 top-0 transform -translate-x-full md:translate-x-0 transition-transform duration-300 ease-in-out shadow-lg">
        <div class="flex items-center justify-between p-4">
            <h2 class="text-lg font-bold"></h2>
            <button id="close-btn" class="text-gray-400 hover:text-gray-200 md:hidden">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <nav class="flex-grow p-4">
            <ul class="mt-10">
                <li class="mb-4">
                    <a href="admin.php" class="flex items-center block py-3 px-4 bg-[#614EF7] text-white rounded-[30px] mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                            <path d="M240-200h120v-240h240v240h120v-360L480-740 240-560v360Zm-80 80v-480l320-240 320 240v480H520v-240h-80v240H160Zm320-350Z"/>
                        </svg>
                        <span class="ml-4">Dashboard</span>
                    </a>
                </li>
                <li class="mb-4 relative">
                    <a href="#" id="user-menu-toggle" class="flex items-center block py-3 px-4 hover:bg-[#614EF7] hover:text-white rounded-[30px] group">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" class="fill-black group-hover:fill-white">
                            <path d="M234-276q51-39 114-61.5T480-360q69 0 132 22.5T726-276q35-41 54.5-93T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 59 19.5 111t54.5 93Zm246-164q-59 0-99.5-40.5T340-580q0-59 40.5-99.5T480-720q59 0 99.5 40.5T620-580q0 59-40.5 99.5T480-440Zm0 360q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q53 0 100-15.5t86-44.5q-39-29-86-44.5T480-280q-53 0-100 15.5T294-220q39 29 86 44.5T480-160Zm0-360q26 0 43-17t17-43q0-26-17-43t-43-17q-26 0-43 17t-17 43q0 26 17 43t43 17Zm0-60Zm0 360Z"/>
                        </svg>
                        <span class="ml-4">Manage Users</span>
                        <i class="fas fa-chevron-down ml-auto"></i>
                    </a>
                    <ul id="user-submenu" class="hidden bg-gradient-to-br from-slate-100 via-slate-200 to-slate-100 mt-4 rounded-[15px] overflow-hidden p-2">
                        <li class="mb-2">
                            <a href="manage-user.php" class="block py-2 px-4 hover:bg-[#614EF7] hover:text-white rounded-[7px]">All user</a>
                        </li>
                        <li class="mb-2">
                            <a href="add-user.php" class="block py-2 px-4 hover:bg-[#614EF7] hover:text-white rounded-[7px]">Add User</a>
                        </li>
                        <li class="mb-2">
                            <a href="manage-role.php" class="block py-2 px-4 hover:bg-[#614EF7] hover:text-white rounded-[7px]">Manage Role</a>
                        </li>
                    </ul>
                </li>
                <li class="mb-4">
                    <a href="#" id="product-menu-toggle" class="flex items-center block py-3 px-4 hover:bg-[#614EF7] hover:text-white rounded-[30px] group">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" class="fill-black group-hover:fill-white">
                            <path d="M240-80q-33 0-56.5-23.5T160-160v-480q0-33 23.5-56.5T240-720h80q0-66 47-113t113-47q66 0 113 47t47 113h80q33 0 56.5 23.5T800-640v480q0 33-23.5 56.5T720-80H240Zm0-80h480v-480h-80v80q0 17-11.5 28.5T600-520q-17 0-28.5-11.5T560-560v-80H400v80q0 17-11.5 28.5T360-520q-17 0-28.5-11.5T320-560v-80h-80v480Zm160-560h160q0-33-23.5-56.5T480-800q-33 0-56.5 23.5T400-720ZM240-160v-480 480Z"/>
                        </svg>
                        <span class="ml-4">Product Management</span>
                        <i class="fas fa-chevron-down ml-auto"></i>
                    </a>
                    <ul id="product-submenu" class="hidden bg-gradient-to-br from-slate-100 via-slate-200 to-slate-100 mt-4 rounded-[15px] overflow-hidden p-2">
                        <li class="mb-2">
                            <a href="manage-product.php" class="block py-2 px-4 hover:bg-[#614EF7] hover:text-white rounded-[7px]">All product</a>
                        </li>
                        <li class="mb-2">
                            <a href="add-product.php" class="block py-2 px-4 hover:bg-[#614EF7] hover:text-white rounded-[7px]">Add product</a>
                        </li>
                        <li class="mb-2">
                            <a href="manage-category.php" class="block py-2 px-4 hover:bg-[#614EF7] hover:text-white rounded-[7px]">Manage category</a>
                        </li>
                    </ul>
                </li>
                <li class="mb-4">
                    <a href="order.php" class="flex items-center block py-3 px-4 hover:bg-[#614EF7] hover:text-white rounded-[30px] group">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" class="fill-black group-hover:fill-white">
                            <path d="M200-80q-33 0-56.5-23.5T120-160v-451q-18-11-29-28.5T80-680v-120q0-33 23.5-56.5T160-880h640q33 0 56.5 23.5T880-800v120q0 23-11 40.5T840-611v451q0 33-23.5 56.5T760-80H200Zm0-520v440h560v-440H200Zm-40-80h640v-120H160v120Zm200 280h240v-80H360v80Zm120 20Z"/>
                        </svg>
                        <span class="ml-4">Order Management</span>
                    </a>
                </li>
                <li class="mb-4">
                    <a href="#" id="store-menu-toggle" class="flex items-center block py-3 px-4 hover:bg-[#614EF7] hover:text-white rounded-[30px] group">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" class="fill-black group-hover:fill-white">
                            <path d="M841-518v318q0 33-23.5 56.5T761-120H201q-33 0-56.5-23.5T121-200v-318q-23-21-35.5-54t-.5-72l42-136q8-26 28.5-43t47.5-17h556q27 0 47 16.5t29 43.5l42 136q12 39-.5 71T841-518Zm-272-42q27 0 41-18.5t11-41.5l-22-140h-78v148q0 21 14 36.5t34 15.5Zm-180 0q23 0 37.5-15.5T441-612v-148h-78l-22 140q-4 24 10.5 42t37.5 18Zm-178 0q18 0 31.5-13t16.5-33l22-154h-78l-40 134q-6 20 6.5 43t41.5 23Zm540 0q29 0 42-23t6-43l-42-134h-76l22 154q3 20 16.5 33t31.5 13ZM201-200h560v-282q-5 2-6.5 2H751q-27 0-47.5-9T663-518q-18 18-41 28t-49 10q-27 0-50.5-10T481-518q-17 18-39.5 28T393-480q-29 0-52.5-10T299-518q-21 21-41.5 29.5T211-480h-4.5q-2.5 0-5.5-2v282Zm560 0H201h560Z"/>
                        </svg>
                        <span class="ml-4">Store Management</span>
                        <i class="fas fa-chevron-down ml-auto"></i>
                    </a>
                    <ul id="store-submenu" class="hidden bg-gradient-to-br from-slate-100 via-slate-200 to-slate-100 mt-4 rounded-[15px] overflow-hidden p-2">
                        <li class="mb-2">
                            <a href="manage-store.php" class="block py-2 px-4 hover:bg-[#614EF7] hover:text-white rounded-[7px]">Manage Store</a>
                        </li>
                        <li class="mb-2">
                            <a href="add-store.php" class="block py-2 px-4 hover:bg-[#614EF7] hover:text-white rounded-[7px]">Add New Store</a>
                        </li>
                    </ul>
                </li>
                <li class="mb-4">
                    <a href="customer.php" class="flex items-center block py-3 px-4 hover:bg-[#614EF7] hover:text-white rounded-[30px] group">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" class="fill-black group-hover:fill-white">
                        <path d="M480-40 360-160H200q-33 0-56.5-23.5T120-240v-560q0-33 23.5-56.5T200-880h560q33 0 56.5 23.5T840-800v560q0 33-23.5 56.5T760-160H600L480-40ZM200-286q54-53 125.5-83.5T480-400q83 0 154.5 30.5T760-286v-514H200v514Zm280-194q58 0 99-41t41-99q0-58-41-99t-99-41q-58 0-99 41t-41 99q0 58 41 99t99 41ZM280-240h400v-10q-42-35-93-52.5T480-320q-56 0-107 17.5T280-250v10Zm200-320q-25 0-42.5-17.5T420-620q0-25 17.5-42.5T480-680q25 0 42.5 17.5T540-620q0 25-17.5 42.5T480-560Zm0 17Z"/>
                    </svg>
                        <span class="ml-4">Customers</span>
                    </a>
                </li>
                <li class="mb-4">
                    <a href="warranty.php" class="flex items-center block py-3 px-4 hover:bg-[#614EF7] hover:text-white rounded-[30px] group">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" class="fill-black group-hover:fill-white">
                        <path d="M320-240h320v-80H320v80Zm0-160h320v-80H320v80ZM240-80q-33 0-56.5-23.5T160-160v-640q0-33 23.5-56.5T240-880h320l240 240v480q0 33-23.5 56.5T720-80H240Zm280-520v-200H240v640h480v-440H520ZM240-800v200-200 640-640Z"/>
                    </svg>
                        <span class="ml-4">Warranty Application</span>
                    </a>
                </li>
                <li class="mb-4">
                    <a href="#" class="flex items-center block py-3 px-4 hover:bg-[#614EF7] hover:text-white rounded-[30px] group">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" class="fill-black group-hover:fill-white">
                            <path d="M120-120v-80l80-80v160h-80Zm160 0v-240l80-80v320h-80Zm160 0v-320l80 81v239h-80Zm160 0v-239l80-80v319h-80Zm160 0v-400l80-80v480h-80ZM120-327v-113l280-280 160 160 280-280v113L560-447 400-607 120-327Z"/>
                        </svg>
                        <span class="ml-4">Reports & Analytics</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>

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
    



    <script>
        document.addEventListener('DOMContentLoaded', function () {
        document.getElementById('user-menu-toggle').addEventListener('click', function () {
        document.getElementById('user-submenu').classList.toggle('hidden');
        });

        document.getElementById('product-menu-toggle').addEventListener('click', function () {
        document.getElementById('product-submenu').classList.toggle('hidden');
        });

        document.getElementById('store-menu-toggle').addEventListener('click', function () {
        document.getElementById('store-submenu').classList.toggle('hidden');
        });

        document.getElementById('menu-btn').addEventListener('click', function () {
        const sidebar = document.getElementById('sidebar');
        sidebar.classList.toggle('-translate-x-full');
        });

        document.getElementById('close-btn').addEventListener('click', function () {
        const sidebar = document.getElementById('sidebar');
        sidebar.classList.add('-translate-x-full');
        });
    });
    </script>


</body>
</html>