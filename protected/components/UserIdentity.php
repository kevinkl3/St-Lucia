<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
    private $_id;

    const ERROR_USER_INACTIVE = 13;

	public function authenticate(){

        /*
        $users=array(
			// username => password
			'demo'=>'demo',
			'admin'=>'admin',
		);
		if(!isset($users[$this->username]))
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		elseif($users[$this->username]!==$this->password)
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
			$this->errorCode=self::ERROR_NONE;
        */
        $user = USER::model()->findByAttributes(array('EMAIL' => $this->username));
        if($user == null)
            $user = USER::model()->findByAttributes(array('USERNAME' => $this->username));

        if($user != null){
            if(!$user->ACTIVE){
                $this->errorCode= self::ERROR_USER_INACTIVE;
            }else if($user->PASSWORD == Util::encryptPassword($this->password)){
                $this->errorCode=self::ERROR_NONE;
                $this->_id = $user->ID_USER;
            }else{
                $this->errorCode=self::ERROR_PASSWORD_INVALID;
            }
        }else{
            $this->errorCode=self::ERROR_USERNAME_INVALID;
        }

		return !$this->errorCode;
	}

    public function getId() {
        return $this->_id;
    }
}