<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "core_brand".
 *
 * @property integer $id
 * @property string $name
 * @property string $firstLetter
 * @property string $imgUrl
 * @property string $fname
 * @property string $created
 * @property string $updated
 * @property string $deleted
 * @property integer $is_deleted
 * @property integer $operationer
 */
class Brand extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'core_brand';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['created', 'updated', 'deleted'], 'safe'],
            [['is_deleted', 'operationer'], 'integer'],
            [['name', 'fname'], 'string', 'max' => 255],
            [['firstLetter'], 'string', 'max' => 10],
            [['imgUrl'], 'string', 'max' => 500]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'firstLetter' => 'First Letter',
            'imgUrl' => 'Img Url',
            'fname' => 'Fname',
            'created' => 'Created',
            'updated' => 'Updated',
            'deleted' => 'Deleted',
            'is_deleted' => 'Is Deleted',
            'operationer' => 'Operationer',
        ];
    }
    public function fields(){
            $fields = parent::fields();
            unset($fields['is_deleted'],$fields['deleted']);
            return $fields;
    }
}
