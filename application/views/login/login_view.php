<!DOCTYPE HTML>
<html>
<!-- element head start -->
<?php $this->load->view('element/head'); ?>
<!-- element head end -->

<body>
<div class="container">
<div style="width: 500px; height: 150px; margin: auto;"></div>
<div class="panel panel-primary" style="width: 500px; margin: auto; box-shadow: black 0px 0px 20px;">
<div class="panel-heading"><h1>Silahkan Login<br />
<small>Aplikasi Honor Guru</small></h1></div>
<div class="panel-body">
<form class="form-horizontal" role="form" name="login" method="post" action="<?php echo base_url('index.php/login/process'); ?>">
  <div class="form-group">
    <div class="col-sm-10">
    <?php if(! is_null($msg)) echo "<div style='color: red;'>$msg</div>";?>
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-4 control-label">Username</label>
    <div class="col-sm-5">
      <input id="username" type="text" class="form-control" placeholder="Username" name="username" />
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-4 control-label">Password</label>
    <div class="col-sm-5">
      <input id="password" type="password" class="form-control" placeholder="Password" name="password" />
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-4 col-sm-5">
      <button name="login" type="submit" class="btn btn-primary">Login</button>
    </div>
  </div>
</form>
</div>
</div>
</div>
</body>
</html>