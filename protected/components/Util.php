<?php
/**
 * Created by PhpStorm.
 * User: home
 * Date: 12/18/14
 * Time: 2:03 AM
 */

class Util {

	const PDF_TYPE_ID = 2;
	const IMAGE_TYPE_ID = 1;


    public static function encryptPassword($pwd){
        return sha1(md5($pwd . 'this-is-salt-for-the-pass'));
    }

    public static function preparePath($path){
    	$fullPath = Yii::getPathOfAlias('webroot').$path;
    	if(!is_dir($fullPath)) {
		   mkdir($fullPath);
		   chmod($fullPath , 0755); 
		   // the default implementation makes it under 777 permission
		   //which you could possibly change recursively before deployment
			//but here's less of a headache in case you don't
		}
		return $fullPath;
    }

    public static function getFileType($file){
    	$typeID = null;

    	if(isset($file)){
    		$ext = strtolower($file->getExtensionName());
    		$typeID = self::PDF_TYPE_ID;
    		if($ext != 'pdf')
    			$typeID = self::IMAGE_TYPE_ID;
    	}
    	return $typeID;
    }

}

?>