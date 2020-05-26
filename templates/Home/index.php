<h3>Pekerjaan Terbaru</h3>
<div class="jobs">
    <div class="row">

        <?php $i = 1; foreach ($jobs as $job): ?>
            <div class="column">
                <div class="box">
                    <h3><?= h($this->Text::truncate($job->title, 30, ['html' => true])) ?></h3>
                    
                    <div class="company">
                        <?= $job->has('company') ? $this->Html->link($job->company->name, ['controller' => 'Companies', 'action' => 'view', $job->company->id]) : '' ?>
                    </div>
                    
                    <p><?= h($job->description)?></p>

                    <div style="margin-top:30px;">
                        <small>Diposting pada tanggal <?= h($job->created_at) ?></small>
                    </div>

                    <div style="margin-top:20px;">
                        <a href="#" class="button button-outline">Lihat</a>
                    </div>
                </div>
            </div>
            
            <?php if (($i % 3) == 0) :?>
                </div></div><div class="jobs"><div class="row">
            <?php endif;?>

        <?php $i++; endforeach; ?>

    </div>
</div>