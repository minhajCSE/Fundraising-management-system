<script src="<?php echo base_url(); ?>js/jsval.js"></script>    
<script src="<?php echo base_url(); ?>js/country.js"></script>
<script type="text/javascript">
        var xmlhttp = false;

        try {

        xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");


        } catch (e) {

        try {

        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        } catch (E) {

        xmlhttp = false;
        }
        }

        if (!xmlhttp && typeof XMLHttpRequest != 'undefined') {
        xmlhttp = new XMLHttpRequest();

        }

        function makerequest(given_email,objID)
         {
                serverPage='<?php echo base_url();?>welcome/ajax_email_check/'+given_email;
                xmlhttp.open("GET", serverPage);
                xmlhttp.onreadystatechange = function()
                 {

                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                         {

                                document.getElementById(objID).innerHTML = xmlhttp.responseText;
                                if(xmlhttp.responseText=='Alredy Exists !')
                                    {
                                        document.getElementById('cbutton').disabled=true;
                                    }
                                if(xmlhttp.responseText=='Avilable')
                                    {
                                        document.getElementById('cbutton').disabled=false;
                                    }

                         }
                }
            xmlhttp.send(null);
        }
</script>
<!--- Create account --->
<div class="create-account">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="sidebar">
                    <h2>Categories : </h2>
                    <ul>
                         <?php
                            foreach($all_category as $v_category)
                              {
                       ?>
                        <li><i class="fa fa-arrow-circle-right"></i><a href="<?php echo base_url()?>welcome/fund_category/<?php echo $v_category->category_name; ?>"><?php echo $v_category->category_name; ?></a></li>
                       <?php } ?>
                        
                    </ul>
                </div>
            </div>
            <div class="col-md-7">
                <div class="account">
                    <div class="login-info">
                        <h2>Client Login Information : </h2>
                        <div class="message">
                            <h4 style="color:red">  
                               <?php 
                                  $msg = $this->session->userdata('message');
                                  if(isset($msg)){
                                      echo $msg;
                                      $this->session->unset_userdata('message');
                                  }else{
                                      
                                  }
                               ?>
                            </h4>
                        </div>
                        <form action="<?php echo base_url() ; ?>welcome/save_client.html" method="post" onsubmit="return validateStandard(this)">
                            <label for="">User Name : </label>
                            <input type="text" id="create-u" name="client_username" required err="Please Enter Valid  Username" regexp="JSVAL_RX_ALPHA" value=""/><span class="required">*</span><br>
                            <label for="">Email : </label>
                            <input type="text" id="create-e" name="client_email" required err="Please Enter Valid Email" regexp="JSVAL_RX_EMAIL"  value="" onblur="makerequest(this.value,'res')"/><span class="required" id="res">*</span><br>
                            <label for="">Password : </label>
                            <input type="password" id="create-p" name="client_password" required err="Please Enter Valid Password" regexp="JSVAL_RX_ALPHA_NUMERIC_WITHOUT_HIFANE" /><span class="required">*</span><br>
                            <label for="">Confirm Password : </label>
                            <input type="password" id="create-c-p" name="client_confirm_password" required equals="client_password" err="Password Mismatch" /><span class="required">*</span><br>
                     <hr>

                    <div class="detail-info">
                        <h2>Client's Contact Details : </h2>
                        
                            <label for="">First Name : </label>
                            <input type="text" id="create-f-n" name="client_firstname" required="1" regexp="JSVAL_RX_ALPHA" value=""/><span class="required">*</span><br>
                            <label for="">Last Name : </label>
                            <input type="text" id="create-l-n" name="client_lastname" required="1" regexp="JSVAL_RX_ALPHA" value=""/><span class="required">*</span><br>
                            <label for="">Address : </label>
                            <textarea id="create-add" rows="3" name="client_address" cols="30"></textarea><br>
                            
                            <label for="">Country : </label>
                            <select id="create-country" name="client_country"  required>
                                <option value="0">Select Country</option>
                                <script type="text/javascript">
                                    printCountryOptions();
                                </script>
                            </select>
                            <span class="required">*</span><br>
                            
                            <label for="">City : </label>
                            <input type="text" id="create-c" required="1" regexp="JSVAL_RX_ALPHA" name="client_city" id="" /><span class="required">*</span><br>
                            <label for="">Mobile : </label>
                            <input type="cel" id="create-cell" required="1" regexp="JSVAL_RX_TEL" name="client_mobile" id="" /><span class="required">*</span><br>
                            <label for="">Contact Email : </label>
                            <input type="email" id="create-c-e" name="client_email" required="1" regexp="JSVAL_RX_EMAIL" id="" /><span class="required">*</span><br>
                            <label for="">Alternative Email : </label>
                            <input type="email" id="create-a-e" name="client_alternative_email" required="1" regexp="JSVAL_RX_EMAIL" id="" /><span class="required">*</span><br>
                            <label for="">Donation For : </label>
                            <select id="create-select" name="client_donate_for">
                                <option value="Education">Education</option>
                                <option value="Medical">Medical</option>
                                <option value="Poor People">Poor People</option>
                                <option value="Religious">Religious</option>
                                <option value="Autstic">Autstic</option>
                                <option value="Old Home">Old Home</option>
                                <option value="Orphanest">Orphanest</option>
                                <option value="Agriculture">Agriculture</option>
                                <option value="Environment">Environment</option>
                                <option value="Cultural">Cultural</option>
                                <option value="Organaization">Organaization</option>
                                <option value="Calamity">Calamity</option>
                            </select><span class="required">*</span><br>
                            <label for="">Description : </label>
                            <textarea id="create-des" rows="3"  name="client_description" cols="30" ></textarea><br>
                            <input type="submit" id="create-s cbutton" value="Submit" />
                        </form>
                     </div>
                   </div>          
                </div>
            </div>
            <div class="col-md-2">
                <div class="advertise">

                </div>
            </div>
        </div>
    </div>
</div>

