<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\FiliereModel;

/**
 * FiliereSearch represents the model behind the search form about `backend\models\FiliereModel`.
 */
class FiliereSearch extends FiliereModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_filiere'], 'integer'],
            [['libelle'], 'safe'],
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
        $query = FiliereModel::find();

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
            'id_filiere' => $this->id_filiere,
        ]);

        $query->andFilterWhere(['like', 'libelle', $this->libelle]);

        return $dataProvider;
    }
}
