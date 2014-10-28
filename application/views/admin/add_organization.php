<div id="content" class="span10">
    <!-- content starts -->
    <div>
        <ul class="breadcrumb">
            <li>
                <a href="<?php echo base_url(); ?>super_admin">Home</a> <span class="divider">/</span>
            </li>
            <li>
                <a href="<?php echo base_url() ?>super_admin/save_company_info">Add Organization</a>
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
                    $msg = $this->session->userdata('message1');
                    if (isset($msg)) {
                        echo $msg;
                        $this->session->unset_userdata('message1');
                    }
                    ?>
                </h3>
                <form class="form-horizontal" action="<?php echo base_url(); ?>super_admin/save_organization_info.html" method="post" enctype="multipart/form-data">
                    <fieldset>
                        <legend>Add News</legend>
                        <div class="control-group">
                            <label class="control-label" for="typeahead">Organization Name</label>
                            <div class="controls">
                                <input type="text" name="organization_name" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" >
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="date01">Category Name</label>
                            <div class="controls">
                                <select name="category_name">  
                                    <option>Select Category....</option>
                                    <?php
                                     foreach ($all_category_in_fund_page as $v_category) {
                                        ?>
                                        <option value="<?php echo $v_category->category_name; ?>"><?php echo $v_category->category_name; ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <br>
                        <div class="control-group">
                            <label class="control-label" for="textarea2">Organization Title</label>
                            <div class="controls">
                                <textarea class="cleditor" name="organization_title" id="textarea2" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="textarea2">Upload Image</label>                                                        
                            <div class="controls">
                                <input type="file" name="organization_img" >
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
                            <button type="submit" class="btn btn-primary" name="btn">Add Organization</button>
                        </div>
                    </fieldset>
                </form>   

            </div>
        </div><!--/span-->

    </div>
</div>
