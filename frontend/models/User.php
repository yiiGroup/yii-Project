<?php

<<<<<<< HEAD
namespace app\models;
=======
namespace frontend\models;
>>>>>>> a53c17914c92d9e22e0b831cad0d057ae11da966

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $username
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $image
 * @property string $role
 * @property string $matricule
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'auth_key', 'password_hash', 'email', 'created_at', 'updated_at', 'image', 'role', 'matricule'], 'required'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['username', 'password_hash', 'password_reset_token', 'email'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            [['image'], 'string', 'max' => 100],
            [['role'], 'string', 'max' => 30],
<<<<<<< HEAD
            [['matricule'], 'string', 'max' => 10],
=======
            [['matricule'], 'string', 'max' => 20],
>>>>>>> a53c17914c92d9e22e0b831cad0d057ae11da966
            [['username'], 'unique'],
            [['email'], 'unique'],
            [['password_reset_token'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'email' => 'Email',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'image' => 'Image',
            'role' => 'Role',
            'matricule' => 'Matricule',
        ];
    }
}
