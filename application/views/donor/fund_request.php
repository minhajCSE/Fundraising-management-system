<div class="donor_profile">
   
   <table class="table table-striped table-bordered bootstrap-datatable datatable">
       <thead>
            <tr>
                <th>Fund Request ID</th>
                <th>Client Username</th>
                <th>Category Name</th>
                <th>Client Email</th>
                <th>Fund Title</th>
                <th>Message</th>
                <th>Action</th>
            </tr>
       </thead> 
      <?php 
           foreach($all_fund_request as $v_all_request) 
           {
        ?>
       
       <tbody>	
  
      <tr>
      	 <td><?php echo $v_all_request->fund_request_id; ?></td>
      	 <td><?php echo $v_all_request->client_username; ?></td>
         <td><?php echo $v_all_request->category_name; ?></td>
         <td><?php echo $v_all_request->client_email; ?></td>
         <td><?php echo $v_all_request->fund_title; ?></td>
         <td><?php echo $v_all_request->message; ?></td>
         <td class="center"><a target="_blank" href="client_details.html">Details</a></td>
      </tr>
       </tbody>
          <?php } ?> 
   </table>   
     
</div>


