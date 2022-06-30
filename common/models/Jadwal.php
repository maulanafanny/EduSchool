<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "jadwal".
 *
 * @property int $id
 * @property string $kelas
 * @property string $senin
 * @property string $selasa
 * @property string $rabu
 * @property string $kamis
 * @property string $jumat
 */
class Jadwal extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jadwal';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kelas', 'senin', 'selasa', 'rabu', 'kamis', 'jumat'], 'required'],
            [['kelas'], 'string', 'max' => 50],
            [['senin', 'selasa', 'rabu', 'kamis', 'jumat'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kelas' => 'Kelas',
            'senin' => 'Senin',
            'selasa' => 'Selasa',
            'rabu' => 'Rabu',
            'kamis' => 'Kamis',
            'jumat' => 'Jumat',
        ];
    }
}
