<h2 class="text-2xl font-bold text-gray-800 mb-6">Edit Product</h2>

<form action="index.php?action=update&id=<?php echo $row['id']; ?>" method="POST" class="max-w-lg">
    <div class="mb-4">
        <label class="block text-sm text-gray-700 font-medium mb-2" for="name">Product Name</label>
        <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($row['name']); ?>" required
            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition">
    </div>

    <div class="mb-4">
        <label class="block text-sm text-gray-700 font-medium mb-2" for="price">Price ($)</label>
        <input type="number" step="0.01" id="price" name="price" value="<?php echo htmlspecialchars($row['price']); ?>"
            required
            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition">
    </div>

    <div class="mb-6">
        <label class="block text-sm text-gray-700 font-medium mb-2" for="description">Description</label>
        <textarea id="description" name="description" rows="4"
            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition"><?php echo htmlspecialchars($row['description']); ?></textarea>
    </div>

    <button type="submit"
        class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-6 rounded-lg shadow-sm transition">Update
        Product</button>
    <a href="index.php" class="ml-4 text-sm text-gray-500 hover:text-gray-800 transition">Cancel</a>
</form>