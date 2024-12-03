<?php include 'header.php'; ?>

<main class="px-10 md:px-[6%] flex items-center justify-center h-60">
    <div class="text-center space-y-6">
        <h1 class="text-4xl lg:text-8xl md:text-6xl font-bold">SHOPPING CART</h1>
    </div>
</main>

<section class="px-10 md:px-[6%] mt-20 mb-20">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <div class="lg:col-span-2">

            <!-- Product 1 -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 p-6 border-t-2 border-b-2 border-[#844D3E] mb-10 relative product" id="product-1">
                <button class="absolute top-2 right-2 text-gray-500 hover:text-gray-700 remove-product">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
                <div class="space-y-4">
                    <h2 class="text-4xl font-bold">Muwababy Horsi Stroller</h2>
                    <div class="text-black">
                        <span class="text-lg line-through text-gray-500 mr-4">Original Price: RM1399</span>
                        <span class="text-xl font-bold">Best Price: RM799</span>
                    </div>
                    <div class="space-y-4 mt-4">
                        <div>
                            <label for="variation" class="block text-sm font-medium text-gray-700">Choose Color</label>
                            <select id="variation" name="variation" class="mt-1 block w-80 h-10 border-2 border-[#844D3E]">
                                <option>Red</option>
                                <option>Blue</option>
                                <option>Green</option>
                            </select>
                        </div>
                        <div class="space-y-4">
                            <label for="quantity" class="block text-sm font-medium text-gray-700">Quantity</label>
                            <div class="flex items-center w-40 border-2 border-[#844D3E]">
                                <button type="button" class="w-10 h-10 bg-gray-200 text-gray-700 rounded-l-md flex items-center justify-center decrease">-</button>
                                <input type="number" id="quantity" name="quantity" min="1" value="1" class="text-center w-20 h-10 border-t-0 border-b-0 focus:ring-0 focus:border-0">
                                <button type="button" class="w-10 h-10 bg-gray-200 text-gray-700 rounded-r-md flex items-center justify-center increase">+</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center items-center">
                    <img src="assets/muwa-black-sq.png" alt="Muwababy Horsi Stroller" class="w-80 h-80">
                </div>
            </div>

            <!-- Product 2 -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 p-6 border-t-2 border-b-2 border-[#844D3E] mb-10 relative product" id="product-2">
                <button class="absolute top-2 right-2 text-gray-500 hover:text-gray-700 remove-product">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
                <div class="space-y-4">
                    <h2 class="text-4xl font-bold">Muwababy Horsi Stroller</h2>
                    <div class="text-black">
                        <span class="text-lg line-through text-gray-500 mr-4">Original Price: RM1399</span>
                        <span class="text-xl font-bold">Best Price: RM799</span>
                    </div>
                    <div class="space-y-4 mt-4">
                        <div>
                            <label for="variation" class="block text-sm font-medium text-gray-700">Choose Color</label>
                            <select id="variation" name="variation" class="mt-1 block w-80 h-10 border-2 border-[#844D3E]">
                                <option>Red</option>
                                <option>Blue</option>
                                <option>Green</option>
                            </select>
                        </div>
                        <div class="space-y-4">
                            <label for="quantity" class="block text-sm font-medium text-gray-700">Quantity</label>
                            <div class="flex items-center w-40 border-2 border-[#844D3E]">
                                <button type="button" class="w-10 h-10 bg-gray-200 text-gray-700 rounded-l-md flex items-center justify-center decrease">-</button>
                                <input type="number" id="quantity" name="quantity" min="1" value="1" class="text-center w-20 h-10 border-t-0 border-b-0 focus:ring-0 focus:border-0">
                                <button type="button" class="w-10 h-10 bg-gray-200 text-gray-700 rounded-r-md flex items-center justify-center increase">+</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center items-center">
                    <img src="assets/muwa-black-sq.png" alt="Muwababy Horsi Stroller" class="w-80 h-80">
                </div>
            </div>
        </div>

        <!-- Order Summary -->
        <div class="bg-[#F6EDE4] p-6 space-y-6 flex flex-col justify-between h-full">
            <h3 class="text-4xl font-bold text-center">Order Summary</h3>
            <div class="space-y-4">
                <p class="flex justify-between">
                    <span>Subtotal:</span>
                    <span id="subtotal">RM799.00</span>
                </p>
                <p class="flex justify-between">
                    <span>Postage:</span>
                    <span>RM10.00</span>
                </p>
                <div class="flex justify-between font-bold border-t-2 border-b-2 border-[#844D3E] pt-6 pb-6">
                    <span>Total:</span>
                    <span id="total">RM859.00</span>
                </div>
            </div>

            <div class="space-y-4">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 items-center">
                    <div class="space-y-2 lg:col-span-1">
                        <p class="text-lg font-semibold">Alysa</p>
                        <p class="text-sm">01162260866</p>
                        <p class="text-sm">JALAN MESRA 2, TAMAN MESRA</p>
                        <p class="text-sm">85400 SEGAMAT JOHOR</p>
                    </div>
                    <div class="lg:col-span-1 flex justify-end">
                        <button class="bg-[#844D3E] text-white px-4 py-2 rounded-md">Edit</button>
                    </div>
                </div>
            </div>

            <div class="space-y-4">
                <h4 class="text-2xl font-bold">Payment Method</h4>
                <div class="space-y-2">
                    <select id="paymentMethod" class="w-full h-10 border-2 border-[#844D3E] p-2">
                        <option>Credit Card</option>
                        <option>Debit Card</option>
                        <option>PayPal</option>
                        <option>Bank Transfer</option>
                    </select>
                </div>
            </div>

            <button class="mt-auto w-full bg-[#844D3E] text-white py-3 px-6 rounded-[30px]">
                Proceed to Checkout
            </button>
        </div>
    </div>

    <div id="removeModal" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center hidden">
    <div class="bg-white p-6 rounded-[20px] relative w-80 h-60 flex flex-col justify-center items-center">
        <!-- Close Button with Red Circle Background -->
        <button id="closeModal" class="absolute top-2 right-2 bg-red-500 text-white rounded-full w-8 h-8 flex items-center justify-center hover:bg-red-600">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
        
        <!-- Modal Content: Text and Yes Button centered -->
        <h3 class="text-xl font-bold mb-4 text-center mt-6">Are you sure you want to remove this product?</h3>
        <button id="confirmRemove" class="bg-red-500 text-white px-6 py-3 rounded-[30px] w-full">Yes</button>
    </div>
</div>

</section>

<?php include 'footer.php'; ?>


<script>
document.querySelectorAll('.increase').forEach(function(button) {
    button.addEventListener('click', function() {
        let quantity = this.closest('.product').querySelector('input[type="number"]');
        quantity.value = parseInt(quantity.value) + 1;
        updateTotal();
    });
});

document.querySelectorAll('.decrease').forEach(function(button) {
    button.addEventListener('click', function() {
        let quantity = this.closest('.product').querySelector('input[type="number"]');
        if (quantity.value > 1) {
            quantity.value = parseInt(quantity.value) - 1;
            updateTotal();
        }
    });
});

document.querySelectorAll('.increase').forEach(function(button) {
    button.addEventListener('click', function() {
        let quantity = this.closest('.product').querySelector('input[type="number"]');
        quantity.value = parseInt(quantity.value) + 1;
        updateTotal();
    });
});

document.querySelectorAll('.decrease').forEach(function(button) {
    button.addEventListener('click', function() {
        let quantity = this.closest('.product').querySelector('input[type="number"]');
        if (quantity.value > 1) {
            quantity.value = parseInt(quantity.value) - 1;
            updateTotal();
        }
    });
});

const removeBtns = document.querySelectorAll('.remove-product');
const removeModal = document.getElementById('removeModal');
const closeModal = document.getElementById('closeModal');
const confirmRemove = document.getElementById('confirmRemove');
let productToRemove = null;

// Open the modal when a "remove" button is clicked
removeBtns.forEach(btn => {
    btn.addEventListener('click', (e) => {
        const productId = e.target.closest('.product').id;
        productToRemove = document.getElementById(productId);
        removeModal.classList.remove('hidden');
    });
});

// Close the modal when "X" button is clicked
closeModal.addEventListener('click', () => {
    removeModal.classList.add('hidden');
});

// Remove product and close modal when "Yes" button is clicked
confirmRemove.addEventListener('click', () => {
    if (productToRemove) {
        productToRemove.remove();
        updateTotal();  // Update total after removing the product
    }
    removeModal.classList.add('hidden');
});

// Update total function to reflect changes in quantities or product removal
function updateTotal() {
    const pricePerItem = 799;
    const postage = 10;

    let subtotal = 0;
    document.querySelectorAll('.product').forEach(function(product) {
        const quantity = parseInt(product.querySelector('input[type="number"]').value);
        subtotal += pricePerItem * quantity;
    });

    const total = subtotal + postage;

    document.getElementById('subtotal').textContent = 'RM' + subtotal.toFixed(2);
    document.getElementById('total').textContent = 'RM' + total.toFixed(2);
}

</script>
