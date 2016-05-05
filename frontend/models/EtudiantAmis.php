<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use \yii\data\SqlDataProvider ;
use frontend\models\Etudiant;

/**
 * EtudiantSearch represents the model behind the search form about `frontend\models\Etudiant`.
 */
class EtudiantAmis extends Etudiant
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cin', 'firstname', 'lastname', 'adresse', 'ni'], 'safe'],
            [['num_tel'], 'integer'],
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
    public function search($parm)
    {


        $etud = new ListInscEtudSearch();

        $data = $etud->search2($parm);


        $dataProvider = new SqlDataProvider([
            'sql' => 'SELECT e.*
FROM etudiant e, list_insc_etud l
WHERE e.cin = l.id_etud

AND l.id_groupe
IN (

SELECT li.id_groupe
FROM list_insc_etud li, etudiant e2, user u
WHERE u.matricule = e2.ni
AND e2.cin = li.id_etud
AND u.matricule = :param
)',
            'params' => [':param' => yii::$app->user->identity->matricule]
        ]);







        return $dataProvider;
    }
}
