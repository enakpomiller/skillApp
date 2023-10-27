<?php $this->view('layout/auth/header') ?>

<?php require('auth_pages/'.$page_name.'.php'); ?>
<?php $this->view('layout/auth/footer') ?>