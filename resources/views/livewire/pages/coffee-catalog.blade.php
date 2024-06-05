<div>
    <h1>Каталог кофе</h1>

    

    @foreach ($products as $product)
    <div class="product-card">
        <!-- Название товара -->
        <h2 class="product-name">{{ $product->name }}</h2>
        
        <!-- Описание товара -->
        <p class="product-description">{{ $product->description }}</p>
        
        <!-- Цена товара -->
        <p class="product-price">{{ $product->price }}</p>
        
        <!-- Количество товара в наличии -->
        <p class="product-stock">{{ $product->stock }}</p>
        
        <!-- Категория товара -->
        <p class="product-category"></p>
      </div>
        @endforeach
</div>
