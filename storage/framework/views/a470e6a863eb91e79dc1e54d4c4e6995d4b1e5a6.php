<?php $__env->startSection('content'); ?>
	<div class="container">
		<table class="table">
			<thead>
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Subject ID</th>
					<th scope="col">Strand ID</th>
					<th scope="col">Project ID</th>
					<th scope="col">Semester</th>
					<th scope="col">Grade Level</th>
			</thead>
			<tbody>
				<?php $__currentLoopData = $subjectstrands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subjectstrand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
						<td><?php echo e($subjectstrand->id); ?></td>
						<td><?php echo e($subjectstrand->subject_id); ?></td>
						<td><?php echo e($subjectstrand->strand_id); ?></td>
						<td><?php echo e($subjectstrand->project_id); ?></td>
						<td><?php echo e($subjectstrand->semester); ?></td>
						<td><?php echo e($subjectstrand->grade_level); ?></td>
					</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</tbody>
		</table>
		<a class="btn btn-primary" href='/subject-strands/add'>Add New Subject Strand</a>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ite19-3c-7\Documents\GMS\resources\views/subject-strands/index.blade.php ENDPATH**/ ?>