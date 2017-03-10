<?php 
  $reservations_title  = get_field('reservations_title');
  $reservation_copy = get_field('reservation_copy');
  $reservation_image_1 = get_field('reservation_image_1');
  $reservation_image_2  = get_field('reservation_image_2');
  $reservation_form = get_field('reservation_form'); ?>

<div id="reservations" class="content-block reservations-block">
  <div class="reservations-block-inner container">
    <div class="clear">
      <div class="reservation-block-img col-3-l none block-l">
        <img class="img-fluid " src="<?php echo $reservation_image_1; ?>" alt="Food">
      </div>
      <div class="reservation-block-img col-6-m col-3-l none block-m">
        <img class="img-fluid " src="<?php echo $reservation_image_2; ?>" alt="Food">
      </div>
      <div class="reservation-block-form col-6-m">
        <div class="text-center">
          <h2 class="heading"><?php echo $reservations_title; ?></h2>
          <p>
            <?php echo $reservation_copy; ?>
          </p>
        </div>
        <?php echo do_shortcode($reservation_form); ?>
      </div>
    </div>
  </div>
</div>
