<!-- TESTIMONIALS -->
<section id="kudos">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2">
                <h2>What People Are Saying About Erika</h2>
                
                <?php
                $loop = new WP_Query( array( 'post_type' => 'testimonial', 'orderby' => 'post_id', 'order' => 'ASC' ) ); 
                
                while ( $loop->have_posts() ) : $loop->the_post(); ?>
                
                <!-- TESTIMONIAL -->
                <div class="row testimonial">
                    <div class="col-sm-4">
                        <?php if (has_post_thumbnail()) { // check for feature image
                            the_post_thumbnail( array(200, 200) );
                        } ?>
                        
                    </div>
                    <div class="col-sm-8">
                        <blockquote>
                            <?php the_content(); ?>
                            <cite>&mdash; <?php the_title(); ?></cite>
                        </blockquote>
                    </div>
                </div>

                <?php endwhile; ?>
            </div>
        </div>
    </div>

</section>