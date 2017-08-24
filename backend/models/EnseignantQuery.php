<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[EtudiantModel]].
 *
 * @see EtudiantModel
 */
class EnseignantQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return EtudiantModel[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return EtudiantModel|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
