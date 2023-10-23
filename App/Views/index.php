<?= $name ?>

<?php
var_dump($details);
?>
<form action="/upload" method="post" enctype="multipart/form-data">
    <input type="file" name="receipt" />
    <button type="submit">Upload</button>
</form>