<?php
ob_start();
?>

<h1>Page INFO</h1>
<div class="container">
    <div class="row">
        <div class="col">
        <iframe width="700" height="400" src="https://www.youtube.com/embed/p8cXhNVVXVE?start=26" 
        title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
        encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
include_once 'view/layout.php';
?>