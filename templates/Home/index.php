<div class="search">
    <div class="row">
        <div class="column">
            <h3>Pekerjaan Terbaru</h3>
        </div>
        <div class="column">
            <input type="text" name="keyword" placeholder="Cari pekerjaan apa ..." />
        </div>
    </div>
</div>

<div class="jobs">
    <div class="row">

        <?php $i = 1; foreach ($jobs as $job): ?>
            <div class="column">
                <div class="box">
                    <h3><?= h($this->Text::truncate($job->title, 30, ['html' => true])) ?></h3>
                    
                    <img src="<?php echo ($job->company->image) ? $job->company->image : 'https://fintechng.org/portal/assets/img/logo-default.svg';?>" style="width:50px;" alt="" />
                    
                    <div class="company">
                        <?= $job->has('company') ? $this->Html->link($job->company->name, ['controller' => 'Companies', 'action' => 'view', $job->company->id]) : '' ?>
                    </div>
                     
                    <p><?= h($this->Text::truncate($job->description, 100, ['html' => true]))?></p>
                    
                    <div style="margin-top:30px;">
                        <small>Diposting pada tanggal <?= h($job->created_at) ?></small>
                    </div>
                
                    <div style="margin-top:20px;">
                        <a href="/detail/<?= $job->id ?>" class="button">Lihat</a>
                        <a href="/detail/<?= $job->id ?>" class="button button-outline"><i class="las la-hand-pointer"></i> Lamar</a>
                    </div>
                </div>
            </div>
            
            <?php if (($i % 3) == 0) :?>
                </div></div><div class="jobs"><div class="row">
            <?php endif;?>

        <?php $i++; endforeach; ?>

    </div>
</div>