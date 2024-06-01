<!-- File: templates/Albums/add.php -->
<?= $this->Html->link("Back", ['action' => 'index']); ?>
<h1>Add Album</h1>
<?php
    echo $this->Form->create($album);
    echo $this->Form->control("album_title");
    echo $this->Form->control("album_artist");
    echo $this->Form->control("album_year");
    echo $this->Form->button(__('Save Album'));
    echo $this->Form->end();
