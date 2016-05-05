<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "matiere".
 *
 * @property integer $id
 * @property string $nom
 * @property string $designation
 * @property double $coef
 * @property string $type
 * @property integer $id_s
 */
class Matiere extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'matiere';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nom', 'designation', 'coef', 'type', 'id_s'], 'required'],
            [['coef'], 'number'],
            [['id_s'], 'integer'],
            [['nom'], 'string', 'max' => 200],
            [['designation'], 'string', 'max' => 100],
            [['type'], 'string', 'max' => 10]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nom' => 'Nom',
            'designation' => 'Designation',
            'coef' => 'Coef',
            'type' => 'Type',
            'id_s' => 'Id S',
        ];
    }
}
