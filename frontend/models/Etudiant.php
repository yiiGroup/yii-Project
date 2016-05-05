<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "etudiant".
 *
 * @property string $cin
 * @property string $firstname
 * @property string $lastname
<<<<<<< HEAD
 * @property string $adresse
 * @property integer $num_tel
 * @property string $ni
 *
 * @property ListInscEtud[] $listInscEtuds
=======
 * @property string $adress
 * @property integer $num_tel
 * @property string $ni
>>>>>>> a53c17914c92d9e22e0b831cad0d057ae11da966
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
<<<<<<< HEAD
            [['cin', 'firstname', 'lastname', 'adresse', 'num_tel', 'ni'], 'required'],
            [['num_tel'], 'integer'],
            [['cin', 'ni'], 'string', 'max' => 20],
            [['firstname', 'lastname'], 'string', 'max' => 50],
            [['adresse'], 'string', 'max' => 200]
=======
            [['cin', 'firstname', 'lastname', 'adress', 'num_tel', 'ni'], 'required'],
            [['num_tel'], 'integer'],
            [['cin', 'ni'], 'string', 'max' => 20],
            [['firstname', 'lastname'], 'string', 'max' => 50],
            [['adress'], 'string', 'max' => 200]
>>>>>>> a53c17914c92d9e22e0b831cad0d057ae11da966
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
<<<<<<< HEAD
            'adresse' => 'Adresse',
=======
            'adress' => 'Adress',
>>>>>>> a53c17914c92d9e22e0b831cad0d057ae11da966
            'num_tel' => 'Num Tel',
            'ni' => 'Ni',
        ];
    }
<<<<<<< HEAD

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getListInscEtuds()
    {
        return $this->hasMany(ListInscEtud::className(), ['id_etud' => 'cin']);
    }
=======
>>>>>>> a53c17914c92d9e22e0b831cad0d057ae11da966
}
