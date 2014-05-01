<?php
	$custom_style = '';
	$badge_type = $atts['badge_type'];
	$alignment = $atts['alignment'];
	if($alignment == 'left') $custom_style = 'float: left;';
	if($alignment == 'right') $custom_style = 'float: right;';
	if($alignment == 'center') $custom_style = 'margin: auto;';
?>
<div class="wp_t_badge" style="<?php echo $custom_style; ?>">
	<?php
		if($badge_type == 'translator'):
	?>
			<a href="http://wp-translations.org/"><img src="http://wp-translations.org/wp-content/uploads/2014/05/wp_t_badge_translator.png" alt="I am a Translator in WP-Translations Community" title="I am a Translator in WP-Translations Community" width="150" height="134" /></a>
	<?php
		elseif($badge_type == 'developer'):
	?>
			<a href="http://wp-translations.org/"><img src="http://wp-translations.org/wp-content/uploads/2014/05/wp_t_badge_developer.png" alt="I Use WP-Translations Community for my i18n" title="I Use WP-Translations Community for my i18n" width="150" height="134" /></a>
	<?php
		elseif($badge_type == 'donator'):
	?>
	<a href="http://wp-translations.org/"><img src="http://wp-translations.org/wp-content/uploads/2014/05/wp_t_badge_donator.png" alt="I am a Proud Donator of WP-Translations Community" title="I am a Proud Donator of WP-Translations Community" width="150" height="134" /></a>
	<?php
		elseif($badge_type == 'supporter'):
	?>
			<a href="http://wp-translations.org/"><img src="http://wp-translations.org/wp-content/uploads/2014/05/wp_t_badge_supporter.png" alt="I am a big Fan of WP-Translations Community" title="I am a big Fan of WP-Translations Community" width="150" height="134" /></a>
	<?php
		endif;
	?>
</div>