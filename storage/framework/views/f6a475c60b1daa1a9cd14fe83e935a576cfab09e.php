<?php $__env->startSection('navbar'); ?>
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
     <b class="w3-bar-item ">Pintores</b> 
    
    <div class="w3-right w3-hide-small">
       <a href="<?php echo e(action('Minecraft@plantilla')); ?>" class="w3-bar-item w3-button">Inicio</a>
      <a href="<?php echo e(action('Minecraft@picasso')); ?>" class="w3-bar-item w3-button">Pablo Picasso</a>
      <a href="<?php echo e(action('Minecraft@van')); ?>" class="w3-bar-item w3-button">Van Gogh</a>
      <a href="<?php echo e(action('Minecraft@monet')); ?>" class="w3-bar-item w3-button">Monet</a>
      <a href="<?php echo e(action('Minecraft@dali')); ?>" class="w3-bar-item w3-button">Dalí</a>
      <a href="<?php echo e(action('Minecraft@vinci')); ?>" class="w3-bar-item w3-button">Da Vinci</a>
    </div>
  </div>
</div>
<?php echo $__env->yieldSection(); ?>
<?php /**PATH C:\laragon\www\pintoresDerek\resources\views/includes/navbar.blade.php ENDPATH**/ ?>