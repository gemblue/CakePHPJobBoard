<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CompanyImage extends AbstractMigration
{
    /**
     * Migrate Up.
     */
    public function up()
    {
        $sql = "ALTER TABLE companies ADD image varchar(100) AFTER name;";

        $this->execute($sql);
    }
    
    /**
     * Migrate Down.
     */
    public function down()
    {
        $sql = "ALTER TABLE companies DROP image;";
        
        $this->execute($sql);
    }
}
