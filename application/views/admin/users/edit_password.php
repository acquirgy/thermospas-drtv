<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin - Thermospas DRTV - Edit User</title>
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
      <h1>Edit Password</h1>
      <h2>Enter a New Password for <?=$user['user']?></h2>
    </div>
    <div class="content padding_top">
      <?=form_open('admin/users/update_password/' . $user['id'], array('class' => 'pure-form pure-form-aligned') );?>
      <fieldset>
        <input type ="hidden" name="user" value="<?= $user['user'] ?>" />
        <div class="pure-control-group">
          <label for="pass">Password</label>
          <input id="pass" name="pass" type="password">
        </div>
        <div class="pure-controls">
          <button class="pure-button pure-button-primary" type="submit">Update Password</button>
          <a class="pure-button" href="/admin/users/edit/<?=$user['id']?>">Back to Edit User</a>
        </div>
      </fieldset>
      <?=form_close();?>
    </div>
  </div>
</div>
</body>
</html>