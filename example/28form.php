<?php 
echo '<pre>';
$hobby = @$_POST['hobby'];
?>
<input type="checkbox" name="hobby[]" <?php echo @in_array('0', $hobby) ? 'checked="checked"' : ''; ?> value="0">
<input type="checkbox" name="hobby[]" <?php echo @in_array('1', $hobby) ? 'checked="checked"' : ''; ?> value="1">
<input type="checkbox" name="hobby[]" <?php echo @in_array('2', $hobby) ? 'checked="checked"' : ''; ?> value="2">
<input type="checkbox" name="hobby[]" <?php echo @in_array('3', $hobby) ? 'checked="checked"' : ''; ?> value="3">
<input type="checkbox" name="hobby[]" <?php echo @in_array('4', $hobby) ? 'checked="checked"' : ''; ?> value="4">
<input type="checkbox" name="hobby[]" <?php echo @in_array('5', $hobby) ? 'checked="checked"' : ''; ?> value="5">