<div>
    <ul class="breadcrumb">
        <li>
            <a href="<?php echo base_url() ?>super_admin">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="<?php echo base_url() ?>super_admin/add_category.html">Add Category</a>
        </li>
    </ul>
</div>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i>Add Category Item</h2>
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="error-message">
            <h3 style="color:red">
                    <?php 
                       $msg = $this->session->userdata('message') ;
                       if(isset($msg)){
                           echo $msg ;
                           echo $this->session->unset_userdata('message');
                       }else{
                           
                       }
                    ?>
                </h3>
            </div>
        <div class="box-content">
            <form class="form-horizontal" action="<?php echo base_url(); ?>super_admin/save_category.html" method="post">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Add Category </label>
                        <div class="controls">
                            <input type="text" name="category_name" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["]'>
                        </div>
                    </div>
                     <div class="control-group">
                        <label class="control-label" for="typeahead">Publication Status</label>
                        <div class="controls">
                            <select name="publication_status">
                                <option value="1">Publish</option>
                                <option value="0">Unpublish</option>
                              </select>
                        </div>
                    </div>
                    
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Save changes</button>
                        <button type="reset" class="btn">Cancel</button>
                    </div>
                </fieldset>
            </form>   

        </div>
    </div><!--/span-->

</div><!--/row-->
 

