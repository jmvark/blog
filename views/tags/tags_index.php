<h1>Tags</h1>
<div class="list-group">
<? foreach($tags as $tag);?>
    <a href="<?= BASE_URL ?>tags/view/<?= $tag['tag_id'] ?>/<?= $tag['tag_name'] ?>" class="list-group-item">
            <?= $tag['tag_name'] ?><span class="badge"><?= $tag['count'] ?></span>
        </a>
  <? endforeach ?>
</div>

