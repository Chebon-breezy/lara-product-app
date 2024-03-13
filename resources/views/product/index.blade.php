<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Include Tailwind CSS via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    
<h1 class="text-3xl font-bold mb-4">Products</h1>

<div class="overflow-x-auto">
    <table class="min-w-full border border-gray-200">
        <thead>
            <tr class="bg-gray-100">
                <th class="px-6 py-3 border-b border-gray-200">Name</th>
                <th class="px-6 py-3 border-b border-gray-200">Description</th>
                <th class="px-6 py-3 border-b border-gray-200">Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $product->name }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $product->description }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $product->price }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>



