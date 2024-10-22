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
        <select wire:model='selectedAcidity' id="mySelect">
            @foreach ($levels as $level)
                <option value="{{ $level->id }}">{{ $level->name }}</option>
            @endforeach
        </select>
        <button type="submit">Применить</button>
    </form>

    <form method="GET" wire:submit="getCoffeeByCountry">
        @csrf
        <label for="selectCountry">География:</label>
        <select wire:model='selectedCountry' id="selectCountry">
            @foreach ($countris as $country)
                <option value="{{ $country->id }}">{{ $country->name }}</option>
            @endforeach
        </select>
        <button type="submit">Применить</button>
    </form>
</div>
