<!-- page header -->
<?php $this->load->view('partials/header_home'); ?>

<!-- page body -->


<?php $this->load->view('partials/body_home.php'); ?>
<?php
// $data['project_code'] = $project_code;
// $this->load->view('partials/nav_progress_item.php', $data);
$this->load->view('partials/nav_progress_item.php');
?>

<!-- page footer -->

<?php $this->load->view('partials/footer_home'); ?>