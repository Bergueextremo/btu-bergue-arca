  <?php if ($attributes['button'] === 'yes') : ?>
    <div id="qlwapp" class="qlwapp-premium <?php printf("qlwapp-%s qlwapp-%s qlwapp-%s qlwapp-%s qlwapp-%s", esc_attr($attributes['layout']),  esc_attr($attributes['position']), esc_attr($attributes['context']), esc_attr($attributes['context']) === 'block-footer' ? esc_attr($attributes['devices']) : '',  esc_attr($attributes['rounded'] === 'yes' ? 'rounded' : 'square')); ?>" style="display: none;">
      <div class="qlwapp-container">
        <?php echo $content;
        ?>
        <a class="qlwapp-toggle" data-action="<?php echo ($attributes['box'] === 'yes' ? 'box' : 'open'); ?>" data-phone="<?php echo esc_attr($attributes['phone']); ?>" data-timefrom="<?php echo esc_attr($attributes['timefrom']); ?>" data-timedays="<?php echo htmlentities(json_encode($attributes['timedays']), ENT_QUOTES, 'UTF-8'); ?>" data-timeto="<?php echo esc_attr($attributes['timeto']); ?>" data-timeout="<?php echo esc_attr($attributes['timeout']); ?>" data-phone="<?php echo esc_attr($attributes['phone']); ?>" data-timezone="<?php echo esc_attr(qlwapp_get_timezone_offset($attributes['timezone'])); ?>" data-message="<?php echo esc_html($attributes['message']); ?>" href="javascript:void(0);" target="_blank">
          <?php if ($attributes['icon']) : ?>
            <i class="qlwapp-icon <?php echo esc_attr($attributes['icon']); ?>"></i>
          <?php endif; ?>
          <i class="qlwapp-close" data-action="close">&times;</i>
          <?php if ($attributes['text']) : ?>
            <span class="qlwapp-text"><?php echo esc_html($attributes['text']); ?></span>
          <?php endif; ?>
          <?php if (!empty($attributes['timefrom']) && !empty($attributes['timeto']) && ($attributes['timefrom'] != $attributes['timeto'])) : ?>
            <span class="qlwapp-time"><?php printf('%s <span class="from">%s</span> %s <span class="to">%s</span>', esc_html__('Available from', 'wp-whatsapp-chat-pro'), esc_html($attributes['timefrom']),  esc_html__('to', 'wp-whatsapp-chat-pro'), esc_html($attributes['timeto'])); ?></span>
          <?php endif; ?>
        </a>
      </div>
    </div>
  <?php else : ?>
    <div id="qlwapp" class="qlwapp-premium qlwapp-show <?php printf("qlwapp-%s qlwapp-%s qlwapp-%s", esc_attr($attributes['layout']),  esc_attr($attributes['position']), esc_attr($attributes['rounded'] === 'yes' ? 'rounded' : 'square')); ?>">
      <div class="qlwapp-container qlwapp-button-disabled">
        <?php echo $content;
        ?>
      </div>
    </div>
  <?php endif; ?>