<!-- page header -->
<?php $this->load->view('partials/header_home'); ?>

<!-- page body -->

<?php $this->load->view('partials/body_home.php'); ?>

// $data['project_code'] = $project_code;
// $this->load->view('partials/nav_progress_locations.php', $data);
<?php 
 
$data['item_code'] = $item_code;
$data['project_code'] = $project_code;

$this->load->view('partials/nav_progress_locations.php', $data); ?>
<!-- page footer -->

<?php $this->load->view('partials/footer_home'); ?>