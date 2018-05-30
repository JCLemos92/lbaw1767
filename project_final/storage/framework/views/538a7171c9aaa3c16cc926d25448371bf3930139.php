<?php $__env->startSection('content'); ?>

<p>Lista de itens da tabela test</p>

<table>
	<tr>
		<th>ID</th>
		<th>Text</th>
	</tr>
	<?php $__currentLoopData = $itens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?php echo e($item->id); ?></td>
			<td><?php echo e($item->info); ?></td>
		</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

<a href="<?php echo e(route('create')); ?>">Cadastrar</a>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.static_template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>