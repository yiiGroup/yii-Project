<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Cours;

/**
 * CoursSearch represents the model behind the search form about `frontend\models\Cours`.
 */
class CoursEtudiant extends Cours
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_g'], 'integer'],
            [['texte', 'id_ens'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {


        $id_group= Yii::$app->db->createCommand('SELECT id_groupe FROM list_insc_etud WHERE id_etud=:publish', [':publish' =>  Yii::$app->user->identity->matricule])

	            ->queryScalar();
        $query = Cours::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'id_g' => $id_group,//$this->id_g,
        ]);

        $query->andFilterWhere(['like', 'texte', $this->texte])
            ->andFilterWhere(['like', 'id_ens', $this->id_ens]);

        return $dataProvider;
    }

    /*
     * $dataProvider=new CActiveDataProvider('Item', array(
    'criteria' => array(
        'with' =>'sector',
        'condition' =>'t.sector_id=:id',
        'params' => array(':id'=>$id),
        'order' => 'fi.item_id DESC',
        'join' => 'INNER JOIN featureitem fi ON fi.item_id=t.id',
    )
));
   // on Vehicles
public function relations(){
 return array('owner'=>array(self::BELONGS_TO,'Onwer','onwer_id'));
}
    new CActiveDataProvider('Vehicles',array(
            'criteria'=>array(
                'with'=>array('owner'=>array('joinType'=>'LEFT JOIN')),
                'order'=>'vehicle_id DESC',
            )
        ));

    */
    /*
     *  public function search($params)
    {
        $query = Cours::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'id_att' => $this->id_att,
            'id_ens' => $this->id_ens,
            'id_g' => $this->id_g,
        ]);

        $query->andFilterWhere(['like', 'texte', $this->texte]);

        return $dataProvider;
    }
     * */


}
