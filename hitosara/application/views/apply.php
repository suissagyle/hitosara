<div class="page landing apply"> <!-- Page: APPLY start -->

		<section class="sect1"> <!-- SECTION 1 START -->
			<div class="section-divider ">
				<h1 class="wow fadeIn" data-wow-delay="0.5s">ヒトサラ店舗会員 申込申請フォーム</h1>
			</div>

			<div class="wizard-progress clearfix">
			    <div class=" step active-step">
			       
			        <span class="visuallyhidden"></span><span class="step-num">1</span>
			    </div>
			    <div class="step">
			        
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


			<div class="section-divider">
				<p>ヒトサラ(hitosara)店舗会員のお申込みは下記に情報をご記入の上、次にお進みください</p>
			</div>
			<hr>
			<form class="section-form" action="<?php echo base_url('index.php/applyconfirm'); ?>" method="post">
				<div class="form-divider">
					<div><label>申込会社名</label></div>
					<div class="red"><label>必須</label></div>
					<input type="text" placeholder="例） おいしいカンパニー" name="fullname" value="" required>
					<span class="redthis">※個人事業主の場合は、代表者名（姓・名）を入力ください</span>
				</div>
				<div class="form-divider">
					<div><label>会社代表者名</label></div>
					<div class="red"><label>必須</label></div>
					<input type="text" placeholder="例） 山田 太郎" name="repname" required>
				</div>
				<div class="form-divider half">
					<div><label>郵便番号（ハイフン抜き半角数字）</label></div>
					<div class="red"><label>必須</label></div>
					<input type="text" style="width: 50%; clear: both; display: block;" placeholder="例） 1638001" name="postalcode" onKeyUp="AjaxZip3.zip2addr(this,'','streetno','streetno');" required>
				</div>
				<div class="form-divider">
					<div><label>住所</label></div>
					<div class="red"><label>必須</label></div>
					<input type="text" placeholder="例） 東京都新宿区西新宿1-1-1" name="streetno" required>
					<span>※アパート・マンション・寮などの場合、名称・号棟・部屋番号まで入力ください</span>
				</div>
				<div class="form-divider">
					<div><label>電話番号（市外局番より全てハイフン抜き）</label></div>
					<div class="red"><label>必須</label></div>
					<input type="text" placeholder="例） 0300000000" name="phoneno" required>
				</div>
				<hr>
				<div class="form-divider">
					<div><label>申込店舗名</label></div>
					<div class="red"><label>必須</label></div>
					<input type="text" placeholder="例） おいしいレストラン" name="storename" required>
				</div>
				<div class="form-divider">
					<div><label>申込店舗電話番号（市外局番より全てハイフン抜き）</label></div>
					<div class="red"><label>必須</label></div>
					<input type="text" placeholder="例） 0300000000" name="storetelno" required>
				</div>
				<div class="form-divider">
					<div><label>担当者名（申込ご本人）</label></div>
					<div class="red"><label>必須</label></div>
					<input type="text" placeholder="例） 山田 花子" name="inchargename" required>
				</div>
				<div class="form-divider">
					<div><label>連絡用携帯電話番号（ハイフン抜き）</label></div>
					<div class="red"><label>必須</label></div>
					<input type="text" placeholder="例） 09000000000" name="inchargename2" required>
				</div>

				<!-- <div class="form-divider">
					<div><label>連絡用携帯電話番号（ハイフン抜き）</label></div>
					<div class="red"><label>必須</label></div>
					<input type="text" placeholder="例） 09000000000" name="phoneno">
				</div> -->

				<div class="form-divider">
					<div><label>メールアドレス</label></div>
					<div class="red"><label>必須</label></div>
					<input type="text" placeholder="例） oishiirestaurant＠ad-kit.co.jp" name="email" required>
					<span>※このメールアドレス宛に申込申請完了メールをお送りします @ad-kit.co.jpからのメールの受信設定をご確認ください</span>
				</div>
				<hr>
				<span class="lightbold">申込サービス内容</span>
				<div class="form-divider">
					<div><label>利用開始希望月  (情報公開月)</label></div>
					<div class="red"><label>必須</label></div><br>
					<div class="yr-month" style="width: 40%;">
						<span></span>
						<!-- <input type="text" placeholder="年" name="year"> -->
						<select name="year" required>
							<option value="2019">2019</option>
							<option value="2020">2020</option>
							<option value="2021">2021</option>
						</select>
						<span class="tiny">年</span>
						<select name="month" required>
							<optgroup label="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
							</optgroup>
						</select><span class="medium">月より</span>

						<!-- <select name="year" class="full" required>
							<optgroup label="">
								<option value="">年</option>
								<option value="2019">2019</option>
								<option value="2020">2020</option>
								<option value="2021">2021</option>
								
							</optgroup>
						</select> -->
					</div>
					<span style="display: block; clear: both;">※当月お申込み締切日を超過の場合は翌月開始となる場合がございます</span>

				</div>
				<div class="form-divider">
					<div><label>申込サービス（契約は自動更新）</label></div>
					<div class="red"><label>必須</label></div>
					<select class="full" name="appservice" required>
						<optgroup label="">
							<option value="">選択してください</option>
							<option value="ゴールドプラン 〈月額30,000円／12ヶ月契約（6ヶ月毎自動更新）〉">ゴールドプラン 〈月額30,000円／12ヶ月契約（6ヶ月毎自動更新）〉</option>
							<option value="ベーシックプラン 〈月額20,000円／12ヶ月契約（6ヶ月毎自動更新）〉">ベーシックプラン 〈月額20,000円／12ヶ月契約（6ヶ月毎自動更新）〉</option>
							<option value="ライトプラン 〈月額10,000円／12ヶ月契約（6ヶ月毎自動更新）〉">ライトプラン 〈月額10,000円／12ヶ月契約（6ヶ月毎自動更新）〉</option>
							<option value="SAVOR JAPANのみ申込む／プランは以下項目から選択してください">SAVOR JAPANのみ申込む／プランは以下項目から選択してください</option>
						</optgroup>
					</select>
					<span>※表示はすべて税抜価格です　※初期費用（料理人、メニュー、撮影費、ライティング費、初期登録費）が別途60,000円かかります</span>
				</div>
				<div class="form-divider">
					<div class="left">
						<!-- <input type="checkbox" name="" checked=""> -->
						<div class="check-apply">
							<div id="smcheck">
						    	<label class="customcheck">
						          <input type="checkbox" id="savorjapan1" name="applysavorjapan1" value="applysavorjapan1">
						          <span class="checkmark"></span>
						        </label>
						    </div>
						    <label class="checklabel leftthis" for="savorjapan1">複数店舗申込の場合はチェックの上、合計店舗数を選択してください</label>
						</div>
						
					</div>
					<div class="right">
						<select class="full" name="addstorenum">
							<optgroup label="">
								<option value="">選択してください</option>
								<option value="2店舗">2店舗</option>
								<option value="3店舗">3店舗</option>
								<option value="4店舗">4店舗</option>
								<option value="5店舗以上">5店舗以上</option>
							</optgroup>
						</select>
					</div>
				</div>

				
				<div class="form-field large">
					
					
					<div class="check-apply">
						<div id="smcheck">
					    	<label class="customcheck">
					          <input type="checkbox" id="savorjapan" name="applysavorjapan" value="applysavorjapan"><span class="checkmark"></span>
					        </label>
					    </div>
					    <label class="checklabel leftthis" for="savorjapan">SAVOR JAPANも同時に申込む</label>
					</div><br>
					<div class="gray">
						<label>
							<select name="savorjapanoption" id="savorjapanoption">
								<optgroup label="">
									<option value="">選択してください</option>
									<option value="英語版〈月額10,000円／12ヶ月契約（6ヵ月更新）〉">英語版〈月額10,000円／12ヶ月契約（6ヵ月更新）〉</option>
									<option value="アジア版〈月額10,000円／12ヶ月契約（6ヵ月更新）〉">アジア版〈月額10,000円／12ヶ月契約（6ヵ月更新）〉</option>
									<option value="英語版+アジア版〈月額20,000円／12ヶ月契約（6ヵ月更新）〉">英語版+アジア版〈月額20,000円／12ヶ月契約（6ヵ月更新）〉</option>
								</optgroup>
							</select>
						</label>
					</div>
					<p>※表示はすべて税抜価格です　※掲載条件：料理人ページ・おすすめBEST3メニューがあること　※初期費用英語版別途60,000円、アジア版別途90,000円がかかります</p>
				</div>
				<hr>
				<div class="form-divider">
					<div><label>お支払い方法</label></div>
					<div class="red"><label>必須</label></div>
				</div>


				<div id="tabs">
				  <input type="radio" name="paymentmethod" value="クレジットカード払い" id="toggle-tab1" checked="checked" />
				  <label for="toggle-tab1"><span class="step-num">1</span>クレジットカード払い</label>
				  <input type="radio" name="paymentmethod" id="toggle-tab2" value="銀行口座引落し"/>
				  <label for="toggle-tab2"><span class="step-num">1</span>銀行口座引落し</label>
				  <div id="tab1" class="tab">
				  ■クレジットカード払いの場合 掲載開始月に初期費用が決済となります。翌月から月額費用（＋従量課金分）が決済されます【決済例/ベーシックプラン(20,000円/月)の場合】初月は初期費用として60,000円の決済、翌月より月額費用20,000円（＋従量課金分）の決済となります※表示はすべて税抜価格です　※支払日は各クレジットカード会社に準じます
				  </div>
				  <div id="tab2" class="tab">
				  ■銀行口座引落しの場合 銀行による口座引落手続きに2～3ヶ月かかる場合がございます。引落可能になるまで、コンビニでも支払可能な請求書を郵送いたします。支払期日までにお支払をお願いします 【お支払い例/ベーシックプラン(20,000円/月)の場合】 初月は初期費用として60,000円のお支払、翌月から月額費用20,000円（＋従量課金分）のお支払となります ※表示はすべて税抜価格です　※口座引落日は、毎月12日又は27日の2択となっております　※口座引落開始の通知は行っておりません。請求書が届かない場合は、口座引落開始とご了承ください。
				  </div>
				</div>
				<hr>
				<div class="form-divider">
					<div><label>利用規約</label></div>
					<div class="red"><label>必須</label></div>
					<p>お申込みにあたっては「利用規約」および「プライバシポリシー」への同意が必要になります。ご確認いただき、同意いただいた上で確認画面へお進みください</p>
				</div>


				<!-- <div class="form-field full">
					<div class="gray">
						<label>
							<select name="paymentmethod">
								<option>クレジットカード</option>
								<option>銀行口座引落し</option>
							</select>
						</label>
						<p>■クレジットカード払いの場合<br>
							初月に2ヶ月分のお支払いとなり、3ヶ月目より毎月の月額料金のお支払いとなります。<br>【お支払い例／ベーシックプラン（20,000円／月）の場合、初月100,000円（2ヶ月分40,000円+初期費用60,000円）のお支払いとなります。】※支払日は各クレジットカード会社の支払日に準ずる。</p>
						<p>■銀行口座引落しの場合<br>初月に2ヶ月分をお振り込み頂き、3ヶ月目より口座引き落としにより月額料金を引き落としでお支払い頂きます。<br>【お支払い例／ベーシックプラン（20,000円／月）の場合、初月100,000円（2ヶ月分40,000円+初期費用60,000円）のお引落しとなります。】<br>※支払日は当社規定日となります。</p>
						<p>
							※表示価格は全て税抜価格となります。<br>
							※年間費用一括払いも承ります。<br>
							※お支払いの詳細は弊社担当より電話もしくはEメールにてご連絡させていただきます。<br>
						</p>
					</div>
					<p class="textbox-head">利用規約</p>
					<div class="text-box" id="textbox">
						<div class="text-box-content">
							<p>株式会社アドキットインフォケーション（以下「当社」）は、以下のとおり個人情報保護方針を定め、個人情報保護の仕組みを構築し、全従業員に個人情報保護の重要性の認識と取組みを徹底させることにより、個人情報の保護を推進致します。</p>
							<p>▪個人情報の管理 <br>当社は、お客さまの個人情報を正確かつ最新の状態に保ち、個人情報への不正アクセス・紛失・破損・改ざん・漏洩などを防止するため、セキュリティシステムの維持・管理体制の整備・社員教育の徹底等の必要な措置を講じ、安全対策を実施し個人情報の厳重な管理を行ないます。</p>
							<p>▪個人情報の利用目的 <br>お客さまからお預かりした個人情報は、当社からのご連絡や業務のご案内やご質問に対する回答として、電子メールや資料のご送付に利用いたします。</p>
							<p>▪個人情報の第三者への開示・提供の禁止<br>当社は、お客さまよりお預かりした個人情報を適切に管理し、次のいずれかに該当する場合を除き、個人情報を第三者に開示いたしません。</p>
							
							<p>株式会社アドキットインフォケーション（以下「当社」）は、以下のとおり個人情報保護方針を定め、個人情報保護の仕組みを構築し、全従業員に個人情報保護の重要性の認識と取組みを徹底させることにより、個人情報の保護を推進致します。</p>
							<p>▪個人情報の管理 <br>当社は、お客さまの個人情報を正確かつ最新の状態に保ち、個人情報への不正アクセス・紛失・破損・改ざん・漏洩などを防止するため、セキュリティシステムの維持・管理体制の整備・社員教育の徹底等の必要な措置を講じ、安全対策を実施し個人情報の厳重な管理を行ないます。</p>
							<p>▪個人情報の利用目的 <br>お客さまからお預かりした個人情報は、当社からのご連絡や業務のご案内やご質問に対する回答として、電子メールや資料のご送付に利用いたします。</p>
							<p>▪個人情報の第三者への開示・提供の禁止<br>当社は、お客さまよりお預かりした個人情報を適切に管理し、次のいずれかに該当する場合を除き、個人情報を第三者に開示いたしません。</p>
						</div>
					</div>
					<p class="textbox-head">プライバシーポリシー</p>
					<div class="text-box" id="textbox">
						<div class="text-box-content">
							<p>株式会社アドキットインフォケーション（以下「当社」）は、以下のとおり個人情報保護方針を定め、個人情報保護の仕組みを構築し、全従業員に個人情報保護の重要性の認識と取組みを徹底させることにより、個人情報の保護を推進致します。</p>
							<p>▪個人情報の管理 <br>当社は、お客さまの個人情報を正確かつ最新の状態に保ち、個人情報への不正アクセス・紛失・破損・改ざん・漏洩などを防止するため、セキュリティシステムの維持・管理体制の整備・社員教育の徹底等の必要な措置を講じ、安全対策を実施し個人情報の厳重な管理を行ないます。</p>
							<p>▪個人情報の利用目的 <br>お客さまからお預かりした個人情報は、当社からのご連絡や業務のご案内やご質問に対する回答として、電子メールや資料のご送付に利用いたします。</p>
							<p>▪個人情報の第三者への開示・提供の禁止<br>当社は、お客さまよりお預かりした個人情報を適切に管理し、次のいずれかに該当する場合を除き、個人情報を第三者に開示いたしません。</p>
						
							<p>株式会社アドキットインフォケーション（以下「当社」）は、以下のとおり個人情報保護方針を定め、個人情報保護の仕組みを構築し、全従業員に個人情報保護の重要性の認識と取組みを徹底させることにより、個人情報の保護を推進致します。</p>
							<p>▪個人情報の管理 <br>当社は、お客さまの個人情報を正確かつ最新の状態に保ち、個人情報への不正アクセス・紛失・破損・改ざん・漏洩などを防止するため、セキュリティシステムの維持・管理体制の整備・社員教育の徹底等の必要な措置を講じ、安全対策を実施し個人情報の厳重な管理を行ないます。</p>
							<p>▪個人情報の利用目的 <br>お客さまからお預かりした個人情報は、当社からのご連絡や業務のご案内やご質問に対する回答として、電子メールや資料のご送付に利用いたします。</p>
							<p>▪個人情報の第三者への開示・提供の禁止<br>当社は、お客さまよりお預かりした個人情報を適切に管理し、次のいずれかに該当する場合を除き、個人情報を第三者に開示いたしません。</p>
						</div>
					</div> -->
					<a href="<?php echo base_url('hstermsofservices'); ?>" target="_blank" class="blue">利用規約について確認する</a> <br>
					<a href="<?php echo base_url('privacypolicy'); ?>" target="_blank" class="blue">プライバシーポリシーについて確認する</a>
					<div class="check-apply">
						<div id="smcheck" class="agree">
					    	<label class="customcheck">
					          <input id="agreecheck" name="agreecheck" type="checkbox" ><span class="checkmark"></span>
					        </label>
					    </div>
					    <label class="checklabel agreecheck" for="agreecheck">「利用規約」および 「プライバシポリシー」に 同意する</label>
					</div>
					<button id="sbmt-btn" class="btn" name="submit-btn" type="submit" value="お申込内容を確認する">お申込内容を確認する</button>

					<!-- <p>■お申し込み後、弊社担当より電話もしくはEメールにてご連絡させていただきます。</p>
					<p>■土曜・日曜・祝日、年末年始休暇・夏期休暇期間は、翌営業日以降の対応とさせていただきます。またご連絡までにお時間をいただく場合がございます。あらかじめご了承ください。</p> -->

			<?php echo form_close(); ?>

		</section>	<!-- SECTION 1 END -->

	</div> <!-- Page: APPLY end -->

<script>
	window.onbeforeunload = function() {
	    return 'Are you sure you want to leave? ';
	};
</script>