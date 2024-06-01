<!-- File: templates/Albums/view.php -->
<?= $this->Html->link("Back", ['action' => 'index']); ?>
<h1><?= h($album->album_title) ?></h1>
<p><?= h($album->album_artist) ?></p>
<p><small>Year of release: <?= $album->album_year ?></small></p>
<p><?= $this->Html->link('Edit', ['action' => 'update', $album->album_id]) ?></p>