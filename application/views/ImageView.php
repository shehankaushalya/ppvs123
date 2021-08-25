<!-- page header -->
<?php $this->load->view('partials/header_home'); ?>

<!-- page body -->

<?php $this->load->view('partials/body_home.php'); ?>

<?php 
 
$data['item_code'] = $item_code;
$data['project_code'] = $project_code;
$data['location_code'] = $location_code;
$data['remark'] = $remark;

$this->load->view('partials/nav_progress_details.php', $data); ?>

<!-- page footer -->

<?php $this->load->view('partials/footer_home'); ?>