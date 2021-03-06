<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="generator" content="PhenomCMS {app_version}" />
<meta http-equiv="author" content="{app_author}" />
<meta http-equiv="keywords" content="{app_keywords}" />

<link rel='stylesheet' id='wpcirrus-cloudStyle-css'  href='{theme_url}/jquery/cloud/cloud.css?ver=0.5.3' type='text/css' media='all' />
<link rel="stylesheet" type="text/css" href="{theme_url}/style.css" />
<link rel="stylesheet" href="{theme_url}/jquery/album/images/style.css" type="text/css" />

<script type="text/javascript" src="{theme_url}/jquery/album/jquery-1.4.3.min.js"></script>
<script type="text/javascript" src="{theme_url}/jquery/album/jquery.tools.js"></script>
<script type="text/javascript" src="{theme_url}/jquery/album/jquery.custom.js"></script>
<script type='text/javascript' src='{theme_url}/jquery/cloud/cirrus.js?ver=0.5.3'></script>

<!-- Pirobox setup and styles -->
<script type="text/javascript" src="{theme_url}/jquery/album/pirobox.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$().piroBox({
			my_speed: 400, //animation speed
			bg_alpha: 0.1, //background opacity
			slideShow : true, // true == slideshow on, false == slideshow off
			slideSpeed : 4, //slideshow duration in seconds(3 to 6 Recommended)
			close_all : '.piro_close,.piro_overlay'// add class .piro_overlay(with comma)if you want overlay click close piroBox

	});
});
</script>

<title><?php echo $app_title ?></title>
</head>
<body>
	
<div id="header"> <a href="#"><img src="{theme_url}/images/logo.png" title="Affiliate Promo logo" id="logo" alt="Logo" /></a> 
  <ul id="navBar">
		    <li class="<?php echo $home_current ?>"><a href="{base_url}">Home</a></li>
			<?php 
			if (!empty($page_list)) { 
			foreach($page_list as $row=>$value) {
			?>
			<li class="<?php echo $value['page_current'] ?>"><a href="<?php echo $value['page_link'] ?>" target="<?php echo $value['page_target'] ?>"><?php echo $value['page_title'] ?></a></li>
			<?php } } ?>
  </ul>
</div>
    
<div id="welcomeMessage"> 
  <h1><?php echo $app_sitename ?></h1>
  <p><?php echo $app_slogan ?></p>
