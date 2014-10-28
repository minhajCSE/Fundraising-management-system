<div>
    <ul class="breadcrumb">
        <li>
            <a href="<?php echo base_url() ?>super_admin">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="">Manage Contact Message</a>
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
                        <th>Name </th>
                        <th>Email Address</th>                                                                 
                        <th>Subject</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>   
                <tbody>
                      <?php
                          foreach ($all_contact_info as $v_contact) {
                        ?>
                        <tr>
                            <td><?php echo $v_contact->contact_name; ?></td>
                            <td class="center"><?php echo $v_contact->contact_mail; ?></td>                                                                
                            <td class="center"><?php echo $v_contact->contact_subject; ?></td>
                            <td class="center"><?php echo $v_contact->contact_message; ?></td>
                           
                            <td class="center">
                                <a class="btn btn-danger" href="<?php echo base_url();?>super_admin/delete_contact_message/<?php echo $v_contact->contact_id; ?>" title="Delete" onclick="return check_delete();">
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

