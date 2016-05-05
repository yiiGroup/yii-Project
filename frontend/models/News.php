<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "News".
 *
 * @property integer $id
 * @property string $Description
 * @property integer $PieceJointe
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'News';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Description'], 'required'],
            [['Description'], 'string'],
            [['PieceJointe'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Description' => 'Description',
            'PieceJointe' => 'Piece Jointe',
        ];
    }
}
