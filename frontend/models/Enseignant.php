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
 *
 * @property Cours[] $cours
 * @property EnsMat[] $ensMats
 * @property Seance[] $seances
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
            [['cin', 'matricule'], 'string', 'max' => 10]
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCours()
    {
        return $this->hasMany(Cours::className(), ['id_ens' => 'cin']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEnsMats()
    {
        return $this->hasMany(EnsMat::className(), ['id_ens' => 'cin']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSeances()
    {
        return $this->hasMany(Seance::className(), ['id_ens' => 'cin']);
    }
}
