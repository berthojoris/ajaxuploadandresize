<?php
include('db.php');
session_start();
$session_id='1'; // User login session value
?>

<div id='preview'>
</div>
<form id="imageform" method="post" enctype="multipart/form-data" action='ajaximage.php'>
Upload image: 
<div id='imageloadstatus' style='display:none'><img src="loader.gif" alt="Uploading...."/></div>
<div id='imageloadbutton'>
<input type="file" name="photoimg" id="photoimg" />

</div>
</form>