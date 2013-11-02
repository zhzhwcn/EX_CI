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