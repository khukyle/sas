<?php 
require_once('../../private/initialize.php'); 

if (is_post_request()) {
    $salamanderName = $_POST['salamanderName'];
    echo "Salamander Name: $salamanderName";
} else {
   // redirect_to(url_for('/salamanders/new.php'));
}

$pageTitle = "Create";
include (SHARED_PATH . '/salamander-header.php');
?>

<h1>Stub for Create Salamander</h1>
<a href= "<?= url_for('/salamanders/index.php'); ?>">&laquo; Back to List</a>

<?php include (SHARED_PATH . '/salamander-footer.php'); ?>