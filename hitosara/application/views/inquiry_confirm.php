<div class="page landing inquiry"> <!-- Page: INQUIRY start -->
		<section class="sect1"> <!-- SECTION 1 START -->
			<div class="section-divider ">
				<h1>Inquiry Information</h1>
			</div>
			<form action="<?php echo base_url('inquiry/send'); ?>" method="post" class="section-form">
			

				<div class="form-divider">
					<label>会社名</label>
				</div>
				<div class="form-field">
					<p class="form-confirm"><?php echo html_escape($this->input->post('company')); ?></p>
                	<?php echo form_hidden('company', html_escape($this->input->post('company'))); ?>
				</div>

				<div class="form-divider">
					<label>店舗名</label>
				</div>
				<div class="form-field">
					<p class="form-confirm"><?php echo html_escape($this->input->post('store')); ?></p>
                	<?php echo form_hidden('store', html_escape($this->input->post('store'))); ?>
				</div>

				<div class="form-divider">
					<label>ジャンル</label>
				</div>
				<div class="form-field">
					<p class="form-confirm"><?php echo html_escape($this->input->post('genre')); ?></p>
                	<?php echo form_hidden('genre', html_escape($this->input->post('genre'))); ?>
						
				</div>

				<div class="form-divider">
					<label>席数</label>
				</div>
				<div class="form-field">
					
					<p class="form-confirm"><?php echo html_escape($this->input->post('seats')); ?></p>
                	<?php echo form_hidden('seats', html_escape($this->input->post('seats'))); ?>
				</div>

				<div class="form-divider">
					<label>郵便番号</label>
				</div>
				<div class="form-field small">
					<p class="form-confirm"><?php echo html_escape($this->input->post('postal')); ?></p>
                	<?php echo form_hidden('postal', html_escape($this->input->post('postal'))); ?>
				</div>

				<div class="form-divider">
					<label>住所</label>
				</div>
				<div class="form-field inline">
					<div class="addr">
						<p class="form-confirm"><?php echo html_escape($this->input->post('streetno')); ?></p>
	                	<?php echo form_hidden('streetno', html_escape($this->input->post('streetno'))); ?>
					</div>
					
				</div>

				<div class="form-divider">
					<label>電話番号</label>
				</div>
				<div class="form-field medium">
					<p class="form-confirm"><?php echo html_escape($this->input->post('phone')); ?></p>
                	<?php echo form_hidden('phone', html_escape($this->input->post('phone'))); ?>
				</div>

				<div class="form-divider">
					<label>メールアドレス</label>
				</div>
				<div class="form-field">
					<p class="form-confirm"><?php echo html_escape($this->input->post('email')); ?></p>
                	<?php echo form_hidden('email', html_escape($this->input->post('email'))); ?>
				</div>

				<div class="form-divider">
					<label>ご担当者様氏名</label>
				</div>
				<div class="form-field">
					<p class="form-confirm"><?php echo html_escape($this->input->post('incharge1')); ?></p>
                	<?php echo form_hidden('incharge1', html_escape($this->input->post('incharge1'))); ?>
				</div>

				<div class="form-divider">
					<label>連絡用携帯電話番号(ハイフン抜き)</label>
				</div>
				<div class="form-field">
					<p class="form-confirm"><?php echo html_escape($this->input->post('incharge2')); ?></p>
                	<?php echo form_hidden('incharge2', html_escape($this->input->post('incharge2'))); ?>
				</div>

				<div class="form-divider">
					<label>お問合せ種別</label>
				</div>
				<div class="form-field">
					<p class="form-confirm">
						<?php 
							$type1 = $this->input->post('type1');
							$type2 = $this->input->post('type2');
							$type3 = $this->input->post('type3');
							$type4 = $this->input->post('type4');
							$type5 = $this->input->post('type5');
							$type6 = $this->input->post('type6');
							$type7 = $this->input->post('type7');

							$a = $type1;
							$a .= ' ' . $type2;
							$a .= ' ' . $type3;
							$a .= ' ' . $type4;
							$a .= ' ' . $type5;
							$a .= ' ' . $type6;
							$a .= ' ' . $type7;
							echo $a; 
						?>
					
					</p>
                	<?php echo form_hidden('type', $a); ?>
				</div>

				<!-- <div class="form-divider">
					<label>メインターゲットの性別</label>
				</div>
				<div class="form-field">
					
					<p class="form-confirm"><?php echo html_escape($this->input->post('gender')); ?></p>
                	<?php echo form_hidden('gender', html_escape($this->input->post('gender'))); ?>
				</div>

				<div class="form-divider">
					<label>メインターゲットの年齢層</label>
				</div>
				<div class="form-field ">
					
					<p class="form-confirm"><?php echo html_escape($this->input->post('age')); ?></p>
                	<?php echo form_hidden('age', html_escape($this->input->post('age'))); ?>
				</div>


				<div class="form-divider">
					<label>現在活用中の販促ツール</label>
				</div>
				<div class="form-field">

					<p class="form-confirm"><?php echo html_escape($this->input->post('tool')); ?></p>
                	<?php echo form_hidden('tool', html_escape($this->input->post('tool'))); ?>
				</div> -->

				<div class="form-divider">
					<label>問合せ内容をご記入下さい</label>
				</div>
				<div class="form-field">
					<p class="form-confirm"><?php echo html_escape($this->input->post('msg')); ?></p>
                	<?php echo form_hidden('msg', html_escape($this->input->post('msg'))); ?>
					
				</div>
				<div class="bytwo">
					<input class="btn back" onClick="history.back()" value="入力情報を修正">
					<input class="btn submit" name="submitconfirm-btn" type="submit" value="この内容で申し込む">
				</div>
				<p>お電話でのお申し込み・お問合せをご希望の方は<span class="red">050-3703-0123</span>までお問い合わせください。<br>（受付時間／平日10：00〜18：00）<br>※解約等に関するお問合せには対応できません。</p>
			</form>
		</section>	<!-- SECTION 1 END -->

	</div> <!-- Page: INQUIRY end -->