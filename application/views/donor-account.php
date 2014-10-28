<script src="<?php echo base_url(); ?>js/jsval.js"></script>    
<script src="<?php echo base_url(); ?>js/country.js"></script>
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
                       <li><i class="fa fa-arrow-circle-right"></i><a href=""><?php echo $v_category->category_name; ?></a></li>
                       <?php } ?>
                       
                    </ul>
                </div>
            </div>
            <div class="col-md-7">
                <div class="account">
                    <div class="login-info">
                        <h2>Donor Login Information : </h2>
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
                        <form action="<?php echo base_url() ; ?>welcome/save_donor.html" method="post" onsubmit="return validateStandard(this);" >
                            <label for="">User Name : </label>
                            <input type="text" id="create-u" name="donor_username"  regexp="JSVAL_RX_ALPHA" err="Please input your username" value=""/><span class="required">*</span><br>
                            <label for="">Email : </label>
                            <input type="email" id="create-e" name="donor_mail" required="1" regexp="JSVAL_RX_EMAIL"  value=""/><span class="required">*</span><br>
                            <label for="">Password : </label>
                            <input type="password" id="create-p" name="donor_password" required="1" regexp="JSVAL_RX_ALPHA_NUMERIC_WITHOUT_HIFANE" id="" /><span class="required">*</span><br>
                            <label for="">Confirm Password : </label>
                            <input type="password" id="create-c-p" required="1" equals="donor_password" name="donor_confirm_password" id="" /><span class="required">*</span><br>
                     <hr>

                    <div class="detail-info">
                        <h2>Donor's Contact Details : </h2>
                        
                            <label for="">First Name : </label>
                            <input type="text" id="create-f-n" name="donor_firstname" required="1" regexp="JSVAL_RX_ALPHA" value=""/><span class="required">*</span><br>
                            <label for="">Last Name : </label>
                            <input type="text" id="create-l-n" name="donor_lastname" required="1" regexp="JSVAL_RX_ALPHA" value=""/><span class="required">*</span><br>
                            <label for="">Address : </label>
                            <textarea id="create-add" rows="3" name="donor_address" cols="30"></textarea><br>
                            
                            <label for="">Country : </label>
                            <select id="create-country" name="donor_country" exclude="0">
                                <option value="0">Select Country</option>
                                <script type="text/javascript">
                                    printCountryOptions();
                                </script>
                            </select>
                            </select><span class="required">*</span><br>
                            
                            <label for="">City : </label>
                            <input type="text" id="create-c" required="1" regexp="JSVAL_RX_ALPHA" name="donor_city" id="" /><span class="required">*</span><br>
                            <label for="">Mobile : </label>
                            <input type="cel" id="create-cell" required="1" regexp="JSVAL_RX_TEL" name="donor_mobile" id="" /><span class="required">*</span><br>
                            <label for="">Contact Email : </label>
                            <input type="email" id="create-c-e" name="donor_mail" required="1" regexp="JSVAL_RX_EMAIL" id="" /><span class="required">*</span><br>
                            <label for="">Alternative Email : </label>
                            <input type="email" id="create-a-e" name="donor_alternative_mail" required="1" regexp="JSVAL_RX_EMAIL" id="" /><span class="required">*</span><br>
                            <label for="">Donation For : </label>
                            <select id="create-select" name="donor_donate_for">
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
                            <textarea id="create-des" rows="3"  name="donor_description" cols="30" ></textarea><br>
                            <input type="submit" id="create-s" value="Submit" />
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