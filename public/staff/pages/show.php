<?php

require_once '../../../private/initialize.php';

include SHARED_PATH . '/staff_header.php';

$id = $_GET['id'] ?? '1';
?>
<div id="content"></div>
<?php echo 'Page ID: ' . h($id); ?>
</div>
<?php
include SHARED_PATH . '/staff_footer.php'; ?>