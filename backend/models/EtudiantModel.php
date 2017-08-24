<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "etudiant".
 *
 * @property string $username
 * @property string $nom
 * @property string $prenom
 * @property integer $cin
 * @property string $date_naissance
 * @property integer $telephone
 * @property string $email
 * @property integer $num_inscri
 * @property string $adresse
 * @property integer $id_filiere
 * @property string $id_groupe
 * @property string $logo
 */
class EtudiantModel extends \yii\db\ActiveRecord
{
    public $file; // Define
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'etudiant';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username'], 'required'],
            [['cin', 'telephone', 'num_inscri', 'id_filiere'], 'integer'],
            [['date_naissance'], 'safe'],
            [['username', 'id_groupe', 'logo'], 'string', 'max' => 255],
            [['nom'], 'string', 'max' => 45],
            [['prenom', 'email'], 'string', 'max' => 50],
            [['adresse'], 'string', 'max' => 100],
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
            'nom' => 'Nom',
            'prenom' => 'Prenom',
            'cin' => 'Cin',
            'date_naissance' => 'Date Naissance',
            'telephone' => 'Telephone',
            'email' => 'Email',
            'num_inscri' => 'Num Inscri',
            'adresse' => 'Adresse',
            'id_filiere' => 'Id Filiere',
            'id_groupe' => 'Id Groupe',
            'logo' => 'Logo',
            'file' => 'Photo', // public function attributeLabels()

        ];
    }
}
