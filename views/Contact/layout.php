<?php $title = 'Contact App | 1034'; ?>
<?php $logo = 'public/contact.png'; ?>

<?php
ob_start();
include '/assets/css/style.css';
$style = ob_get_clean();
?>
<?php include_once 'views/layout/sidebar.php'; ?>

<?php
if (isset($url)) {
    include_once $url . '.php';
}
?>

<?php include_once 'views/layout/sidebar.php'; ?>