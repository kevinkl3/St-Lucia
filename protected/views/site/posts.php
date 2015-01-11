<?php
function dashed($name){
	return str_replace(" ", "-", $name);
}
?>

<div class="col-lg-12">
	<h1><?php echo $section->NAME;?></h1>
	<p>
		<?php echo $section->DESCRIPTION;?>
	</p>
</div>

<div class="col-lg-12">
	<?php foreach ($section->POSTS as $post):?>
		<div class="col-lg-12">
			<div class="post-header">
				<h2><?php echo $post->TITLE; ?></h2>
				<div class="fb-share-button" style="float:right;" data-href="http://santalucia.tk/index.php/site/posts/<?php echo dashed($post->TITLE) . "_". $post->ID_POST;?>" data-layout="button_count"></div>
				<i>
					<?php
					$date=date_create($post->CREATION_DATE);
					echo date_format($date,"d/m/Y");
					?>
				</i>
			</div>
			<div class="post-content">
				<?php echo $post->CONTENT; ?></div>
			</div>
		<?php endforeach;?>
	</div>


	<div id="fb-root"></div>
	<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=265123660302034&version=v2.0";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
