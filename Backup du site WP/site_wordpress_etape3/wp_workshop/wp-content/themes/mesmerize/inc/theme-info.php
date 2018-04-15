<?php do_action('mesmerize_before_info_page_content'); ?>

 <div class="mesmerize-about-page">
      <div class="rp-panel">
        <div class="rp-c">
          <h1><?php _e('Thanks for choosing Mesmerize!', 'mesmerize'); ?></h1>
          <p><?php _e('We\'re glad you chose our theme and we hope it will help you create a beautiful site in no time!<br> If you have any suggestions, don\'t hesitate to leave us some feedback.', 'mesmerize'); ?></p>
          <div class="mesmerize-get-started">
            <h2> <?php _e('Get Started in 3 Easy Steps', 'mesmerize'); ?></h2>
            <p><?php _e('1. Install the recommended plugins', 'mesmerize'); ?></p>
              <?php
                $config = \Mesmerize\Companion_Plugin::$config;
                $plugins = $config['plugins'];

                foreach ($plugins as $slug => $plugin) {
                  $state = \Mesmerize\Companion_Plugin::get_plugin_state($slug);
                  
                  $plugin_is_ready = $state['installed'] && $state['active'];
                  if (!$plugin_is_ready) {
                    if ($state['installed']) {
                      $link = \Mesmerize\Companion_Plugin::get_activate_link($slug);
                      $label = $plugin['activate']['label'];
                      $btn_class = "activate";
                    } else {
                      $link = \Mesmerize\Companion_Plugin::get_install_link($slug);
                      $label = $plugin['install']['label'];
                      $btn_class = "install-now";
                    }
                  }

                  $title = $plugin['title'];
                  $description = $plugin['description'];
              ?>
                  <div class="mesmerize_install_notice <?php if ($plugin_is_ready) echo 'blue'; ?>">
                    <h3 class="rp-plugin-title"><?php echo $title ?></h3>
                    <?php 
                      printf('<p>%1$s</p>', $description);
                      if (!$plugin_is_ready) {
                        printf('<a class="%1$s button" href="%2$s">%3$s</a>', esc_attr($btn_class), esc_url($link), esc_html($label));
                      } else {
                        _e('Plugin is installed and active.', 'mesmerize');
                      }
                    ?>
                  </div>
              <?php
                }
              ?>
            <p>
              <?php 
              $customize_link = add_query_arg(
                array(
                  'url' =>  get_home_url()
                ),
                network_admin_url( 'customize.php' )
              );

              printf('2. <a class="button" href="%s"> %s </a> your site', esc_url($customize_link), esc_html__('Customize', 'mesmerize')); ?></p>
            <p><?php _e('3. Enjoy! :)', 'mesmerize'); ?></p>
          </div>
        </div>
          

      </div>
    </div>
<?php do_action('mesmerize_after_info_page_content'); ?>