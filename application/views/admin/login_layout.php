<header class="navbar navbar-inverse navbar-fixed-top bs-docs-nav" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="#" class="navbar-brand">EX_CI</a>
    </div>
    <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
      <ul class="nav navbar-nav">
        <li class="active">
          <a href="#">Login</a>
        </li>
      </ul>
    </nav>
  </div>
</header>
<div class="container">
	<div class="row">
		<div class="col-sm-8">
			<?php echo form_open('admin/do_login',array('class'=>'form-horizontal')); ?>
				<div class="form-group">
					<label for="username" class="col-sm-2 control-label">Username</label>
					<div class="col-sm-3">
						<input type="username" name="username" class="form-control" placeholder="Username">
					</div>
				</div>
				<div class="form-group">
					<label for="password" class="col-sm-2 control-label">Password</label>
					<div class="col-sm-3">
						<input type="password" name="password" class="form-control" placeholder="Password">
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-3">
						<button type="submit" class="btn btn-primary">Sign in</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

<footer class="bs-footer" role="contentinfo">
	<div class="container">
		<p>Copyright &copy; Bravery 2012-<?php echo date('Y');?></p>
	</div>
</footer>