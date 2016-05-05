<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "etudiant".
 *
 * @property string $cin
 * @property string $firstname
 * @property string $lastname
 * @property string $adresse
 * @property integer $num_tel
 * @property string $ni
 *
 * @property ListInscEtud[] $listInscEtuds
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
            [['cin', 'firstname', 'lastname', 'adresse', 'num_tel', 'ni'], 'required'],
            [['num_tel'], 'integer'],
            [['cin', 'ni'], 'string', 'max' => 20],
            [['firstname', 'lastname'], 'string', 'max' => 50],
            [['adresse'], 'string', 'max' => 200]
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
            'adresse' => 'Adresse',
            'num_tel' => 'Num Tel',
            'ni' => 'Ni',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getListInscEtuds()
    {
        return $this->hasMany(ListInscEtud::className(), ['id_etud' => 'cin']);
    }
}
