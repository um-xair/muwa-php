<?php include 'sidebar.php'; ?>

        <div class="mb-4 mt-8 flex items-center">
            <input type="text" id="search-input" class="px-4 py-2 border rounded-[7px] w-full" placeholder="Search by Name, Email, City...">
        </div>

        <div class="bg-white rounded-[30px] p-8 mt-8">
            <table class="min-w-full table-auto" id="customer-table">
                <thead>
                    <tr class="border-b border-gray-300">
                        <th class="py-3 px-6 text-left">#</th>
                        <th class="py-3 px-6 text-left">Name</th>
                        <th class="py-3 px-6 text-left">Email</th>
                        <th class="py-3 px-6 text-left">Order Count</th>
                        <th class="py-3 px-6 text-left">Total Spend</th>
                        <th class="py-3 px-6 text-left">AOV</th>
                        <th class="py-3 px-6 text-left">City</th>
                        <th class="py-3 px-6 text-left">Region</th>
                        <th class="py-3 px-6 text-left">Postal Code</th>
                        <th class="py-3 px-6 text-left">Country</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b border-gray-300">
                        <td class="py-3 px-6">1</td>
                        <td class="py-3 px-6">Ahmad Ali</td>
                        <td class="py-3 px-6">ahmadali@example.com</td>
                        <td class="py-3 px-6">5</td>
                        <td class="py-3 px-6">RM1,500.00</td>
                        <td class="py-3 px-6">RM300.00</td>
                        <td class="py-3 px-6">Kuala Lumpur</td>
                        <td class="py-3 px-6">Federal Territory</td>
                        <td class="py-3 px-6">50000</td>
                        <td class="py-3 px-6">Malaysia</td>
                    </tr>
                    <tr class="border-b border-gray-300">
                        <td class="py-3 px-6">2</td>
                        <td class="py-3 px-6">Siti Nurhaliza</td>
                        <td class="py-3 px-6">sitinur@example.com</td>
                        <td class="py-3 px-6">3</td>
                        <td class="py-3 px-6">RM900.00</td>
                        <td class="py-3 px-6">RM300.00</td>
                        <td class="py-3 px-6">Shah Alam</td>
                        <td class="py-3 px-6">Selangor</td>
                        <td class="py-3 px-6">40100</td>
                        <td class="py-3 px-6">Malaysia</td>
                    </tr>
                    <tr class="border-b border-gray-300">
                        <td class="py-3 px-6">3</td>
                        <td class="py-3 px-6">Lim Wei Ling</td>
                        <td class="py-3 px-6">weiling@example.com</td>
                        <td class="py-3 px-6">7</td>
                        <td class="py-3 px-6">RM2,800.00</td>
                        <td class="py-3 px-6">RM400.00</td>
                        <td class="py-3 px-6">George Town</td>
                        <td class="py-3 px-6">Penang</td>
                        <td class="py-3 px-6">10200</td>
                        <td class="py-3 px-6">Malaysia</td>
                    </tr>
                </tbody>
            </table>
        </div>
    
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const searchInput = document.getElementById('search-input');
                const table = document.getElementById('customer-table');
                const rows = table.querySelectorAll('tbody tr');
                const filterTable = () => {
                    const searchTerm = searchInput.value.toLowerCase();
                    rows.forEach((row) => {
                        const columns = row.querySelectorAll('td');
                        let rowText = '';
                        columns.forEach((column) => {
                            rowText += column.textContent.toLowerCase();
                        });
                        if (rowText.includes(searchTerm)) {
                            row.style.display = '';
                        } else {
                            row.style.display = 'none';
                        }
                    });
                };
                searchInput.addEventListener('input', filterTable);
            });
        </script>
    </div>