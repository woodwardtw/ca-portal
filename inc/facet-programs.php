<?php
/**
 * programs facet loop
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

while ( have_posts() ): the_post(); ?>
    <div class="col-md-6">
        <div class="card">         
          <div class="card-body">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>        
          </div>
        </div>
    </div>
<?php endwhile;?> 