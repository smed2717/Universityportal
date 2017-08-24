<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\GroupeModel;

/**
 * GroupeSearch represents the model behind the search form about `backend\models\GroupeModel`.
 */
class GroupeSearch extends GroupeModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_groupe'], 'integer'],
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
        $query = GroupeModel::find();

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
            'id_groupe' => $this->id_groupe,
        ]);

        $query->andFilterWhere(['like', 'libelle', $this->libelle]);

        return $dataProvider;
    }
}
