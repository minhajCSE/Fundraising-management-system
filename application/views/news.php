<div class="list">
	<ul>
		<?php
		foreach ($all_hot_news as $v_hot_news)
		{
		?>
		<li><i class="fa fa-arrow-circle-right"></i><a href="<?php echo base_url() ;?>welcome/news_details/<?php echo $v_hot_news->news_id; ?>"><?php echo $v_hot_news->news_title; ?></a></li>
		<?php } ?>

	</ul>
</div>