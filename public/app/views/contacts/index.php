<?php $this->start('body'); ?>
<h1>Contact Index</h1>

<?php foreach ($this->contacts as $contact): ?>
    <?=$contact->displayName()?>
    <?=$contact->fname?>
<?php endforeach; ?>

<?php $this->end() ?>
