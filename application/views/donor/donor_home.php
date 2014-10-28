<div>
    <ul class="breadcrumb">
        <li>
            <a href="<?php echo base_url(); ?>donor_login/donor_home">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="<?php echo base_url(); ?>donor_login/donor_home">Donor's Dashboard</a>
        </li>
    </ul>
</div>
<div class="sortable row-fluid">
    <a data-rel="tooltip" title="<?php echo $this->db->count_all('tbl_fund_request');?> New Message." class="well span3 top-block" href="<?php echo base_url() ;?>donor_login/fund_request/<?php echo $this->session->userdata('donor_id'); ?>">
        <span class="icon32 icon-color icon-envelope-closed"></span>
        <div>Total Message</div>
        <div> <?php echo $this->db->count_all('tbl_fund_request');?> </div>
        <span class="notification"><?php echo $this->db->count_all_results('tbl_fund_request');?></span>
    </a>
</div>


</div><!--/row-->