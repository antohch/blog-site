	<div class="sidebar-main">		
		<div class="sidebar-widget">
				<div class="search-main">
					<form action="" method="get">
						<input class="search-txt" type="text" name="s" value="Поиск" onfocus="if(this.value=='Поиск')this.value=''" onblur="if(this.value=='')this.value='Поиск'"/>
						<input type="image" src="<?php bloginfo('template_url'); ?>/images/search-btn.jpg" />
					</form>
				</div>
			</div>
			<?php if(!dynamic_sidebar('sidebar')): ?>
			<div class="sidebar-widget">
			<h3>Здесь виджеты сайдбара</h3>
			</div>
			<?php endif; ?>
			<div class="sidebar-widget">
				<div class="facebook">
					<img src="<?php bloginfo('template_url'); ?>/images/facebook.jpg" alt=""/>
				</div>
			</div>
		</div>
	</div>