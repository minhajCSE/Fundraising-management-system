<div id="content" class="span10">
    <!-- content starts -->


    <div>
        <ul class="breadcrumb">
            <li>
                <a href="<?php echo base_url(); ?>super_admin">Home</a> <span class="divider">/</span>
            </li>
            <li>
                <a href="<?php echo base_url() ?>super_admin/add_news">Add News</a>
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
                <h3 style="color:green">
                    <?php
                    $msg = $this->session->userdata('message');
                    if (isset($msg)) {
                        echo $msg;
                        $this->session->unset_userdata('message');
                    }
                    ?>
                </h3>
                <form class="form-horizontal" action="<?php echo base_url(); ?>super_admin/save_news" method="post">
                    <fieldset>
                        <legend>Add News</legend>
                        <div class="control-group">
                            <label class="control-label" for="typeahead">News Title </label>
                            <div class="controls">
                                <input type="text" name="news_title" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" >
                                
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="date01">Category Name</label>
                            <div class="controls">
                                <select name="category_id">  
                                    <option>Select Category....</option>
                                    <?php
                                        foreach($all_category as $v_category)
                                          {
                                    ?>
                                        <option value="<?php echo $v_category->category_id; ?>"><?php echo $v_category->category_name; ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                           
                            <br><br>
                            <div class="control-group">
                                <label class="control-label" for="textarea2">Full News</label>
                                <div class="controls">
                                    <textarea class="cleditor" name="full_news" id="textarea2" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="textarea2">Featured News</label>
                                <div class="controls">
                                    <select name=featured_news>                                                              
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>
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
                              <!--<input type="radio" name="publication" value="publish"> Publish<br/>
                              <input type="radio" name="publication" value="unpublish"> Unpublish<br/><br/>-->
                                <button type="submit" class="btn btn-primary" name="btn">Add News</button>
                            </div>
                    </fieldset>
                </form>   

            </div>
        </div><!--/span-->

    </div>
</div>
