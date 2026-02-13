<div class="flex justify-between items-center mb-6">
    <h2 class="text-2xl font-bold text-gray-800">Product List</h2>
    <a href="index.php?action=create"
        class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg shadow-sm transition">Add New Product</a>
</div>

<div class="overflow-x-auto rounded-lg border border-gray-200">
    <table class="w-full text-left border-collapse">
        <thead>
            <tr class="bg-gray-50 border-b border-gray-200">
                <th class="py-3 px-4 text-sm font-semibold text-gray-600">ID</th>
                <th class="py-3 px-4 text-sm font-semibold text-gray-600">Name</th>
                <th class="py-3 px-4 text-sm font-semibold text-gray-600">Price</th>
                <th class="py-3 px-4 text-sm font-semibold text-gray-600 text-right">Actions</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-100">
            <?php foreach ($products as $row): ?>
                <tr class="hover:bg-gray-50 transition duration-150">
                    <td class="py-3 px-4 text-sm text-gray-500">
                        <?php echo $row['id']; ?>
                    </td>
                    <td class="py-3 px-4 text-sm font-medium text-gray-800">
                        <?php echo htmlspecialchars($row['name']); ?>
                    </td>
                    <td class="py-3 px-4 text-sm text-gray-600">$
                        <?php echo number_format($row['price'], 2); ?>
                    </td>
                    <td class="py-3 px-4 text-sm text-right space-x-2">
                        <a href="index.php?action=edit&id=<?php echo $row['id']; ?>"
                            class="inline-block px-3 py-1.5 bg-gray-100 hover:bg-gray-200 text-gray-700 font-medium rounded transition">Edit</a>
                        <a href="index.php?action=delete&id=<?php echo $row['id']; ?>"
                            class="inline-block px-3 py-1.5 bg-red-50 hover:bg-red-100 text-red-600 font-medium rounded transition"
                            onclick="return confirm('Are you sure you want to delete this product?')">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>