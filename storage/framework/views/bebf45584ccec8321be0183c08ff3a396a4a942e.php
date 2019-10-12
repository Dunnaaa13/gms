<?php $__env->startSection('content'); ?>
	<div class="container">
		<table class="table">
			<thead>
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Name</th>
					<th scope="col">Advisory Section</th>
					<th scope="col">Edit</th>
			</thead>
			<tbody>
				<?php $__currentLoopData = $teachers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $teacher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
						<td><?php echo e($teacher->id); ?></td>
						<td><?php echo e($teacher->name); ?></td>
						<td><?php echo e($teacher->advisory_section); ?></td>
						<td><a href='/teachers/<?php echo e($teacher); ?>/edit'>Edit</a></td>
					</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</tbody>
		</table>
		<a class="btn btn-primary" href='/teachers/add'>Add New Teacher</a>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ite19-3c-7\Documents\GMS\resources\views/teachers/index.blade.php ENDPATH**/ ?>