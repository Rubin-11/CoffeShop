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
        <label for="mySelect">Выберите степень кислотности:</label>
        <select wire:model='selectedAcidity' id="mySelect">
            @foreach ($levels as $level)
                <option value="{{ $level->id }}">{{ $level->name }}</option>
            @endforeach
        </select>
        <button type="submit">Отправить</button>
    </form>
</div>
