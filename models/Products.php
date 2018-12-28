<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property int $prodid
 * @property string $prodcode
 * @property string $prodname
 * @property double $price
 * @property string $image
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['price'], 'number'],
            [['prodcode'], 'string', 'max' => 25],
            [['prodname', 'image'], 'string', 'max' => 255],
            [['prodcode'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'prodid' => 'Prodid',
            'prodcode' => 'Prodcode',
            'prodname' => 'Prodname',
            'price' => 'Price',
            'image' => 'Image',
        ];
    }
}
