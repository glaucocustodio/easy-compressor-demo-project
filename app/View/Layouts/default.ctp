<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon').PHP_EOL.PHP_EOL.PHP_EOL;
        
        // Add files to 'layout_script' block
        $this->Html->script(array('jquery.js', 'modernizr.js'), array('inline' => false, 'block' => 'layout_script'));
        // Get layout scripts
		echo $this->EasyCompressor->getLayoutScript();
        
        
        // Add files to default script block
        $this->Html->script(array('carousel.js'), array('inline' => false));
	?>
</head>
<body>
	<div id="container">
		<div id="header">

		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

            <h1>Welcome</h1>
            <p>EasyCompressor demo project. See more in my <a href="https://github.com/glaucocustodio/">GitHub</a>.</p>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">

		</div>
		<?php 
		// Get view scripts
		echo $this->EasyCompressor->getViewScript(); 
		?>
	</div>
</body>
</html>
