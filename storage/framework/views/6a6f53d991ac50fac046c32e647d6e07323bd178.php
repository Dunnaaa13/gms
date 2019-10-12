<?php $__env->startSection('content'); ?>
	<div class="container">
		<table class="table">
			<thead>
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Name</th>
					<th scope="col">Actions</th>
			</thead>
			<tbody>
				<?php $__currentLoopData = $subjects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subject): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
						<td><?php echo e($subject->id); ?></td>
						<td><?php echo e($subject->name); ?></td>
						<td><a href="/subjects/<?php echo e($subject->id); ?>/edit">Edit</a></
					</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</tbody>
		</table>
		<a class="btn btn-primary" href='/subjects/add'>Add New Subject</a>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ite19-3c-7\Documents\GMS\resources\views/subjects/index.blade.php ENDPATH**/ ?>