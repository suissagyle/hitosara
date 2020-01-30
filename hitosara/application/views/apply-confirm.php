
<div class="page landing apply confirm"> <!-- Page: APPLY CONFIRM start -->
	<section class="sect1"> <!-- SECTION 1 START -->
		<div class="section-divider ">
			<h1 class="wow fadeInUp" data-wow-delay="0.3s">ヒトサラ店舗会員 申込申請フォーム</h1>
		</div>
		<div class="section-divider">
			
			<div class="wizard-progress clearfix">
			    <div class=" step active-step">
			       
			        <span class="visuallyhidden"></span><span class="step-num">1</span>
			    </div>
			    <div class="step active-step">
			        
			        <span class="visuallyhidden"></span><span class="step-num">2</span>
			    </div>
			    <div class="step">
			      
			        <span class="visuallyhidden"></span><span class="step-num">3</span>
			    </div>
			</div>
			<div class="steps-names">
				 <span class="step-name">情報入力</span>
			     <span class="step-name">入力内容の確認</span>
			     <span class="step-name">申込申請完了</span>
			</div>
		</div>
		<div class="heading-red">ご注意：まだお申込み手続きは完了しておりません。ご記入いただいた内容をご確認のうえ、ページ下の【この内容で申込む】ボタンを押してください</div>
		


		<form class="section-form" action="<?php echo base_url('index.php/applyconfirm/send'); ?>" method="post">
			
			<table class="confirm-table">
				<tr>
					<td><label>会社名</label></td>
					<td><label><?php echo html_escape($fullname); ?></label>
					<?php echo form_hidden('fullname', html_escape($this->input->post('fullname'))); ?> </td>
				</tr>
				<tr>
					<td><label>代表者名</label></td>
					<td><label><?php echo html_escape($repname); ?></label>
					<?php echo form_hidden('repname', html_escape($this->input->post('repname'))); ?> </td>
				</tr>
				<tr>
					<td><label>郵便番号</label></td>
					<td><label><?php echo html_escape($postalcode); ?></label>
					<?php echo form_hidden('postalcode', html_escape($this->input->post('postalcode'))); ?> </td>
				</tr>
				<tr>
					<td><label>住所</label></td>
					<td><label><?php echo html_escape($streetno); ?></label>
					<?php echo form_hidden('streetno', html_escape($this->input->post('streetno'))); ?> </td>
				</tr>
				<tr>
					<td><label>電話番号</label></td>
					<td><label><?php echo html_escape($phoneno); ?></label>
					<?php echo form_hidden('phoneno', html_escape($this->input->post('phoneno'))); ?> </td>
				</tr>
				<tr>
					<td><label>店舗名</label></td>
					<td><label><?php echo html_escape($storename); ?></label>
					<?php echo form_hidden('storename', html_escape($this->input->post('storename'))); ?> </td>
				</tr>
				<tr>
					<td><label>店舗電話番号</label></td>
					<td><label><?php echo html_escape($storetelno); ?></label>
					<?php echo form_hidden('storetelno', html_escape($this->input->post('storetelno'))); ?></td>
				</tr>
				<tr>
					<td><label>担当者名</label></td>
					<td><label><?php echo html_escape($inchargename); ?></label>
					<?php echo form_hidden('inchargename', html_escape($this->input->post('inchargename'))); ?> </td>
				</tr>
				<tr>
					<td><label>連絡用携帯電話番号（ハイフン抜き）</label></td>
					<td><label><?php echo html_escape($inchargename2); ?></label>
					<?php echo form_hidden('inchargename2', html_escape($this->input->post('inchargename2'))); ?> </td>
				</tr>
				<tr>
					<td><label>メールアドレス</label></td>
					<td><label><?php echo html_escape($email); ?></label>
						<?php echo form_hidden('email', html_escape($this->input->post('email'))); ?> </td>
				</tr>
				<tr>
					<td><label>利用開始希望月</label></td>
					<td><label><?php echo html_escape($month); ?> &nbsp;<?php echo html_escape($year); ?></label> 
						<?php echo form_hidden('month', html_escape($this->input->post('month'))); ?>
						<?php echo form_hidden('year', html_escape($this->input->post('year'))); ?>
				</tr>
				<tr>
					<td><label>申込サービス（税抜・契約自動更新）</label></td>
					<td><label><?php echo html_escape($appservice); ?></label>
					<?php echo form_hidden('appservice', html_escape($this->input->post('appservice'))); ?> </td>
				</tr>
				<tr>
					<td><label>複数店舗申込</label></td>
					<td><label><?php echo html_escape($addstorenum); ?></label>
						<?php echo form_hidden('addstorenum', $addstorenum); ?>
					</label></td>
				</tr>
				<tr>
					<td><label>SAVOR JAPANも同時に申込む</label></td>
					<td><label><?php echo html_escape($savorjapanoption); ?></label>
					<?php echo form_hidden('savorjapanoption', $savorjapanoption); ?></td>
				</tr>
				<tr>
					<td><label>お支払い方法</label></td>
					<td><label><?php echo html_escape($paymentmethod); ?></label>
					<?php echo form_hidden('paymentmethod', $paymentmethod); ?></td>
				</tr>
				<tr>
					<td><label>利用規約・プライバシポリシー</label></td>
					<td>同意する</td>
				</tr>


			</table>

			<div class="bytwo">
				<input class="btn submit" name="submitconfirm-btn" type="submit" src="../images/white-arrow.png" value="この内容で申し込む">
				<input class="btn back" onClick="history.back()" value="入力情報を修正">
			</div>
			<div class="last">
				<p>■お申込み後、弊社担当より電話またはEメールにてご連絡させていただきます</p>
				<p>■土曜・日曜・祝日、年末年始休暇・夏期休暇期間は、翌営業日以降の対応とさせていただきます。またご連絡までにお時間をいただく場合がございます。あらかじめご了承ください</p>
			</div>
		<?php echo form_close(); ?>

	</section>	<!-- SECTION 1 END -->

</div> <!-- Page: APPLY CONFIRM end -->


<script>
	window.onbeforeunload = function() {
	    return 'Are you sure you want to leave? ';
	};
</script>

