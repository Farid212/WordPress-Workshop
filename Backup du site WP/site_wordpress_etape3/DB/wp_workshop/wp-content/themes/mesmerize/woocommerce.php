<?php

mesmerize_get_header();

?>
    <div class="page-content">
        <div class="page-column gridContainer content">
            <div class="page-row row">
                <?php mesmerize_woocommerce_get_sidebar('left'); ?>
                <div class="woocommerce-page-content <?php mesmerize_woocommerce_container_class(); ?> col-sm">
                    <?php woocommerce_content(); ?>
                </div>
                <?php mesmerize_woocommerce_get_sidebar('right'); ?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>