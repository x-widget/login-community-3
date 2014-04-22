<div class='login-box'>
	<div class='login-box-middle'>
		<form action="<?=url_login_check()?>" method="post" autocomplete="off">
			<input type="hidden" name="url" value="<?php echo $outlogin_url ?>">
			<table width='100%'>
				<tr valign='top'>
					<td>
						<table width='100%' cellspacing='0' cellpadding='0'>
							<tr valign='top'>
								<td  class='login-table-input'>
									<div class='login-user'>
										<input type="text" id="ol_id" name="mb_id" required  maxlength="20" placeholder='아이디'>
									</div>
								</td>
							</tr>
								<tr>
									<td>
										<div class='login-pass'>
											<input type="password" name="mb_password" id="ol_pw" required maxlength="20" placeholder='비밀번호'>
										</div>
									</td>
								</tr>	
						</table>
					<td>
					<td rowspan=2>
						<input type="image" id="ol_submit" src="<?=$widget_config['url']?>/signin_button.png" />
					</td>
				</tr>
			</table>
			
			<div class='register_autologin'>
				<a href="<?=url_register()?>" class='login-reg'>
					<img class='dot' src="<?=$widget_config['url']?>/square-icon.png" />
					<b>회원가입</b>
				</a>
				
				<span class='auto_login'><input type="checkbox" name="auto_login" value="1" id="auto_login">자동 로그인</span>
				<div style='clear:both;'></div>
			</div>
				
			<a href="<?=url_bbs()?>/password_lost.php" id="ol_password_lost">
				<img class='dot' src="<?=$widget_config['url']?>/square-icon.png" />
				아이디/비번 찾기
			</a>
				
		</form>
	</div>
</div>