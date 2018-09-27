<?php

require_once '../../../private/initialize.php';

$id = $_GET['id'] ?? '1';
$page_title = 'Show Subjects'; ?>
<?php include SHARED_PATH . '/staff_header.php'; ?>


<div id="content">
    <a class="back-link" href="<?php echo url_for('/staff/subjects/index.php') ?>">&laquo; Back to List</a>
    <div class="page show">
        <h1><?php echo 'Page ID: ' . h($id); ?></h1>
    </div>
</div>

<?php include SHARED_PATH . '/staff_footer.php'; ?>