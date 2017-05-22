<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="message alert alert-error alert-dismissible" onclick="this.classList.add('hidden');"><?php echo $message ?></div>
