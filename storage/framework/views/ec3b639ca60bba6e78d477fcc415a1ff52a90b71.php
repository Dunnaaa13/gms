<?php $__env->startSection('content'); ?>
	<div class="container">
		<?php echo $__env->make('layouts.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<form method="POST" action="/teachers/store">
			<?php echo csrf_field(); ?>
		  <div class="form-group">
		    <label for="title">ID</label>
		    <input type="text" class="form-control" name='id' aria-describedby="emailHelp" placeholder="ID">
		  </div>
		  <div class="form-group">
		    <label for="name">Name</label>
		    <input type="text" class="form-control" name="name" placeholder="Name">
		  </div>
		  <div class="form-group">
		    <label for="advisory_section">Advisory Section</label>
		    <input type="text" class="form-control" name="advisory_section" placeholder="Advisory Section">
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ITE19-3C-2\Documents\gms\resources\views/teachers/create.blade.php ENDPATH**/ ?>