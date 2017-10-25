<html>
<body>
<h1>Login</h1>
<p>You have entered wrong username or password</p>
<div class='login'>
            <form action='ltest.php' method='post'>
               <br/>  <br/><br/>
                <?php if($wrongflag == 1){ echo "<font size='2px' color='red' face='Arial'> Wrong Username/Password </font><br/>";} ?>
                <input class='login-text' type='text' name='username' value='Username' onFocus="if(this.value == 'Username') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Username';}">
                <input class='login-text' type='password' name='password' value='Password' onFocus="if(this.value == 'Password') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Password';}">
                <input class='login-button' type='submit' name='login' value='Login'>
</form>
</body>
</html>
