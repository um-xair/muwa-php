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
        
        <div class="p-6">
            <h2 class="text-2xl text-black mb-4 font-bold">Welcome to the Dashboard, Xair!</h2>
            <p class="text-gray-400 mb-6">Here you can manage your data, view reports, and more.</p>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-[#FFFFFF] rounded-[30px] p-6 flex flex-col items-start">
                    <div class="w-16 h-16 flex items-center justify-center bg-[#624FF6] rounded-full mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#FFFFFF">
                            <path d="M40-160v-112q0-34 17.5-62.5T104-378q62-31 126-46.5T360-440q66 0 130 15.5T616-378q29 15 46.5 43.5T680-272v112H40Zm720 0v-120q0-44-24.5-84.5T666-434q51 6 96 20.5t84 35.5q36 20 55 44.5t19 53.5v120H760ZM360-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47Zm400-160q0 66-47 113t-113 47q-11 0-28-2.5t-28-5.5q27-32 41.5-71t14.5-81q0-42-14.5-81T544-792q14-5 28-6.5t28-1.5q66 0 113 47t47 113ZM120-240h480v-32q0-11-5.5-20T580-306q-54-27-109-40.5T360-360q-56 0-111 13.5T140-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T440-640q0-33-23.5-56.5T360-720q-33 0-56.5 23.5T280-640q0 33 23.5 56.5T360-560Zm0 320Zm0-400Z"/>
                        </svg>
                    </div>
                    <h3 class="text-md text-black mb-2">Total Users</h3>
                    <p class="text-4xl font-semibold text-black">150</p>
                </div>
    
                <div class="bg-[#FFFFFF] rounded-[30px] p-6 flex flex-col items-start">
                    <div class="w-16 h-16 flex items-center justify-center bg-[#E45A37] rounded-full mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#FFFFFF">
                            <path d="M240-80q-33 0-56.5-23.5T160-160v-480q0-33 23.5-56.5T240-720h80q0-66 47-113t113-47q66 0 113 47t47 113h80q33 0 56.5 23.5T800-640v480q0 33-23.5 56.5T720-80H240Zm0-80h480v-480h-80v80q0 17-11.5 28.5T600-520q-17 0-28.5-11.5T560-560v-80H400v80q0 17-11.5 28.5T360-520q-17 0-28.5-11.5T320-560v-80h-80v480Zm160-560h160q0-33-23.5-56.5T480-800q-33 0-56.5 23.5T400-720ZM240-160v-480 480Z"/>
                        </svg>
                    </div>
                    <h3 class="text-md text-black mb-2">Total Products</h3>
                    <p class="text-4xl font-semibold text-black">150</p>
                </div>
    
                <div class="bg-[#FFFFFF] rounded-[30px] p-6 flex flex-col items-start">
                    <div class="w-16 h-16 flex items-center justify-center bg-[#479BF2] rounded-full mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#FFFFFF">
                            <path d="M200-280v-280h80v280h-80Zm240 0v-280h80v280h-80ZM80-120v-80h800v80H80Zm600-160v-280h80v280h-80ZM80-640v-80l400-200 400 200v80H80Zm178-80h444-444Zm0 0h444L480-830 258-720Z"/>
                        </svg>
                    </div>
                    <h3 class="text-md text-black mb-2">Total Sales</h3>
                    <p class="text-4xl font-semibold text-black">150</p>
                </div>
    
                <div class="bg-[#FFFFFF] rounded-[30px] p-6 flex flex-col items-start">
                    <div class="w-16 h-16 flex items-center justify-center bg-[#5EC872] rounded-full mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#FFFFFF">
                            <path d="m691-150 139-138-42-42-97 95-39-39-42 43 81 81ZM240-600h480v-80H240v80ZM720-40q-83 0-141.5-58.5T520-240q0-83 58.5-141.5T720-440q83 0 141.5 58.5T920-240q0 83-58.5 141.5T720-40ZM120-80v-680q0-33 23.5-56.5T200-840h560q33 0 56.5 23.5T840-760v267q-19-9-39-15t-41-9v-243H200v562h243q5 31 15.5 59T486-86l-6 6-60-60-60 60-60-60-60 60-60-60Zm120-200h203q3-21 9-41t15-39H240v80Zm0-160h284q38-37 88.5-58.5T720-520H240v80Zm-40 242v-562 562Z"/>
                        </svg>
                    </div>
                    <h3 class="text-md text-black mb-2">Total Orders in Progress</h3>
                    <p class="text-4xl font-semibold text-black">150</p>
                </div>
            </div>
        </div>
    </div>

    