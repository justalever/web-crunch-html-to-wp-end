<div id="menu" class="content-block food-menu-block">
  <div class="food-menu-block-inner container">
    <div class="clear">
      <div class="food-menu-content">
        <h2 class="heading">Appetisers</h2>
        <?php 
        $args = array(
          'post_type' => 'meal',
          'category_name' => 'Appetisers',
          'order'   => 'ASC'
        );  
        $the_query = new WP_Query( $args ); ?>

        <?php if ( $the_query->have_posts() ) : ?>

          <ul class="food-menu-list">
          <!-- the loop -->
          <?php while ( $the_query->have_posts() ) : $the_query->the_post(); 
            $meal_price = get_field('meal_price');
            $special = get_field('special'); ?>
            
            <li class="food-menu-item">
              <div class="food-menu-item-header clear">
                <h3 class="food-menu-heading"><?php the_title(); ?></h3>
                <span class="food-menu-price"><?php echo $meal_price; ?></span>
              </div>
              <div class="food-menu-summary">
                <?php the_content(); ?>
              </div>
            </li>

          <?php endwhile; ?>
          <!-- end of the loop -->
          <?php wp_reset_postdata(); ?>
          
          </ul>
        <?php else : ?>
          <p><?php _e( 'Sorry, no meals matched your criteria.' ); ?></p>
        <?php endif; ?>


        <h2 class="heading">Salads</h2>

          <?php 
        $args = array(
          'post_type' => 'meal',
          'category_name' => 'Salads',
          'order'   => 'ASC'
        );  
        $the_query = new WP_Query( $args ); ?>

        <?php if ( $the_query->have_posts() ) : ?>

          <ul class="food-menu-list">
          <!-- the loop -->
          <?php while ( $the_query->have_posts() ) : $the_query->the_post(); 
            $meal_price = get_field('meal_price');
            $special = get_field('special'); ?>
            
            <li class="food-menu-item <?php if($special): ?>food-menu-item-special<?php endif; ?>">
              <div class="food-menu-item-header clear">
                <h3 class="food-menu-heading"><?php the_title(); ?></h3>
                <span class="food-menu-price"><?php echo $meal_price; ?></span>
              </div>
              <div class="food-menu-summary">
                <?php the_content(); ?>
              </div>
            </li>

          <?php endwhile; ?>
          <!-- end of the loop -->
          <?php wp_reset_postdata(); ?>
          
          </ul>
        <?php else : ?>
          <p><?php _e( 'Sorry, no meals matched your criteria.' ); ?></p>
        <?php endif; ?>
      </div>

      <div class="food-menu-content">
        <h2 class="heading">Starters</h2>
           <?php 
        $args = array(
          'post_type' => 'meal',
          'category_name' => 'Starters',
          'order'   => 'ASC'
        );  
        $the_query = new WP_Query( $args ); ?>

        <?php if ( $the_query->have_posts() ) : ?>

          <ul class="food-menu-list">
          <!-- the loop -->
          <?php while ( $the_query->have_posts() ) : $the_query->the_post(); 
            $meal_price = get_field('meal_price');
            $special = get_field('special'); ?>
            
            <li class="food-menu-item">
              <div class="food-menu-item-header clear">
                <h3 class="food-menu-heading"><?php the_title(); ?></h3>
                <span class="food-menu-price"><?php echo $meal_price; ?></span>
              </div>
              <div class="food-menu-summary">
                <?php the_content(); ?>
              </div>
            </li>

          <?php endwhile; ?>
          <!-- end of the loop -->
          <?php wp_reset_postdata(); ?>
          
          </ul>
        <?php else : ?>
          <p><?php _e( 'Sorry, no meals matched your criteria.' ); ?></p>
        <?php endif; ?>

        <h2 class="heading">Main Dishes</h2>
        
          <?php 
        $args = array(
          'post_type' => 'meal',
          'category_name' => 'Main Dishes',
          'order'   => 'ASC'
        );  
        $the_query = new WP_Query( $args ); ?>

        <?php if ( $the_query->have_posts() ) : ?>

          <ul class="food-menu-list">
          <!-- the loop -->
          <?php while ( $the_query->have_posts() ) : $the_query->the_post(); 
            $meal_price = get_field('meal_price');
            $special = get_field('special'); ?>
            
            <li class="food-menu-item <?php if($special): ?>food-menu-item-special<?php endif; ?>">
              <div class="food-menu-item-header clear">
                <h3 class="food-menu-heading"><?php the_title(); ?></h3>
                <span class="food-menu-price"><?php echo $meal_price; ?></span>
              </div>
              <div class="food-menu-summary">
                <?php the_content(); ?>
              </div>
            </li>

          <?php endwhile; ?>
          <!-- end of the loop -->
          <?php wp_reset_postdata(); ?>
          
          </ul>
        <?php else : ?>
          <p><?php _e( 'Sorry, no meals matched your criteria.' ); ?></p>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>