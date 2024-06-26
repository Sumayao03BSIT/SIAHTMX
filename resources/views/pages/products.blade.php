@extends('base.base')

@section('content')
<div class="flex justify-between items-center mb-3">
    <h1 class="text-4xl text-gray-100">Products</h1>
    <button class="p-2 bg-gray-700 text-white rounded-full hover:bg-gray-600" 
            onclick="showAddProductModal()">Add Product</button>
</div>
<hr class="border-gray-700">
<div id="products_list"
     class="grid grid-cols-3 gap-4 mt-3"
     hx-get="/api/products" 
     hx-trigger="load delay:100ms"
     hx-swap="innerHTML">
    <!-- Example product item -->
    <div class="bg-gray-800 p-4 rounded-lg shadow-lg text-gray-100">
        <img src="example.jpg" alt="Product Image" class="w-full h-32 object-cover mb-4 rounded">
        <h3 class="text-lg font-semibold mb-2">Product Name</h3>
        <p class="text-gray-400 mb-2">Product Description</p>
        <span class="block text-gray-300 mb-4">$Price</span>
        <button class="p-2 bg-gray-700 text-white rounded hover:bg-gray-600">Buy Now</button>
    </div>
    <!-- Repeat for each product -->
</div>

<div id="addProductModal" class="hidden fixed inset-0 bg-gray-800 bg-opacity-75 flex justify-center items-center">
    <div class="bg-gray-900 p-6 rounded-lg shadow-lg w-1/3 text-gray-100">
        <h2 class="text-2xl mb-4">Create Product</h2>
        <form id="addProductForm"
              method="POST" 
              hx-post="/api/products/create"
              hx-trigger="submit"
              hx-swap="beforeend"
              hx-target="#products_list"
              hx-on="htmx:afterRequest:productAdded">
            <div class="mb-4">
                <label class="block text-gray-300">Image URL:</label>
                <input type="text" id="imgUrl" name="imgUrl" class="w-full p-2 border border-gray-600 rounded bg-gray-800 text-gray-300">
                <div id="imgUrl_Error" class="text-red-500"></div>
            </div>
            <div class="mb-4">
                <label class="block text-gray-300">Product Name:</label>
                <input type="text" id="name" name="name" class="w-full p-2 border border-gray-600 rounded bg-gray-800 text-gray-300">
                <div id="name_Error" class="text-red-500"></div>
            </div>
            <div class="mb-4">
                <label class="block text-gray-300">Description:</label>
                <textarea id="description" name="description" class="w-full p-2 border border-gray-600 rounded bg-gray-800 text-gray-300"></textarea>
                <div id="description_Error" class="text-red-500"></div>
            </div>
            <div class="mb-4">
                <label class="block text-gray-300">Price:</label>
                <input id="price" type="number" name="price" class="w-full p-2 border border-gray-600 rounded bg-gray-800 text-gray-300">
                <div id="price_Error" class="text-red-500"></div>
            </div>
            <div class="mb-4" id="addMessage"></div>
            <div class="flex justify-end mt-3">
                <button type="submit" 
                        class="p-2 mr-2 bg-blue-500 text-white rounded hover:bg-blue-400" 
                        id="saveButton">Save</button>
                <button type="button" class="p-2 bg-gray-600 text-white rounded hover:bg-gray-500" 
                        onclick="hideAddProductModal()">Close</button>
            </div>
        </form>
    </div>
</div>

<script>
    function showAddProductModal() {
        clearForm();
        document.getElementById('addProductModal').classList.remove('hidden');
    }
    function hideAddProductModal() {
        document.getElementById('addProductModal').classList.add('hidden');
    }
    function clearForm() {
        document.getElementById('addProductForm').reset();
    }
</script>
@endsection
