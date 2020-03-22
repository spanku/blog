<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="login/user" method="post" style="width:500px;text-align:center;">
      @csrf
      <input type="email" name="email" value="" placeholder="Email"><br/>
      <input type="password" name="password" value="" placeholder="Password"><br/>
      <button type="submit" name="name">Login</button>
    </form>
    <br/>
    <a href="/register" style="margin-left:200px;">Register User</a>
    <a href="/redirect" style="margin-left:200px;">Facebook Login</a>
  </body>
</html>
