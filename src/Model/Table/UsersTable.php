<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Event\EventInterface;

class UsersTable extends Table
{
    public function beforeSave(EventInterface $event, $entity)
    {
        // Mutasi ..
        $entity->username = \Cake\Utility\Text::slug($entity->name);
    }


    
}