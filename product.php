<?php
include 'header.php';
?>

    <main class="px-10 md:px-[6%] flex flex-col items-center justify-center mt-20 mb-20">
        <div class="w-full text-center mb-10">
            <h1 class="text-4xl lg:text-6xl font-bold">
                Muwababy Horsi Stroller
            </h1>
        </div>
        <div class="w-full h-[80vh] bg-gray-200 rounded-[50px] overflow-hidden relative">
            <img 
                src="https://assets.nextchapter-ecommerce.com/Media/g8h9xbw9/97176-02913_header_web__(5).png" 
                alt="Image Description" 
                class="w-full h-full object-cover"
            />
        </div>
    </main>
    
    <section class="px-10 md:px-[6%] py-20">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
            <div class="w-full flex flex-col items-center">
                <div class="w-full flex justify-center mb-6">
                    <img id="product-image" src="assets/sq.JPG" class="w-[100%] sm:w-[500px]" alt="Product Image">
                </div>
                <div class="flex space-x-2 w-[100%] sm:w-[500px] h-[150px] justify-between">
                    <div class="w-[45%] sm:w-[150px] h-full bg-[#CFCED4] cursor-pointer" onclick="changeImage('https://assets.nextchapter-ecommerce.com/Media/g8h9xbw9/66272-49667_Inlfuencer-sand-family-670x350px.jpg')">
                        <img src="https://assets.nextchapter-ecommerce.com/Media/g8h9xbw9/66272-49667_Inlfuencer-sand-family-670x350px.jpg" class="w-full h-full object-cover" alt="White">
                    </div>
                    <div class="w-[45%] sm:w-[150px] h-full bg-[#5A5862] cursor-pointer" onclick="changeImage('https://assets.nextchapter-ecommerce.com/Media/g8h9xbw9/66311-87814_gezin-bij-zee-450x300.jpg')">
                        <img src="https://assets.nextchapter-ecommerce.com/Media/g8h9xbw9/66311-87814_gezin-bij-zee-450x300.jpg" class="w-full h-full object-cover" alt="Black">
                    </div>
                    <div class="w-[45%] sm:w-[150px] h-full bg-[#967970] cursor-pointer" onclick="changeImage('https://assets.nextchapter-ecommerce.com/Media/g8h9xbw9/66207-11634_inluencer-met-accessoires-450x300.jpg')">
                        <img src="https://assets.nextchapter-ecommerce.com/Media/g8h9xbw9/66207-11634_inluencer-met-accessoires-450x300.jpg" class="w-full h-full object-cover" alt="Brown">
                    </div>
                </div>
            </div>
            <div class="w-full">
                <h2 class="text-2xl sm:text-3xl md:text-5xl font-bold mb-4">Muwababy Horsi Stroller</h2>
                <div class="flex items-center mb-6">
                    <span class="text-lg sm:text-xl line-through text-gray-500 mr-4">RM1399</span>
                    <span class="text-3xl sm:text-4xl font-bold">RM799</span>
                </div>
                <div class="flex space-x-4 sm:space-x-6 mb-6">
                    <div class="w-[40px] h-[40px] sm:w-[50px] sm:h-[50px] bg-[#CFCED4] rounded-full cursor-pointer" onclick="changeImage('assets/muwa-white-sq.png')"></div>
                    <div class="w-[40px] h-[40px] sm:w-[50px] sm:h-[50px] bg-[#5A5862] rounded-full cursor-pointer" onclick="changeImage('assets/muwa-black-sq.png')"></div>
                    <div class="w-[40px] h-[40px] sm:w-[50px] sm:h-[50px] bg-[#967970] rounded-full cursor-pointer" onclick="changeImage('assets/muwa-brown-sq.png')"></div>
                </div>
                <div class="flex items-center space-x-4 mt-6 sm:mt-10">
                    <div class="flex items-center border-2 rounded-[20px] border-[#844D3E]">
                        <button id="decrease" class="px-4 py-2 text-xl">-</button>
                        <input id="quantity" type="number" value="1" class="w-10 text-center py-2 md:py-5 border-none" readonly />
                        <button id="increase" class="px-4 py-2 text-xl">+</button>
                    </div>
                    <button class="bg-[#844D3E] text-white px-6 py-3 md:py-5 w-full sm:w-60 md:w-72 rounded-[20px] text-lg font-semibold">Add to Cart</button>
                </div>
            </div>
        </div>
        
        <script>
            function changeImage(imageSrc) {
                const productImage = document.getElementById('product-image');
                productImage.src = imageSrc;
            }
        </script>
    </section>
    
    <script>
        function changeImage(imageSrc) {
            const productImage = document.querySelector('#product-image');
            productImage.classList.add("opacity-0");
            setTimeout(() => {
                productImage.src = imageSrc;
                productImage.classList.remove("opacity-0");
            }, 300);
        }
        const decreaseButton = document.getElementById('decrease');
        const increaseButton = document.getElementById('increase');
        const quantityInput = document.getElementById('quantity');
        decreaseButton.addEventListener('click', () => {
            let currentQuantity = parseInt(quantityInput.value);
            if (currentQuantity > 1) {
                quantityInput.value = currentQuantity - 1;
            }
        });
        increaseButton.addEventListener('click', () => {
            let currentQuantity = parseInt(quantityInput.value);
            quantityInput.value = currentQuantity + 1;
        });
    </script>

    <section class="px-10 md:px-[6%] flex items-center justify-center min-h-screen">
        <div class="w-full mt-40">
            <div class="grid grid-cols-1 md:grid-cols-5 gap-6 md:gap-10 items-center mb-16 md:mb-20 lg:mb-40 w-[90%] md:w-[85%] mx-auto">
                <div class="md:col-span-2 flex justify-center">
                    <div class="bg-[#EEE9E2] w-full h-[400px] sm:h-[350px] md:h-[400px] p-6 md:p-8 rounded-[30px] flex flex-col justify-center items-center text-center">
                        <div class="flex justify-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" height="200px" sm:height="175px" md:height="200px" viewBox="0 -960 960 960" width="200px" sm:width="175px" md:width="200px" fill="#844D3E">
                                <path d="m270-120-10-88 114-314q15 14 32.5 23.5T444-484L334-182l-64 62Zm420 0-64-62-110-302q20-5 37.5-14.5T586-522l114 314-10 88ZM480-520q-50 0-85-35t-35-85q0-39 22.5-69.5T440-752v-88h80v88q35 12 57.5 42.5T600-640q0 50-35 85t-85 35Zm0-80q17 0 28.5-11.5T520-640q0-17-11.5-28.5T480-680q-17 0-28.5 11.5T440-640q0 17 11.5 28.5T480-600Z"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold mb-2 text-[#844D3E]">Innovative Designs</h3>
                        <p class="text-sm text-[#844D3E]">
                            Each product is crafted with smart features to simplify parenting tasks.
                        </p>
                    </div>
                </div>
                <div class="md:col-span-3">
                    <h3 class="text-2xl md:text-5xl font-bold mb-4">Innovative Designs</h3>
                    <p class="text-sm text-justify">
                        Each product is thoughtfully crafted with a range of smart features designed to simplify the everyday tasks of parenting. From intuitive folding mechanisms to easy-adjust harness systems, our products are built to make your life easier and more efficient, allowing you to focus more on enjoying time with your baby.
                    </p>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-5 md:grid-cols-reverse gap-6 md:gap-10 items-center mb-16 md:mb-20 lg:mb-40 w-[90%] md:w-[85%] mx-auto">
                <div class="md:col-span-3 order-2 md:order-1">
                    <h3 class="text-2xl md:text-5xl font-bold mb-4">High-Quality</h3>
                    <p class="text-sm text-justify">
                        Built to last, our products are made with premium materials that stand up to the rigors of daily use. Every component is chosen for its durability and strength, ensuring that your investment in our products will serve you well throughout your parenting journey and beyond.
                    </p>
                </div>
                <div class="md:col-span-2 flex justify-center order-1 md:order-2">
                    <div class="bg-[#EEE9E2] w-full h-[400px] sm:h-[350px] md:h-[400px] p-6 md:p-8 rounded-[30px] flex flex-col justify-center items-center text-center">
                        <div class="flex justify-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" height="200px" viewBox="0 -960 960 960" width="200px" fill="#844D3E">
                                <path d="M480-120 80-600l120-240h560l120 240-400 480Zm-95-520h190l-60-120h-70l-60 120Zm55 347v-267H218l222 267Zm80 0 222-267H520v267Zm144-347h106l-60-120H604l60 120Zm-474 0h106l60-120H250l-60 120Z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold mb-2 text-[#844D3E]">High-Quality</h3>
                        <p class="text-sm text-[#844D3E]">
                            Built to last with premium materials.
                        </p>
                    </div>
                </div>
            </div>            
            <div class="grid grid-cols-1 md:grid-cols-5 gap-6 md:gap-10 items-center mb-16 md:mb-20 lg:mb-40 w-[90%] md:w-[85%] mx-auto">
                <div class="md:col-span-2 flex justify-center">
                    <div class="bg-[#EEE9E2] w-full h-[400px] sm:h-[350px] md:h-[400px] p-6 md:p-8 rounded-[30px] flex flex-col justify-center items-center text-center">
                        <div class="flex justify-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" height="200px" sm:height="175px" md:height="200px" viewBox="0 -960 960 960" width="200px" sm:width="175px" md:width="200px" fill="#844D3E">
                                <path d="M480-80q-139-35-229.5-159.5T160-516v-244l320-120 320 120v244q0 152-90.5 276.5T480-80Zm0-84q97-30 162-118.5T718-480H480v-315l-240 90v207q0 7 2 18h238v316Z"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold mb-2 text-[#844D3E]">Enhanced Safety</h3>
                        <p class="text-sm text-[#844D3E]">
                            Meets and exceeds safety standards for your peace of mind.
                        </p>
                    </div>
                </div>
                <div class="md:col-span-3">
                    <h3 class="text-2xl md:text-5xl font-bold mb-4">Enhanced Safety</h3>
                    <p class="text-sm text-justify">
                        Safety is our top priority, and all our products meet and exceed rigorous safety standards to give you peace of mind. Every stroller and piece of baby gear undergoes strict testing to ensure it can protect your little one in any situation.
                    </p>
                </div>
            </div>
        </div>
    </section>
    
    <section class="px-10 md:px-[6%] flex flex-col items-center justify-center mt-20 mb-20">
        <div class="w-[80%] h-[80vh] bg-gray-200 rounded-[50px] overflow-hidden relative">
            <img 
                src="https://assets.nextchapter-ecommerce.com/Media/g8h9xbw9/97176-02913_header_web__(5).png" 
                alt="Image Description" 
                class="w-full h-full object-cover"
            />
        </div>
    </section>

<?php
include 'footer.php';
?>