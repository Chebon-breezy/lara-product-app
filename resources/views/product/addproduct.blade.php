<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product</title>
    <!-- Include Tailwind CSS via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold mb-4">Create Product</h1>

        <form action="/product" method="POST" class="space-y-4">
            @csrf
            <label for="name" class="block">Name:</label>
            <input type="text" id="name" name="name" class="w-1/2 border rounded-md px-3 py-2">

            <label for="description" class="block">Description:</label>
            <textarea id="description" name="description" class="w-1/2 border rounded-md px-3 py-2"></textarea>

            <label for="price" class="block">Price:</label>
            <input type="text" id="price" name="price" class="w-1/2 border rounded-md px-3 py-2">

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Submit</button>
        </form>
    </div>
</body>
</html>

