<div>
    <h1>Каталог кофе</h1>
    <ul>
        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $coffees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $coffee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <?php echo e($coffee->name); ?>

            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
    </ul>

    <form method="GET" wire:submit="sortCoffeeAcidity">
        <?php echo csrf_field(); ?>
        <label for="mySelect">Кислинка:</label>
        <select wire:model="selectedAcidity" id="mySelect">
            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $levels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $level): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($level->id); ?>"><?php echo e($level->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
        </select>
        <button type="submit">Применить</button>
    </form>

    <form method="GET" wire:submit="getCoffeeByCountry">
        <?php echo csrf_field(); ?>
        <label for="selectCountry">География:</label>
        <select wire:model="selectedCountry" id="selectCountry">
            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $countris; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($country->id); ?>"><?php echo e($country->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
        </select>
        <button type="submit">Применить</button>
    </form>

    <form method="GET" wire:submit="getCoffeeProcessingMethods">
        <?php echo csrf_field(); ?>
        <label for="selectCoffeeProcessingMethods">Способ обработки:</label>
        <select wire:model="selectedCoffeeProcessingMethods" id="selectCoffeeProcessingMethods">
            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $processingMethods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $method): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($method->id); ?>"><?php echo e($method->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
        </select>
        <button type="submit">Применить</button>
    </form>

    <form method="GET" wire:submit="getSpecialCoffeeCategories">
        <?php echo csrf_field(); ?>
        <label for="selectSpecialCoffeeCategories">Особые</label>
        <select wire:model="selectedSpecialCoffeeCategories" id="selectSpecialCoffeeCategories">
            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $specialCoffeeCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $specialCoffeeCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($specialCoffeeCategory->id); ?>"><?php echo e($specialCoffeeCategory->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
        </select>
        <button type="submit">Применить</button>
    </form>

    <form wire:submit="getTypesCoffee">
        <?php echo csrf_field(); ?>
        <label for="selectTypesCoffee">Вид кофе</label>
        <select wire:model="selectedTypeCoffee" id="selectTypesCoffee">
            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $typesCoffee; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $typeCoffee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($typeCoffee->id); ?>"><?php echo e($typeCoffee->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
        </select>
        <button type="submit">Применить</button>
    </form>
</div><?php /**PATH /CoffeeShop/resources/views/livewire/pages/coffee-catalog.blade.php ENDPATH**/ ?>