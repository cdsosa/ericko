<?php
get_header(); ?>

        <?php $image = get_field('hero_image');?>


        <section class="slideImage small" style="background-image: url('<?php echo $image[url]; ?>')">

            <div class="tagline">
                <h1><?php the_title(); ?></h1>
            </div>

        </section>

        <section>

            <div class="grid gridObjects">

                <aside>
                    <div class="client">

                        <?php

                        $posts = get_field('team');

                        if( $posts ): ?>

                            <div class="text">
                                <h6>Team</h6>
                            </div>

                            <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                                <?php setup_postdata($post); ?>
                                    <a class="link" href="<?php the_field('url') ?>" target="_blank" rel="nofollow">
                                        <img src="<?php the_field('logo') ?>" />
                                        <div class="overlay">
                                        </div>
                                        <i class="fa fa-link"></i>
                                    </a>
                            <?php endforeach; ?>
                            <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                        <?php endif; ?>


                    </div>
                    <div class="text">
                        <?php

                        $posts = get_field('client');

                        if( $posts ): ?>

                            <h6>Client</h6>

                        <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                            <?php setup_postdata($post); ?>
                            <a href="<?php the_permalink() ?>" rel="nofollow">
                                <i class="fa fa-link"></i>
                                <p><?php the_title(); ?></p>
                            </a>
                            <?php endforeach; ?>
                            <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                        <?php endif; ?>

                        <?php if (get_field('services')) { ?>
                            <h6>Contribution</h6>
                            <p><?php the_field('services') ?></p>
                        <?php } ?>

                        <?php if (get_field('date')) { ?>
                            <h6>Date</h6>
                            <p><?php the_field('date') ?></p>
                        <?php } ?>

                        <?php if (get_field('description')) { ?>
                            <h6>Description</h6>
                            <p><?php the_field('description') ?></p>
                        <?php } ?>

                    </div>
                </aside>

                <div class="content">
                    <?php if (get_field('url')) {?>
                        <a href="<?php the_field('url')?>" target="_blank" rel="nofollow">
                            <button>Visit Website</button>
                        </a>
                    <?php } ?>

                    <?php if (get_field('body_image') or get_field('url')) { ?>

                        <img src="<?php the_field('body_image'); ?>">

                    <?php } else { ?>
                        <h3 class="null">No Work Submitted</h3>
                    <?php } ?>

                </div>

            </div>

        </section>



<?php get_footer(); ?>
