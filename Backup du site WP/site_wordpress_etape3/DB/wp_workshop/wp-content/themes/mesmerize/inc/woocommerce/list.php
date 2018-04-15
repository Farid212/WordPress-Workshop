<?php


// card item template start

remove_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10);

remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10);
remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5);


// start card item
add_action('woocommerce_before_shop_loop_item', function () {
    $class = apply_filters('mesmerize_woocommerce_archive_item_class', array());
    $class = implode(' ', array_unique($class));

    ?>

    <div class="ope-woo-card-item <?php echo esc_attr($class); ?>">

    <?php
}, 0);


// start header
add_action('woocommerce_before_shop_loop_item_title', function(){
    ?>
    <div class="ope-woo-card-header">
    <?php
}, 0);


//end header
add_action('woocommerce_before_shop_loop_item_title', function(){
    ?>
    </div>
    <?php
}, PHP_INT_MAX);


// start content
add_action('woocommerce_shop_loop_item_title', function(){
    ?>
    <div class="ope-woo-card-content">
    <?php
}, 0);


//end content
add_action('woocommerce_shop_loop_item_title', function(){
    ?>
    </div>
    <?php
}, PHP_INT_MAX);


// start footer section
add_action('woocommerce_after_shop_loop_item', function () {
    ?>
    <div class="ope-woo-card-footer">

    <?php
}, 0);


// end footer section
add_action('woocommerce_after_shop_loop_item', function () {
    ?>
    </div>
    <?php
}, PHP_INT_MAX);


// end card item
add_action('woocommerce_after_shop_loop_item', function () {
    ?>
    </div>
    <?php
}, PHP_INT_MAX);


// card item template end


//card item content

function mesmerize_woocommerce_product_list_print_categories()
{
    global $product;
    ?>
    <div class="ope-woo-card-content-section ope-woo-card-content-categories">
        <?php echo wc_get_product_category_list($product->get_id()); ?>
    </div>
    <?php
}

function mesmerize_woocommerce_product_list_print_title()
{
    ?>
    <div class="ope-woo-card-content-section ope-woo-card-content-title">
        <h3 class="ope-card-product-tile"><?php the_title() ?></h3>
    </div>
    <?php
}

function mesmerize_woocommerce_product_list_print_rating()
{
    ?>
    <div class="ope-woo-card-content-section ope-woo-card-content-rating">
        <?php woocommerce_template_loop_rating() ?>
    </div>

    <?php
}

function mesmerize_woocommerce_product_list_print_price()
{
    ?>
    <div class="ope-woo-card-content-section ope-woo-card-content-price">
        <?php woocommerce_template_loop_price() ?>
    </div>
    <?php
}

function mesmerize_woocommerce_product_list_print_description()
{
    $description_in_archive_only = get_theme_mod('mesmerize_woocommerce_description_in_archive_only', true);

    if ( ! is_archive() && intval($description_in_archive_only)) {
        return;
    }

    ?>
    <div class="ope-woo-card-content-section ope-woo-card-content-description">
        <?php the_excerpt() ?>
    </div>
    <?php
}


function mesmerize_woocommerce_card_item_get_print_order()
{
    // TODO: kirki sortable here (maybe ? )

    $order  = get_theme_mod('woocommerce_card_item_get_print_order', false);
    $result = array();

    if ($order === false) {
        $result = array('title', 'rating', 'price', 'categories');
    } else {
        $result = $order;
    }


    return $result;
}


add_action('woocommerce_shop_loop_item_title', function () {
    $toPrint = mesmerize_woocommerce_card_item_get_print_order();

    foreach ($toPrint as $item) {
        if (function_exists("mesmerize_woocommerce_product_list_print_{$item}")) {
            call_user_func("mesmerize_woocommerce_product_list_print_{$item}");
        }

    }
});