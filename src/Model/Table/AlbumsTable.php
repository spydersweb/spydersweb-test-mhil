<?php
// src/Model/Table/AlbumsTable.php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Utility\Text;
use Cake\Event\EventInterface;

class AlbumsTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);
    }

    public function beforeSave(EventInterface $event, $entity, $options) {
        if ($entity->isNew() && !$entity->slug) {
            $sluggedTitle = Text::slug($entity->album_title);
            $entity->slug = substr($sluggedTitle, 0, 255);
        }
    }
}