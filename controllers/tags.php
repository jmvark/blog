<?php
/**
 * Created by PhpStorm.
 * User: JasonMax_2
 * Date: 9/22/14
 * Time: 11:39 AM
 */

class tags extends Controller{
    function index(){
        $this->post_id = $this->params[0];
        $this->tags = get_all("SELECT tag_name, tag_id, COUNT(post_id) AS count
                               FROM tag
                                LEFT JOIN post_tags USING (tag_id)
                               GROUP BY tag_id");
    }
    function view()
    {
        $tag_id =  $this->params[0];
        $this->post = get_all("SELECT * FROM post_tags NATURAL JOIN post
                               WHERE 'tag_id' = '$tag_id'");
    }
} 