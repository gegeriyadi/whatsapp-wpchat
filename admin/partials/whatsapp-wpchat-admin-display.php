<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://gegeriyadi.com
 * @since      1.0.0
 *
 * @package    Whatsapp_Wpchat
 * @subpackage Whatsapp_Wpchat/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->

<div class="whatsapp-wpchat-admin">

<script defer src="https://use.fontawesome.com/releases/v5.0.4/js/all.js"></script>

<h1><i class="fab fa-whatsapp"></i> WhatsApp Wp Chat</h1>

<p>Plugin ini memungkinkan anda menambahkan tombol chat dikanan bawah website anda. Visitor yang mengklik tombol tersebut akan diarahkan kesebuah halaman yang meredirect ke aplikasi whatsapp di gadget nya masing-masing atau di whatsapp web jika visitor membuka whatsapp via dekstop.</p>

<div class="card">

<form method="POST">

<div class="form-group">
<label><h2>Nomor WhatsApp</h2></label>
<input type="text" name="nomorWhatsapp" id="nomorWhatsapp" value="<?= $data['nomorWhatsapp'] ?>">
</div>

<div class="form-group">
<label><h2>Call to Action</h2></label>
<input type="text" name="cta" id="cta" value="<?= $data['cta'] ?>">
</div>

<div class="form-group">
<label><h2>Isi Chat</h2></label>
<textarea id="isiChat" name="isiChat" cols="80" rows="10"><?= stripslashes($data['isiChat']) ?></textarea>
</div>

<button class="button-primary">Save Settings</button>

</form>

</div>

</div>