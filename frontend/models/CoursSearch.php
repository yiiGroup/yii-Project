<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Cours;
<<<<<<< HEAD
=======
use yii\data\SqlDataProvider;

>>>>>>> a53c17914c92d9e22e0b831cad0d057ae11da966

/**
 * CoursSearch represents the model behind the search form about `frontend\models\Cours`.
 */
class CoursSearch extends Cours
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
<<<<<<< HEAD
            [['id', 'id_g'], 'integer'],
            [['texte', 'id_ens'], 'safe'],
=======
            [['id', 'id_att', 'id_ens', 'id_g'], 'integer'],
            [['texte'], 'safe'],
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
<<<<<<< HEAD


=======
>>>>>>> a53c17914c92d9e22e0b831cad0d057ae11da966
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
<<<<<<< HEAD
            'id_g' => $this->id_g,
        ]);

        $query->andFilterWhere(['like', 'texte', $this->texte])
            ->andFilterWhere(['like', 'id_ens', $this->id_ens]);

        return $dataProvider;
    }
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
=======
            'id_att' => $this->id_att,
            'id_ens' => $this->id_ens,
            'id_g' => $this->id_g,
        ]);

        $query->andFilterWhere(['like', 'texte', $this->texte]);

        return $dataProvider;
    }

    public function searchByTeacher($params)
    {
        $dataProvider = new SqlDataProvider([
            'sql' =>'SELECT c . texte ,g . designation  as designation
FROM `cours` c, Groupe g, attatechments a
WHERE c.id_g = g.id
AND c.id_att = a.id
And c.id_ens=:param',

            'params' => [':param'=>$params],
        ]);



        return $dataProvider;
    }
>>>>>>> a53c17914c92d9e22e0b831cad0d057ae11da966


}
