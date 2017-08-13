<html>
<body>
<form action="/postLogin" method="post">
    <input name="username"/>
    <input type="password" name="password"/>
    <input type="submit" value="提交">
    {{ csrf_field() }}
</form>
</body>
</html>