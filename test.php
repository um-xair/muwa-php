<?php
include 'header.php';
?>

<div id="removeModal" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center">
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

<?php
include 'footer.php';
?>