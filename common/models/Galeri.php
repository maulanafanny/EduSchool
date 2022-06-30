<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "galeri".
 *
 * @property int $id
 * @property string $direktori
 */
class Galeri extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'galeri';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['direktori'], 'required'],
            [['direktori'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'direktori' => 'Direktori',
        ];
    }
}
