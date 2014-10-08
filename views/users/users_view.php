<ul class="list-group">
    <? foreach ($users as $attribute => $value): ?>
        <li class="list-group-item"><?=$attribute?>:<?=$value?></li>
    <? endforeach ?>
</ul>