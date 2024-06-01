<!-- File: templates/Albums/index.php -->

<h1>Albums</h1>
<?= $this->Html->link(
                '<i class="fa-solid fa-plus"></i>',
                ['action' => 'create'],
                ['escape' => false]
            ) ?> 
<table>
    <tr>
        <th>Album Title 
            <?= $this->Html->link(
                '<i class="fa-solid fa-sort-up"></i>',
                ['action' => 'index', '?' => ['album_title' => 'asc']],
                ['escape' => false]
            ) ?> <?= $this->Html->link(
                '<i class="fa-solid fa-sort-down"></i>',
                ['action' => 'index', '?' => ['album_title' => 'desc']],
                ['escape' => false]
            ) ?> </th>
        <th>Artist</th>
        <th colspan="2">Year</th>

    </tr>
    <?php foreach ($albums as $album): ?>
    <tr>
        <td>
            <?= $this->Html->link($album->album_title, ['action' => 'read', $album->album_id]) ?>
        </td>
        <td><?= $album->album_artist ?></td>
        <td><?= $album->album_year?></td>
        <td>
            <?= $this->Html->link('<i class="fa-regular fa-pen-to-square"></i>', ['action' => 'update', $album->album_id],['escape' => false]) ?>
            
            <?= $this->Form->postLink(
                '<i class="fa-solid fa-trash"></i>',
                ['action' => 'delete', $album->album_id],
                ['escape' => false, 'confirm' => 'Are you sure?'])
            ?></td>
    </tr> 
    <?php endforeach; ?>
</table>