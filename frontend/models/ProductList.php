<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "{{%product_list}}".
 *
 * @property integer $id
 * @property string $name
 * @property string $add_time
 */
class ProductList extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%product_list}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['add_time'], 'safe'],
            [['name'], 'string', 'max' => 255],
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
            'add_time' => 'Add Time',
        ];
    }
}
