<div>
    <h1>Каталог чая</h1>
    <ul>
        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <?php echo e($product->name); ?>

            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
    </ul>
</div><?php /**PATH /CoffeeShop/resources/views/livewire/pages/tea-catalog.blade.php ENDPATH**/ ?>