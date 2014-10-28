
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="fund-categories sidebar">
                <h2>Categories : </h2>
                <ul>
                    <?php
                    foreach ($all_category_in_fund_page as $v_category_in_fund_page) {
                        ?>
                        <li><i class="fa fa-arrow-circle-right"></i><a href="<?php echo base_url() ?>welcome/fund_category_in_fund_page/<?php echo $v_category_in_fund_page->category_name ?>"><?php echo $v_category_in_fund_page->category_name; ?></a></li>
                    <?php } ?>


                </ul>
            </div>    
        </div>
        <div class="col-md-9">
            <div class="row fund-category">
                <?php
                foreach ($fund_by_category as $v_fund_by_category) {
                    ?>
                    <div class="col-md-4">
                        <div class="single-fund">
                            <img src="<?php echo base_url() . $v_fund_by_category->fund_img; ?>" alt="" />
                            <p>Available : <span><?php echo $v_fund_by_category->fund_money; ?></span></p>
                            <h5>Category: <a href="" class="cat-fund"><?php echo $v_fund_by_category->fund_category; ?></a></h5>
                            <hr />
                            <h4><?php echo $v_fund_by_category->fund_title; ?></h4>
                            <?php
                            $client_id = $this->session->userdata('client_id');
                            if ($client_id) {
                                echo '<button data-toggle="modal" href="#myModal" class="btn">APPLY</button>';
                            } else {

                                echo '<button disabled="disabled" data-toggle="modal" href="#myModal" class="btn">APPLY</button>';
                            }
                            ?>

                            <!-- Modal -->
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h1 class="modal-title">Apply For this fund!</h1>
                                        </div>
                                        <div class="modal-body">
                                            <form class="form-horizontal" action="" method="post" role="form">
                                                <div class="form-group">
                                                    <label for="inputText" class="col-lg-4 control-label">Your Name : </label>
                                                    <div class="col-lg-8">
                                                        <input type="text" class="form-control" id="inputText" placeholder="Your name" value="<?php echo $this->session->userdata('client_username'); ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputEmail1" class="col-lg-4 control-label">Your Email : </label>
                                                    <div class="col-lg-8">
                                                        <input type="email" class="form-control" id="inputEmail1" placeholder="Your Email"  value="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputText" class="col-lg-4 control-label">Category : </label>
                                                    <div class="col-lg-8">
                                                        <input type="text" class="form-control" id="" placeholder="Category name" value="<?php echo $v_fund_by_category->fund_category; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputText" class="col-lg-4 control-label">Amount : </label>
                                                    <div class="col-lg-8">
                                                        <input type="text" class="form-control" id="" placeholder="Category name" value="<?php echo $v_fund_by_category->fund_money; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputText" class="col-lg-5 control-label">Why you should apply ? </label>
                                                    <div class="col-lg-7">
                                                        <textarea rows="4" cols="40"></textarea>
                                                    </div>
                                                </div>

                                                <div class="form-actions">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    <button type="reset" class="btn">Apply</button>
                                                </div>
                                            </form>  
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->
                        </div>       
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>   
</div>
