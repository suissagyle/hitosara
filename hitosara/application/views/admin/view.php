<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hitosara - Application Details</title>
	<link href="<?php echo base_url('css/admin/bootstrap.min.css'); ?>" rel="stylesheet">
	<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
	<link href="<?php echo base_url('css/admin/datepicker3.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url('css/admin/styles.css'); ?>" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="<?php echo base_url('js/admin/html5shiv.js'); ?>"></script>
	<script src="<?php echo base_url('js/admin/respond.min.js'); ?>"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Hitosara</span> 管理画面</a>
				
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		
		<ul class="nav menu">
			<li><a href="<?php echo base_url() ?>dashboard"><em class="fas fa-columns">&nbsp;</em> ダッシュボード</a></li>
			<li class="parent active"><a data-toggle="collapse" href="apply"><em class="fa fa-calendar">&nbsp;</em> お申込み<span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
			</a>
				<ul class="children collapse" id="sub-item-1">
					<li><a class="" href="<?php echo base_url() ?>index.php/application">
						<span class="fa fa-arrow-right">&nbsp;</span> 新しい契約
					</a></li>
					<li><a class="" href="<?php echo base_url() ?>index.php/application/pending">
						<span class="fa fa-arrow-right">&nbsp;</span> 審査中
					</a></li>
					<li><a class="" href="<?php echo base_url() ?>index.php/application/progress">
						<span class="fa fa-arrow-right">&nbsp;</span> 支払手続き中
					</a></li>
					<li><a class="" href="<?php echo base_url() ?>index.php/application/service">
						<span class="fa fa-arrow-right">&nbsp;</span> サービス開始済み
					</a></li>
					
				</ul>
			</li>
			<li><a href="<?php echo base_url() ?>index.php/inquire"><em class="fas fa-phone-square">&nbsp;</em> お問い合わせ</a></li>
			
			<!-- <li><a href="inquire"><em class="fas fa-phone">&nbsp;</em> Inquiry</a></li> --><!-- 
			<li><a href="elements.html"><em class="fa fa-toggle-off">&nbsp;</em> UI Elements</a></li>
			<li><a href="panels.html"><em class="fa fa-clone">&nbsp;</em> Alerts &amp; Panels</a></li> -->
			
			<li><a href="<?php echo base_url() ?>dashboard/logout"><em class="fa fa-power-off">&nbsp;</em> ログアウト</a></li>
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">お申込み</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">アプリケーション詳細</h1>
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-container">
			
			<table class="table table-striped">
		    	<tr>
		      		<th scope="row">会社名:</th>
		      		<td><?php echo html_escape($apply->fullname); ?></td>
		    	</tr>
		    	<tr>
		      		<th scope="row">代表者名:</th>
		      		<td><?php echo html_escape($apply->repname); ?></td>
		    	</tr>
		    	<tr>
		      		<th scope="row">郵便番号:</th>
		      		<td><?php echo html_escape($apply->postalcode); ?></td>
		    	</tr>
		    	<tr>
		      		<th scope="row">住所:</th>
		      		<td><?php echo html_escape($apply->streetno); ?></td>
		    	</tr>
		    	<tr>
		      		<th scope="row">電話番号:</th>
		      		<td><?php echo html_escape($apply->phoneno); ?></td>
		    	</tr>
		    	<tr>
		      		<th scope="row">店舗名:</th>
		      		<td><?php echo html_escape($apply->storename); ?></td>
		    	</tr>
		    	<tr>
		      		<th scope="row">店舗電話番号:</th>
		      		<td><?php echo html_escape($apply->storetelno); ?></td>
		    	</tr>
		    	<tr>
		      		<th scope="row">担当者名:</th>
		      		<td><?php echo html_escape($apply->inchargename); ?></td>
		    	</tr>
		    	<tr>
		      		<th scope="row">連絡用携帯電話番号:</th>
		      		<td><?php echo html_escape($apply->inchargename2); ?></td>
		    	</tr>
		    	<tr>
		      		<th scope="row">メールアドレス:</th>
		      		<td><?php echo html_escape($apply->email); ?></td>
		    	</tr>
		    	<tr>
		      		<th scope="row">利用開始希望月:</th>
		      		<td><?php echo html_escape($apply->month); ?>   <?php echo html_escape($apply->year); ?></td>
		    	</tr>
		    	<tr>
		      		<th scope="row">申込サービス（税抜・契約自動更新:</th>
		      		<td><?php echo html_escape($apply->appservice); ?></td>
		    	</tr>
		    	<tr>
		      		<th scope="row">複数店舗申込:</th>
		      		<td><?php echo html_escape($apply->addstorenum); ?></td>
		    	</tr>
		    	<tr>
		      		<th scope="row">SAVOR JAPANも同時に申込む:</th>
		      		<td><?php echo html_escape($apply->savorjapanoption); ?></td>
		    	</tr>
		    	<tr>
		      		<th scope="row">お支払い方法:</th>
		      		<td><?php echo html_escape($apply->paymentmethod); ?></td>
		    	</tr>
		    	<!-- <tr>
		      		<th scope="row">利用規約・プライバシポリシー:</th>
		      		<td><?php echo html_escape($apply->inchargename2); ?></td>
		    	</tr> -->
			</table>

		</div>
		
		
	</div>	<!--/.main-->
	
	<script src="<?php echo base_url('js/admin/jquery-1.11.1.min.js'); ?>"></script>
	<script src="<?php echo base_url('js/admin/bootstrap.min.js'); ?>"></script>
	<script src="<?php echo base_url('js/admin/chart.min.js'); ?>"></script>
	<script src="<?php echo base_url('js/admin/chart-data.js'); ?>"></script>
	<script src="<?php echo base_url('js/admin/easypiechart.js'); ?>"></script>
	<script src="<?php echo base_url('js/admin/easypiechart-data.js'); ?>"></script>
	<script src="<?php echo base_url('js/admin/bootstrap-datepicker.js'); ?>"></script>
	<script src="<?php echo base_url('js/admin/custom.js'); ?>"></script>
	<script>
		window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};
	</script>
		
</body>
</html>