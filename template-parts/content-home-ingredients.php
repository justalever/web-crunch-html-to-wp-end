<?php
 $ingredients_title  = get_field('ingredients_title');
 $ingredients_copy = get_field('ingredients_copy');
 $ingredients_background_image = get_field('ingredients_background_image');
 $ingredients_image_1  = get_field('ingredients_image_1');
 $ingredients_image_2 = get_field('ingredients_image_2');
 $ingredients_image_3  = get_field('ingredients_image_3');
?>
<div id="ingredients" class="content-block ingredients-block"
  <?php if($ingredients_background_image):?> style="background-image: url( <?php echo $ingredients_background_image; ?>);" <?php endif; ?>>
  <div class="ingredients-block-inner container clear">
    <div class="feature-box text-center col-6-l right-m">
      <h2 class="heading-secondary"><?php echo $ingredients_title; ?></h2>
      <div class="feature-box-content">
        <p>
          <?php echo $ingredients_copy; ?>
        </p>
        <div class="feature-image-group clear">
          <img class="img-fluid feature-image feature-image-1" src="<?php echo $ingredients_image_1; ?>" alt="Wheat">
          <img class="img-fluid feature-image feature-image-2" src="<?php echo $ingredients_image_2; ?>" alt="Spices">
          <img class="img-fluid feature-image feature-image-3" src="<?php echo $ingredients_image_3; ?>" alt="Bread">
        </div>
      </div>
    </div>
  </div>
</div>