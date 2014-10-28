<!--- User Area --->
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
                                            <?php
                                            $msg = $this->session->userdata('message');
                                            if (isset($msg)) {
                                                echo $msg;
                                                $this->session->unset_userdata('message');
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
                                            <?php
                                            $msg = $this->session->userdata('message');
                                            if (isset($msg)) {
                                                echo $msg;
                                                $this->session->unset_userdata('message');
                                            } else {
                                                
                                            }
                                            ?> 
                                        </h3>

                                    </div>
                                    <form target="_blank" action="<?php echo base_url(); ?>client_login/check_client_login.html" method="post">
                                        <label for="">User Name : </label>
                                        <input type="text" name="client_username" id="username" /><br>
                                        <label for="">Password : </label>
                                        <td><input type="password" name="client_password" id="password" /><br>
                                        <td><input type="submit" id="login" value="Login" />
                                            <p class="para">Don't have an account ? <a href="<?php echo base_url() ?>welcome/client_account.html">Create an Account</a></p>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--- About us area --->
                <div class="col-md-8">
                    <div class="about-us-area">
                        <h1>About Us</h1>
                        <hr>
                        <p>Fundraising is the process of collecting money or other resources by requesting donations from individuals, business, charitable foundations or governmental agencies. In fundraising process people are contribute as volunteer to collect funds. Fundraising typically refers to efforts to collect money for non-profit organizations but it is also used to refer to collect money for profitable organizations to raising their capital. Traditionally fundraising consisted mostly of requesting for donations at the peoples doors. But now time has changed. Now it is period of internet technology. So fundraising are consisted through online. Online based fundraising is an easy way to collect funds at short time. Online fundraising operations can involve a very broad array of concerns such as religious or philanthropic groups such as research organizations, public broadcasters and environmental issues</p>
                        <p>Online fundraising is the process of raising funds through internet. Now a days online fundraising is very much popular. It is the fastest growing area of fundraising and is joining direct mail fundraising in a multichannel world. Online fundraising system reduces our time and toil. In this system donor can donate funds easily and client can also reach donor easily. For online fundraising system a web site is compulsory. Web site is required for connect donor and client in a place. It is help to attract donor for donation. Donor is inspired by visit fundraising website. Clients are also reaching with donor easily. So online fundraising is very much effective idea for raising funds.</p>
                    </div>
                </div>
            </div>	
        </div>	

        <!--- Search Area --->
        <div class="success-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">

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