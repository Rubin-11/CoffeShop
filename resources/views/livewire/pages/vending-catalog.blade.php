<div>
    <h1>Каталог вендинга</h1>
    <ul>
        @foreach ($products as $product)
            <li>
                {{ $product->name }}
            </li>
        @endforeach
    </ul>
</div>
