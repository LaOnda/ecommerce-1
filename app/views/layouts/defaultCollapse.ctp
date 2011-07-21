<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-GB">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		Ecommerce shop!
		<?php echo $title_for_layout; ?>
	</title>
	<style type="text/css">
            div.disabled {
                    display: inline;
                    float: none;
                    clear: none;
                    color: #C0C0C0;
            }
    </style>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('costumCollapse');
		echo $this->Html->css('jquery.lightbox-0.5');
		echo $this->Html->script('http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js');
		echo $this->Html->script('jquery');
		echo $this->Html->script('jquery.lightbox-0.5');
		/*echo $this->Html->script('jquery.lightbox-0.5.min');
		echo $this->Html->script('jquery.lightbox-0.5.pack');*/
		echo $scripts_for_layout;
	?>
	<?php echo $session->flash('email');?>
</head>
<body>

<div id="header">
	<p><a href="http://matthewjamestaylor.com/blog/perfect-multi-column-liquid-layouts" title="Perfect multi-column liquid layouts - iPhone compatible">&laquo; Back to the CSS article</a> by <a href="http://matthewjamestaylor.com">Matthew James Taylor</a></p>
	<h1>The Perfect 3 Column Liquid Layout (Percentage widths)</h1>
	<h2>No CSS hacks. SEO friendly. No Images. No JavaScript. Cross-browser &amp; iPhone compatible.</h2>
	<ul>
		<li><a href="http://matthewjamestaylor.com/blog/perfect-3-column.htm" class="active">3 Column <span>Holy Grail</span></a></li>
		<li><a href="http://matthewjamestaylor.com/blog/perfect-3-column-blog-style.htm">3 Column <span>Blog Style</span></a></li>
		<li><a href="http://matthewjamestaylor.com/blog/perfect-2-column-left-menu.htm">2 Column <span>Left Menu</span></a></li>
		<li><a href="http://matthewjamestaylor.com/blog/perfect-2-column-right-menu.htm">2 Column <span>Right Menu</span></a></li>
		<li><a href="http://matthewjamestaylor.com/blog/perfect-2-column-double-page.htm">2 Column <span>Double Page</span></a></li>
		<li><a href="http://matthewjamestaylor.com/blog/perfect-full-page.htm">1 Column <span>Full Page</span></a></li>
		<li><a href="http://matthewjamestaylor.com/blog/perfect-stacked-columns.htm">Stacked <span>columns</span></a></li>
	</ul>
	<div id="spinner" style="display: none; float:right;">
            <?php echo $html->image('ajax-loader.gif'); ?>
	</div>
	<p id="layoutdims">You are here: <?php echo $html->getCrumbs(' -> ','Home')?></p>
</div>
<div class="colmask threecol">
	<div class="colmid">
		<div class="colleft">
			<div class="col1">
				<!-- Column 1 start -->
				<span style="color: red"><?php echo $this->Session->flash(); ?></span>
				<?php echo $content_for_layout?>
				
				defaultCOLLAPSE layout
				
				<h2>Percentage dimensions of the holy grail layout</h2>
				<img src="perfect-3-column-dimensions.gif" width="350" height="370" alt="Three column layout dimensions" />
				<p>All the dimensions are in percentage widths so the layout adjusts to any screen resolution. Vertical dimensions are not set so they stretch to the height of the content.</p>
				<h3>Maximum column content widths</h3>
				<p>To prevent wide content (like long URLs) from destroying the layout (long content can make the page scroll horizontally) the column content divs are set to overflow:hidden. This chops off any content that is wider than the div. Because of this, it's important to know the maximum widths allowable at common screen resolutions. For example, if you choose 800 x 600 pixels as your minimum compatible resolution what is the widest image that can be safely added to each column before it gets chopped off? Here are the figures:</p>
				<dl>
					<dt><strong>800 x 600</strong></dt>
					<dd>Left &amp; right columns: 162 pixels</dd>
					<dd>Center page: 357 pixels</dd>
					<dt><strong>1024 x 768</strong></dt>
					<dd>Left &amp; right columns: 210 pixels</dd>
					<dd>Center page: 459 pixels</dd>
				</dl>
				<h2>The nested div structure</h2>
				<p>I've colour coded each div so it's easy to see:</p>
				<img src="perfect-3-column-div-structure.gif" width="350" height="369" alt="Three column layout nested div structure" />
				<p>The header, colmask and footer divs are 100% wide and stacked vertically one after the other. Colmid is inside colmask and colleft is inside colmid. The three column content divs (col1, col2 &amp; col3) are inside colleft. Notice that the main content column (col1) comes before the other columns.</p>
				<!-- Column 1 end -->
			</div>
			<div class="col2">
				<!-- Column 2 start -->
				<?php echo $this->element('menu');?>
				<!-- Column 2 end -->
			</div>
			
			
		</div>
	</div>
</div>
<div id="footer">
	<p>This page uses the <a href="http://matthewjamestaylor.com/blog/perfect-3-column.htm">Perfect 'Holy Grail' 3 Column Liquid Layout</a> by <a href="http://matthewjamestaylor.com">Matthew James Taylor</a>. View more <a href="http://matthewjamestaylor.com/blog/-website-layouts">website layouts</a> and <a href="http://matthewjamestaylor.com/blog/-web-design">web design articles</a>.</p>
	
	<?php echo $this->element('sql_dump');?>
</div>

</body>
</html>
