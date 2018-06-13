<h1><?php echo t('login');?></h1>

<?php if (isset($error_message)):?>
<div class="alert alert-danger" role="alert">
    <?php echo $error_message; ?>
</div>
<?php endif; ?>

<form action="" method="post">
    <input type="hidden" name="form_id" value="<?php echo form_id();?>">
    <div class="form-group">
        <label for="exampleInputEmail1"><?php echo t('username'); ?></label>
        <input name="username" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="<?php echo t('username'); ?>">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1"><?php echo t('password'); ?></label>
        <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="<?php echo t('password'); ?>">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