</div>
    <div id="wrapper">
    	<div id="secWrapper">
        	<div id="container" class="clearfix">


            	<div id="mainCol" class="clearfix">

                    <h3 id="posts">Gallery</h3>

		<?php if (!empty($photo)) { ?>

                    <ul id="maincon">
                    <li class="clearfix last">
					<h2><?php if (!empty($album_title)) echo $album_title; else echo "Gallery" ?></h2>
					<p><?php if (!empty($album_desc)) echo $album_desc; ?></p>
					<div class="listview_common">
					<?php foreach($photo as $row=>$value) { ?>
					<a href="<?php echo $value['photo_image'] ?>" class="pirobox_gal" title="<?php echo $value['photo_desc'] ?>">
					<img src="<?php echo $value['photo_thumbnail'] ?>" alt="">
					</a>
					<?php } ?>
					</div>
                    </li>
					<li><p class="more"><?php echo anchor(reduce_double_slashes(config_item('base_url').config_item('index_page').'/gallery/'), '&laquo; Kembali ke daftar gallery'); ?></p></li>
                    </ul>
		<?php } ?>

				<?php if (!empty($widget1_title) & $widget1_visible == '1') { ?>
                    <h3 id="posts"><?php echo $widget1_title ?></h3>
                    <ul id="maincon">
	                    <li class="clearfix last">
							<p class="more"><?php echo $widget1_content ?></p>
						</li>
					</ul>
				<?php } ?>

				<?php if (!empty($widget2_title) & $widget2_visible == '1') { ?>
                    <h3 id="posts"><?php echo $widget2_title ?></h3>
                    <ul id="maincon">
	                    <li class="clearfix last">
							<p class="more"><?php echo $widget2_content ?></p>
						</li>
					</ul>
				<?php } ?>

                </div>



                <div id="secCol">

              		<fieldset id="search">
                    	<h4>Pencarian:</h4>
						    <form method="post" class="search" action="{search_url}">
                        	<p class="clearfix">
                            <input name="{search_input_name}" id="keyword" type="text" value="" />
							<input name="search" id="submit" type="submit" value="" />
							</p>
	    					</form>
                    </fieldset>

		<?php if ($app_use_loginform == '1') { ?>
              		<fieldset id="login">
                    	<h4>Members login</h4>
							<form action="<?php echo config_item('base_url').config_item('index_page') ?>/cpm/login/" method="post">
                        	<p class="clearfix"><label for="username">Username</label>
                            <input name="user" id="username" type="text" value="" /></p>
                            <p class="clearfix"><label for="password">Password</label>
							<input name="pass" id="password" type="text" value="" /></p>
                            <p class="clearfix check">
                        	<input name="submit" id="submit" type="submit" value="" /></p>
					    	</form>
                    </fieldset>
		<?php } ?>



		<?php 
		if (!empty($menu)) {
		foreach($menu as $row_parent=>$value_parent) {
		?>
        <h3 id="news"><?php echo $value_parent['menu_name'] ?></h3>
        <ul>
		  <?php foreach ($value_parent['menu_data'] as $row_child=>$value_child) { ?>
          <li class="clearfix"> 
            <h4><a href="<?php echo $value_child['menu_link'] ?>" target="<?php echo $value_child['menu_target'] ?>"><?php echo $value_child['menu_title'] ?></a></h4>
          </li>
		  <?php } ?>
        </ul>
		<?php } } ?>





		<?php if (!empty($category_list)) { ?>
        <h3 id="news">Category</h3>
        <ul>
			<?php foreach($category_list as $row=>$value) { ?>
			<li class="clearfix"><h4><a href="<?php echo $value['category_url'] ?>"><?php echo $value['category_name'] ?></a><h4><?php echo $value_child['posting_title'] ?></h4></li>
			<?php } ?>
		</ul>
		<?php } ?>


		<?php 
		if (!empty($posting)) {
		foreach($posting as $row_parent=>$value_parent) {
		?>
        <h3 id="test"><?php echo $value_parent['posting_category'] ?></h3>
        <ul>
			<?php foreach ($value_parent['posting_data'] as $row_child=>$value_child) { ?>
          	<li class="clearfix"> 
		     <h4><?php echo $value_child['posting_title'] ?></h4>
           	 <p><?php echo $value_child['posting_little_content'] ?></p>
           	 <p class="test"><span><?php echo $value_child['posting_date'] ?></span>, <a href="<?php echo $value_child['posting_url'] ?>">Selengkapnya &raquo;</a></p>
          	</li>
			<?php } ?>
        </ul>
		<?php } } ?>


		<?php if ($app_use_tagscloud == '1') { ?>
		<?php if (!empty($tags)) { ?>
        <h3 id="news">Tags Cloud</h3>
		<ul>
			<li class="clearfix"> 
			<script type="text/javascript">
			var wpcirrusRadius =80;
			var wpcirrusRefreshrate = 0;
			var wpcirrusFontColor;
			var wpcirrusBackgroundColor;
			</script>
			<div style="overflow:hidden;height: 150px; width: 100%;display:block;"  id="cirrusCloudWidget" onmousemove="calcRotationOffset(event.clientX, event.clientY, this);" onmouseout="resetRotationOffset();">
			<?php foreach ($tags as $row=>$value) { ?>
				<a href='<?php echo $value['tag_url'] ?>' style='font-size: <?php echo rand(10,16) ?>px;'><?php echo $value['tag_name'] ?></a>
			<?php 
				} 
			?>
			</div>
			</li>
		</ul>
		<?php } } ?>


		<?php if ($app_use_polling == '1') { ?>
		<?php if (!empty($polling_topic)) { ?>
        <h3 id="news">Polling</h3>
		<ul>
			<li class="clearfix"> 
		<form method="post" action="{polling_url}">
		<p>{polling_topic}</p>
		{polling_selection}
		<p><input type="radio" name="pil" value="{id}" {checked} {polling_disabled}> {name}</p>
		{/polling_selection}
		<p><input name="submit" id="submit" type="submit" value="Vote" {polling_disabled}> <input name="submit" type="submit" value="Result"></p>
		</form>
			</li>
		</ul>
		<?php } ?>
		<?php } ?>

                    
                </div>
            </div>
        </div>
    </div>
    <div id="footer">
    	<ul>
		    <li><a href="{base_url}">Home</a></li>
			<?php 
			if (!empty($page_list)) { 
			foreach($page_list as $row=>$value) {
			?>
			<li>&nbsp;&nbsp;-&nbsp;&nbsp; <a href="<?php echo $value['page_link'] ?>" target="<?php echo $value['page_target'] ?>"><?php echo $value['page_title'] ?></a></li>
			<?php } } ?>
        </ul>
        <p><?php echo $app_footer ?> | <img src="<?php echo $feed_img ?>" style="border:none;" align="absmiddle"> <a href="{feed_url}">RSS Feed</a></p>
    </div>
</body>
</html>
