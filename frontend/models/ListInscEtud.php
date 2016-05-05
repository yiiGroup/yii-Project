<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "list_insc_etud".
 *
 * @property integer $id
<<<<<<< HEAD
 * @property string $id_etud
 * @property integer $id_groupe
 * @property integer $id_annee
 *
 * @property Groupe $idGroupe
 * @property AnneeSco $idAnnee
 * @property Etudiant $idEtud
=======
 * @property integer $id_etud
 * @property integer $id_groupe
 * @property integer $id_annee
>>>>>>> a53c17914c92d9e22e0b831cad0d057ae11da966
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
<<<<<<< HEAD
            [['id_groupe', 'id_annee'], 'integer'],
            [['id_etud'], 'string', 'max' => 20]
=======
            [['id_etud', 'id_groupe', 'id_annee'], 'integer']
>>>>>>> a53c17914c92d9e22e0b831cad0d057ae11da966
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
<<<<<<< HEAD

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdGroupe()
    {
        return $this->hasOne(Groupe::className(), ['id' => 'id_groupe']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdAnnee()
    {
        return $this->hasOne(AnneeSco::className(), ['id' => 'id_annee']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdEtud()
    {
        return $this->hasOne(Etudiant::className(), ['cin' => 'id_etud']);
    }
=======
>>>>>>> a53c17914c92d9e22e0b831cad0d057ae11da966
}
