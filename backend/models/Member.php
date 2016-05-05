<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "member".
 *
 * @property integer $club_id
 * @property integer $user_id
 * @property string $role
 * @property string $date_join_club
 * @property string $created_at
 * @property string $updated_at
 *
 * @property Club $club
 * @property User $user
 * @property UserSetting[] $userSettings
 */
class Member extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'member';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['club_id', 'user_id', 'role', 'date_join_club'], 'required'],
            [['club_id', 'user_id'], 'integer'],
            [['role'], 'string'],
            [['date_join_club', 'created_at', 'updated_at'], 'safe'],
            [['club_id'], 'exist', 'skipOnError' => true, 'targetClass' => Club::className(), 'targetAttribute' => ['club_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'club_id' => 'Club ID',
            'user_id' => 'User ID',
            'role' => 'Role',
            'date_join_club' => 'Date Join Club',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClub()
    {
        return $this->hasOne(Club::className(), ['id' => 'club_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserSettings()
    {
        return $this->hasMany(UserSetting::className(), ['user_id' => 'user_id']);
    }
}
