
  </div><!-- #content -->
<?php 
 $twitter = get_field('twitter');
 $facebook = get_field('facebook');
?>
<div class="footer">
  <div class="footer-inner container">
    <?php dynamic_sidebar( 'footer-sidebar' ); ?>

        <ul class="footer-social-list icon-list-inline">
          <li class="navigation-item-social"><a class="social social-twitter" href="<?php echo $twitter; ?>"><span class="sr">Twitter</span></a></li>
          <li class="navigation-item-social"><a class="social social-facebook" href="<?php echo $facebook; ?>"><span class="sr">Facebook</span></a></li>
        </ul>
    </div>
</div>

<?php wp_footer(); ?>


</body>
</html>

