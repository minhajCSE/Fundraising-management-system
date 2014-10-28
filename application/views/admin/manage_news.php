<div>
    <ul class="breadcrumb">
        <li>
            <a href="<?php echo base_url() ?>super_admin">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="">Manage News</a>
        </li>
    </ul>
</div>

<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-user"></i>Manage News</h2>
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
                        <th>News Title</th>
                        <th>News Category</th>                                                                 
                        <th>Author Name</th>
                        <th>Featured News</th>
                        <th>Publication Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>   
                <tbody>
                      <?php
                          foreach ($all_news as $v_news) {
                        ?>
                        <tr>
                            <td><?php echo $v_news->news_title; ?></td>
                            <td class="center"><?php echo $v_news->category_name; ?></td>                                                                
                            <td class="center"><?php echo $v_news->author_name; ?></td>
                            <td class="center">
                                <span class="label label-success">
                                   <?php
                                    if ($v_news->featured_news == '1') {
                                        echo 'Yes';
                                    } else {
                                        echo'No';
                                    }
                                    ?>
                                </span>
                            </td>
                            <td class="center">
                               <span class="label label-success">
                                    <?php
                                    if ($v_news->publication_status == '1') {
                                        echo 'Published';
                                    } else {
                                        echo'Unpublished';
                                    }
                                    ?>
                                </span>
                            </td>
                           
                            <td class="center">
                                <?php 
                                  if($v_news->publication_status==1){
                                ?>  
                                <a class="btn btn-success" href="<?php echo base_url(); ?>super_admin/unpublish_news/<?php echo $v_news->news_id; ?>" title="Unpublish" >
                                    <i class="icon-arrow-down"></i>  

                                </a>

                                <?php } 
                                    else {
                                ?>
                                <a class="btn btn-success" href="<?php echo base_url(); ?>super_admin/publish_news/<?php echo $v_news->news_id; ?>" title="Publish">
                                    <i class="icon-arrow-up"></i>  
                                                                            
                                 </a>
                            <?php } ?>

                                <a class="btn btn-success" href="" title="Mark As General News">
                                    <i class="icon-ok-circle"></i>  

                                </a>

                                <a class="btn btn-info" href="" title="Edit">
                                    <i class="icon-edit icon-white"></i>  

                                </a>
                                <a class="btn btn-danger" href="<?php echo base_url();?>super_admin/delete_news/<?php echo $v_news->news_id; ?>" title="Delete" onclick="return check_delete();">
                                    <i class="icon-trash icon-white"></i> 

                                </a>
                                
                            </td>
                        </tr>
                        <?php
                         
                        }
                        
                        ?>

                </tbody>
            </table>            
        </div>
    </div><!--/span-->
