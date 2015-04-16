<div id="container">
<!--/contents -->
<p class="loginLogo"><a href="/users/login"><img src="/img/login_logo.png" border="0" alt="volare librarry"></a></p>

<form id="UserLoginForm" method="post" action="/users/login" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="POST"></div><table class="loginTable">
	<tbody><tr>
		<td>メールアドレス</td>
		<td><p class="error"></p><input name="data[UserApp][email]" type="text" id="UserAppEmail"></td>
	</tr>
	<tr>
		<td>パスワード</td>
		<td><p class="error"></p><input type="password" name="data[UserApp][password]" id="UserAppPassword"></td>
	</tr>
</tbody></table>
<p class="loginButton"><input class="pd5" type="submit" value="ログイン"></p>
</form><p class="forgetPasswordLink"><a href="forget_password">パスワードを忘れた場合</a></p><!--/contents -->
</div>