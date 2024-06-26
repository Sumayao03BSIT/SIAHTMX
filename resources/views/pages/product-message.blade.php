<div class="grid grid-cols-3 gap-4 mt-3">
    @foreach($products->get() as $prod)
    <div class='p-4 rounded bg-gray-800 text-gray-100 flex items-start'>
        <img src={{$prod->imgUrl}} style='width: 100px; height: auto;' class='mr-4 rounded'>
        <div>
            <h3 class='text-2xl font-semibold mb-2'>{{$prod->name}}</h3>
            <hr class="border-gray-700 mb-2" />
            <div class='italic text-gray-400 mb-2'>
                {{$prod->description}}
            </div>
            <div class='text-2xl text-right text-green-500'>${{$prod->price}}</div>
        </div>
    </div>
    @endforeach
</div>

<div id='addMessage' hx-swap-oob='true'>
    <div class='bg-green-200 text-center text-green-800 p-3 rounded'>
        The Product has been added successfully.
    </div>
</div>

