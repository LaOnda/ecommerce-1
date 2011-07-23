<?php
/**
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.libs.view.templates.layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Session->flash('email'); ?>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php __('CakePHP: the rapid development php framework:'); ?>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('cake.generic');
		echo $html->script('tiny_mce/tiny_mce');
		echo $scripts_for_layout;
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1><?php echo $this->Html->link(__('CakePHP: the rapid development php framework', true), 'http://cakephp.org'); ?></h1>
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>
			<?php echo $this->Session->flash('auth');?>

			<?php echo $content_for_layout; ?>
			<?php if($session->check('Auth.User.admin')){?>
    			<div class="actions">
                	<h3>Product related actions:</h3>
                	<ul>           
                		<li><?php echo $this->Html->link('Add new product', array('controller' => 'products','action' => 'admin_add_product', 'admin' => true));?></li>
                		<li><?php echo $this->Html->link('Show all products', array('controller' => 'products','action' => 'admin_show_all_products', 'admin' => true));?></li>
                	</ul>
                	<br></br>           	
                	<h3>Users related actions: </h3>
                	<ul>
                		<li><?php echo $html->link('Show all registered users', array('controller' => 'users', 'action' => 'admin_show_all_users'));?></li>
                	</ul>
                	<br></br>
                	<h3>Admin: </h3>
                	<ul>
						<li><?php echo $this->Html->link('Logout', array('controller' => 'users','action' => 'admin_logout', 'admin' => true));?></li>           	
                	</ul>
    			</div>
			<?php }?>
		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt'=> __('CakePHP: the rapid development php framework', true), 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>