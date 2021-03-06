<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\EnseignantModel;

/**
 * EnseignantSearch represents the model behind the search form about `backend\models\EnseignantModel`.
 */
class EnseignantSearch extends EnseignantModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'nom', 'prenom', 'email', 'adresse', 'grade', 'logo'], 'safe'],
            [['cin'], 'integer'],
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
        $query = EnseignantModel::find();

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
        ]);

        $query->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'nom', $this->nom])
            ->andFilterWhere(['like', 'prenom', $this->prenom])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'adresse', $this->adresse])
            ->andFilterWhere(['like', 'grade', $this->grade])
            ->andFilterWhere(['like', 'logo', $this->logo]);

        return $dataProvider;
    }
}
