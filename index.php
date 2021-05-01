<?php
require_once('config/strings.php');
?>
<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
	<title><?= $TITLE_BLOG ?> by <?= $AUTHOR ?></title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<style>
		.posts .image {
			height: 246px;
			object-fit: cover;
		}
	</style>
</head>

<body class="is-preload">

	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Main -->
		<div id="main">
			<div class="inner">

				<?php
				include('includes/header.php');
				?>

				<!-- Banner -->
				<section id="banner">
					<div class="content">
						<header>
							<h1>I’m <?= $TITLE_BLOG ?><br />
								by <?= $AUTHOR ?></h1>
							<p>A free and fully responsive site template</p>
						</header>
						<p>Aenean ornare velit lacus, ac varius enim ullamcorper eu. Proin aliquam facilisis ante interdum congue. Integer mollis, nisl amet convallis, porttitor magna ullamcorper, amet egestas mauris. Ut magna finibus nisi nec lacinia. Nam maximus erat id euismod egestas. Pellentesque sapien ac quam. Lorem ipsum dolor sit nullam.</p>
						<ul class="actions">
							<li><a href="#" class="button big">Leia mais</a></li>
						</ul>
					</div>
					<span class="image object">
						<img src="https://placekitten.com/736/512" alt="" />
					</span>
				</section>

				<!-- Section -->
				<section>
					<header class="major">
						<h2>Destaques</h2>
					</header>
					<div class="features">
						<article>
							<span class="icon fa-gem"></span>
							<div class="content">
								<h3>Portitor ullamcorper</h3>
								<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
							</div>
						</article>
						<article>
							<span class="icon solid fa-paper-plane"></span>
							<div class="content">
								<h3>Sapien veroeros</h3>
								<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
							</div>
						</article>
						<article>
							<span class="icon solid fa-rocket"></span>
							<div class="content">
								<h3>Quam lorem ipsum</h3>
								<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
							</div>
						</article>
						<article>
							<span class="icon solid fa-signal"></span>
							<div class="content">
								<h3>Sed magna finibus</h3>
								<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
							</div>
						</article>
					</div>
				</section>

				<!-- Section -->
				<section>
					<header class="major">
						<h2>Postagens</h2>
					</header>
					<div class="posts">
						<article>
							<a href="#" class="image"><img src="https://placekitten.com/400/246?image=1" alt="" /></a>
							<h3>Interdum aenean</h3>
							<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
							<ul class="actions">
								<li><a href="#" class="button">Mais</a></li>
							</ul>
						</article>
						<article>
							<a href="#" class="image"><img src="https://placekitten.com/400/246?image=2" alt="" /></a>
							<h3>Nulla amet dolore</h3>
							<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
							<ul class="actions">
								<li><a href="#" class="button">Mais</a></li>
							</ul>
						</article>
						<article>
							<a href="#" class="image"><img src="https://placekitten.com/400/246?image=3" alt="" /></a>
							<h3>Tempus ullamcorper</h3>
							<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
							<ul class="actions">
								<li><a href="#" class="button">Mais</a></li>
							</ul>
						</article>
						<article>
							<a href="#" class="image"><img src="https://placekitten.com/400/246?image=4" alt="" /></a>
							<h3>Sed etiam facilis</h3>
							<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
							<ul class="actions">
								<li><a href="#" class="button">Mais</a></li>
							</ul>
						</article>
						<article>
							<a href="#" class="image"><img src="https://placekitten.com/400/246?image=5" alt="" /></a>
							<h3>Feugiat lorem aenean</h3>
							<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
							<ul class="actions">
								<li><a href="#" class="button">Mais</a></li>
							</ul>
						</article>
						<article>
							<a href="#" class="image"><img src="https://placekitten.com/400/246?image=6" alt="" /></a>
							<h3>Amet varius aliquam</h3>
							<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
							<ul class="actions">
								<li><a href="#" class="button">Mais</a></li>
							</ul>
						</article>
					</div>
				</section>

			</div>
		</div>

		<?php
		require_once('includes/sidebar.php');
		?>

	</div>

	<?php
	require_once('includes/scripts.php');
	?>

</body>

</html>