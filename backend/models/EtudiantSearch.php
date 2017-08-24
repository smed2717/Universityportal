<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\EtudiantModel;

/**
 * EtudiantSearch represents the model behind the search form about `backend\models\EtudiantModel`.
 */
class EtudiantSearch extends EtudiantModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'nom', 'prenom', 'date_naissance', 'email', 'adresse', 'id_groupe', 'logo'], 'safe'],
            [['cin', 'telephone', 'num_inscri', 'id_filiere'], 'integer'],
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
        $query = EtudiantModel::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'cin' => $this->cin,
            'date_naissance' => $this->date_naissance,
            'telephone' => $this->telephone,
            'num_inscri' => $this->num_inscri,
            'id_filiere' => $this->id_filiere,
        ]);

        $query->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'nom', $this->nom])
            ->andFilterWhere(['like', 'prenom', $this->prenom])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'adresse', $this->adresse])
            ->andFilterWhere(['like', 'id_groupe', $this->id_groupe])
            ->andFilterWhere(['like', 'logo', $this->logo]);

        return $dataProvider;
    }
}
