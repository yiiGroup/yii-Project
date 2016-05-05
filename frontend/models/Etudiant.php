<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "etudiant".
 *
 * @property string $cin
 * @property string $firstname
 * @property string $lastname
 * @property string $adress
 * @property integer $num_tel
 * @property string $ni
 */
class Etudiant extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'etudiant';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cin', 'firstname', 'lastname', 'adress', 'num_tel', 'ni'], 'required'],
            [['num_tel'], 'integer'],
            [['cin', 'ni'], 'string', 'max' => 20],
            [['firstname', 'lastname'], 'string', 'max' => 50],
            [['adress'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cin' => 'Cin',
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'adress' => 'Adress',
            'num_tel' => 'Num Tel',
            'ni' => 'Ni',
        ];
    }
}
