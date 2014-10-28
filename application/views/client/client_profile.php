<div class="donor_profile">
   
   <table class="table table-striped table-bordered bootstrap-datatable datatable">
       <thead>
            <tr>
                <th>List of Client </th>
                <th>Client Info</th>
                <th>Action</th>
            </tr>
       </thead> 
      <?php 
           foreach ($all_client_info as $v_all_info) 
           {
        ?>
       
       <tbody>	
  
      <tr>
      	 <td>Client Name : </td>
      	 <td><?php echo $v_all_info->client_firstname; ?><?php echo $v_all_info->client_lastname; ?> </td>
         <td class="center">                 
            <a class="btn btn-info" href="#">
                <i class="icon-edit icon-white"></i>  
                Edit                                            
            </a>
            <a class="btn btn-danger" href="" onclick="return check_delete();">
                <i class="icon-trash icon-white"></i> 
                Delete
            </a>
         </td>
      </tr>
	  
      <tr>
      	<td>Donation will take For :</td>
      	<td><?php echo $v_all_info->client_donate_for; ?> </td>
        <td class="center">                 
            <a class="btn btn-info" href="#">
                <i class="icon-edit icon-white"></i>  
                Edit                                            
            </a>
            <a class="btn btn-danger" href="" onclick="return check_delete();">
                <i class="icon-trash icon-white"></i> 
                Delete
            </a>
         </td>
      </tr>
	  
      <tr>
      	<td>Client Address : </td>
      	<td><?php echo $v_all_info->client_address; ?></td>
        <td class="center">                 
            <a class="btn btn-info" href="#">
                <i class="icon-edit icon-white"></i>  
                Edit                                            
            </a>
            <a class="btn btn-danger" href="" onclick="return check_delete();">
                <i class="icon-trash icon-white"></i> 
                Delete
            </a>
         </td>
      </tr>	
	  
      <tr>
      	<td>Client City : </td>
      	<td><?php echo $v_all_info->client_city; ?></td>
        <td class="center">                 
            <a class="btn btn-info" href="#">
                <i class="icon-edit icon-white"></i>  
                Edit                                            
            </a>
            <a class="btn btn-danger" href="" onclick="return check_delete();">
                <i class="icon-trash icon-white"></i> 
                Delete
            </a>
         </td>
      </tr>	
	  
      <tr>
      	<td>Client Country : </td>
      	<td><?php echo $v_all_info->client_country; ?></td>
        <td class="center">                 
            <a class="btn btn-info" href="#">
                <i class="icon-edit icon-white"></i>  
                Edit                                            
            </a>
            <a class="btn btn-danger" href="" onclick="return check_delete();">
                <i class="icon-trash icon-white"></i> 
                Delete
            </a>
         </td>
      </tr>
      
      <tr>
      	<td>Client Mail : </td>
        <td><?php echo $v_all_info->client_email; ?></td>
        <td class="center">                 
            <a class="btn btn-info" href="#">
                <i class="icon-edit icon-white"></i>  
                Edit                                            
            </a>
            <a class="btn btn-danger" href="" onclick="return check_delete();">
                <i class="icon-trash icon-white"></i> 
                Delete
            </a>
         </td>
      </tr>
	  
      <tr>
      	<td>Client Alternative Mail : </td>
      	<td><?php echo $v_all_info->client_alternative_email; ?></td>
        <td class="center">                 
            <a class="btn btn-info" href="#">
                <i class="icon-edit icon-white"></i>  
                Edit                                            
            </a>
            <a class="btn btn-danger" href="" onclick="return check_delete();">
                <i class="icon-trash icon-white"></i> 
                Delete
            </a>
         </td>
      </tr>
	  
      <tr>
      	<td>Client Mobile : </td>
      	<td><?php echo $v_all_info->client_mobile; ?></td>
        <td class="center">                 
            <a class="btn btn-info" href="#">
                <i class="icon-edit icon-white"></i>  
                Edit                                            
            </a>
            <a class="btn btn-danger" href="" onclick="return check_delete();">
                <i class="icon-trash icon-white"></i> 
                Delete
            </a>
         </td>
      </tr>
	  
     <tr>
      	<td>Description : </td>
      	<td><?php echo $v_all_info->client_description; ?></td>
        <td class="center">                 
            <a class="btn btn-info" href="#">
                <i class="icon-edit icon-white"></i>  
                Edit                                            
            </a>
            <a class="btn btn-danger" href="" onclick="return check_delete();">
                <i class="icon-trash icon-white"></i> 
                Delete
            </a>
         </td>
      </tr> 
       </tbody>
          <?php } ?> 
   </table>   
     
</div>
