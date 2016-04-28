<?php

namespace backend\models;

use Yii;
use yii\data\ArrayDataProvider;

/**
 * This is the model class for table "event".
 *
 * @property integer $id
 * @property string $name
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
    const TYPE_OTHER = 0;
    const TYPE_WORKSHOP = 1;
    const TYPE_CONFERENCE = 2;
    const TYPE_MEETING= 3;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'event';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'club_id', 'event_type', 'description', 'date', 'event_place'], 'required'],
            [['club_id', 'event_place'], 'integer'],
            [['event_type', 'description'], 'string'],
            [['date', 'created_at', 'updated_at'], 'safe'],
            [['name'], 'string', 'max' => 30],
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
            'name' => 'Name',
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
    public function getEventType($data) {
        if($data=='') {$data=0;}
        $options = $this->getEventTypeOptions();
        return $options[$data];
    }

    public function getEventTypeOptions()
    {
        return array(
            self::TYPE_WORKSHOP => 'Workshop',
            self::TYPE_CONFERENCE => 'Conference',
            self::TYPE_MEETING => 'Meeting',
            self::TYPE_OTHER => 'Other'
        );
    }
  /*  public static function initialize($user_id) {
        $us = UserSetting::find()->where(['user_id'=>$user_id])->one();

        if (is_null($us)) {
            $us=new UserSetting();
            $us->user_id = $user_id;
            $us->filename='';
            $us->avatar='';
            $us->reminder_eve = self::SETTING_YES;
            $us->reminder_hours = 48;
            $us->contact_share = self::SETTING_YES;
            $us->no_email = self::SETTING_NO;
            $us->save();
        }
        return $us->id;
    }*/

}
