<?php $this->start('head'); ?>
<?php $this->end(); ?>

<?php $this->start('body'); ?>
<form action="<?=PROOT?>register/login" method="post">
    <div class="bg-warning"><?=$this->display_errors()?></div>
    <div class="form-group">
        <label for="exampleInputEmail1">User name</label>
        <input type="text" class="form-control" name="username" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter user name">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="form-check">
        <input type="checkbox" name="remember_me" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Remember me</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="<?=PROOT?>register/register" type="submit" class="btn btn-success">Register</a>
</form>
<?php $this->end(); ?>
