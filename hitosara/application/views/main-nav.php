

<div class="wrapper"> <!-- WRAPPER START -->
	<header> <!-- HEADER START -->
		<div class="bg-nav">

			<div class="nav-wrapper">	 <!-- NAV WRAPPER START-->
				<div class="upper-nav">
					<div class="left">
						<span>ヒトサラ取扱事業本部</span>
						<p>ヒトサラ（hitosara） 店舗・法人向け有料広告 申込専用サイト</p>
					</div>
					<div class="right">
						<img src="images/pc-logo.jpg" alt="" title="Header IMAGE">
					</div>
				</div>
				<div class="right">
					<nav class="main" id="mainNav"> <!-- NAV MAIN START -->
						<ul>
							<li <?php if($this->uri->segment(1)=="top"){echo 'class="active"';}?> ><a href="<?php echo base_url('top'); ?>">Top</a></li>
							<li <?php if($this->uri->segment(1)=="features"){echo 'class="active"';}?> ><a href="<?php echo base_url('features'); ?>">特徴・機能</a></li>
							<li <?php if($this->uri->segment(1)=="top#sect6"){echo 'class="active"';}?> ><a class="scrollmenu" href="<?php echo base_url('top#sect6'); ?>">料金表</a></li>
							<li <?php if($this->uri->segment(1)=="inbound"){echo 'class="active"';}?> ><a href="<?php echo base_url('inbound'); ?>">インバウンド対策</a></li>
							<li <?php if($this->uri->segment(1)=="inquiry"){echo 'class="active"';}?> ><a href="<?php echo base_url('inquiry'); ?>">お問合せ</a></li>
							<li <?php if($this->uri->segment(1)=="apply" || $this->uri->segment(1)=="applyconfirm" || $this->uri->segment(1)=="applysuccess"){echo 'class="active"';}?> ><a href="<?php echo base_url('apply'); ?>">お申込み</a></li>
						</ul>
					</nav> <!-- NAV MAIN END -->
					<!-- NAV MOBILE START -->
					<nav class="mobile">
						<p>ヒトサラ掲載・登録・申込専用サイト</p>
					    <div class="canvas">
							<span class="lnr lnr-menu"></span>
						</div>
						<div id="mySidenav" class="sidenav">
							<div class="closenav">
								<span class="lnr lnr-cross"></span>
							</div>
							<div class="top-wrapper">
							 	<div class="wrapper">
									<li <?php if($this->uri->segment(1)=="top"){echo 'class="active"';}?> ><a href="<?php echo base_url('top'); ?>">Top</a></li>
									<li <?php if($this->uri->segment(1)=="features"){echo 'class="active"';}?> ><a href="<?php echo base_url('features'); ?>">有料プランの特徴・機能</a></li>
									<li <?php if($this->uri->segment(1)=="top#sect6"){echo 'class="active"';}?> ><a class="scrollmenu" href="<?php echo base_url('top#sect6'); ?>">料金表</a></li>
									<li <?php if($this->uri->segment(1)=="inbound"){echo 'class="active"';}?> ><a href="<?php echo base_url('inbound'); ?>">インバウンド対策（Savor Japan）</a></li>
									<li <?php if($this->uri->segment(1)=="inquiry"){echo 'class="active"';}?> ><a href="<?php echo base_url('inquiry'); ?>">お問合せ</a></li>
									<li <?php if($this->uri->segment(1)=="apply"){echo 'class="active"';}?> ><a href="<?php echo base_url('apply'); ?>">今すぐWEB申込</a></li>
							  	</div>
							</div>
						</div>	
					</nav> <!-- NAV MOBILE END -->
					<!-- NAV MOBILE START -->
					<nav class="mobile cf">
						<div class="mobile-head-left">
							<div class="left-wrap cf">
								<div class="left-txt">ヒトサラ取扱事業本部</div>
								<div class="left-logo"><img src="<?php echo base_url(); ?>images/mobile-logo-hitosara.jpg" alt="ヒトサラ(hitosara)"></div>
							</div>
							<div class="left-ttl">ヒトサラ(hitosara) 店舗･法人向け有料広告 申込専用サイト</div>
						</div>
					    
						<div id="mySidenav" class="sidenav">
							<div class="closenav">
								<span class="lnr lnr-cross"></span>
							</div>
							<div class="top-wrapper">
							 	<div class="wrapper">
									<li <?php if($this->uri->segment(1)=="top"){echo 'class="active"';}?> ><a href="<?php echo base_url('top'); ?>">Top</a></li>
									<li <?php if($this->uri->segment(1)=="features"){echo 'class="active"';}?> ><a href="<?php echo base_url('features'); ?>">有料プランの特徴・機能</a></li>
									<li <?php if($this->uri->segment(1)=="top#sect6"){echo 'class="active"';}?> ><a class="scrollmenu" href="<?php echo base_url('top#sect6'); ?>">料金表</a></li>
									<li <?php if($this->uri->segment(1)=="inbound"){echo 'class="active"';}?> ><a href="<?php echo base_url('inbound'); ?>">インバウンド対策（Savor Japan）</a></li>
									<li <?php if($this->uri->segment(1)=="inquiry"){echo 'class="active"';}?> ><a href="<?php echo base_url('inquiry'); ?>">お問合せ</a></li>
									<li <?php if($this->uri->segment(1)=="apply"){echo 'class="active"';}?> ><a href="<?php echo base_url('apply'); ?>">今すぐWEB申込</a></li>
							  	</div>
							</div>
						</div>	
					</nav> <!-- NAV MOBILE END -->
				</div>
			</div> <!-- NAV WRAPPER END-->
		</div>
		<div class="sticky-panel">
			<div class="small-4 xsmall-12 img">
				<img class="wow fadeIn" data-wow-delay="0.3s" src="http://adkitdev.s200.coreserver.jp/test-sites/cebu/hitosara-backend/images/header-logo.png" alt="" title="Header IMAGE">
			</div>
			<div class="small-4 xsmall-12 title">
				ヒトサラ掲載・登録・申込 専用サイト <span>＞＞</span>
			</div>
			<div class="small-4 xsmall-12 link">
				<a class="wow bounceIn" data-wow-delay="0.3s" href="apply">今すぐWEB申込<img src="images/white-arrow.png"></a>
				<!-- <a class="mobile" href="apply" class="btn">今すぐスマホで掲載申込</a> -->
			</div>
			<!-- <div class="subtitle">
				<p>今、ヒトサラ(hitosara)が選ばれる理由とは!?</p>
			</div> -->
		</div>

		<div class="sticky-panel mobile">
			<div class="img">
				<img src="<?php echo base_url('images/header-logo.png'); ?>" alt="" title="Header IMAGE">
			</div>
			<div class="title">
				ヒトサラ掲載・登録・申込 専用サイト <span>＞＞</span>
			</div>
			<div class="title-mobile">掲載・登録・申込 専用サイト</div>
			<div class="link">
				<a href="apply" class="btn">今すぐスマホで掲載申込</a>
				<!-- <a class="mobile" href="apply" class="btn">今すぐスマホで掲載申込</a> -->
			</div>
		</div>

	</header> <!-- HEADER END -->