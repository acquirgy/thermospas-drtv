<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin - Thermospas DRTV Leads</title>

  <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.3.0/pure-min.css">
  <link rel="stylesheet" href="/assets/stylesheets/shared/baby-blue.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <script>
  $(function() {
    $( ".datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' });
  });
  </script>
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
  <div class="pure-u-1 content" id="main">
    <div class="header">
      <h1>Leads for Thermospas DRTV</h1>
    </div>
    <?= form_open('/admin/leads/filtered', array('class' => 'filters-form pure-form')) ?>
    <div class="pure-g">

      <div class="pure-u-1-4">
        <h4>Set Date Range of Leads:</h4>
        <fieldset class="pure-group">
          <input name="dateStart" type="text" id="dateStart" class="datepicker" value="" placeholder="start"  />
          <input name="dateEnd" type="text" id="dateEnd" class="datepicker" value="" placeholder="end" />
        </fieldset>
      </div>

    </div>

    <div class="pure-controls">
      <button type="submit" class="get-filtered-button pure-button pure-button-primary get_filtered">Get Leads</button>
    </div>
    <hr />

  <?= form_close() ?>
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