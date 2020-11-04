<!DOCTYPE html>
<html>
<title>Dalí</title>
<link rel="stylesheet" href="style.css">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>
<?php echo $__env->make('includes.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<section class="box">
<img src="dali.jpg" width="180" alt="" class="box-img">
<h1>Salvador Dali</h1>
<h2>Pintor - Mejor Pintor, Mejor Persona</h2>
<p>Salvador Felipe Jacinto Dalí i Domènech, ​ marqués de Dalí de Púbol, fue un pintor, escultor, grabador, escenógrafo y escritor español del siglo XX. Se le considera uno de los máximos representantes del surrealismo. Salvador Dalí es conocido por sus impactantes y oníricas imágenes surrealistas.</p>
<ul>
    <li><img src="dali1.jpg" alt=""></li>
    <li><img src="dali2.jpg" alt=""></li>
    <li><img src="dali3.jpg" alt=""></li>
    <li><img src="dali4.jpg" alt=""></li>
</ul>
</section>

<?php echo $__env->make('includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php /**PATH C:\laragon\www\pintoresDerek\resources\views/dali.blade.php ENDPATH**/ ?>