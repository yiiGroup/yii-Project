<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "ens_mat".
 *
 * @property integer $id
 * @property integer $id_mat
 * @property string $id_ens
 * @property integer $id_g
 */
class EnsMat extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ens_mat';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_mat', 'id_ens', 'id_g'], 'required'],
            [['id_mat', 'id_g'], 'integer'],
            [['id_ens'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_mat' => 'Id Mat',
            'id_ens' => 'Id Ens',
            'id_g' => 'Id G',
        ];
    }
}
