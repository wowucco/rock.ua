<?php
namespace app\models;

use app\models\User;
use yii\base\Model;
use Yii;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;
    public $repassword;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
        ['username', 'filter', 'filter' => 'trim'],
        [['username', 'password'], 'required'],
        ['username', 'unique', 'targetClass' => 'app\models\User', 'message' => 'This username has already been taken.'],
        ['username', 'string', 'min' => 2, 'max' => 255],
        ['email', 'filter', 'filter' => 'trim'],
        ['email', 'required'],
        ['email', 'email'],
        ['email', 'unique', 'targetClass' => 'app\models\User', 'message' => 'This email address has already been taken.'],
        ['password', 'required'],
        ['password', 'string', 'min' => 6],
            ['repassword', 'compare', 'compareAttribute' => 'password'],
            
    ];
    }

    public function scenarios(){
        $scenarios = parent::scenarios();
        /*$scenarios['short_register'] = ['username', 'email'];
        $scenarios['short_register2'] = ['username', 'email', 'password'];
        $scenarios['short_register3'] = ['email', 'password'];*/

        return $scenarios;
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if ($this->validate()) {
            $user = new User();
            $user->username = $this->username;
            $user->email = $this->email;
            $user->setPassword($this->password);
            $user->generateAuthKey();
            if ($user->save()) {
                return $user;
            }
        }
		//print_r('go!');die;
        return null;
    }
}
