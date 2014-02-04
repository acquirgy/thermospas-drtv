<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin - Thermospas DRTV Leads</title>
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
      <h1>Leads for Thermospas DRTV</h1>
    </div>

    <table class="pure-table pure-table-bordered">
      <thead>
        <tr>
          <th>Lead Date</th>
          <th>Email</th>
          <th>Zipcode</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Address</th>
          <th>City</th>
          <th>State</th>
          <th>Phone</th>
          <th>Iref</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($leads as $lead) { ?>
        <tr>
          <td><?=$lead->date?></td>
          <td><?=$lead->email?></td>
          <td><?=$lead->zipcode?></td>
          <td><?=$lead->fname?></td>
          <td><?=$lead->lname?></td>
          <td><?=$lead->address1?></td>
          <td><?=$lead->city?></td>
          <td><?=$lead->state?></td>
          <td><?=$lead->phone?></td>
          <td><?=$lead->iref?></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>

  </div>

</div>

</body>

</html>