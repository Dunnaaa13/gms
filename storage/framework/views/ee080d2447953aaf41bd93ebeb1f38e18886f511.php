<?php $__env->startSection('content'); ?>
	<div class="container">
		<table class="table">
			<thead>
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Name</th>
					<th scope="col">Active</th>
			</thead>
			<tbody>
				<?php $__currentLoopData = $sections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $section): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
						<td><?php echo e($section->id); ?></td>
						<td><?php echo e($section->name); ?></td>
						<td><?php echo e($section->is_active); ?></td>
					</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</tbody>
		</table>
		<a class="btn btn-primary" href='/sections/add'>Add New Section</a>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ite19-3c-7\Documents\GMS\resources\views/sections/index.blade.php ENDPATH**/ ?>