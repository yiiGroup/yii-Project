<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "cours".
 *
 * @property integer $id
 * @property string $texte
 * @property integer $id_att
 * @property integer $id_ens
 * @property integer $id_g
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
            [['texte', 'id_att', 'id_ens', 'id_g'], 'required'],
            [['id_att', 'id_ens', 'id_g'], 'integer'],
            [['texte'], 'string', 'max' => 2000]
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
            'id_att' => 'Id Att',
            'id_ens' => 'Id Ens',
            'id_g' => 'Id G',
        ];
    }
}
