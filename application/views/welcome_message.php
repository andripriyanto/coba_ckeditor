<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url('vendor/bs4/css/bootstrap.min.css'); ?>">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Hello, world!</h1>
	<?php echo form_open(); ?>
	<?php echo form_textarea(array(
		"name"	=> "ckeditor1",
		"id"	=> "ckeditor1",
		"rows"	=> "10",
		"cols"	=> "80"
	)); ?>
	<?php echo form_close(); ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo base_url('vendor/jquery-3.4.1/jquery-3.4.1.min.js'); ?>"></script>
    <script src="<?php echo base_url('vendor/popperjs-1.12.9/popper.min.js'); ?>"></script>
    <script src="<?php echo base_url('vendor/bs4/js/bootstrap.min.js'); ?>"></script>

	<!-- ck editor -->
	<script src="<?php echo base_url('vendor/ckeditor-4.13.0/ckeditor.js'); ?>"></script>
	<script>
		// Replace the <textarea id="editor1"> with a CKEditor
		// instance, using default configuration.
		CKEDITOR.replace( 'ckeditor1' );
	</script>
  </body>
</html>