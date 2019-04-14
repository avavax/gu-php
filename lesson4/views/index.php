<div class="jumbotron">
  <h1 class="display-4">Галерея</h1>
</div>
<div class="row">
	<?php foreach ($params as $item): ?>
		<div class="col-6 col-sm-4 col-md-3 col-xl-2">
			<img modal-win 
			data-img ="<?php echo GALLERY.'big/'.$item; ?>"
			src="<?php echo GALLERY.'small/'.$item; ?>" alt="<?=$item?>">
		</div>
	<?php endforeach; ?>
</div>

<br><br>
<div class="row">
	<form method="post" enctype="multipart/form-data">
    	<input type="file" name="myimg">
    	<input type="submit" name="load" value="Загрузить">
	</form>	
</div>

<div class="overlay">
    <div class="modal-wrap modal-animation">
		<div class="modal-close">&times;</div>
		<img class = "modal-img" src="/" alt="picture">
	</div>
</div>
<script src="js/modal.js"></script>



