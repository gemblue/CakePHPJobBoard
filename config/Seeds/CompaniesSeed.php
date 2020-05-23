<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Companies seed.
 */
class CompaniesSeed extends AbstractSeed
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
                'name' => 'PT. CODEPOLITAN INTEGRASI INDONESIA',
                'description' => 'Perusahaan yang bergerak di bidang teknologi pendidikan.',
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'id'    => '2',
                'name' => 'PT. ANGIN RIBUT',
                'description' => 'Perusahaan yang bergerak di bidang HRD.',
                'created_at' => $date,
                'updated_at' => $date
            ]
        ];
        
        $table = $this->table('companies');
        $table->insert($data)->save();
    }
}
