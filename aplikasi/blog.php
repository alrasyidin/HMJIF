<div class="awal awal--blog section">
	<div class="container">
		<div class="w-75 mx-auto text-center">
			<h2 class="section__header awal__header">Berbagi Ilmu dan Pengetahuan</h2>
			<p>Saling menguatkan dan memberikan stimulus untuk terus belajar</p>
		</div>
	</div>
</div>

<div class="section search">
	<div class="container">
		<div class="w-50 mx-auto">
			<form>
				<div class="form-group">
					<label class="sr-only"></label>
					<input type="text" name="search" placeholder="Search Here" class="form-control w-100">
					<button type="submit" name="searchbtn" class="search__btn"><i class="fa fa-search"></i></button>
				</div>
			</form>
		</div>
	</div>
</div>

<!-- blog -->
<div class="blog container py-5">
	<!-- <div class="row">
		<div class="col-8 align-self-center"> <h1 class="blog__heading">BLOG</h1> </div>

		<div class="col-4 align-self-center d-flex justify-content-end">
			<a class="blog__btn section__btn text-center" href="#">Lihat Artikel Lainnya &nbsp; <i class="fa fa-arrow-right"></i></a>
		</div>
	</div> -->
	
	<div class="row blog__list">
		<!-- list blog yang ada di database -->
		<?php 
		$posts = getPublishedPost();
		foreach ($posts as $post) { ?>
		<div class="col-xl-4 col-md-6 pt-5">
			<div class="card">
				<img src="<?= "../upload/" . $post["image"]; ?>" class="card-img-top">
				<div class="card-body">
					<h3 class="card-title"><?= $post["judul"]; ?></h3>
					<time><?= date("F j, Y" ,strtotime($post["tgl_dibuat"])); ?></time>
					<p class="card-text pt-3">
						<?= substr($post["isi"],0,125); ?>
					</p>

				</div>
				<div class="card-body">
					<?php  
					$slug = stripslashes($post['slug']);
					?>
					<a href="index.php?p=blog_detail&post-slug=<?= $slug; ?>" class="btn btn-primary">Read More</a>
				</div>
			</div>
		</div>
		<?php } ?>
	</div>
</div>
<!-- end blog -->
