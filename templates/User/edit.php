<h3><?php echo h($title) ?></h3>

<form action="http://localhost/lab/CakePHP/user/update/<?php echo $user->id?>" method="POST">
    <input type="text" name="name" placeholder="Name" value="<?php echo $user->name;?>" />
    <input type="text" name="email" placeholder="Email" value="<?php echo $user->email;?>"/>
    <button type="submit" class="button button-outline">Save</button>
</form>