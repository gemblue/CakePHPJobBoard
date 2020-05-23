<h3><?php echo h($title) ?></h3>

<form action="http://localhost/lab/CakePHP/user/insert" method="POST">
    <input type="text" name="name" placeholder="Name"/>
    <input type="text" name="email" placeholder="Email"/>
    <button type="submit" class="button button-outline">Save</button>
</form>