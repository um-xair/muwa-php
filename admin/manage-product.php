<?php include 'sidebar.php'; ?>

        <div class="mt-8">
            <button id="add-product-btn" class="bg-[#614EF7] w-60 text-white px-6 py-3 rounded-[20px]" onclick="window.location.href='add-product.php'">
                Add New Product
            </button>
        </div>

        <div class="bg-white rounded-[30px] p-8 mt-8">
            <table class="min-w-full table-auto">
                <thead>
                    <tr class="border-b border-gray-300">
                        <th class="py-3 px-6 text-left">#</th>
                        <th class="py-3 px-6 text-left">Image</th>
                        <th class="py-3 px-6 text-left">Name</th>
                        <th class="py-3 px-6 text-left">SKU</th>
                        <th class="py-3 px-6 text-left">Stock</th>
                        <th class="py-3 px-6 text-left">Price</th>
                        <th class="py-3 px-6 text-left">Category</th>
                        <th class="py-3 px-6 text-left">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b border-gray-300">
                        <td class="py-3 px-6">1</td>
                        <td class="py-3 px-6">
                            <img src="product-image.jpg" alt="Product" class="w-16 h-16 object-cover rounded-[10px]">
                        </td>
                        <td class="py-3 px-6">Product Name</td>
                        <td class="py-3 px-6">12345</td>
                        <td class="py-3 px-6">In Stock</td>
                        <td class="py-3 px-6">
                            <div class="text-sm text-gray-500 line-through">50.00</div>
                            <div class="text-">45.00</div>
                        </td>
                        <td class="py-3 px-6">Category Name</td>
                        <td class="py-3 px-6">
                            <button class="bg-blue-600 text-white px-4 py-2 rounded-[7px] mr-2 edit-product-btn" data-product-id="1">Edit</button>
                            <button class="bg-green-600 text-white px-4 py-2 rounded-[7px] mr-2 view-product-btn" data-product-id="1">View</button>
                            <button class="bg-red-600 text-white px-4 py-2 rounded-[7px] delete-product-btn" data-product-id="1">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    
        <div id="edit-product-modal" class="fixed inset-0 bg-gray-500 bg-opacity-50 flex items-center justify-center hidden">
            <div class="bg-white p-8 rounded-[30px] w-[80%] h-[80%] max-h-[90vh] overflow-y-auto relative">
                <button type="button" id="close-edit-product-modal" class="absolute top-4 right-4 bg-red-600 text-white rounded-full px-2">
                    <i class="fas fa-times text-xl"></i>
                </button>
                <h2 class="text-xl font-semibold mb-4">Edit Product</h2>
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
                            <input type="text" id="variation-name" name="variation-name" required class="mt-1 block w-full p-3 border border-gray-300 rounded-[10px] focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <div class="w-full md:w-1/2 px-2 mb-4">
                            <label for="variation-img" class="block text-sm font-medium text-gray-700">Variation Image</label>
                            <input type="file" id="variation-img" name="variation-img" class="mt-1 block w-full p-3 border border-gray-300 rounded-[10px] focus:ring-blue-500 focus:border-blue-500">
                        </div>
                    </div>

                    <div class="mt-6 text-right">
                        <button type="submit" class="bg-blue-500 text-white py-2 px-6 rounded-[10px] hover:bg-blue-600">Save Product</button>
                    </div>
                </form>
            </div>
        </div>

        <script>
            const editButtons = document.querySelectorAll(".edit-product-btn");

            editButtons.forEach(button => {
            button.addEventListener("click", (e) => {
                const row = e.target.closest("tr");
                const productId = button.getAttribute("data-product-id");
                const imageSrc = row.children[1].querySelector("img").src; 
                const productName = row.children[2].textContent.trim();
                const sku = row.children[3].textContent.trim();
                const stock = row.children[4].textContent.trim();
                const originalPrice = row.children[5].querySelector(".line-through").textContent.trim();
                const bestPrice = row.children[5].querySelector(".text-").textContent.trim();
                const category = row.children[6].textContent.trim(); 

                document.getElementById("product-name").value = productName;
                document.getElementById("sku").value = sku;
                document.getElementById("stock").value = stock === "In Stock" ? "in-stock" : "out-of-stock";
                document.getElementById("original-price").value = originalPrice.replace("RM", ""); 
                document.getElementById("best-price").value = bestPrice.replace("RM", "");
                document.getElementById("category").value = category;

                const productImgPreview = document.getElementById("file-input-preview");
                if (productImgPreview) {
                    productImgPreview.src = imageSrc;
                }
            
                document.getElementById("edit-product-modal").classList.remove("hidden");
            });
        });

            document.getElementById("close-edit-product-modal").addEventListener("click", () => {
            document.getElementById("edit-product-modal").classList.add("hidden");
        });
        </script>

        <div id="view-product-modal" class="fixed inset-0 bg-gray-500 bg-opacity-50 flex items-center justify-center hidden">
            <div class="relative bg-white p-8 rounded-[30px] w-[50%] h-[80%] max-h-[60vh] overflow-y-auto">
                <h2 class="text-xl font-semibold mb-4">Product Details</h2>
                <div id="view-product-details"></div>
                <button 
                    type="button" 
                    id="close-view-modal" 
                    class="absolute top-4 right-4 bg-red-600 text-white rounded-full w-8 h-8 flex items-center justify-center"
                    aria-label="Close Modal">
                    <i class="fas fa-times text-sm"></i>
                </button>
            </div>
        </div>

        <script>
            const viewButtons = document.querySelectorAll(".view-product-btn");
            viewButtons.forEach(button => {
            button.addEventListener("click", (e) => {
                const row = e.target.closest("tr");

                const imageSrc = row.children[1].querySelector("img").src;
                const productName = row.children[2].textContent.trim();
                const sku = row.children[3].textContent.trim(); 
                const stock = row.children[4].textContent.trim();
                const originalPrice = row.children[5].querySelector(".line-through").textContent.trim(); 
                const bestPrice = row.children[5].querySelector(".text-").textContent.trim(); 
                const category = row.children[6].textContent.trim();

                const productDetailsHTML = `
                    <div class="flex flex-col">
                        <img src="${imageSrc}" alt="${productName}" class="w-40 h-40 object-cover mb-4 rounded-[10px]">
                        <p><strong>Product Name:</strong> ${productName}</p>
                        <p><strong>SKU:</strong> ${sku}</p>
                        <p><strong>Stock:</strong> ${stock}</p>
                        <p><strong>Original Price:</strong> RM ${originalPrice}</p>
                        <p><strong>Best Price:</strong> RM ${bestPrice}</p>
                        <p><strong>Category:</strong> ${category}</p>
                    </div>
                `;
                
            document.getElementById("view-product-details").innerHTML = productDetailsHTML;
            document.getElementById("view-product-modal").classList.remove("hidden");
            });
        });
            document.getElementById("close-view-modal").addEventListener("click", () => {
            document.getElementById("view-product-modal").classList.add("hidden");
        });

        </script>

        <div id="delete-product-modal" class="hidden fixed inset-0 flex justify-center items-center bg-black bg-opacity-50">
            <div class="bg-white rounded-[30px] p-8 w-1/3">
                <h2 class="text-xl font-bold mb-4">Are you sure you want to delete this product?</h2>
                <div class="flex justify-end mt-4">
                    <button type="button" id="close-delete-product-modal" class="bg-gray-500 text-white px-6 py-2 rounded-[15px] mr-2">
                        Cancel
                    </button>
                    <button type="button" id="confirm-delete-btn" class="bg-red-600 text-white px-6 py-2 rounded-[15px]">
                        Yes, Delete
                    </button>
                </div>
            </div>
        </div>
        
        <script>
            const deleteModal = document.getElementById("delete-product-modal");
            const closeDeleteModal = document.getElementById("close-delete-product-modal");
            const confirmDeleteBtn = document.getElementById("confirm-delete-btn");
            const deleteButtons = document.querySelectorAll(".delete-product-btn");
            deleteButtons.forEach(button => {
                button.addEventListener("click", (e) => {
                    const row = e.target.closest("tr");
                    deleteModal.classList.remove("hidden");
                    confirmDeleteBtn.onclick = () => {
                        row.remove();
                        deleteModal.classList.add("hidden");
                    };
                });
            });
            closeDeleteModal.addEventListener("click", () => {
                deleteModal.classList.add("hidden");
            });
        </script>
    </div>