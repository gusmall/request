<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>แจ้งข้อร้องเรียน เสนอแนะ แนะนำบริการ</title>
    <link rel="shortcut icon" href="<?php echo e(asset('storage/img/h.png')); ?>">
    <?php echo \Livewire\Livewire::styles(); ?>

    <?php echo htmlScriptTagJsApi(); ?>

    <?php echo app('Illuminate\Foundation\Vite')(['resources/sass/app.scss', 'resources/js/app.js']); ?>
</head>
<body>
    <?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('report', [])->html();
} elseif ($_instance->childHasBeenRendered('r7POlsX')) {
    $componentId = $_instance->getRenderedChildComponentId('r7POlsX');
    $componentTag = $_instance->getRenderedChildComponentTagName('r7POlsX');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('r7POlsX');
} else {
    $response = \Livewire\Livewire::mount('report', []);
    $html = $response->html();
    $_instance->logRenderedChild('r7POlsX', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
  
    <?php echo \Livewire\Livewire::scripts(); ?>

  </body>
</html><?php /**PATH /var/www/html/report/resources/views/index.blade.php ENDPATH**/ ?>