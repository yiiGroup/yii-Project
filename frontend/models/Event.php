<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%event}}".
 *
 * @property integer $id
 * @property integer $club_id
 * @property string $event_type
 * @property string $description
 * @property string $date
 * @property integer $event_place
 * @property string $created_at
 * @property string $updated_at
 *
 * @property Club $club
 * @property Place $eventPlace
 */
class Event extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%event}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['club_id', 'event_type', 'description', 'date', 'event_place'], 'required'],
            [['club_id', 'event_place'], 'integer'],
            [['event_type', 'description'], 'string'],
            [['date', 'created_at', 'updated_at'], 'safe'],
            [['club_id'], 'exist', 'skipOnError' => true, 'targetClass' => Club::className(), 'targetAttribute' => ['club_id' => 'id']],
            [['event_place'], 'exist', 'skipOnError' => true, 'targetClass' => Place::className(), 'targetAttribute' => ['event_place' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'club_id' => 'Club ID',
            'event_type' => 'Event Type',
            'description' => 'Description',
            'date' => 'Date',
            'event_place' => 'Event Place',
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
    public function getEventPlace()
    {
        return $this->hasOne(Place::className(), ['id' => 'event_place']);
    }
}
