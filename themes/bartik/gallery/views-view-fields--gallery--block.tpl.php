<div class="gallery_image">
	<div class="image">
	<a title="<?php print $fields['title']->content;?>" href="<?php print file_create_url($fields['uri']->content); ?>">
	<?php 
		print theme('image_style', array('style_name' => '183x122', 'path' => $fields['uri']->content));
	?>
	</a>
	</div>
	<div class="title"><a title="<?php print $fields['title']->content;?>" href="<?php print file_create_url($fields['uri']->content); ?>"><?php print $fields['title']->content;?></a></div>
</div>