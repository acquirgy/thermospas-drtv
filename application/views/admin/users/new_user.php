<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin - Thermospas DRTV - New User</title>
  <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.3.0/pure-min.css">
  <link rel="stylesheet" href="/assets/stylesheets/shared/baby-blue.css">
</head>
<body>
 <div class="pure-g-r" id="layout">
  <div class="pure-u" id="menu">
    <div class="pure-menu pure-menu-open pure-menu-horizontal">
      <ul>
        <li class="menu-item-divided"><a href="/admin/leads">View Leads</a></li>
        <li class="menu-item-divided"><a href="/admin/users">Manage Users</a></li>
        <li class="menu-item-divided"><a href="/admin/authentication/logout">Logout</a></li>
      </ul>
    </div>
  </div>
  <div class="pure-u-1" id="main">
    <div class="header">
      <h1>New User</h1>
      <h2>Add a new user</h2>
    </div>
    <div class="content">
      <?= form_open('admin/users/insert_user', array('class'=>'pure-form pure-form-aligned')) ?>
      <div class="pure-control-group">
        <label for="user">Username</label>
        <input id="user" name="user" type="text" placeholder="Username">
      </div>
      <div class="pure-control-group">
        <label for="pass">Password</label>
        <input id="pass" name="pass" type="password" placeholder="Password">
      </div>
      <div class="pure-controls">
        <button class="pure-button pure-button-primary" type="submit">Add User</button>
      </div>
      <?= form_close() ?>
    </div>
  </div>
</div>
</body>
</html>