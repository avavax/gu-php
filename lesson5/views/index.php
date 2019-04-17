<div class="jumbotron">
  <h1 class="display-4">Галерея</h1>
</div>
<div class="row">
	<?php foreach ($images as $item): ?>
		<div class="col-6 col-sm-4 col-md-3 col-xl-2">
			<a href="<?php echo "picture?id=".$item['id']; ?>">
				<img src="<?php echo GALLERY.'small/'.$item['name']; ?>" alt="<?=$item['name']?>">
				<p>Просмотров <span><?=$item['view']?></span></p>
			</a>
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


