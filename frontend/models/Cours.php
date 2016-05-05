<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "cours".
 *
 * @property integer $id
 * @property string $texte
<<<<<<< HEAD
 * @property string $id_ens
 * @property integer $id_g
 *
 * @property Attatechments[] $attatechments
 * @property Groupe $idG
 * @property Enseignant $idEns
=======
 * @property integer $id_att
 * @property integer $id_ens
 * @property integer $id_g
>>>>>>> a53c17914c92d9e22e0b831cad0d057ae11da966
 */
class Cours extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cours';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
<<<<<<< HEAD
            [['texte', 'id_ens', 'id_g'], 'required'],
            [['id_g'], 'integer'],
            [['texte'], 'string', 'max' => 2000],
            [['id_ens'], 'string', 'max' => 10]
=======
            [['texte', 'id_att', 'id_ens', 'id_g'], 'required'],
            [['id_att', 'id_ens', 'id_g'], 'integer'],
            [['texte'], 'string', 'max' => 2000]
>>>>>>> a53c17914c92d9e22e0b831cad0d057ae11da966
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'texte' => 'Texte',
<<<<<<< HEAD
=======
            'id_att' => 'Id Att',
>>>>>>> a53c17914c92d9e22e0b831cad0d057ae11da966
            'id_ens' => 'Id Ens',
            'id_g' => 'Id G',
        ];
    }
<<<<<<< HEAD

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAttatechments()
    {
        return $this->hasMany(Attatechments::className(), ['id_c' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdG()
    {
        return $this->hasOne(Groupe::className(), ['id' => 'id_g']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdEns()
    {
        return $this->hasOne(Enseignant::className(), ['cin' => 'id_ens']);
    }
=======
>>>>>>> a53c17914c92d9e22e0b831cad0d057ae11da966
}
