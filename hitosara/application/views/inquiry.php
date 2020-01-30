<div class="page landing inquiry"> <!-- Page: INQUIRY start -->
		<section class="sect1"> <!-- SECTION 1 START -->
			<div class="section-divider ">
				<h1>お問合せフォーム［24時間受付]</h1>
			</div>
			<form action="<?php echo base_url('inquiry/confirm'); ?>" method="post" class="section-form">
			
				
				<div class="form-divider">
					<div><label>会社名</label></div>
					<div class="red"><label>必須</label></div>
					<span>※個人事業主様の場合には、代表者様名（フルネーム）をご入力ください</span>
				</div>
				<div class="form-field">
					<input type="text" placeholder="例）おいしいカンパニー" name="company" required>
				</div>

				<div class="form-divider">
					<div><label>店舗名</label></div>
					<div class="red"><label>必須</label></div>
				</div>
				<div class="form-field">
					<input type="text" placeholder="例）おいしいカンパニー" name="store" required>
				</div>

				<div class="form-divider">
					<div><label>ジャンル</label></div>
					<div class="red"><label> 必須 </label></div>
				</div>
				<div class="form-field">
					<div class="gray">
						<label />
						<select name="genre" required>
							<option value="">選択してください</option>
							<option value="和食">和食</option>
							<option value="洋食">洋食</option>
							<option value="イタリアン・フレンチ">イタリアン・フレンチ</option>
							<option value="中華">中華</option>
							<option value="居酒屋">居酒屋</option>
							<option value="ダイニングバー">ダイニングバー</option>
							<option value="焼肉・韓国料理">焼肉・韓国料理</option>
							<option value="アジアン">アジアン</option>
							<option value="カフェ・スイーツ">カフェ・スイーツ</option>
							<option value="バー">バー</option>
						</select>
					</div>
				</div>

				<div class="form-divider">
					<div><label>席数</label></div>

				</div>
				<div class="form-field">
					<input type="text" placeholder="例）60席" name="seats">
				</div>

				<div class="form-divider">
					<div><label>郵便番号(ハイフン抜き)</label></div>
					<div class="red"><label>必須<label></div>
				</div>
				<div class="form-field small">
					<input type="text" placeholder="例）4601111" name="postal" onKeyUp="AjaxZip3.zip2addr(this,'','streetno','streetno');" required>
					<!-- <button class="srchbtn">検　索</button> -->
					<span>※ハイフンは入力しないで下さい</span>
				</div>

				<div class="form-divider">
					<div><label>住所</label></div>
					<div class="red"><label>必須</label></div>
				</div>
				<div class="form-field inline">
					<div class="addr">
						<input type="text" placeholder="都道府県、番地" name="streetno" required>
					</div>
					<!-- <div class="addr">
						<span>住所2</span><input type="text" placeholder="建物名" name="building" required>
					</div> -->
				</div>

				<div class="form-divider">
					<div><label>電話番号</label></div>
					<div class="red"><label>必須<label></div>
				</div>
				<div class="form-field medium">
					<input type="text" placeholder="例）0521234567" name="phone" required>
					<span>※市外局番からすべてハイフンは入力しないで下さい</span>
				</div>

				<div class="form-divider">
					<div><label>メールアドレス</label></div>
					<div class="red"><label>必須</label></div>
				</div>
				<div class="form-field">
					<input type="text" placeholder="例）oishiirestaurant@ad-kit.co.jp" name="email" required>
				</div>

				<div class="form-divider">
					<div><label>担当者名(申込ご本人)</label></div>
					<div class="red"><label>必須</label></div>
				</div>
				<div class="form-field">
					<input type="text" placeholder="例）山田花子" name="incharge1" required>
				</div>

				<div class="form-divider">
					<div><label>携帯電話番号(ハイフン抜き)</label></div>
					<div class="red"><label>必須</label></div>
				</div>
				<div class="form-field">
					<input type="text" placeholder="例）0521234567" name="incharge2" required>
				</div>

				<!-- <div class="form-divider">
					<div><label>メインターゲットの性別</label></div>
				</div>
				<div class="form-field">
					<div class="gray">
						<label>
							<select name="gender">
								<option value="男性">男性</option>
								<option value="女性">女性</option>
							</select>
						</label>
					</div>
				</div>

				<div class="form-divider">
					<div><label>メインターゲットの年齢層</label></div>
				</div>
				<div class="form-field ">
					<div class="gray">
						<label>
							<select name="age">
								<option value="10代">10代</option>
								<option value="20代">20代</option>
								<option value="40代">40代</option>
								<option value="50代">50代</option>
								<option value="50代以上">50代以上</option>
							</select>
						</label>
					</div>
				</div>


				<div class="form-divider">
					<div><label>現在活用中の販促ツール</label></div>
				</div>
				<div class="form-field">
					<div class="gray">
						<label>
							<select name="tool">
								<option value="食べログ">食べログ</option>
								<option value="ヒトサラ（無料プラン">ヒトサラ（無料プラン</option>
								<option value="Retty">Retty</option>
								<option value="ホットペッパーグルメ">ホットペッパーグルメ</option>
								<option value="ぐるなび">ぐるなび</option>
								<option value="一休">一休</option>
								<option value="リスティング広告">リスティング広告</option>
								<option value="SNS広告">SNS広告</option>
								<option value="グルメサクラ">グルメサクラ</option>
								<option value="その他WEBサイト">その他WEBサイト</option>
								<option value="その他紙媒体">その他紙媒体</option>
								<option value="なし">なし</option>
							</select>
						</label>
					</div>
				</div> -->

				<div class="form-divider">
					<div><label>お問合せ種別</label></div>
					<div class="red"><label>必須</label></div>
				</div>
				<br>
				<div class="form-form">
					<div class="apply">
						<div style="width: 45%; float: left;">
							<div style="width: 90%; padding: 5px; clear: both; border: 1px solid #AAA; border-radius: 5px; margin-bottom:5px; ">
								<input type="checkbox" id="type1" name="type1" value="掲載方法"> 掲載方法
							</div>
							<div style="width: 90%; padding: 5px; clear: both; border: 1px solid #AAA; border-radius: 5px; margin-bottom:5px; ">
								<input type="checkbox" id="type1" name="type2" value="掲載料金"> 掲載料金
							</div>
							<div style="width: 90%; padding: 5px; clear: both; border: 1px solid #AAA; border-radius: 5px; margin-bottom:5px; ">
								<input type="checkbox" id="type1" name="type3" value="上位表示のコツ"> 上位表示のコツ
							</div>
							<div style="width: 90%; padding: 5px; clear: both; border: 1px solid #AAA; border-radius: 5px; margin-bottom:5px; ">
								<input type="checkbox" id="type1" name="type7" value="その他"> その他
							</div>
						</div>
						
						<div style="width: 45%; float: left;">
							<div style="width: 90%; padding: 5px; clear: both; border: 1px solid #AAA; border-radius: 5px; margin-bottom:5px; ">
								<input type="checkbox" id="type1" name="type4" value="掲載ページの作り方"> 掲載ページの作り方
							</div>
							<div style="width: 90%; padding: 5px; clear: both; border: 1px solid #AAA; border-radius: 5px; margin-bottom:5px; ">
								<input type="checkbox" id="type1" name="type5" value="掲載スケジュール"> 掲載スケジュール
							</div>
							<div style="width: 90%; padding: 5px; clear: both; border: 1px solid #AAA; border-radius: 5px; margin-bottom:5px; ">
								<input type="checkbox" id="type1" name="type6" value="お支払いについて"> お支払いについて
							</div>
						</div>
						<div style="clear: both;"></div><br>
					</div>
				</div>

				<div class="form-divider">
					<div><label>問合せ内容をご記入下さい</label></div>
					<div class="red"><label>必須<label></div>
				</div>
				<div class="form-field">
					<textarea cols="3" rows="8" name="msg" required></textarea>
					<p>※当社ではお申込みのお客様に掲載方法、掲載スケジュール、上位表示の方法などをサポートしております</p>
					<p>※当サイトは「ヒトサラ掲載・登録・集客最大効果運用サポート申込専用サイト」となりますので、「ヒトサラ掲載・登録・集客最大効果運用サポート申込」以外に関してのご質問やお問合せにはお答えできませんので、あらかじめご</p>
					<p>了承くださいまた、当サイト以外で申し込まれた契約に関してのお問合せにもご対応しかねますのでご了承ください
					</p>
					
				</div>
				<div class="apply">
				
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
				</div>
				<button id="sbmt-btn" name="btn-submit" class="btn">送　信</button>
				<p>お電話でのお申し込み・お問合せをご希望の方は<span class="red">050-3703-0123</span>までお問い合わせください。<br>（受付時間／平日10：00〜18：00）<br>※解約等に関するお問合せには対応できません。</p>
			</form>
		</section>	<!-- SECTION 1 END -->

	</div> <!-- Page: INQUIRY end -->