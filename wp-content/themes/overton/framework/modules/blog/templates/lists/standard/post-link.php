<article id="post-<?php the_ID(); ?>" <?php post_class($post_classes); ?>>
    <div class="mkdf-post-content">
        <div class="mkdf-post-text">
            <div class="mkdf-post-text-inner">
                <div class="mkdf-post-info-top">
                    <div class="mkdf-post-mark">
                        <span class="fa fa-link mkdf-link-mark"></span>
                    </div>
                </div>
                <div class="mkdf-post-text-main">
                    <?php overton_mikado_get_module_template_part('templates/parts/post-type/link', 'blog', '', $part_params); ?>
                </div>
            </div>
        </div>
    </div>
</article>