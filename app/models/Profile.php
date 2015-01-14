<?php
/**
 * Created by PhpStorm.
 * User: webmaster
 * Date: 1/13/15
 * Time: 5:38 PM
 */
class Profile extends Eloquent
{

    public function user()
    {
        return $this::belongsTo("User","userid","id");
    }
}