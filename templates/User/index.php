<h3><?php echo h($title) ?></h3>

<a href="http://localhost/lab/CakePHP/user/add" class="button button-outline">ADD</a>

<table>

<tr>
    <th>Name</th>
    <th>Username</th>
    <th>Email</th>
    <th></th>
</tr>

<?php foreach($users as $user) : ?>
    <tr>
        <td><?php echo $user->name?></td>
        <td><?php echo $user->username?></td>
        <td><?php echo $user->email?></td>
        <td>
            <a href="http://localhost/lab/CakePHP/user/edit/<?php echo $user->id?>" class="button button-outline">Edit</a>&nbsp;&nbsp;
            <a href="http://localhost/lab/CakePHP/user/delete/<?php echo $user->id?>" class="button button-outline">Delete</a>
        </td>
    </tr>
<?php endforeach;?>

</table>

<div class="paging">
    <ul>
        <?= $this->Paginator->first('First') ?>
        <?= $this->Paginator->prev('« Previous') ?>
        <?= $this->Paginator->numbers() ?>
        <?= $this->Paginator->next('Next »') ?>
        <?= $this->Paginator->last('Last') ?>
    </ul>
</div>