<?foreach( $posts as $post ):?>
    <div class="span8">
        <h1><a href="<?=BASE_URL?>posts/view/<?=$post['post_id']?>/<?=$post['post_subject']?>"><?=$post['post_subject']?></a></h1>
        <p><?=$post['post_text']?></p>
        <div>
            <span class="badge badge-success">Posted 2012-08-02 20:47:04</span><div class="pull-right"><span class="label">alice</span> <span class="label">story</span> <span class="label">blog</span> <span class="label">personal</span></div>
        </div>
        <hr>
    </div>
<?endforeach?>

<form method="post">
    <input type="text" placeholder="Pealkiri"><br><br>
    <textarea name="data[post_text]" id="" cols="30" rows="10" placeholder="Sisu"></textarea><br><br>

    <button class="btn btn-default">Sisesta</button>

</form>