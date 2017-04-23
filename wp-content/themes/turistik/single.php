<?php get_header(); ?>
<?php
if (have_posts())
    : while (have_posts()) : the_post(); ?>
    <div class="main-content">
        <div class="content-wrapper">
            <div class="content">
                <div class="article-title title-page">
                    <?php the_title(); ?>
                </div>

                <div class="article-image"><img src="<?php echo get_thumbnail(); ?>" alt="Image поста"></div>
                <div class="article-info">
                    <div class="post-date"><?php the_date(); ?></div>
                </div>
                <div class="article-info">
                    Город вылета - <?php echo get_field('city') . '<br>'; ?>
                    <img src="
                    <?php echo get_imageArrival(); ?>" alt="Image поста">
                </div>
                <div class="article-text">
                    <?php the_content(); ?>
                </div>
                <div class="article-pagination">
                    <?php
                    $prev_post = get_previous_post(true);

                    echo '
                        <div class="article-pagination__block pagination-prev-left">
                        <a href="'. get_permalink($prev_post->ID) .'" class="article-pagination__link"><i class="icon icon-angle-double-left"></i>Предыдущая статья</a>
                        <div class="wrap-pagination-preview pagination-prev-left">
                            <div class="preview-article__img"><img src="'.get_image_prewPost( $prev_post->ID, array(100,100) ).'" class="preview-article__image"></div>
                            <div class="preview-article__content">
                                <div class="preview-article__info"><a href="#" class="post-date">'.$prev_post->post_date.'</a></div>
                                <div class="preview-article__text">'.$prev_post->post_title.'</div>
                            </div>
                        </div>
                    </div>'

                    ?>
                    <?php
                    $next_post = get_next_post(true);
                    echo '
                        <div class="article-pagination__block pagination-prev-right">
                        <a href="'. get_permalink($next_post->ID) .'" class="article-pagination__link">Сдедующая статья<i class="icon icon-angle-double-right"></i></a>
                        <div class="wrap-pagination-preview pagination-prev-right">
                          <div class="preview-article__img"><img src="'.get_image_prewPost( $next_post->ID, array(100,100) ).'" class="preview-article__image"></div>
                          <div class="preview-article__content">
                            <div class="preview-article__info"><a href="#" class="post-date">'.$next_post->post_date.'</a></div>
                            <div class="preview-article__text">'.$next_post->post_title.'</div>
                          </div>
                        </div>
                      </div>';
                    ?>

                </div>
            </div>
            <?php  get_template_part('./_parts/sidebar'); ?>
        </div>
    </div>
    <?php
endwhile;
endif ?>

<?php get_footer(); ?>
