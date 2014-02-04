<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin - Thermospas DRTV</title>
  <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.3.0/pure-min.css">
  <link rel="stylesheet" href="/assets/stylesheets/shared/baby-blue.css">
</head>
<body>
 <div class="pure-g-r" id="layout">
  <div class="pure-u" id="menu">
    <div class="pure-menu pure-menu-open pure-menu-horizontal">

      <ul>
        <li class="menu-item-divided"><a href="/admin/users">Manage Users</a></li>
        <li class="menu-item-divided"><a href="/admin/authentication/logout">Logout</a></li>
      </ul>
    </div>
  </div>
  <div class="pure-u-1" id="main">
    <div class="header">
      <h1>Thermospas DRTV Leads - Users</h1>
    </div>
    <div class="content">
      <p><a class="pure-button pure-button-primary" href="/admin/users/new_user">Create New user</a></p>
      <?= $this->load->view('admin/users/_users.table.php', array('users' => $users)) ?>
    </div>
  </div>
</div>
</body>

</html>