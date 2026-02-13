<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC PHP App</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 text-gray-800 font-sans antialiased min-h-screen">

    <nav class="bg-white shadow-md mb-8">
        <div class="max-w-5xl mx-auto px-6 py-4 flex space-x-6">
            <a href="index.php" class="text-gray-600 hover:text-blue-600 font-semibold transition">Home (List)</a>
            <a href="index.php?action=create" class="text-gray-600 hover:text-blue-600 font-semibold transition">Add
                Product</a>
            <a href="index.php?action=about" class="text-gray-600 hover:text-blue-600 font-semibold transition">About
                Us</a>
        </div>
    </nav>

    <main class="max-w-5xl mx-auto px-6 pb-12">
        <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100">
            <?php include $content; ?>
        </div>
    </main>

</body>

</html>