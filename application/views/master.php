<div class="user-area">
    <div class="user">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="user-donor">
                        <div id="tab">
                            <ul class="nav nav-tabs" id="myTab">
                                <li class="active"><a href="#home" data-toggle="tab">Donor</a></li>
                                <li><a href="#profile" data-toggle="tab">Client</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="home">
                                    <div style="color:red">
                                       <h3>
                                         
                                       </h3>
                                    </div>
                                    <div style="color: green">
                                        <h3>
                                            <?php
                                            $msg = $this->session->userdata('success');
                                            if (isset($msg)) {
                                                echo $msg;
                                                $this->session->unset_userdata('success');
                                            } else {
                                                
                                            }
                                            ?> 
                                        </h3>

                                    </div>
                                    <form target="_blank" action="<?php echo base_url(); ?>donor_login/check_donor_login.html" method="post">
                                        <label for="">User Name : </label>
                                        <input type="text" name="donor_username" id="username" /><br>
                                        <label for="">Password : </label>
                                        <input type="password" name="donor_password" id="password" /><br>
                                        <input type="submit" id="login" value="Login" />

                                        <p class="para">Don't have an account ? <a href="<?php echo base_url() ?>welcome/donor_account.html">Create an Account</a></p>

                                    </form>
                                </div>
                                <div class="tab-pane fade in active" id="profile">
                                    <div style="color:red">
                                        <h3>
                                            <?php
                                            $exc = $this->session->userdata('exception');
                                            $success = $this->session->userdata('success');
                                            if (isset($exc)) {
                                                echo $exc;
                                                $this->session->unset_userdata('exception');
                                            } else {
                                                echo $success;
                                                $this->session->unset_userdata('success');
                                            }
                                            ?> 
                                        </h3> 
                                    </div>
                                    <div style="color: green">
                                        <h3>
                                         <!--  <?php
                                           
                                           $msg = $this->session->userdata('message');
                                            if (isset($msg)) {
                                               echo $msg;
                                               $this->session->unset_userdata('message');
                                            } else {
                                                
                                            }
                                            ?>   --->
                                        </h3>

                                    </div>
                                    <form target="_blank" action="<?php echo base_url(); ?>client_login/check_client_login.html" method="post">
                                        <label for="">User Name : </label>
                                        <input type="text" name="client_username" id="username" /><br>
                                        <label for="">Password : </label>
                                        <td><input type="password" name="client_password" id="password" /><br>
                                        <td><a href="" target="_blank"><input type="submit" id="login" value="Login" /></a>
                                        <p class="para">Don't have an account ? <a href="<?php echo base_url() ?>welcome/client_account.html">Create an Account</a></p>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="categories">
                        <div class="search-by-categories">
                            <div class="category-list">
                                <h2>Categories: </h2>
                                <div class="row">
                                    <div class="col-md-6 list">
                                      <ul>
                                            <?php
                                                foreach($all_category as $v_category)
                                                  {
                                             ?>
                                            <li><i class="fa fa-arrow-circle-right"></i><a href="<?php echo base_url()?>welcome/fund_category_in_fund_page/<?php echo $v_category->category_name; ?>"><?php echo $v_category->category_name; ?></a></li>
                                           <?php } ?>


                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="list">
                                            <ul>
                                                <?php
                                                    foreach($all_category_two as $v_category_two)
                                                      {
                                                ?>
                                                <li><i class="fa fa-arrow-circle-right"></i><a href="<?php echo base_url()?>welcome/fund_category_in_fund_page/<?php echo $v_category_two->category_name; ?>"><?php echo $v_category_two->category_name; ?></a></li>
                                                
                                                <?php } ?>

                                            </ul>
                                        </div>	
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--- Funding Source --->
<div class="fund-source">
    <div class="container">
        <div class="row fund-source-category">
            <h2>FUNDRAISING CATEGORIES </h2>
            <hr />
            <?php 
                foreach ($all_fund_story as $v_fun_story)
                {      
            ?>
            <div class="col-md-3">
                <div class="single-fund">
                    <img src="<?php echo base_url(). $v_fun_story->fund_img; ?>" alt="" />
                    <p>Available: <span><?php echo $v_fun_story->fund_money; ?></span></p>
                    <h5>Category: <a href="" class="cat-fund"><?php echo $v_fun_story->fund_category; ?></a></h5>
                    <hr />
                    <h4><?php echo $v_fun_story->fund_title; ?></h4>
                    <?php
                        $client_id = $this->session->userdata('client_id');
                        if ($client_id) {
                           echo '<button data-toggle="modal" href="#'.$v_fun_story->fund_id.'" class="btn">APPLY</button>'; 
                        } else {

                            echo '<button disabled="disabled" data-toggle="modal" href="#'.$v_fun_story->fund_id.'" class="btn">APPLY</button>';  
                        } 
                    ?>
                    <!-- Modal -->
                    <div class="modal fade" id="<?php echo $v_fun_story->fund_id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h1 class="modal-title">Apply For this fund!</h1>
                          </div>
                          <div class="modal-body">
                              <form class="form-horizontal" action="<?php echo base_url(); ?>welcome/fund_apply_details/<?php echo $v_fun_story->fund_id; ?>" method="post" role="form">
                                    <div class="form-group">
                                         <label for="inputText" class="col-lg-4 control-label">Your Name : </label>
                                         <div class="col-lg-8">
                                             <input readonly="readonly" type="text" name="client_username" class="form-control" id="inputText" placeholder="Your name" value="<?php echo $this->session->userdata('client_username'); ?>">
                                         </div>
                                     </div>
                                     <div class="form-group">
                                         <div class="col-lg-8">
                                             <input type="hidden" name="donor_id" class="form-control" id="inputText" value="<?php echo $this->session->userdata('donor_id'); ?>">
                                         </div>
                                     </div>
                                     <div class="form-group">
                                         <label for="inputEmail1" class="col-lg-4 control-label">Your Email : </label>
                                         <div class="col-lg-8">
                                             <input type="email" name="client_email" class="form-control" id="inputEmail1" required="1"  value="<?php echo $this->session->userdata('client_email'); ?>">
                                         </div>
                                     </div>
                                     <div class="form-group">
                                         <label for="inputEmail1" class="col-lg-4 control-label">Fund Title : </label>
                                         <div class="col-lg-8">
                                             <input readonly="readonly" type="text" name="fund_title" class="form-control" id="inputEmail1"  value="<?php echo $v_fun_story->fund_title; ?>">
                                         </div>
                                     </div>
                                     <div class="form-group">
                                         <div class="col-lg-8">
                                             <input readonly="readonly" type="hidden" name="category_name" class="form-control" id="" placeholder="Category name" value="<?php echo $v_fun_story->fund_category; ?>">
                                         </div>
                                     </div>
                                     <div class="form-group">
                                         <div class="col-lg-8">
                                             <input readonly="readonly" type="hidden" name="fund_ammount" class="form-control" id="" placeholder="Category name" value="<?php echo $v_fun_story->fund_money; ?>">
                                         </div>
                                     </div>
                                     <div class="form-group">
                                        <label for="inputText" class="col-lg-5 control-label">Why you should apply ? </label>
                                        <div class="col-lg-7">
                                            <textarea name="message" required="1" rows="4" cols="40"></textarea>
                                         </div>
                                     </div>
                                     <div class="form-actions">
                                         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                         <button type="submit" class="btn">Apply</button>
                                     </div>
                                </form>  
                          </div>
                        </div><!-- /.modal-content -->
                      </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                </div>
                <?php
                if($this->session->userdata("apply_error"))
                {?>
                    <script>alert("<?php echo $this->session->userdata("apply_error"); ?>");</script>
                    <?php
                    $this->session->unset_userdata("apply_error");
                }
                if($this->session->userdata("apply_success"))
                {?>
                    <script>alert("<?=$this->session->userdata("apply_success")?>");</script>
                    <?php
                    $this->session->unset_userdata("apply_success");
                }
                ?>
            </div>
            <?php } ?>
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


<!--- Organaization Area --->
<div class="organaization-area">
    <div class="container">  		
        <div class="row">
            <div class="col-md-12">
                <div class="organization">
                    <h2>Success Stories : </h2>
                    <hr>
                    <div class="list-of-organization">
                        <div class="row">
                            <?php 
                                foreach ($all_story as $v_story)
                                  {
                             ?>
                            <div class="col-md-3">
                                <div class="single-list">
                                    <img class="img-responsive" src="<?php echo base_url().$v_story->success_img;?>" alt="" />
                                    <h3><?php echo $v_story->success_title; ?></h3>
                                    <p><?php echo $v_story->success_summary; ?></p>
                                    <a href="<?php echo base_url(); ?>welcome/success_story_details/<?php echo $v_story->success_id; ?>">More...</a>
                                </div>
                            </div>
                             <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>