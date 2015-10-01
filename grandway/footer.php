<?php
  global $PhoenixData;

  $PHT_use_footer = isset($PhoenixData['use_footer']) ? $PhoenixData['use_footer'] : 1;
  $PHT_use_footer = ($PHT_use_footer) ? 'footer-bottom-top-section-present' : null;

  $PHT_copyright = isset($PhoenixData['copyright_text']) ? $PhoenixData['copyright_text'] : null;

  if ($PHT_use_footer)
    $PHT_layout = isset($PhoenixData['footer_layout']) ? $PhoenixData['footer_layout'] : 4;
?>

<!-- footer -->
<?php echo PhoenixTeam_Utils::footer_twitter(); ?>

<div class="footer general-font-area<?php echo ' ' . sanitize_html_class($PHT_use_footer); ?>">

<?php if ($PHT_use_footer) : ?>

    <div class="container">
      <div class="row">
        <?php if ($PHT_layout == 4) : ?>
            <div class="col-lg-3 col-md-3 col-sm-3">
<?php
                if ( function_exists('dynamic_sidebar') && is_active_sidebar('Footer 1') ) {
                    dynamic_sidebar('Footer 1');
                } else {
                    echo '<div class="widget_text footer-widget">
                        <h4 class="widget-title">Footer Sidebar 1</h4>
                        <div class="textwidget">' . __('Drop a widget on "Footer Sidebar 1" sidebar at Appearance > Widgets page.', 'grandway') . '</div>
                    </div>';
            }
?>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
<?php
                if ( function_exists('dynamic_sidebar') && is_active_sidebar('Footer 2') ) {
                    dynamic_sidebar('Footer 2');
                } else {
                    echo '<div class="widget_text footer-widget">
                        <h4 class="widget-title">Footer Sidebar 2</h4>
                        <div class="textwidget">' . __('Drop a widget on "Footer Sidebar 2" sidebar at Appearance > Widgets page.', 'grandway') . '</div>
                    </div>';                }
?>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
<?php
                if ( function_exists('dynamic_sidebar') && is_active_sidebar('Footer 3') ) {
                    dynamic_sidebar('Footer 3');
                } else {
                    echo '<div class="widget_text footer-widget">
                        <h4 class="widget-title">Footer Sidebar 3</h4>
                        <div class="textwidget">' . __('Drop a widget on "Footer Sidebar 3" sidebar at Appearance > Widgets page.', 'grandway') . '</div>
                    </div>';                }
?>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
<?php
                if ( function_exists('dynamic_sidebar') && is_active_sidebar('Footer 4') ) {
                    dynamic_sidebar('Footer 4');
                } else {
                    echo '<div class="widget_text footer-widget">
                        <h4 class="widget-title">Footer Sidebar 4</h4>
                        <div class="textwidget">' . __('Drop a widget on "Footer Sidebar 4" sidebar at Appearance > Widgets page.', 'grandway') . '</div>
                    </div>';                }
?>
            </div>
        <?php else : ?>
            <div class="col-lg-4 col-md-4 col-sm-4">
<?php
                if ( function_exists('dynamic_sidebar') && is_active_sidebar('Footer 1') ) {
                    dynamic_sidebar('Footer 1');
                } else {
                    echo '<div class="widget_text footer-widget">
                        <h4 class="widget-title">Footer Sidebar 1</h4>
                        <div class="textwidget">' . __('Drop a widget on "Footer Sidebar 1" sidebar at Appearance > Widgets page.', 'grandway') . '</div>
                    </div>';                }
?>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
<?php
                if ( function_exists('dynamic_sidebar') && is_active_sidebar('Footer 2') ) {
                    dynamic_sidebar('Footer 2');
                } else {
                    echo '<div class="widget_text footer-widget">
                        <h4 class="widget-title">Footer Sidebar 2</h4>
                        <div class="textwidget">' . __('Drop a widget on "Footer Sidebar 2" sidebar at Appearance > Widgets page.', 'grandway') . '</div>
                    </div>';                }
?>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
<?php
                if ( function_exists('dynamic_sidebar') && is_active_sidebar('Footer 3') ) {
                    dynamic_sidebar('Footer 3');
                } else {
                    echo '<div class="widget_text footer-widget">
                        <h4 class="widget-title">Footer Sidebar 3</h4>
                        <div class="textwidget">' . __('Drop a widget on "Footer Sidebar 3" sidebar at Appearance > Widgets page.', 'grandway') . '</div>
                    </div>';                }
?>
            </div>
        <?php endif; ?>
        </div>
    </div>

<?php endif; ?>
  </div>
  <div class="footer_bottom">
    <div class="container">
      <div class="footer-bottom">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 pull-left">
            <div class="copyright">
              <?php if ($PHT_copyright) echo wp_kses_post($PHT_copyright); ?>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 pull-right">
            <div class="foot_menu" style="text-align:center">
                <?php PhoenixTeam_Utils::create_nav('footer-menu', 1, 'foot_menu'); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
</div>
<!-- /wrapper -->

<?php wp_footer(); ?>

    </body>
</html>
