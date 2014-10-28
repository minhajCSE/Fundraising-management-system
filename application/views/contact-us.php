
<!--- User Area --->
<div class="contact-us-area">
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <h2>CONTACT WITH US </h2>
                    <hr />
                    <div class="well well-sm">

                        <form action="<?php echo base_url() ; ?>welcome/save_contact_message" method="post">
                            <div class="message">
                                <?php 
                                   $msg = $this->session->userdata('message');
                                   if(isset($msg)){
                                       echo $msg ;
                                       $this->session->unset_userdata('message');
                                   }else{
                                       
                                   }
                                ?>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" name="contact_name" class="form-control" id="name" placeholder="Enter name" required="required" />
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email Address</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                            </span>
                                            <input type="email" name="contact_mail" class="form-control" id="email" placeholder="Enter email" required="required" /></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="subject"> Subject</label>
                                        <select id="subject" name="contact_subject" class="form-control" required="required">
                                            <option value=" " selected="">Choose One:</option>
                                            <option value="service">General Customer Service</option>
                                            <option value="suggestions">Suggestions</option>
                                            <option value="Support">Support</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Message</label>
                                        <textarea name="contact_message" id="message" class="form-control" rows="9" cols="25" required="required"
                                                  placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                                        Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-3">
                    <form>
                        <h2>OUR OFFICE</h2>
                        <hr />
                        <address>
                            <strong>ADDRESS ONE</strong><br>
                            92/3 Emell Villa, Shukrabad<br>
                            Dhanmondi,Dhaka,1207<br>
                            <abbr title="Phone">
                                P:</abbr>
                            (123) 456-7890
                        </address>
                        <address>
                            <strong>Our Mail Address</strong><br>
                            <a href="mailto:#">fundraising@gmail.com</a>
                        </address>
                        <hr />
                        <address>
                            <strong>ADDRESS TWO</strong><br>
                            105/2 Nondini, Shukrabad<br>
                            Dhanmondi,Dhaka,1207<br>
                            <abbr title="Phone">
                                P:</abbr>
                            (123) 456-7890
                        </address>
                        <address>
                            <strong>Our Mail Address</strong><br>
                            <a href="mailto:#">fundraising@gmail.com</a>
                        </address>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!--- Search Area --->
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