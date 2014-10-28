<div class="container">
    <div class="row">
        <div class="col-md-7">
            <div class="story_details">
                <div class="story">
                    <h1><?php echo $story_details->success_title; ?></h1>
                    <img src="<?php echo base_url().$story_details->success_img;?>">
                    <p><?php echo $story_details->success_details ; ?></p>
		</div>     
             </div> 
        </div>
        <div class="col-md-5">
            <div class="fund-categories sidebar">
                <h2 class="success_story_list">List of Success stories : </h2>
                <ul>
                   <?php 
                        foreach ($all_story_title as $v_story_title)
                          {
                     ?>
                   
                         <li><i class="fa fa-arrow-circle-right"></i><a href="<?php echo base_url(); ?>welcome/success_story_title_/<?php echo $v_story_title->success_id; ?>"><?php echo $v_story_title->success_title?></a></li>
                     
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



