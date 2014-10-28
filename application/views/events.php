
<!--- User Area --->
<div class="events-area">
    <div class="event">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h2>EVENTS </h2>
                    <hr />
                    <ul class="event-list">
                        <li>
                            <time datetime="2014-10-20">
                                <span class="day">21</span>
                                <span class="month">OCT</span>
                                <span class="year">2014</span>
                                <span class="time">ALL DAY</span>
                            </time>
                            <img alt="Independence Day" src="https://farm4.staticflickr.com/3100/2693171833_3545fb852c_q.jpg" />
                            <div class="info">
                                <h2 class="title">Independence Day</h2>
                                <p class="desc">Bangladesh Holiday</p>
                            </div>
                            <div class="social">
                                <ul>
                                    <li class="facebook" style="width:33%;"><a href="#facebook"><span class="fa fa-facebook"></span></a></li>
                                    <li class="twitter" style="width:34%;"><a href="#twitter"><span class="fa fa-twitter"></span></a></li>
                                    <li class="google-plus" style="width:33%;"><a href="#google-plus"><span class="fa fa-google-plus"></span></a></li>
                                </ul>
                            </div>
                        </li>

                        <li>
                            <time datetime="2014-10-20 0000">
                                <span class="day">21</span>
                                <span class="month">OCT</span>
                                <span class="year">2014</span>
                                <span class="time">12:00 AM</span>
                            </time>
                            <img alt="Independence Day" src="https://farm4.staticflickr.com/3100/2693171833_3545fb852c_q.jpg" />
                            <div class="info">
                                <h2 class="title">One Piece Unlimited World Red</h2>
                                <p class="desc">Dhaka</p>
                            </div>
                            <div class="social">
                                <ul>
                                    <li class="facebook" style="width:33%;"><a href="#facebook"><span class="fa fa-facebook"></span></a></li>
                                    <li class="twitter" style="width:34%;"><a href="#twitter"><span class="fa fa-twitter"></span></a></li>
                                    <li class="google-plus" style="width:33%;"><a href="#google-plus"><span class="fa fa-google-plus"></span></a></li>
                                </ul>
                            </div>
                        </li>

                        <li>
                            <time datetime="2014-10-20 2000">
                                <span class="day">21</span>
                                <span class="month">OCT</span>
                                <span class="year">2014</span>
                                <span class="time">8:00 PM</span>
                            </time>
                            <img alt="My 24th Birthday!" src="https://farm5.staticflickr.com/4150/5045502202_1d867c8a41_q.jpg" />
                            <div class="info">
                                <h2 class="title">Mouse0270's 24th Birthday!</h2>
                                <p class="desc">Bar Hopping in Erie, Pa.</p>
                            </div>
                            <div class="social">
                                <ul>
                                    <li class="facebook" style="width:33%;"><a href="#facebook"><span class="fa fa-facebook"></span></a></li>
                                    <li class="twitter" style="width:34%;"><a href="#twitter"><span class="fa fa-twitter"></span></a></li>
                                    <li class="google-plus" style="width:33%;"><a href="#google-plus"><span class="fa fa-google-plus"></span></a></li>
                                </ul>
                            </div>
                        </li>

                        <li>
                            <time datetime="2014-10-31 1600">
                                <span class="day">21</span>
                                <span class="month">OCT</span>
                                <span class="year">2014</span>
                                <span class="time">4:00 PM</span>
                            </time>
                            <img alt="Independence Day" src="https://farm4.staticflickr.com/3100/2693171833_3545fb852c_q.jpg" />
                            <div class="info">
                                <h2 class="title">Disney Junior Live On Tour!</h2>
                                <p class="desc"> Pirate and Princess Adventure</p>
                            </div>
                            <div class="social">
                                <ul>
                                    <li class="facebook" style="width:33%;"><a href="#facebook"><span class="fa fa-facebook"></span></a></li>
                                    <li class="twitter" style="width:34%;"><a href="#twitter"><span class="fa fa-twitter"></span></a></li>
                                    <li class="google-plus" style="width:33%;"><a href="#google-plus"><span class="fa fa-google-plus"></span></a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="col-md-4 col-md-offset-1">
                    <div class="registration-for-event">
                        <h2>EVENTS REGISTRATION</h2>
                        <hr />
                        <form class="form" action="<?php echo base_url();?>welcome/event_registration" role="form" method="post">
                            <div class="form-group">

                                <label for="">First Name</label>
                                <input type="text" name="first_name" class="form-control" id="" placeholder="First Name"><br>

                                <label for="">Last Name</label>
                                <input type="text" name="last_name" class="form-control" id="" placeholder="Last Name">
                            </div>

                            <div class="form-group">
                                <label for="">Email address</label>
                                <input type="email" name="email_address" class="form-control" id="" placeholder="Enter email">
                            </div>

                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" name="password" class="form-control" id="" placeholder="Password">
                            </div>

                            <div class="form-group">
                                <label for="">Re-Enter Password</label>
                                <input type="password" class="form-control" id="" placeholder="Re-enter Password">
                            </div>

                            <button type="submit" class="btn btn-default">Join Event</button>
                        </form>
                    </div>
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