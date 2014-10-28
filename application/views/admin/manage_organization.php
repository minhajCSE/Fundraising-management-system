<div>
    <ul class="breadcrumb">
        <li>
            <a href="<?php echo base_url(); ?>super_admin">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="<?php echo base_url(); ?>super_admin/manage_organization.html">Manage Organization</a>
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
                        <th>Organization ID</th>
                        <th>Organization Name</th>
                        <th>Organization Title</th>
                        <th>Organization Logo</th>
                        <th>Organigation Category</th>
                        <th>Publication Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>   
                <tbody>
                    <?php 
                       foreach ($all_organization as $v_organization)
                          {
                    ?>
                    <tr>
                        <td><?php echo $v_organization->organization_id; ?></td>
                        <td><?php echo $v_organization->organization_name; ?></td>
                        <td><?php echo $v_organization->organization_title; ?></td>
                        <td><?php echo $v_organization->organization_img; ?></td>
                        <td><?php echo $v_organization->category_name; ?></td>
                        <td>
                            <?php if($v_organization->publication_status){
                                 echo 'Published' ; 
                               }else{
                                 echo 'Unpublished' ;   
                               }
                            
                            ?>
                        </td>
                        <td class="center">
                            <?php if($v_organization->publication_status==1)
                                {
                            ?>
                            <a class="btn btn-success" href="<?php echo base_url(); ?>super_admin/unpublish_organization/<?php echo $v_organization->organization_id; ?>" title="Unpublish">
                                <i class="icon-arrow-down icon-white"></i>                                         
                            </a>
                            
                            <?php } 
                              else {
                            ?>
                            
                            <a class="btn btn-success" href="<?php echo base_url(); ?>super_admin/publish_organization/<?php echo $v_organization->organization_id; ?>" title="Publish">
                                <i class="icon-arrow-up icon-white"></i>                                          
                            </a>
                            <?php } ?>
                            
                            <a class="btn btn-info" href="#">
                                <i class="icon-edit icon-white"></i>                               
                            </a>
                            <a class="btn btn-danger" href="" onclick="return check_delete();">
                                <i class="icon-trash icon-white"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
                  <?php } ?>
            </table>            
        </div>
    </div><!--/span-->

</div><!--/row-->


