
<?php $this->view('layout/fragment/header') ?>
<?php //$this->view('layout/fragment/slider') ?>
<?php $this->view('layout/fragment/leftmenu') ?>
<?php $this->view('layout/fragment/rightmenu') ?>
<?php require('pages/'.$page_name.'.php'); ?>

<?php $this->view('layout/fragment/footer') ?>