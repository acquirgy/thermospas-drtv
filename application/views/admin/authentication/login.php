<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Thermospas DRTV</title>
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.3.0/pure-min.css">
  </head>
<body>
      <div id="main">
        <div class="header">
          <h1>Admin - Thermospas DRTV</h1>
        </div>

        <div class="content">

          <h2 class="content-subhead">Please Login Below</h2>

          <?php if ($this->session->flashdata('error')) { ?>
            <div class="sys-error"><?= $this->session->flashdata('error') ?></div>
          <?php } ?>

          <?= form_open('admin/authentication/authenticate', array('id' => 'login-form', 'class' => 'pure-form')) ?>

                <input id="user" name="user" type="text" placeholder="Username" autocomplete="off" />
                <input id="pass" name="pass" type="password" placeholder="Password" autocomplete="off" />
                <button type="submit" class="pure-button pure-button-primary" >Login</button>

          <?= form_close() ?>

        </div>

      </div>

  </body>

</html>