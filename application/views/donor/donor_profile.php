<div class="donor_profile">
   
   <table class="table table-striped table-bordered bootstrap-datatable datatable">
       <thead>
            <tr>
                <th>List of Donor </th>
                <th>Donor Info</th>
                <th>Action</th>
            </tr>
       </thead> 
      <?php 
           foreach ($all_info as $v_all_info) 
           {
        ?>
       
       <tbody>	
  
      <tr>
      	 <td>Donor Name : </td>
      	 <td><?php echo $v_all_info->donor_firstname; ?><?php echo $v_all_info->donor_lastname; ?> </td>
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
      	<td>Donate For :</td>
      	<td><?php echo $v_all_info->donor_donate_for; ?> </td>
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
      	<td>Donor Address : </td>
      	<td><?php echo $v_all_info->donor_address; ?></td>
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
      	<td>Donor City : </td>
      	<td><?php echo $v_all_info->donor_city; ?></td>
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
      	<td>Donor Country : </td>
      	<td><?php echo $v_all_info->donor_country; ?></td>
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
      	<td>Donor Mail : </td>
        <td><?php echo $v_all_info->donor_mail; ?></td>
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
      	<td>Donor Alternative Mail : </td>
      	<td><?php echo $v_all_info->donor_alternative_mail; ?></td>
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
      	<td>Donor Mobile : </td>
      	<td><?php echo $v_all_info->donor_mobile; ?></td>
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
      	<td><?php echo $v_all_info->donor_description; ?></td>
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
