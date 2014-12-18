<?php
/**
 * Created by PhpStorm.
 * User: home
 * Date: 12/18/14
 * Time: 2:03 AM
 */

class Util {

    public static function encryptPassword($pwd){
        return sha1(md5($pwd . 'this-is-salt-for-the-pass'));
    }

}

?>