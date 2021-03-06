<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <nav class="navbar navbar-dark bg-dark">
    <ul class="nav nav-pills">
      <li class="nav-item">
        <a class="nav-link <?php echo e(setActive('subjects')); ?>" href="/subjects">Subject</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php echo e(setActive('strands')); ?>" href="/strands">Strand</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php echo e(setActive('teachers')); ?>" href="/teachers">Teacher</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php echo e(setActive('sections')); ?>" href="/sections">Section</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php echo e(setActive('subject-strands')); ?>" href="/subject-strands">Subject Strand</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php echo e(setActive('teacher-loads')); ?>" href="/teacher-loads">Teacher Loads</a>
      </li>
    </ul>
    </nav>

    <title>GMS</title>
  </head>
  <body>
   <?php echo $__env->yieldContent('content'); ?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html><?php /**PATH C:\Users\ite19-3c-7\Documents\GMS\resources\views/layouts/master.blade.php ENDPATH**/ ?>