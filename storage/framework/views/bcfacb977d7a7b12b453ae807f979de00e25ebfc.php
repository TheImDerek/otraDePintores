<!DOCTYPE html>
<html>
<title>Monet</title>
<link rel="stylesheet" href="style.css">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>
<?php echo $__env->make('includes.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<section class="box">
<img src="monet.jpg" width="180" alt="" class="box-img">
<h1>Claude Monet</h1>
<h2>Pintor - Mejor Pintor, Mejor Persona</h2>
<p>Claude Monet fue un pintor francés, uno de los creadores del impresionismo. El término impresionismo deriva del título de su obra Impresión, sol naciente.​Sus primeras obras, hasta la mitad de la década de 1860, son de estilo realista. Monet logró exponer algunas en el Salón de París.</p>
<ul>
    <li><img src="monet1.jpg" alt=""></li>
    <li><img src="monet2.jpg" alt=""></li>
    <li><img src="monet3.jpg" alt=""></li>
    <li><img src="monet4.jpg" alt=""></li>
</ul>
</section>

<?php echo $__env->make('includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php /**PATH C:\laragon\www\pintoresDerek\resources\views/monet.blade.php ENDPATH**/ ?>