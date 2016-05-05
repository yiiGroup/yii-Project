<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Matiere;

/**
 * MatiereSearch represents the model behind the search form about `frontend\models\Matiere`.
 */
class MatiereSearch extends Matiere
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_s'], 'integer'],
            [['nom', 'designation', 'type'], 'safe'],
            [['coef'], 'number'],
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
        $query = Matiere::find();

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
            'coef' => $this->coef,
            'id_s' => $this->id_s,
        ]);

        $query->andFilterWhere(['like', 'nom', $this->nom])
            ->andFilterWhere(['like', 'designation', $this->designation])
            ->andFilterWhere(['like', 'type', $this->type]);

        return $dataProvider;
    }
}
