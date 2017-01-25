<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php if(!empty($title)){ echo $title;} ?></title>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
#sng {
  padding: 0;
}
.error{color:#f00;}
</style>
 <script>
	$(document).ready(function() {
		$(".hidediv").show().delay(5000).fadeOut();
	});
</script>    
     
</head>
<body>

<div class="container">
   <?php echo form_open('',array('method'=>"post",'enctype'=>"multipart/form-data")); ?>
    <div class="col-md-offset-4 col-md-4 col-md-offset-4">
       <?php if(!empty($error)){ echo "<div class='hidediv error'>$error</div>";   } ?> 
       <?php if(!empty($success)){ echo "<div class='alert alert-success'>$success</div>";   } ?>
    <div class="form-group">
      <label for="sng">Mp3 Song:</label>
      <input type="file" class="form-control" id="sng" name="uploadSong">
    </div>
    
    <button type="submit" name='save' class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
