<?php
ob_start();
?>

<h1>Aquarium Plants</h1>
<br>

<?php
ViewPlants::AllPlants($arr);
$content = ob_get_clean();
include_once 'view/layout.php';
?>