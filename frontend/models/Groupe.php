<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "Groupe".
 *
 * @property integer $id
 * @property string $designation
 * @property integer $id_s
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
}
