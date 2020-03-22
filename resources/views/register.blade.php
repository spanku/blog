<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form  action="register/user" method="post" style="width:500px;text-align:center;">
      @csrf
      <input type="text" name="name" value="" placeholder="Name" required><br/>
      <input type="email" name="email" value="" placeholder="Email" required><br/>
      <input type="password" name="password" value="" placeholder="Password" required><br/>
      <button type="submit">Register</button>
    </form>
  </body>
</html>
