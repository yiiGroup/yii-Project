<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "list_insc_etud".
 *
 * @property integer $id
 * @property integer $id_etud
 * @property integer $id_groupe
 * @property integer $id_annee
 */
class ListInscEtud extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'list_insc_etud';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_etud', 'id_groupe', 'id_annee'], 'required'],
            [['id_etud', 'id_groupe', 'id_annee'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_etud' => 'Id Etud',
            'id_groupe' => 'Id Groupe',
            'id_annee' => 'Id Annee',
        ];
    }
}
