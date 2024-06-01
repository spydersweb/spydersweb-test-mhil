<?php
// src/Model/Entity/Album.php
declare(strict_types= 1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

class Album extends Entity
{
    protected array $_accessible = [
        'album_id' => true,
        'album_title' => true,
        'album_artist' => true,
        'album_year' => true,
    ];
}