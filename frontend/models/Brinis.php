<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "brinis".
 *
 * @property integer $id
 * @property string $name
 * @property string $mail
 */
class Brinis extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'brinis';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'mail'], 'required'],
            [['name'], 'string', 'max' => 20],
            [['mail'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'mail' => 'Mail',
        ];
    }
}
