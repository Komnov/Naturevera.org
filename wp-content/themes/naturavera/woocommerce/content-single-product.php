<?php

get_header();

the_post();
global $product;
?>

<div class="container">
	<div class="row">
		<div class="breadcrombs">
			<?php if(function_exists('bcn_display_list')) { bcn_display_list(); }?>
		</div>
		<h1><?= $terms[0]->name?></h1>
	</div>
</div>