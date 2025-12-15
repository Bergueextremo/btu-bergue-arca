<div class="<?php echo esc_attr($block->context['button']) == 'yes' ? 'qlwapp-box-container' : ''; ?>">
  <div data-autoopendelay="<?php echo esc_attr($attributes['auto_delay_open']); ?>" class="qlwapp-box <?php echo esc_attr($attributes['auto_open']) == 'yes' ? 'auto-load' : ''; ?>">
    <div class="qlwapp-header">
      <div class="qlwapp-carousel">
        <?php if (!empty($attributes['header'])) : ?>
          <div class="qlwapp-slide">
            <?php if ($block->context['button'] === 'yes') :  ?>
              <i class="qlwapp-close" data-action="close">&times;</i>
            <?php endif; ?>
            <div class="qlwapp-description">
              <?php echo wpautop(wp_kses_post(wpautop($attributes['header']))); ?>
            </div>
          </div>
        <?php endif; ?>
        <div class="qlwapp-slide">
          <div class="qlwapp-contact">
            <div class="qlwapp-previous" data-action="previous">
              <i class="qlwf-arrow_left"></i>
            </div>
            <div class="qlwapp-info">
              <span class="qlwapp-name">%</span>
              <span class="qlwapp-label">%</span>
            </div>
            <div class="qlwapp-avatar">
              <div class="qlwapp-avatar-container">
                <img alt="#" src="#" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="qlwapp-body">
      <div class="qlwapp-carousel">
        <div class="qlwapp-slide">
          <?php if ($block->parsed_block['innerBlocks']) : ?>
            <?php echo $content; ?>
          <?php else : ?>
            <span class="qlwapp-no-contacts"><?php esc_html_e('No user found for this page.', 'wp-whatsapp-chat-pro'); ?></span>
          <?php
          endif; ?>
        </div>
        <div class="qlwapp-slide">
          <div class="qlwapp-chat">
            <div class="qlwapp-message">
            </div>
            <!--<div class="qlwapp-user"></div>-->
          </div>
        </div>
      </div>
    </div>
    <?php if (!empty($attributes['footer'])) : ?>
      <div class="qlwapp-footer" data-contactstimeout="">
        <?php echo wpautop(wp_kses_post($attributes['footer'])); ?>
      </div>
    <?php endif; ?>
    <div class="qlwapp-response" data-action="response">
      <pre></pre>
      <textarea maxlength="500" name="message" placeholder="<?php echo esc_html($attributes['response']); ?>" aria-label="<?php echo esc_html($attributes['response']); ?>" tabindex="0"></textarea>
      <div class="qlwapp-buttons">
        <i class="qlwf-emoji"></i>
        <a class="qlwapp-reply" data-action="open" data-message="<?php echo esc_html($block->context['message']); ?>" href="javascript:void(0);" target="_blank">
          <i class="qlwf-send"></i>
        </a>
      </div>
    </div>
  </div>
</div>