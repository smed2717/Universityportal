<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "enseignant".
 *
 * @property string $username
 * @property integer $cin
 * @property string $nom
 * @property string $prenom
 * @property string $email
 * @property string $adresse
 * @property string $grade
 * @property string $logo
 */
class EnseignantModel extends \yii\db\ActiveRecord
{
    public $file; // Define

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'enseignant';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'cin', 'nom', 'prenom', 'email', 'adresse', 'grade', 'logo'], 'required'],
            [['cin'], 'integer'],
            [['username', 'logo'], 'string', 'max' => 255],
            [['nom'], 'string', 'max' => 45],
            [['prenom', 'email'], 'string', 'max' => 50],
            [['adresse'], 'string', 'max' => 100],
            [['grade'], 'string', 'max' => 30],
            [['file'], 'safe'], //public function rules()
            [['file'], 'file', 'extensions'=>'jpg, gif, png'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'username' => 'Username',
            'cin' => 'Cin',
            'nom' => 'Nom',
            'prenom' => 'Prenom',
            'email' => 'Email',
            'adresse' => 'Adresse',
            'grade' => 'Grade',
            'logo' => 'Logo',
            'file' => 'Photo', // public function attributeLabels()

        ];
    }
}
