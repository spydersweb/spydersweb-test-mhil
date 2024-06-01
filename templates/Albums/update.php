<!-- File: templates/Albums/edit.php -->
<?= $this->Html->link("Back", ['action' => 'index']); ?>
<h1>Editing <?php echo $album->album_title?></h1>
<?php
    echo $this->Form->create($album);
    echo $this->Form->control('album_id', ['type' => 'hidden']);
    echo $this->Form->control('album_title');
    echo $this->Form->control('album_artist');
    echo $this->Form->control('album_year');    
    echo $this->Form->button(__('Update Album'));
    echo $this->Form->end();
?>