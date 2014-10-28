<div id="content" class="span10">
    <!-- content starts -->
    <div>
        <ul class="breadcrumb">
            <li>
                <a href="<?php echo base_url(); ?>donor_login/donor_home">Home</a> <span class="divider">/</span>
            </li>
            <li>
                <a href="<?php echo base_url() ?>donor_login/add_fund_story">Add Fund Story</a>
            </li>
        </ul>
    </div>

    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header well" data-original-title>
                <h2><i class="icon-edit"></i> Form Elements</h2>
                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <div class='red'>
                    <h3 style="color: green">
                        <?php 
                           $msg = $this->session->userdata('message');
                           if(isset($msg)){
                               echo $msg;
                               $this->session->unset_userdata('message');
                           }else{
                               
                           }
                        ?>
                    </h3>
                </div>
                <form class="form-horizontal" action="<?php echo base_url(); ?>donor_login/save_fund_story" method="post" enctype="multipart/form-data">
                    <fieldset>
                        <legend>Add Fund Story</legend>
                        <div class="control-group">
                            <label class="control-label" for="typeahead">Fund Title </label>
                            <div class="controls">
                                <input type="text" name="fund_title" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" >     
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="date01">Fund Category Name</label>
                            <div class="controls">
                                <select name="fund_category">  
                                    <option>Select Category....</option>
                                    <?php
                                        foreach($all_category_in_fund_page as $v_category_in_fund_page)
                                          {
                                    ?>
                                        <option value="<?php echo $v_category_in_fund_page->category_name; ?>"><?php echo $v_category_in_fund_page->category_name; ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                        
                        <div class="control-group">
                            <label class="control-label" for="textarea2">Available Fund</label>                                                        
                            <div class="controls">
                                <input type="text" name="fund_money" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" >
                            </div>
                        </div>
                        <div class="control-group">                                                       
                            <div class="controls">
                                <input type="hidden" name="donor_id" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="textarea2">Publication Status</label>                                                        
                            <div class="controls">
                                <input type="file" name="fund_img" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="textarea2">Publication Status</label>                                                        
                            <div class="controls">
                                <select name="publication_status">
                                    <option>Publication status..</option>
                                    <option value="1">Publish</option>
                                    <option value="0">Unpublish</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary" name="btn">Add Fund Story</button>
                        </div>
                        
                    </fieldset>
                </form>   

            </div>
        </div><!--/span-->

    </div>
</div>
