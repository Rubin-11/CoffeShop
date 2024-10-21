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
        <label for="mySelect">Выберите степень кислотности:</label>
        <select wire:model='selectedAcidity' id="mySelect">
            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $levels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $level): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($level->id); ?>"><?php echo e($level->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
        </select>
        <button type="submit">Отправить</button>
    </form>
</div><?php /**PATH /CoffeeShop/resources/views/livewire/pages/coffee-catalog.blade.php ENDPATH**/ ?>