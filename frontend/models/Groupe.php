<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "Groupe".
 *
 * @property integer $id
 * @property string $designation
 * @property integer $id_s
<<<<<<< HEAD
 *
 * @property Specialite $idS
 * @property Cours[] $cours
 * @property EnsMat[] $ensMats
 * @property ListInscEtud[] $listInscEtuds
 * @property Seance[] $seances
=======
>>>>>>> a53c17914c92d9e22e0b831cad0d057ae11da966
 */
class Groupe extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Groupe';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['designation', 'id_s'], 'required'],
            [['id_s'], 'integer'],
            [['designation'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'designation' => 'Designation',
            'id_s' => 'Id S',
        ];
    }
<<<<<<< HEAD

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdS()
    {
        return $this->hasOne(Specialite::className(), ['id' => 'id_s']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCours()
    {
        return $this->hasMany(Cours::className(), ['id_g' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEnsMats()
    {
        return $this->hasMany(EnsMat::className(), ['id_g' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getListInscEtuds()
    {
        return $this->hasMany(ListInscEtud::className(), ['id_groupe' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSeances()
    {
        return $this->hasMany(Seance::className(), ['id_g' => 'id']);
    }
=======
>>>>>>> a53c17914c92d9e22e0b831cad0d057ae11da966
}
