<div>
    <h1>Каталог кофе</h1>
    <ul>
        @foreach ($coffees as $coffee)
            <li>
                {{ $coffee->name }}
            </li>
        @endforeach
    </ul>

    <form method="GET" wire:submit="sortCoffeeAcidity">
        @csrf
        <label for="mySelect">Кислинка:</label>
        <select wire:model="selectedAcidity" id="mySelect">
            @foreach ($levels as $level)
                <option value="{{ $level->id }}">{{ $level->name }}</option>
            @endforeach
        </select>
        <button type="submit">Применить</button>
    </form>

    <form method="GET" wire:submit="getCoffeeByCountry">
        @csrf
        <label for="selectCountry">География:</label>
        <select wire:model="selectedCountry" id="selectCountry">
            @foreach ($countris as $country)
                <option value="{{ $country->id }}">{{ $country->name }}</option>
            @endforeach
        </select>
        <button type="submit">Применить</button>
    </form>

    <form method="GET" wire:submit="getCoffeeProcessingMethods">
        @csrf
        <label for="selectCoffeeProcessingMethods">Способ обработки:</label>
        <select wire:model="selectedCoffeeProcessingMethods" id="selectCoffeeProcessingMethods">
            @foreach ($processingMethods as $method)
                <option value="{{ $method->id }}">{{ $method->name }}</option>
            @endforeach
        </select>
        <button type="submit">Применить</button>
    </form>

    <form method="GET" wire:submit="getSpecialCoffeeCategories">
        @csrf
        <label for="selectSpecialCoffeeCategories">Особые</label>
        <select wire:model="selectedSpecialCoffeeCategories" id="selectSpecialCoffeeCategories">
            @foreach ($specialCoffeeCategories as $specialCoffeeCategory)
                <option value="{{ $specialCoffeeCategory->id }}">{{ $specialCoffeeCategory->name }}</option>
            @endforeach
        </select>
        <button type="submit">Применить</button>
    </form>

    <form wire:submit="getTypesCoffee">
        @csrf
        <label for="selectTypesCoffee">Вид кофе</label>
        <select wire:model="selectedTypeCoffee" id="selectTypesCoffee">
            @foreach ($typesCoffee as $typeCoffee)
                <option value="{{ $typeCoffee->id }}">{{ $typeCoffee->name }}</option>
            @endforeach
        </select>
        <button type="submit">Применить</button>
    </form>
</div>
