<?php 
  $review_title = get_field('review_title');
  $review_copy  = get_field('review_copy');
  $review_author = get_field('review_author');
  $review_background_image  = get_field('review_background_image'); ?>

<div id="reviews" class="content-block reviews-block"
  <?php if($review_background_image): ?>style="background-image: url(<?php echo $review_background_image; ?>)" <?php endif; ?> >
  <div class="reviews-block-inner container">
    <div class="feature-box text-center col-12-m col-8-l no-float center">
      <h2 class="heading-secondary"><?php echo $review_title; ?></h2>
      <blockquote class="pad-30">
        <p>
          <?php echo $review_copy; ?>
        </p>
        <cite>
          <?php echo $review_author; ?>
        </cite>
      </blockquote>
    </div>
  </div>
</div>