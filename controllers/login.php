<?php
/**
 * Created by PhpStorm.
 * User: JasonMax_2
 * Date: 9/17/14
 * Time: 6:41 PM
 */

class login extends Controller
{
    public $requires_auth = true;

    function index()
    {
        header('Location: '.BASE_URL);

    }}