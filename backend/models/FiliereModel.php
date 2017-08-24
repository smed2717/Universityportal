<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "filiere".
 *
 * @property integer $id_filiere
 * @property string $libelle
 */
class FiliereModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'filiere';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['libelle'], 'required'],
            [['libelle'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_filiere' => 'Id Filiere',
            'libelle' => 'Libelle',
        ];
    }
}
