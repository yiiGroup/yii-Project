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
<<<<<<< HEAD
=======
    public $role;
    public $matricule;
    public $image;
    public $file;

>>>>>>> a53c17914c92d9e22e0b831cad0d057ae11da966

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
<<<<<<< HEAD
=======
            ['matricule', 'filter', 'filter' => 'trim'],
            ['matricule', 'required'],
            ['matricule', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This Matricule has already used.'],
            ['matricule', 'string', 'min' => 8, 'max' => 8,'message' => 'Matricule contient 8 chiffre .'],

>>>>>>> a53c17914c92d9e22e0b831cad0d057ae11da966
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
<<<<<<< HEAD
=======



            ['role', 'required'],


            [['file'], 'file'],




>>>>>>> a53c17914c92d9e22e0b831cad0d057ae11da966
        ];
    }

    /**
<<<<<<< HEAD
=======
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
>>>>>>> a53c17914c92d9e22e0b831cad0d057ae11da966
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
<<<<<<< HEAD
        
=======
        $user->matricule = $this->matricule;
        $user->role = $this->role;
        $user->image= $this->image;

>>>>>>> a53c17914c92d9e22e0b831cad0d057ae11da966
        return $user->save() ? $user : null;
    }
}
