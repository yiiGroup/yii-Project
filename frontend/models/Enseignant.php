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
<<<<<<< HEAD
 *
 * @property Cours[] $cours
 * @property EnsMat[] $ensMats
 * @property Seance[] $seances
=======
>>>>>>> a53c17914c92d9e22e0b831cad0d057ae11da966
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
<<<<<<< HEAD
            [['cin', 'matricule'], 'string', 'max' => 10]
=======
            [['cin'], 'string', 'max' => 10],
            [['matricule'], 'string', 'max' => 30]
>>>>>>> a53c17914c92d9e22e0b831cad0d057ae11da966
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
<<<<<<< HEAD

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
=======
>>>>>>> a53c17914c92d9e22e0b831cad0d057ae11da966
}
