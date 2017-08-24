<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "groupe".
 *
 * @property integer $id_groupe
 * @property string $libelle
 */
class GroupeModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'groupe';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['libelle'], 'required'],
            [['libelle'], 'string', 'max' => 25],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_groupe' => 'Id Groupe',
            'libelle' => 'Libelle',
        ];
    }
}
