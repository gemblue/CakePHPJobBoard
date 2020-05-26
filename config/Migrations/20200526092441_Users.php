<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class Users extends AbstractMigration
{
    /**
     * Migrate Up.
     */
    public function up()
    {
        $sql = "CREATE TABLE `users` (
            `id` int(10) NOT NULL AUTO_INCREMENT,
            `name` varchar(100) NOT NULL,
            `email` varchar(20) NOT NULL,
            `username` varchar(20) NOT NULL,
            `password` varchar(100) NOT NULL,
            `biography` text NOT NULL,
            `created_at` datetime NOT NULL,
            `updated_at` datetime NOT NULL,
            PRIMARY KEY (`id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=latin1;";
        
        $this->execute($sql);
    }
    
    /**
     * Migrate Down.
     */
    public function down()
    {
        $sql = "DROP TABLE users;";
        
        $this->execute($sql);
    }
}
