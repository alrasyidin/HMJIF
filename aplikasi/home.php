<?php  
include_once ROOT_PATH . "/core/init.php";

try {
	$posts = getPublishedPost();
} catch (Exception $e) {
	echo $e->getMessage();
}
?>

<!-- welcome -->
<!-- welcome ini berisi headline WEBSITE HMJIF nanti dikemabangkan menggunakan carousel atau slider -->
<div class="welcome section">
	<div class="welcome__overlay">
	<div class="container-fluid py-5">
		<h1 class="welcome__header">WELCOME <span>TO</span> <br> HMJIF INFORMATIKA UNLA WEBSITE</h1>
		
		<p class="lead w-50 welcome__par section__desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
		
		<button class="btn btn-primary shadow-lg font-weight-bold section__btn">LEARN MORE</button>
	</div>
	</div>
</div>
<!-- end welcome -->

<!-- sambutan -->
<div class="sambutan container">
	<h1 class="py-3 text-center">SAMBUTAN</h1>
	<p class="pb-5 text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
	<div class="sambutan__ketua row">
		<div class="col-md-6">
			<?php $url =  ROOT_PATH .'assets/images/ketua_himpunan.jpeg'; ?>
			<img src="../assets/images/ketua_himpunan.jpeg" class="img-fluid">
		</div>
		<!-- <div class="clearfix"></div> -->
		<div class="sambutan__desc col-md-6">
			<h2>Sambutan Ketua</h2>
			<p class="lead">Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			
			<blockquote class="blockquote">
			  <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
			  <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
			</blockquote>
		</div>
	</div>

	<div class="sambutan__pengurus py-5 row">
		<div class="sambutan__desc col-md-6">
			<h2>Sambutan Pengurus</h2>
			<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima illo a accusantium officia odio beatae.</p>
			
			<p class="lead">Duis aute irure dolor in reprehenderit in voluptate velit esse
			  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
			  
		</div>

		<div class="col-md-6">
			<img src="../assets/images/ketua_himpunan.jpeg" class="img-fluid">
		</div>
	</div>
</div>
<!-- end sambutan -->

<!-- blog -->
<div class="blog container py-5">
	<div class="row">
		<div class="col-8 align-self-center"> <h1 class="blog__heading">BLOG</h1> </div>

		<div class="col-4 align-self-center d-flex justify-content-end">
			<a class="blog__btn section__btn text-center" href="#">Lihat Artikel Lainnya &nbsp; <i class="fa fa-arrow-right"></i></a>
		</div>
	</div>
	
	<div class="row blog__list">
		<!-- list blog yang ada di database -->
		<?php foreach ($posts as $post) { ?>
		<div class="col-xl-4 col-md-6 pt-5">
			<div class="card">
				<img src="<?= BASE_URL . "images/" . $post["image"]; ?>" class="card-img-top">
				<div class="card-body">
					<h3 class="card-title"><?= $post["judul"]; ?></h3>
					<time><?= date("F j, Y" ,strtotime($post["tgl_dibuat"])); ?></time>
					<p class="card-text pt-3">
						<?= substr($post["isi"],0,125); ?>
					</p>

				</div>
				<div class="card-body">
					<a href="detail_post.php?post-slug=<?= $post['slug']; ?>" class="btn btn-primary">Read More</a>
				</div>
			</div>
		</div>
		<?php } ?>
	</div>
</div>
<!-- end blog -->

<!-- subscribe -->
<div class="subscribe py-5">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-6 align-self-center">
				<h1 class="subscribe__header">SUBCRIBE OUR NEWSLETTER</h1>
			</div>
			<div class="col-md-4 col-6 align-self-center d-flex justify-content-end">
				<a href="#" class="section__btn subscribe__btn text-center">SUBCSCRIBE <i class="fa fa-heart"></i></a>
			</div>
		</div>
	</div>
</div>
<!-- end subscribe -->


