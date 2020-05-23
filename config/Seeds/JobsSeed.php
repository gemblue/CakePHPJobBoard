<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Jobs seed.
 */
class JobsSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $date = date('Y-m-d H:i:s');

        $data = [
            [
                'id'    => '1',
                'title' => 'Web Programmer Senior',
                'description' => 'Dibutuhkan web programmer senior dengan kualifikasi berikut.',
                'posted_by' => 1,
                'company_id' => 1,
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'id'    => '2',
                'title' => 'Flutter Developer',
                'description' => 'Dibutuhkan mobile programmer dengan kualifikasi berikut.',
                'posted_by' => 1,
                'company_id' => 1,
                'created_at' => $date,
                'updated_at' => $date
            ]
        ];
        
        $table = $this->table('jobs');
        $table->insert($data)->save();
    }
}
