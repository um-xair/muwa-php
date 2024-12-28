<?php
include 'header.php';
?>

    <main class="px-10 md:px-[6%] flex items-center justify-center min-h-screen">
        <div class="text-center space-y-6">
            <p class="text-sm uppercase tracking-wide">what are you waiting for?</p>
            <h1 class="text-4xl lg:text-8xl md:text-6xl font-bold">Shop Today</h1>
            <p class="w-full mx-auto text-sm text-justify lg:text-center">
                Explore our curated collection and find the perfect products for you and your family. Shop now to take advantage of our latest offerings and exclusive deals. Your next favorite item is just a click away!
            </p>
        </div>
    </main>

    <section class="px-10 md:px-[6%] flex flex-col items-center justify-center mt-20 mb-20">
        <div class="w-full h-[80vh] bg-gray-200 rounded-[50px] overflow-hidden relative">
            <img 
                src="https://assets.nextchapter-ecommerce.com/Media/g8h9xbw9/97176-02913_header_web__(5).png" 
                alt="Image Description" 
                class="w-full h-full object-cover"
            />
        </div>
    </section>

    <section class="px-10 md:px-[6%] py-20 min-h-screen">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-10">
            <!-- Product 1 -->
            <div class="flex flex-col items-center p-6">
                <img src="assets/Black.jpg" alt="Product 1" class="w-full h-auto object-cover rounded-md mb-4">
                <div class="w-full flex flex-col items-start">
                    <h2 class="text-xl font-bold mb-2">Muwababy Horsi Stroller</h2>
                    <div class="text-left">
                        <span class="text-gray-500 line-through text-sm">RM1399</span>
                        <span class="text-3xl font-bold ml-2">RM799</span>
                    </div>
                    <a href="product.php" class="mt-4 bg-[#844D3E] text-center text-white py-3 px-6 rounded-full text-lg w-3/4">
                        Buy Now
                    </a>
                </div>
            </div>
    
            <!-- Product 2 -->
            <div class="flex flex-col items-center p-6">
                <img src="assets/Brown.jpg" alt="Product 2" class="w-full h-auto object-cover rounded-md mb-4">
                <div class="w-full flex flex-col items-start">
                    <h2 class="text-xl font-bold mb-2">Muwababy Horsi Stroller</h2>
                    <div class="text-left">
                        <span class="text-gray-500 line-through text-sm">RM1399</span>
                        <span class="text-3xl font-bold ml-2">RM799</span>
                    </div>
                    <a href="product.php" class="mt-4 bg-[#844D3E] text-center text-white py-3 px-6 rounded-full text-lg w-3/4">
                        Buy Now
                    </a>
                </div>
            </div>
    
            <!-- Product 3 -->
            <div class="flex flex-col items-center p-6">
                <img src="assets/Silver.jpg" alt="Product 3" class="w-full h-auto object-cover rounded-md mb-4">
                <div class="w-full flex flex-col items-start">
                    <h2 class="text-xl font-bold mb-2">Muwababy Horsi Stroller</h2>
                    <div class="text-left">
                        <span class="text-gray-500 line-through text-sm">RM1399</span>
                        <span class="text-3xl font-bold ml-2">RM799</span>
                    </div>
                    <a href="product.php" class="mt-4 bg-[#844D3E] text-center text-white py-3 px-6 rounded-full text-lg w-3/4">
                        Buy Now
                    </a>
                </div>
            </div>
        </div>
    </section>

<?php
include 'footer.php';
?>