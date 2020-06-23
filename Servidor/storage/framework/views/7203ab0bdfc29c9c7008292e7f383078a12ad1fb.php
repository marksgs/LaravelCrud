<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Autos</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand">Datos</a>
    </div>
    <div class="nav navbar-nav navbar-right">
        <li><a href="<?php echo e(url('home')); ?>">Home</a></li>
        <li><a href="<?php echo e(url('data')); ?>">Datos</a></li>
    </div>
  </div>
</nav>

<main>
    <div class="container">
        <?php echo $__env->yieldContent('contenido'); ?>
    </div>
</main>

</body>
</html>
<?php /**PATH /home/marco/Documentos/programas/php/servidor/resources/views/Layout/principal.blade.php ENDPATH**/ ?>