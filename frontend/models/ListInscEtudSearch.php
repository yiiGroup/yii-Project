<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\ListInscEtud;
use yii\data\SqlDataProvider;
<<<<<<< HEAD

=======
>>>>>>> a53c17914c92d9e22e0b831cad0d057ae11da966
/**
 * ListInscEtudSearch represents the model behind the search form about `frontend\models\ListInscEtud`.
 */
class ListInscEtudSearch extends ListInscEtud
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
<<<<<<< HEAD
            [['id', 'id_groupe', 'id_annee'], 'integer'],
            [['id_etud'], 'safe'],
=======
            [['id', 'id_etud', 'id_groupe', 'id_annee'], 'integer'],
>>>>>>> a53c17914c92d9e22e0b831cad0d057ae11da966
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
        $query = ListInscEtud::find();

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
<<<<<<< HEAD
=======
            'id_etud' => $this->id_etud,
>>>>>>> a53c17914c92d9e22e0b831cad0d057ae11da966
            'id_groupe' => $this->id_groupe,
            'id_annee' => $this->id_annee,
        ]);

<<<<<<< HEAD
        $query->andFilterWhere(['like', 'id_etud', $this->id_etud]);

=======
>>>>>>> a53c17914c92d9e22e0b831cad0d057ae11da966
        return $dataProvider;
    }
    public function search2($params)
    {
        $data = new SqlDataProvider([
            'sql' => 'select id_groupe from list_insc_etud where id_etud = :param',
            'params' => [':param' => $params]
        ]);


    }
}
