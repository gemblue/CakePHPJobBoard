<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class Companies extends AbstractMigration
{
    /**
     * Migrate Up.
     */
    public function up()
    {
        $sql = "CREATE TABLE `companies` (
            `id` int(10) NOT NULL AUTO_INCREMENT,
            `name` varchar(100) NOT NULL,
            `description` text NOT NULL,
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
        $sql = "DROP TABLE companies;";
        
        $this->execute($sql);
    }
}
