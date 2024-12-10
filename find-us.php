<?php
include 'header.php';
?>

    <main class="px-10 md:px-[6%] flex items-center justify-center min-h-screen">
        <div class="text-center space-y-6">
            <p class="text-sm uppercase tracking-wide">Find Us</p>
            <h1 class="text-4xl lg:text-8xl md:text-6xl font-bold">Muwa Store Locator</h1>
            <p class="w-full mx-auto text-sm text-justify lg:text-center">
                The Muwa Horsi stroller is designed with both style and functionality in mind. It features a sleek, modern design that ensures you and your baby look chic while on the go. The stroller is built with high-quality, durable materials that provide long-lasting use.
            </p>
        </div>
    </main>

    <section class="px-10 md:px-[6%] py-20">    
        <div class="dropdown-container mb-10 text-center">
            <div class="flex items-center justify-center space-x-4">
                <input type="text" id="storeSearch" class="store-search py-2 px-6 rounded border border-gray-300 w-3/4" placeholder="Search by Store Address" oninput="searchStores()">
                
                <select id="stateDropdown" class="select-state py-2 px-6 rounded border border-gray-300 w-3/4" onchange="updateDistricts()">
                    <option value="">Select State</option>
                    <option value="johor">JOHOR</option>
                    <option value="kuala_lumpur">KUALA LUMPUR</option>
                </select>
                
                <select id="districtDropdown" class="select-district py-2 px-6 rounded border border-gray-300 w-3/4" onchange="showStores()">
                    <option value="">Select District</option>
                </select>
        
                <button id="clearButton" class="clear-button py-2 px-6 bg-[#844D3E] text-white rounded-[10px] w-3/4" onclick="clearSelections()">Clear</button>
            </div>
        </div>

        <div id="map-container" class="relative">
            <div id="map" class="w-full h-[80vh] rounded-md mb-10"></div>
            <div id="storeContainer" class="store-container p-6 bg-white border-2 border-[#844D3E] rounded-[20px]">
                <div class="heading-container">
                    <h2 class="text-xl font-bold">Available Stores</h2>
                </div>
                <div class="mt-10" id="storeList"></div>
            </div>
        </div>
    
    </section>
    
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyANfUHc27kQ5YhPOxLQO9AKG8m-OmvV7Nk&callback=initMap" async defer></script>
    <script src="script.js"></script>
    
    <style>
        .store-detail {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            padding: 20px;
            border-radius: 20px;
            background-color: #F6EDE4;
        }

        .store-photo {
            width: 200px;
            height: 200px;
            border-radius: 20px;
            margin-right: 15px;
        }

        .store-info {
            font-size: 14px;
            color: #333;
        }

        .store-info strong {
            font-size: 18px;
            color: #000;
            font-weight: bold;
        }

        .store-address {
            font-size: 14px;
            color: #555;
            margin-bottom: 10px;
            display: block; 
        }

        .getDirectionsButton {
            background-color: #844D3E;
            color: white;
            padding: 8px 15px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-size: 12px;
        }
    </style>

<?php
include 'footer.php';
?>