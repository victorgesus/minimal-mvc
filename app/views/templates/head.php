<!DOCTYPE html>

<!--
|--------------------------------
| HEAD TEMPLATE
|--------------------------------
| A head template to show how to load assets and other stuff.
| You can load assets using the url on config.
| @usage:   $this->config[url];/assets/css/nameofyourcss
| @warning: Do not forget php tag, look the example below.

-->

<html>
<head>

	<!-- Meta Info -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<title><?=$this->config['label'];?></title>

	<!-- Bootstrap CSS -->
	<link href="<?=$this->config['url'];?>/assets/css/bootstrap.css" rel="stylesheet">


	<!-- Your CSS Here -->

</head>

<body>

