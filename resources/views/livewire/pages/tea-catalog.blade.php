<div>
    <h1>Каталог чая</h1>
    <ul>
        @foreach ($products as $product)
            <li>
                {{ $product->name }}
            </li>
        @endforeach
    </ul>
</div>
