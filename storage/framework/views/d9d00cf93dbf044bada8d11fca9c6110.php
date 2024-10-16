<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/css/components/footer.css', 'resources/js/app.js','resources/css/pages/main.css']); ?>

    <title><?php echo e($title ?? 'Page Title'); ?></title>
</head>
<body>
<div class="container center">
<?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('components.header', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-149903751-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
<?php echo e($slot); ?>

<?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('components.footer', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-149903751-1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
</div>
</body>
</html>
<?php /**PATH /CoffeeShop/resources/views/components/layouts/app.blade.php ENDPATH**/ ?>