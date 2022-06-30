<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "event".
 *
 * @property int $id
 * @property string $nama
 * @property string $tanggal
 * @property string $lokasi
 * @property string $deskripsi
 * @property string $gambar
 * @property string $created_at
 * @property string $updated_at
 */
class Event extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'event';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'tanggal', 'lokasi', 'deskripsi', 'gambar'], 'required'],
            [['tanggal'], 'safe'],
            [['deskripsi'], 'string'],
            [['nama', 'lokasi', 'gambar'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'tanggal' => 'Tanggal',
            'lokasi' => 'Lokasi',
            'deskripsi' => 'Deskripsi',
            'gambar' => 'Gambar',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::class,
                'value' => date('Y-m-d H:i:s'),
            ],
        ];
    }
}
