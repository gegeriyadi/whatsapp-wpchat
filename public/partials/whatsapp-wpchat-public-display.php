<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       https://gegeriyadi.com
 * @since      1.0.0
 *
 * @package    Whatsapp_Wpchat
 * @subpackage Whatsapp_Wpchat/public/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->

<a href="<?= $whatsappApi ?>" class="wac-stickytext">
    <?= $data['cta'] ?>
    <div class="wac-wa"></div>
</a>
