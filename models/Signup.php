<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "signup".
 *
 * @property integer $id
 * @property string $lastModified
 * @property string $dateCreated
 * @property string $salutation
 * @property string $fName
 * @property string $mName
 * @property string $lName
 * @property string $address1
 * @property string $address2
 * @property string $city
 * @property string $state
 * @property integer $zip
 * @property string $gender
 * @property string $phone
 * @property string $email
 */
class Signup extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'signup';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['lastModified', 'dateCreated'], 'safe'],
            [['dateCreated', 'fName', 'lName', 'address1', 'city', 'state', 'zip', 'email'], 'required'],
            [['zip'], 'integer'],
            [['salutation', 'fName', 'mName', 'lName', 'address1', 'address2'], 'string', 'max' => 250],
            [['city', 'email'], 'string', 'max' => 100],
            [['state'], 'string', 'max' => 2],
            [['gender'], 'string', 'max' => 1],
            [['phone'], 'string', 'max' => 30],
            [['phone', 'email'], 'unique', 'targetAttribute' => ['phone', 'email'], 'message' => 'The combination of Phone and Email has already been taken.']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'lastModified' => 'Last Modified',
            'dateCreated' => 'Date Created',
            'salutation' => 'Salutation',
            'fName' => 'First Name',
            'mName' => 'Middle Name',
            'lName' => 'Last Name',
            'address1' => 'Address1',
            'address2' => 'Address2',
            'city' => 'City',
            'state' => 'State',
            'zip' => 'Zip',
            'gender' => 'Gender',
            'phone' => 'Phone',
            'email' => 'Email',
        ];
    }
}
