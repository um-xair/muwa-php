<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Muwababy</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        ::-webkit-scrollbar {
            display: none;
        }
    </style>
</head>
<body class="bg-white mx-auto">
    <header class="px-10 md:px-[6%] bg-white mt-4 flex justify-between items-center p-4 text-black">
        <div>
            <a href="index.php">
                <img src="assets/muwa.png" alt="" class="h-8">
            </a>            
        </div>
        <div class="hidden md:flex flex-1 justify-center">
            <nav class="space-x-6 lg:space-x-10 text-base lg:text-lg flex items-center">
                <a href="index.php" class="">Home</a>
                <a href="about.php" class="">About Us</a>
                <a href="buy-now.php" class="">Buy Now</a>
                <a href="#" id="stroller-menu" class="flex items-center space-x-2 cursor-pointer">
                    <span>Stroller</span>
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000">
                        <path id="arrowIcon" d="M480-344 240-584l56-56 184 184 184-184 56 56-240 240Z"/>
                    </svg>
                </a>
                <a href="#" id="accessories-menu" class="hidden flex items-center space-x-2 cursor-pointer">
                    <span>Accessories</span>
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000">
                        <path id="accessories-arrow" d="M480-344 240-584l56-56 184 184 184-184 56 56-240 240Z"/>
                    </svg>
                </a>
                <a href="#" id="support-menu" class="flex items-center space-x-2 cursor-pointer">
                    <span>Support</span>
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000">
                        <path d="M480-344 240-584l56-56 184 184 184-184 56 56-240 240Z"/>
                    </svg>
                </a>
            </nav>
        </div>
        <div class="flex flex-col p-4 space-y-2 hidden md:flex">
            <a href="find-us.php" class="bg-[#844D3E] text-white px-6 py-3 rounded-[20px] text-center">
                Find Us
            </a>
        </div>        
        <div class="md:hidden flex justify-end">
            <button id="hamburger" class="flex items-center px-3 py-2 border rounded text-black border-black focus:outline-none" onclick="toggleMenu()">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>
    </header>

    <div id="mobile-menu" class="hidden md:hidden bg-[#F6EDE4] border-t border-gray-200 mt-2">
        <nav class="flex flex-col px-4 py-2 space-y-2">
            <a href="index.php" class="bg-[#D0A8A1] px-4 py-2 rounded-[10px]">Home</a>
            <a href="about.php" class="bg-[#D0A8A1] px-4 py-2 rounded-[10px]">About Us</a>
            <a href="#" class="bg-[#D0A8A1] px-4 py-2 rounded-[10px]">Stroller</a>

            <div id="stroller-submenu" class="bg-white px-4 py-2 rounded-[10px]">
                <div class="flex flex-col space-y-2">
                    <div class="flex items-center space-x-4">
                        <div class="w-10 h-10">
                            <img src="assets/Black.jpg" alt="Stroller Accessories" class="w-full h-full object-cover">
                        </div>
                        <a href="product.php" class="text-[#844D3E]">Muwa Horsi Stroller</a>
                    </div>
                    <div class="hidden flex items-center space-x-4">
                        <div class="w-10 h-10">
                            <img src="assets/Brown.jpg" alt="Stroller Parts" class="w-full h-full object-cover">
                        </div>
                        <a href="product.php" class="text-[#844D3E]">Muwa Horsi Stroller</a>
                    </div>
                    <div class="hidden flex items-center space-x-4">
                        <div class="w-10 h-10">
                            <img src="assets/Silver.jpg" alt="Stroller Guide" class="w-full h-full object-cover">
                        </div>
                        <a href="product.php" class="text-[#844D3E]">Muwa Horsi Stroller</a>
                    </div>
                </div>
            </div>
            
            <a href="#" class="hidden bg-[#D0A8A1] px-4 py-2 rounded-[10px]">Accessories</a>

            <div id="stroller-submenu" class="hidden bg-white px-4 py-2 rounded-[10px]">
                <div class="flex flex-col space-y-2">
                    <div class="flex items-center space-x-4">
                        <div class="w-10 h-10">
                            <img src="assets/muwa-bag.png" alt="Stroller Accessories" class="w-full h-full object-cover">
                        </div>
                        <a href="#" class="text-[#844D3E]">Muwa Bag</a>
                    </div>
                    <div class="flex items-center space-x-4">
                        <div class="w-10 h-10">
                            <img src="assets/muwa-connector.png" alt="Stroller Parts" class="w-full h-full object-cover">
                        </div>
                        <a href="#" class="text-[#844D3E]">Muwa Connector</a>
                    </div>
                    <div class="flex items-center space-x-4">
                        <div class="w-10 h-10">
                            <img src="assets/muwa-adapter.png" alt="Stroller Guide" class="w-full h-full object-cover">
                        </div>
                        <a href="#" class="text-[#844D3E]">Muwa Adapter</a>
                    </div>
                    <div class="flex items-center space-x-4">
                        <div class="w-10 h-10">
                            <img src="assets/muwa-seat-liner.png" alt="Stroller Parts" class="w-full h-full object-cover">
                        </div>
                        <a href="#" class="text-[#844D3E]">Muwa Seat Liner</a>
                    </div>
                    <div class="flex items-center space-x-4">
                        <div class="w-10 h-10">
                            <img src="assets/muwa-raincover.png" alt="Stroller Guide" class="w-full h-full object-cover">
                        </div>
                        <a href="#" class="text-[#844D3E]">Muwa Rain Cover</a>
                    </div>
                </div>
            </div>
            
            <a href="#" class="bg-[#D0A8A1] px-4 py-2 rounded-[10px]">Support</a>

            <div id="support-submenu" class="bg-white px-4 py-2 rounded-[10px]">
                <div class="flex flex-col space-y-2">
                    <div class="flex items-center space-x-4">
                        <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#844D3E">
                            <path d="M480-80q-139-35-229.5-159.5T160-516v-244l320-120 320 120v244q0 152-90.5 276.5T480-80Zm0-84q97-30 162-118.5T718-480H480v-315l-240 90v207q0 7 2 18h238v316Z"/>
                        </svg>
                        <a href="privacy-policy.php" class="text-[#844D3E]">Privacy Policy</a>
                    </div>
                
                    <div class="flex items-center space-x-4">
                        <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#844D3E">
                            <path d="M320-240h320v-80H320v80Zm0-160h320v-80H320v80ZM240-80q-33 0-56.5-23.5T160-160v-640q0-33 23.5-56.5T240-880h320l240 240v480q0 33-23.5 56.5T720-80H240Zm280-520v-200H240v640h480v-440H520ZM240-800v200-200 640-640Z"/>
                        </svg>
                        <a href="terms.php" class="text-[#844D3E]">Terms and Conditions</a>
                    </div>
                
                    <div class="flex items-center space-x-4">
                        <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#844D3E">
                            <path d="M280-80q-33 0-56.5-23.5T200-160q0-33 23.5-56.5T280-240q33 0 56.5 23.5T360-160q0 33-23.5 56.5T280-80Zm400 0q-33 0-56.5-23.5T600-160q0-33 23.5-56.5T680-240q33 0 56.5 23.5T760-160q0 33-23.5 56.5T680-80ZM246-720l96 200h280l110-200H246Zm-38-80h590q23 0 35 20.5t1 41.5L692-482q-11 20-29.5 31T622-440H324l-44 80h480v80H280q-45 0-68-39.5t-2-78.5l54-98-144-304H40v-80h130l38 80Zm134 280h280-280Z"/>
                        </svg>
                        <a href="return.php" class="text-[#844D3E]">Return and Refund Policy</a>
                    </div>

                    <div class="flex items-center space-x-4">
                        <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#844D3E">
                            <path d="M240-160q-50 0-85-35t-35-85H40v-440q0-33 23.5-56.5T120-800h560v160h120l120 160v200h-80q0 50-35 85t-85 35q-50 0-85-35t-35-85H360q0 50-35 85t-85 35Zm0-80q17 0 28.5-11.5T280-280q0-17-11.5-28.5T240-320q-17 0-28.5 11.5T200-280q0 17 11.5 28.5T240-240ZM120-360h32q17-18 39-29t49-11q27 0 49 11t39 29h272v-360H120v360Zm600 120q17 0 28.5-11.5T760-280q0-17-11.5-28.5T720-320q-17 0-28.5 11.5T680-280q0 17 11.5 28.5T720-240Zm-40-200h170l-90-120h-80v120ZM360-540Z"/>
                        </svg>
                        <a href="shipping.php" class="text-[#844D3E]">Shipping Policy</a>
                    </div>
                
                    <div class="flex items-center space-x-4">
                        <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#844D3E">
                            <path d="M320-480v-80h320v80H320Zm0-160v-80h320v80H320Zm-80 240h300q29 0 54 12.5t42 35.5l84 110v-558H240v400Zm0 240h442L573-303q-6-8-14.5-12.5T540-320H240v160Zm480 80H240q-33 0-56.5-23.5T160-160v-640q0-33 23.5-56.5T240-880h480q33 0 56.5 23.5T800-800v640q0 33-23.5 56.5T720-80Zm-480-80v-640 640Zm0-160v-80 80Z"/>
                        </svg>
                        <a href="warranty.php" class="text-[#844D3E]">Warranty Policy</a>
                    </div>

                    <div class="flex items-center space-x-4">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#844D3E">
                            <path d="M80-720v-200h200v80H160v120H80Zm720 0v-120H680v-80h200v200h-80ZM80-40v-200h80v120h120v80H80Zm600 0v-80h120v-120h80v200H680ZM280-240h400v-480H280v480Zm0 80q-33 0-56.5-23.5T200-240v-480q0-33 23.5-56.5T280-800h400q33 0 56.5 23.5T760-720v480q0 33-23.5 56.5T680-160H280Zm80-400h240v-80H360v80Zm0 120h240v-80H360v80Zm0 120h240v-80H360v80Zm-80 80v-480 480Z"/>
                        </svg>
                        <a href="condition.php" class="text-[#844D3E]">Warranty Conditions</a>
                    </div>
                </div>
            </div>
            
        </nav>
        <div class="flex flex-col p-4 space-y-2">
            <a href="find-us.php" class="bg-[#844D3E] text-white px-6 py-3 rounded-[20px] text-center">
                Find Us
            </a>
        </div>
              
    </div>
    

    <div id="submenu-box" class="w-full bg-[#EEE9E2] py-8 absolute top-20 left-0 hidden z-50 mt-8">
        <div class="max-w-screen-xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-6 px-6">
            <a href="privacy-policy.php" class="bg-white p-6 rounded-[20px] flex items-center space-x-4 hover:shadow-lg transition-shadow duration-300">
                <div class="bg-[#EEE9E2] p-4 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#844D3E">
                        <path d="M480-80q-139-35-229.5-159.5T160-516v-244l320-120 320 120v244q0 152-90.5 276.5T480-80Zm0-84q97-30 162-118.5T718-480H480v-315l-240 90v207q0 7 2 18h238v316Z"/>
                    </svg>
                </div>
                <div>
                    <h4 class="font-medium text-lg">Privacy Policy</h4>
                    <p class="text-sm text-gray-500">Data collection and protection explained.</p>
                </div>
            </a>
            <a href="terms.php" class="bg-white p-6 rounded-[20px] flex items-center space-x-4 hover:shadow-lg transition-shadow duration-300">
                <div class="bg-[#EEE9E2] p-4 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#844D3E">
                        <path d="M320-240h320v-80H320v80Zm0-160h320v-80H320v80ZM240-80q-33 0-56.5-23.5T160-160v-640q0-33 23.5-56.5T240-880h320l240 240v480q0 33-23.5 56.5T720-80H240Zm280-520v-200H240v640h480v-440H520ZM240-800v200-200 640-640Z"/>
                    </svg>
                </div>
                <div>
                    <h4 class="font-medium text-lg">Terms and Conditions</h4>
                    <p class="text-sm text-gray-500">Usage rules and guidelines.</p>
                </div>
            </a>
            <a href="return.php" class="bg-white p-6 rounded-[20px] flex items-center space-x-4 hover:shadow-lg transition-shadow duration-300">
                <div class="bg-[#EEE9E2] p-4 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#844D3E">
                        <path d="M280-80q-33 0-56.5-23.5T200-160q0-33 23.5-56.5T280-240q33 0 56.5 23.5T360-160q0 33-23.5 56.5T280-80Zm400 0q-33 0-56.5-23.5T600-160q0-33 23.5-56.5T680-240q33 0 56.5 23.5T760-160q0 33-23.5 56.5T680-80ZM246-720l96 200h280l110-200H246Zm-38-80h590q23 0 35 20.5t1 41.5L692-482q-11 20-29.5 31T622-440H324l-44 80h480v80H280q-45 0-68-39.5t-2-78.5l54-98-144-304H40v-80h130l38 80Zm134 280h280-280Z"/>
                    </svg>
                </div>
                <div>
                    <h4 class="font-medium text-lg">Return and Refund Policy</h4>
                    <p class="text-sm text-gray-500">Return process and refunds.</p>
                </div>
            </a>
            <a href="shipping.php" class="bg-white p-6 rounded-[20px] flex items-center space-x-4 hover:shadow-lg transition-shadow duration-300">
                <div class="bg-[#EEE9E2] p-4 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#844D3E">
                        <path d="M240-160q-50 0-85-35t-35-85H40v-440q0-33 23.5-56.5T120-800h560v160h120l120 160v200h-80q0 50-35 85t-85 35q-50 0-85-35t-35-85H360q0 50-35 85t-85 35Zm0-80q17 0 28.5-11.5T280-280q0-17-11.5-28.5T240-320q-17 0-28.5 11.5T200-280q0 17 11.5 28.5T240-240ZM120-360h32q17-18 39-29t49-11q27 0 49 11t39 29h272v-360H120v360Zm600 120q17 0 28.5-11.5T760-280q0-17-11.5-28.5T720-320q-17 0-28.5 11.5T680-280q0 17 11.5 28.5T720-240Zm-40-200h170l-90-120h-80v120ZM360-540Z"/>
                    </svg>
                </div>
                <div>
                    <h4 class="font-medium text-lg">Shipping Policy</h4>
                    <p class="text-sm text-gray-500">Delivery options and costs.</p>
                </div>
            </a>
            <a href="warranty.php" class="bg-white p-6 rounded-[20px] flex items-center space-x-4 hover:shadow-lg transition-shadow duration-300">
                <div class="bg-[#EEE9E2] p-4 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#844D3E">
                        <path d="M320-480v-80h320v80H320Zm0-160v-80h320v80H320Zm-80 240h300q29 0 54 12.5t42 35.5l84 110v-558H240v400Zm0 240h442L573-303q-6-8-14.5-12.5T540-320H240v160Zm480 80H240q-33 0-56.5-23.5T160-160v-640q0-33 23.5-56.5T240-880h480q33 0 56.5 23.5T800-800v640q0 33-23.5 56.5T720-80Zm-480-80v-640 640Zm0-160v-80 80Z"/>
                    </svg>
                </div>
                <div>
                    <h4 class="font-medium text-lg">Warranty Policy</h4>
                    <p class="text-sm text-gray-500">Product warranties and claims.</p>
                </div>
            </a>
            <a href="condition.php" class="bg-white p-6 rounded-[20px] flex items-center space-x-4 hover:shadow-lg transition-shadow duration-300">
                <div class="bg-[#EEE9E2] p-4 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#844D3E">
                        <path d="M80-720v-200h200v80H160v120H80Zm720 0v-120H680v-80h200v200h-80ZM80-40v-200h80v120h120v80H80Zm600 0v-80h120v-120h80v200H680ZM280-240h400v-480H280v480Zm0 80q-33 0-56.5-23.5T200-240v-480q0-33 23.5-56.5T280-800h400q33 0 56.5 23.5T760-720v480q0 33-23.5 56.5T680-160H280Zm80-400h240v-80H360v80Zm0 120h240v-80H360v80Zm0 120h240v-80H360v80Zm-80 80v-480 480Z"/>
                    </svg>
                </div>
                <div>
                    <h4 class="font-medium text-lg">Warranty Conditions</h4>
                    <p class="text-sm text-gray-500">Product warranties and claims.</p>
                </div>
            </a>
        </div>
    </div>

    <div id="stroller-box" class="w-full bg-[#EEE9E2] py-8 absolute top-20 left-0 z-50 mt-8 hidden">
        <div class="max-w-screen-xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-6 px-6">
            <a href="product.php" class="bg-white p-6 rounded-[20px] flex items-center space-x-4 hover:shadow-lg transition-shadow duration-300">
                <div class="w-32 h-32">
                    <img src="assets/Black.jpg" alt="Privacy Policy" class="w-full h-full object-cover">
                </div>
                <div>
                    <h4 class="font-medium text-lg">Muwa Horsi</h4>
                    <p class="text-sm text-gray-500">Modern Stroller</p>
                </div>
            </a>
            <a href="product.php" class="hidden bg-white p-6 rounded-[20px] flex items-center space-x-4 hover:shadow-lg transition-shadow duration-300">
                <div class="w-32 h-32">
                    <img src="assets/Brown.jpg" alt="Privacy Policy" class="w-full h-full object-cover">
                </div>
                <div>
                    <h4 class="font-medium text-lg">Muwa Horsi</h4>
                    <p class="text-sm text-gray-500">Modern Stroller</p>
                </div>
            </a>
            <a href="product.php" class="hidden bg-white p-6 rounded-[20px] flex items-center space-x-4 hover:shadow-lg transition-shadow duration-300">
                <div class="w-32 h-32">
                    <img src="assets/Silver.jpg" alt="Privacy Policy" class="w-full h-full object-cover">
                </div>
                <div>
                    <h4 class="font-medium text-lg">Muwa Horsi</h4>
                    <p class="text-sm text-gray-500">Modern Stroller</p>
                </div>
            </a>
        </div>
    </div>

    <div id="accessories-box" class="w-full bg-[#EEE9E2] py-8 absolute top-20 left-0 z-50 mt-8 hidden">
        <div class="max-w-screen-xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-6 px-6">
            <a href="#" class="bg-white p-6 rounded-[20px] flex items-center space-x-4 hover:shadow-lg transition-shadow duration-300">
                <div class="w-32 h-32">
                    <img src="assets/muwa-bag.png" alt="Muwa Bag" class="w-full h-full object-cover">
                </div>
                <div>
                    <h4 class="font-medium text-lg">Muwa Bag</h4>
                    <p class="text-sm text-gray-500">Modern Accessories</p>
                </div>
            </a>
            <a href="#" class="bg-white p-6 rounded-[20px] flex items-center space-x-4 hover:shadow-lg transition-shadow duration-300">
                <div class="w-32 h-32">
                    <img src="assets/muwa-adapter.png" alt="Muwa Car Seat Adapter" class="w-full h-full object-cover">
                </div>
                <div>
                    <h4 class="font-medium text-lg">Muwa Car Seat Adapter</h4>
                    <p class="text-sm text-gray-500">Modern Accessories</p>
                </div>
            </a>
            <a href="#" class="bg-white p-6 rounded-[20px] flex items-center space-x-4 hover:shadow-lg transition-shadow duration-300">
                <div class="w-32 h-32">
                    <img src="assets/muwa-connector.png" alt="Muwa Twin Connectors" class="w-full h-full object-cover">
                </div>
                <div>
                    <h4 class="font-medium text-lg">Muwa Twin Connectors</h4>
                    <p class="text-sm text-gray-500">Modern Accessories</p>
                </div>
            </a>
            <a href="#" class="bg-white p-6 rounded-[20px] flex items-center space-x-4 hover:shadow-lg transition-shadow duration-300">
                <div class="w-32 h-32">
                    <img src="assets/muwa-raincover.png" alt="Muwa Rain Cover" class="w-full h-full object-cover">
                </div>
                <div>
                    <h4 class="font-medium text-lg">Muwa Rain Cover</h4>
                    <p class="text-sm text-gray-500">Modern Accessories</p>
                </div>
            </a>
            <a href="#" class="bg-white p-6 rounded-[20px] flex items-center space-x-4 hover:shadow-lg transition-shadow duration-300">
                <div class="w-32 h-32">
                    <img src="assets/muwa-seat-liner.png" alt="Muwa Seat Liner" class="w-full h-full object-cover">
                </div>
                <div>
                    <h4 class="font-medium text-lg">Muwa Seat Liner</h4>
                    <p class="text-sm text-gray-500">Modern Accessories</p>
                </div>
            </a>
        </div>
    </div>

    <script>

        const accessoriesMenu = document.getElementById("accessories-menu");
        const accessoriesBox = document.getElementById("accessories-box");
        const accessoriesArrowIcon = accessoriesMenu.querySelector("svg path");

        const supportMenu = document.getElementById("support-menu");
        const strollerMenu = document.getElementById("stroller-menu");

        const submenuBox = document.getElementById("submenu-box");
        const strollerBox = document.getElementById("stroller-box");

        const supportArrowIcon = supportMenu.querySelector("svg path");
        const strollerArrowIcon = strollerMenu.querySelector("svg path");

        function closeAllSubmenus() {
            if (submenuBox && !submenuBox.classList.contains("hidden")) {
                submenuBox.classList.add("hidden");
                supportArrowIcon.setAttribute("d", "M480-344 240-584l56-56 184 184 184-184 56 56-240 240Z");
            }
            if (strollerBox && !strollerBox.classList.contains("hidden")) {
                strollerBox.classList.add("hidden");
                strollerArrowIcon.setAttribute("d", "M480-344 240-584l56-56 184 184 184-184 56 56-240 240Z");
            }
            if (accessoriesBox && !accessoriesBox.classList.contains("hidden")) {
                accessoriesBox.classList.add("hidden");
                accessoriesArrowIcon.setAttribute("d", "M480-344 240-584l56-56 184 184 184-184 56 56-240 240Z");
            }
        }

        accessoriesMenu.addEventListener("click", function (e) {
            e.preventDefault();
        
            if (!accessoriesBox.classList.contains("hidden")) {
                accessoriesBox.classList.add("hidden");
                accessoriesArrowIcon.setAttribute("d", "M480-344 240-584l56-56 184 184 184-184 56 56-240 240Z");
            } else {
                closeAllSubmenus();
                accessoriesBox.classList.remove("hidden");
                accessoriesArrowIcon.setAttribute("d", "M480-528 296-344l-56-56 240-240 240 240-56 56-184-184Z");
            }
        });

        supportMenu.addEventListener("click", function (e) {
            e.preventDefault();
        
            if (!submenuBox.classList.contains("hidden")) {
                submenuBox.classList.add("hidden");
                supportArrowIcon.setAttribute("d", "M480-344 240-584l56-56 184 184 184-184 56 56-240 240Z");
            } else {
                closeAllSubmenus();
                submenuBox.classList.remove("hidden");
                supportArrowIcon.setAttribute("d", "M480-528 296-344l-56-56 240-240 240 240-56 56-184-184Z");
            }
        });

        strollerMenu.addEventListener("click", function () {
            if (!strollerBox.classList.contains("hidden")) {
                strollerBox.classList.add("hidden");
                strollerArrowIcon.setAttribute("d", "M480-344 240-584l56-56 184 184 184-184 56 56-240 240Z");
            } else {
                closeAllSubmenus();
                strollerBox.classList.remove("hidden");
                strollerArrowIcon.setAttribute("d", "M480-528 296-344l-56-56 240-240 240 240-56 56-184-184Z");
            }
        });

        function toggleMenu() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        }
    </script>

    <button id="scroll-to-top" class="fixed z-[999] bottom-6 right-6 bg-[#844D3E] text-white p-4 rounded-full shadow-lg hover:bg-[#6f2c1e] transition duration-300 opacity-0 pointer-events-none">
        <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" fill="currentColor" viewBox="0 0 24 24">
            <path d="M12 2L4 10h5v7h6V10h5L12 2z"/>
        </svg>
    </button>

    <script>
        const scrollToTopBtn = document.getElementById("scroll-to-top");
        
        window.onscroll = function() {
            if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                scrollToTopBtn.classList.remove("opacity-0", "pointer-events-none");  
                scrollToTopBtn.classList.add("opacity-100", "pointer-events-auto");  
            } else {
                scrollToTopBtn.classList.add("opacity-0", "pointer-events-none");     
                scrollToTopBtn.classList.remove("opacity-100", "pointer-events-auto");
            }
        };

        scrollToTopBtn.addEventListener("click", function() {
            window.scrollTo({ top: 0, behavior: "smooth" });
        });
    </script>
    
</body>
</html>