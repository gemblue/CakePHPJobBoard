<?php
declare(strict_types=1);

use Migrations\AbstractSeed;
use Authentication\PasswordHasher\DefaultPasswordHasher;

/**
 * Users seed.
 */
class UsersSeed extends AbstractSeed
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
        $password = (new DefaultPasswordHasher())->hash('12345');

        $data = [
            [
                'id'    => '1',
                'name' => 'Ahmad Oriza',
                'email' => 'ahmadoriza@gmail.com',
                'username' => 'ahmadoriza',
                'password' => $password,
                'biography' => 'Lorem ipsum',
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'id'    => '2',
                'name' => 'Denis',
                'email' => 'denis@gmail.com',
                'username' => 'deni',
                'password' => $password,
                'biography' => 'Lorem ipsum',
                'created_at' => $date,
                'updated_at' => $date
            ]
        ];

        $table = $this->table('users');
        $table->insert($data)->save();
    }
}
