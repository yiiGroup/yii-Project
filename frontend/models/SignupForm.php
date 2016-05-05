<?php
namespace frontend\models;

use common\models\User;
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
    public $role;
    public $matricule;
    public $image;
    public $file;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['matricule', 'filter', 'filter' => 'trim'],
            ['matricule', 'required'],
            ['matricule', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This Matricule has already used.'],
            ['matricule', 'string', 'min' => 8, 'max' => 8,'message' => 'Matricule contient 8 chiffre .'],

            ['username', 'filter', 'filter' => 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],



            ['role', 'required'],


            [['file'], 'file'],




        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'username' => 'UserName',
            'email' => 'E-mail',
            'password' => 'Password',
            'role' => 'Role',
            'matricule' => 'Matricule',
            'file' => 'Photo',
            'Image' => 'Photo',


        ];
    }



    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }
        
        $user = new User();
        $user->username = $this->username;
        $user->email = $this->email;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        $user->matricule = $this->matricule;
        $user->role = $this->role;
        $user->image= $this->image;

        return $user->save() ? $user : null;
    }
}
