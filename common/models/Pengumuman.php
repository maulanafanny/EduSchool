<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "pengumuman".
 *
 * @property int $id
 * @property string $judul
 * @property string $deskripsi
 * @property string $creator
 * @property string $link
 * @property string $tanggal
 */
class Pengumuman extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pengumuman';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['judul', 'deskripsi', 'creator', 'link', 'tanggal'], 'required'],
            [['tanggal'], 'safe'],
            [['judul', 'deskripsi', 'link'], 'string', 'max' => 255],
            [['creator'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'judul' => 'Judul',
            'deskripsi' => 'Deskripsi',
            'creator' => 'Creator',
            'link' => 'Link',
            'tanggal' => 'Tanggal',
        ];
    }
}
