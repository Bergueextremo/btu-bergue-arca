<?php
include_once(QLWAPP_PLUGIN_DIR . 'includes/controllers/QLWAPP_Controller.php');

class QLWAPP_PRO_Block_Controller extends QLWAPP_Controller
{

  protected static $instance;


  function init()
  {
    // add_action('admin_head', array($this, 'add_js'));
    add_action('admin_footer-post-new.php', array($this, 'action_admin_footer'), 10);
    add_action('admin_footer-post.php', array($this, 'action_admin_footer'), 10);
  }


  function action_admin_footer()
  {
?>
    <script>
      if ((typeof(wp) !== 'undefined') && (typeof( wp.hooks) !== 'undefined')) {
        wp.hooks.addFilter('qlwappTemplateLock', 'qlwapp', function() {
          return false;
        })
        wp.hooks.addFilter('qlwappShowTime', 'qlwapp', function() {
          return true;
        })
      }
    </script>
<?php
  }

  public static function instance()
  {
    if (!isset(self::$instance)) {
      self::$instance = new self();
      self::$instance->init();
    }
    return self::$instance;
  }
}

QLWAPP_PRO_Block_Controller::instance();
