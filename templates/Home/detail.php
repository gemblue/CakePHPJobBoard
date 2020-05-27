<div class="detail">
    <h3><?php echo $job->title?></h3>
    <?= $job->has('company') ? $this->Html->link($job->company->name, ['controller' => 'Companies', 'action' => 'view', $job->company->id]) : '' ?>
    
    <p><?php echo $job->description?></p>

    <div class="date">
        <small>Diposting pada tanggal <?= h($job->created_at) ?></small>
    </div>
</div>