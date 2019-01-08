<?php 
	if(is_page(69) || is_page(71) || is_page(343) || is_page(346)){
?>
<form role="search" method="get" id="searchform" action="<?php echo home_url('/'); ?>">
			<input type="search" id="search"  type="text" name="s" required placeholder="Search..">
			
	</form>
<?php }else{ ?>
	<form role="search" method="get" id="searchform" action="<?php echo home_url('/'); ?>">
			<input type="search" id="search"  type="text" name="s" required placeholder="Search..">
			<button type="submit" class="search-btn">
			  <i class="icon icon-search"></i>
			</button>
	</form>
<?php } ?>