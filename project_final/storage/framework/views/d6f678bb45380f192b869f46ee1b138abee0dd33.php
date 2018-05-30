<?php $__env->startSection('title', 'Cards'); ?>

<?php $__env->startSection('content'); ?>

<section id="cards">
  <?php echo $__env->renderEach('partials.card', $cards, 'card'); ?>
  <article class="card">
    <form class="new_card">
      <input type="text" name="name" placeholder="new card">
    </form>
  </article>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>