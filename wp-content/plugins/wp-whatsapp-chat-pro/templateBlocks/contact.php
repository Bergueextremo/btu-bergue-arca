<a class="qlwapp-account" data-action="<?php echo ($attributes['chat'] ? 'chat' : 'open'); ?>" data-timefrom="<?php echo esc_attr($attributes['timefrom']); ?>" data-timeto="<?php echo esc_attr($attributes['timeto']); ?>" data-timeout="<?php /* premium */ echo esc_attr($attributes['timeout']); ?>" data-phone="<?php echo esc_attr($attributes['phone']); ?>" data-timedays="<?php echo htmlentities(json_encode($attributes['timedays']), ENT_QUOTES, 'UTF-8'); ?>" data-timezone="<?php echo esc_attr(qlwapp_get_timezone_offset($attributes['timezone'])); ?>" data-message="<?php echo esc_html($attributes['message']); ?>" href="javascript:void(0);" target="_blank">
    <?php if (!empty($attributes['avatar'])) : ?>
        <div class="qlwapp-avatar">
            <div class="qlwapp-avatar-container">
                <img alt="<?php printf("%s %s", esc_html($attributes['firstname']), esc_html($attributes['lastname'])); ?>" src="<?php echo esc_url($attributes['avatar']); ?>">
            </div>
        </div>
    <?php endif; ?>
    <div class="qlwapp-info">
        <span class="qlwapp-label"><?php echo esc_html($attributes['label']); ?></span>
        <span class="qlwapp-name"><?php printf('%s %s', esc_html($attributes['firstname']), esc_html($attributes['lastname'])); ?></span>
        <!--<time class="qlwapp-label"><?php printf('%s %s %s %s', esc_html__('Available from', 'wp-whatsapp-chat'), esc_html($attributes['timefrom']), esc_html__('to', 'wp-whatsapp-chat'), esc_html($attributes['timeto'])); ?></time>-->
        <?php if (!empty($attributes['timefrom']) && !empty($attributes['timeto']) && ($attributes['timefrom'] != $attributes['timeto'])) : ?>
            <span class="qlwapp-time"><?php printf('%s <span class="from">%s</span> %s <span class="to">%s</span>', esc_html__('Available from', 'wp-whatsapp-chat'), esc_html($attributes['timefrom']),  esc_html__('to', 'wp-whatsapp-chat'), esc_html($attributes['timeto'])); ?></span>
        <?php endif; ?>
        <?php if(!empty($attributes['timedays'])): ?>
        <span class="qlwapp-days qlwapp-hidden"><?php printf('%s <span class="day0">%s</span><span class="day1">%s</span><span class="day2">%s</span><span class="day3">%s</span><span class="day4">%s</span><span class="day5">%s</span><span class="day6">%s</span>', esc_html__('Available since', 'wp-whatsapp-chat'), esc_html('Sunday', 'wp-whatsapp-chat'), esc_html('Monday', 'wp-whatsapp-chat'), esc_html('Tuesday', 'wp-whatsapp-chat'), esc_html('Wednesday', 'wp-whatsapp-chat'), esc_html('Thursday', 'wp-whatsapp-chat'), esc_html('Friday', 'wp-whatsapp-chat'), esc_html('Saturday', 'wp-whatsapp-chat')); ?></span>
        <?php endif;  ?>
    </div>
</a>
<?php
