<div id = "registry"> 
    <?php
function rpHash($value) {
	$hash = 5381;
	$value = strtoupper($value);
	for($i = 0; $i < strlen($value); $i++) {
		$hash = (($hash << 5) + $hash) + ord(substr($value, $i));
	}
	return $hash;
}
?>

<?php
if (rpHash($_POST['defaultReal']) == $_POST['defaultRealHash']) {
?>
<p class="accepted">You have entered the "real person" value correctly and the form has been processed.</p>
<?php
} else {
?>
<p class="rejected">You have NOT entered the "real person" value correctly and the form has been rejected.</p>
<?php
}
?>
 
   <form id ="border" action ="" method = "post">
 <div id="button"> 
        <input type ="submit" id ="next" name = "submit" value = ">" />
    </div>
       
   </form>
	</div>
