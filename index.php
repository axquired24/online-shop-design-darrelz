<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Online Shop | Tas dan Baju Online">
    <meta name="author" content="Darrelz Shop">
	<title>Darrelz Shop | Online</title>
    
    <!-- BS3 Core CSS -->
    <link href="../bs3_dist/css/bootstrap.min.css" rel="stylesheet" />
	<link href="custom.css" rel="stylesheet" />
    
    <!-- Custom CSS -->
</head>

<body class="bg-pink">
	<?php include('core/navbar.php'); 
		$page = $_GET['page'];
		if(!empty($page)){
			include $page.".php";		
		}else{
			include"default_page.php";
		}
	?>

<!-- FOOTER -->
	<?php include('core/footer.php'); ?>
<!-- END of FOOTER -->                 

<!-- JQuery and Bootstrap js -->
<script src="../bs3_dist/js/jquery.js"></script>
<script src="../bs3_dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="slide/engine1/wowslider.js"></script>
<script type="text/javascript" src="slide/engine1/script.js"></script>
<script type="text/javascript">
	$('#myTab li:eq(0) a').tab('show')
</script>

<?php /*?><?php if(!empty($_GET[page])){
		echo "";
	  }else{
	  	echo "<script src=smoothscroll.js></script>"; // Aktifkan smooth scroll dihalaman awal saja
	  }
?>
<?php */?>		
<script type="text/javascript">
	$('body').scrollspy({ target: '.navbar-collapse' });
	$("a").tooltip({placement:"bottom"});
	$("abbr").tooltip({placement:"bottom"});
	$("img").tooltip({placement:"top"});
	$(".tip-bottom").tooltip({placement:"bottom"});
</script>  
</body>
</html>
