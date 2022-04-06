
<?php 
require_once('../../private/initialize.php'); 

if (!isset($_GET['id'])) {
    redirect_to(url_for('salamanders/index.php'));
}
$id = $_GET['id'];
$salamanderName = '';
if (is_post_request()) {
    $salamanderName = $_POST['salamanderName'];
    echo "Salamander Name: $salamanderName<br>";
} 

$pageTitle = "Edit";
include (SHARED_PATH . '/salamander-header.php');
?>
<h1>Stub for Delete Salamander</h1>
<a href= "<?= url_for('/salamanders/index.php'); ?>">&laquo; Back to List</a>
<!-- add label -->
 <?php include(SHARED_PATH . '/salamander-footer.php'); ?>
