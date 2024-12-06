<?php include 'sidebar.php'; ?>

        <div class="bg-white rounded-[30px] p-8 mt-8">
            <h2 class="text-2xl font-bold mb-6">Add New Product</h2>
            <form id="add-product-form" action="add-product.php" method="POST" enctype="multipart/form-data" class="space-y-6">
                <div class="w-full grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="w-full px-2 mb-4">
                        <label for="product-img" class="block text-sm font-medium text-gray-700">Product Image</label>
                        <label for="file-input" class="mt-2 w-full border-2 border-dashed border-gray-300 p-4 rounded-[20px] flex flex-col items-center justify-center mb-4 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#263D5F">
                                <path d="M480-260q75 0 127.5-52.5T660-440q0-75-52.5-127.5T480-620q-75 0-127.5 52.5T300-440q0 75 52.5 127.5T480-260Zm0-80q-42 0-71-29t-29-71q0-42 29-71t71-29q42 0 71 29t29 71q0 42-29 71t-71 29ZM160-120q-33 0-56.5-23.5T80-200v-480q0-33 23.5-56.5T160-760h126l74-80h240l74 80h126q33 0 56.5 23.5T880-680v480q0 33-23.5 56.5T800-120H160Zm0-80h640v-480H638l-73-80H395l-73 80H160v480Zm320-240Z"/>
                            </svg>
                            <span class="text-[#263D5F] text-sm">Upload New Image Here</span>
                            <input type="file" id="file-input" name="product-img" class="hidden" required>
                        </label>
                    </div>
                    <div class="w-full px-2 mb-4">
                        <label for="additional-imgs" class="block text-sm font-medium text-gray-700">Additional Images</label>
                        <label for="additional-imgs-input" class="mt-2 w-full border-2 border-dashed border-gray-300 p-4 rounded-[20px] flex flex-col items-center justify-center mb-4 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#263D5F">
                                <path d="M480-260q75 0 127.5-52.5T660-440q0-75-52.5-127.5T480-620q-75 0-127.5 52.5T300-440q0 75 52.5 127.5T480-260Zm0-80q-42 0-71-29t-29-71q0-42 29-71t71-29q42 0 71 29t29 71q0 42-29 71t-71 29ZM160-120q-33 0-56.5-23.5T80-200v-480q0-33 23.5-56.5T160-760h126l74-80h240l74 80h126q33 0 56.5 23.5T880-680v480q0 33-23.5 56.5T800-120H160Zm0-80h640v-480H638l-73-80H395l-73 80H160v480Zm320-240Z"/>
                            </svg>
                            <span class="text-[#263D5F] text-sm">Upload Multiple Images Here</span>
                            <input type="file" id="additional-imgs-input" name="additional-imgs[]" class="hidden" multiple>
                        </label>
                    </div>
                </div>
                <div class="flex flex-wrap -mx-2">
                    <div class="w-full md:w-1/2 px-2 mb-4">
                        <label for="product-name" class="block text-sm font-medium text-gray-700">Product Name</label>
                        <input type="text" id="product-name" name="product-name" required class="mt-1 block w-full p-3 border border-gray-300 rounded-[10px] focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <div class="w-full md:w-1/2 px-2 mb-4">
                        <label for="sku" class="block text-sm font-medium text-gray-700">SKU</label>
                        <input type="text" id="sku" name="sku" required class="mt-1 block w-full p-3 border border-gray-300 rounded-[10px] focus:ring-blue-500 focus:border-blue-500">
                    </div>
                </div>
                <div class="flex flex-wrap -mx-2">
                    <div class="w-full px-2 mb-4">
                        <label for="short-desc" class="block text-sm font-medium text-gray-700">Short Description</label>
                        <textarea id="short-desc" name="short-desc" required class="mt-1 block w-full p-3 border border-gray-300 rounded-[10px] focus:ring-blue-500 focus:border-blue-500"></textarea>
                    </div>
                </div>
                <div class="flex flex-wrap -mx-2">
                    <div class="w-full md:w-1/2 px-2 mb-4">
                        <label for="category" class="block text-sm font-medium text-gray-700">Category</label>
                        <select id="category" name="category" required class="mt-1 block w-full p-3 border border-gray-300 rounded-[10px] focus:ring-blue-500 focus:border-blue-500">
                            <option value="stroller">Stroller</option>
                            <option value="car-seat">Car Seat</option>
                            <option value="diaper-bag">Diaper Bag</option>
                            <option value="baby-clothes">Baby Clothes</option>
                        </select>
                    </div>
                    <div class="w-full md:w-1/2 px-2 mb-4">
                        <label for="stock" class="block text-sm font-medium text-gray-700">Stock</label>
                        <select id="stock" name="stock" required class="mt-1 block w-full p-3 border border-gray-300 rounded-[10px] focus:ring-blue-500 focus:border-blue-500">
                            <option value="in-stock">In Stock</option>
                            <option value="out-of-stock">Out of Stock</option>
                        </select>
                    </div>
                </div>
                <div class="flex flex-wrap -mx-2">
                    <div class="w-full md:w-1/2 px-2 mb-4">
                        <label for="original-price" class="block text-sm font-medium text-gray-700">Original Price</label>
                        <input type="number" id="original-price" name="original-price" required class="mt-1 block w-full p-3 border border-gray-300 rounded-[10px] focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <div class="w-full md:w-1/2 px-2 mb-4">
                        <label for="best-price" class="block text-sm font-medium text-gray-700">Best Price</label>
                        <input type="number" id="best-price" name="best-price" required class="mt-1 block w-full p-3 border border-gray-300 rounded-[10px] focus:ring-blue-500 focus:border-blue-500">
                    </div>
                </div>
                <div class="flex flex-wrap -mx-2">
                    <div class="w-full md:w-1/2 px-2 mb-4">
                        <label for="variation-name" class="block text-sm font-medium text-gray-700">Variation Name</label>
                        <input type="text" id="variation-name" name="variation-name" class="mt-1 block w-full p-3 border border-gray-300 rounded-[10px] focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <div class="w-full md:w-1/2 px-2 mb-4">
                        <label for="variation-img" class="block text-sm font-medium text-gray-700">Variation Image</label>
                        <label for="variation-img-input" class="mt-2 w-full border-2 border-dashed border-gray-300 p-4 rounded-[20px] flex flex-col items-center justify-center mb-4 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#263D5F" aria-hidden="true">
                                <path d="M480-260q75 0 127.5-52.5T660-440q0-75-52.5-127.5T480-620q-75 0-127.5 52.5T300-440q0 75 52.5 127.5T480-260Zm0-80q-42 0-71-29t-29-71q0-42 29-71t71-29q42 0 71 29t29 71q0 42-29 71t-71 29ZM160-120q-33 0-56.5-23.5T80-200v-480q0-33 23.5-56.5T160-760h126l74-80h240l74 80h126q33 0 56.5 23.5T880-680v480q0 33-23.5 56.5T800-120H160Zm0-80h640v-480H638l-73-80H395l-73 80H160v480Zm320-240Z"/>
                            </svg>
                            <span class="text-[#263D5F] text-sm">Upload Image Here</span>
                            <input type="file" id="variation-img-input" name="variation-img" class="hidden">
                        </label>
                    </div>
                </div>
                <div class="w-full px-2">
                    <button type="submit" class="bg-blue-500 text-white px-6 py-3 rounded-[10px] w-full">Add Product</button>
                </div>
            </form>
        </div>
    </div>