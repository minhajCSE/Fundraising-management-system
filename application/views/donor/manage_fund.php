    <div>
        <ul class="breadcrumb">
            <li>
                <a href="<?php echo base_url(); ?>donor_login/donor_home">Home</a> <span class="divider">/</span>
            </li>
            <li>
                <a href="<?php echo base_url() ?>donor_login/manage_fund_story">Manage Fund Story</a>
            </li>
        </ul>
    </div>

<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-user"></i> Manage Category Page</h2>
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                    <tr>
                        <th>Fund ID</th>
                        <th>Fund Title</th>
                        <th>Available Fund</th>
                        <th>Fund Image</th>
                        <th>Publication Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>   
                <tbody>
                   <?php 
                       foreach ($all_fund as $v_fund)
                          {
                   ?>
                    <tr>
                        <td><?php echo $v_fund->fund_id; ?></td>
                        <td><?php echo $v_fund->fund_title; ?></td>
                        <td><?php echo $v_fund->fund_money; ?></td>
                        <td><?php echo $v_fund->fund_img; ?></td>
                        <td>
                            <?php 
                               if($v_fund->publication_status){
                                   echo 'Published' ;
                               }else{
                                   echo 'Unpublished' ;
                               }
                           ?>
                        </td>
                        <td class="center">
                            <?php if($v_fund->publication_status==1)
                                {
                            ?>
                            <a class="btn btn-success" href="<?php echo base_url() ; ?>donor_login/unpublish_fund/<?php echo $v_fund->fund_id; ?>" title="Unpublish">
                                <i class="icon-zoom-in icon-white"></i>  
                                Unpublish                                          
                            </a>
                            
                            <?php } 
                              else {
                            ?>
                            
                            <a class="btn btn-success" href="<?php echo base_url() ; ?>donor_login/publish_fund/<?php echo $v_fund->fund_id; ?>" title="Publish">
                                <i class="icon-zoom-in icon-white"></i>  
                                Published                                           
                            </a>
                           
                             <?php } ?>
                            
                            <a class="btn btn-info" href="#">
                                <i class="icon-edit icon-white"></i>  
                                Edit                                            
                            </a>
                            <a class="btn btn-danger" href="<?php echo base_url();?>donor_login/delete_fund/<?php echo $v_fund->fund_id; ?>" onclick="return check_delete();">
                                <i class="icon-trash  icon-white"></i> 
                                Delete
                            </a>
                        </td>
                    </tr>
                </tbody>
                      <?php } ?> 
            </table>            
        </div>
    </div><!--/span-->

</div><!--/row-->




