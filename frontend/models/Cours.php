<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "cours".
 *
 * @property integer $id
 * @property string $texte
 * @property string $id_ens
 * @property integer $id_g
 *
 * @property Attatechments[] $attatechments
 * @property Groupe $idG
 * @property Enseignant $idEns
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
            [['texte', 'id_ens', 'id_g'], 'required'],
            [['id_g'], 'integer'],
            [['texte'], 'string', 'max' => 2000],
            [['id_ens'], 'string', 'max' => 10]
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
            'id_ens' => 'Id Ens',
            'id_g' => 'Id G',
        ];
    }

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
}
