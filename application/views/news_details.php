<div class="container">
    <div class="row">
        <div class="col-md-8">
           <div class="news">
               <div class="news_details">
                    <h1><?php echo $news_info->news_title; ?></h1>
                    <h5>News Posted : <?php echo $news_info->news_date; ?></h5>
                    <p><?php echo $news_info->full_news; ?></p>
		</div> 
            </div> 
        </div>
        <div class="col-md-5">
            <div class="list">
                <h2>Latest News </h2>
                <ul>
                    <?php
                    foreach ($all_hot_news as $v_hot_news) {
                        ?>
                    <li><i class="fa fa-arrow-circle-right"></i><a href="<?php echo base_url() ;?>welcome/news_details/<?php echo $v_hot_news->news_id; ?>"><?php echo $v_hot_news->news_title; ?></a></li>
                    <?php } ?>

                </ul>
            </div>
        </div>
    </div>
    
</div>

<!--- Success Area --->
<div class="success-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="story">Fundraising Organization : </h2> 
                <hr />
                <div id="owl-example" class="owl-carousel">					   
                    <div class="item darkCyan">
                        <img src="<?php echo base_url(); ?>images/touch.png" alt="Touch">
                        <h3>ABC</h3>
                        <h4>Pellentesque in ipsum id orci porta dapibus.</h4>
                    </div>
                    <div class="item forestGreen">
                        <img src="<?php echo base_url(); ?>images/grab.png" alt="Grab">
                        <h3>ABC</h3>
                        <h4>Pellentesque in ipsum id orci porta dapibus.</h4>
                    </div>
                    <div class="item orange">
                        <img src="<?php echo base_url(); ?>images/touch.png" alt="Touch">
                        <h3>ABC</h3>
                        <h4>Pellentesque in ipsum id orci porta dapibus.</h4>
                    </div>

                    <div class="item yellow">
                        <img src="<?php echo base_url(); ?>images/touch.png" alt="Touch">
                        <h3>ABC</h3>
                        <h4>Pellentesque in ipsum id orci porta dapibus.</h4>
                    </div>

                    <div class="item dodgerBlue">
                        <img src="<?php echo base_url(); ?>images/multi.png" alt="Multi">
                        <h3>ABC</h3>
                        <h4>Pellentesque in ipsum id orci porta dapibus.</h4>
                    </div>

                    <div class="item skyBlue">
                        <img src="<?php echo base_url(); ?>images/touch.png" alt="Touch">
                        <h3>ABC</h3>
                        <h4>Pellentesque in ipsum id orci porta dapibus.</h4>
                    </div>
                    <div class="item darkCyan">
                        <img src="<?php echo base_url(); ?>images/touch.png" alt="Touch">
                        <h3>ABC</h3>
                        <h4>Pellentesque in ipsum id orci porta dapibus.</h4>
                    </div>
                    <div class="item forestGreen">
                        <img src="<?php echo base_url(); ?>images/grab.png" alt="Grab">
                        <h3>ABC</h3>
                        <h4>Pellentesque in ipsum id orci porta dapibus.</h4>
                    </div>
                    <div class="item darkCyan">
                        <img src="<?php echo base_url(); ?>images/touch.png" alt="Touch">
                        <h3>ABC</h3>
                        <h4>Pellentesque in ipsum id orci porta dapibus.</h4>
                    </div>
                    <div class="item forestGreen">
                        <img src="<?php echo base_url(); ?>images/grab.png" alt="Grab">
                        <h3>ABC</h3>
                        <h4>Pellentesque in ipsum id orci porta dapibus.</h4>
                    </div>
                    <div class="item forestGreen">
                        <img src="<?php echo base_url(); ?>images/grab.png" alt="Grab">
                        <h3>ABC</h3>
                        <h4>Pellentesque in ipsum id orci porta dapibus.</h4>
                    </div>
                    <div class="item darkCyan">
                        <img src="<?php echo base_url(); ?>images/touch.png" alt="Touch">
                        <h3>ABC</h3>
                        <h4>Pellentesque in ipsum id orci porta dapibus.</h4>
                    </div>
                </div>	
            </div>
        </div>
    </div>
</div>

