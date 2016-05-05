<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "enseignant".
 *
 * @property string $firstname
 * @property string $lastname
 * @property string $adress
 * @property string $num_tel
 * @property string $cin
 * @property string $matricule
 */
class Enseignant extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'enseignant';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['firstname', 'lastname', 'adress', 'num_tel', 'cin', 'matricule'], 'required'],
            [['firstname', 'lastname'], 'string', 'max' => 80],
            [['adress'], 'string', 'max' => 200],
            [['num_tel'], 'string', 'max' => 15],
            [['cin'], 'string', 'max' => 10],
            [['matricule'], 'string', 'max' => 30]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'adress' => 'Adress',
            'num_tel' => 'Num Tel',
            'cin' => 'Cin',
            'matricule' => 'Matricule',
        ];
    }
}
