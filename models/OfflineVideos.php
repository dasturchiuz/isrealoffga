<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "offline_videos".
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $date
 * @property string $media
 * @property int $viewed
 * @property int $category_id
 */
class OfflineVideos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'offline_videos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description'], 'string'],
            [['date'], 'safe'],
            [['viewed', 'category_id'], 'integer'],
            [['title', 'media'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'date' => 'Date',
            'media' => 'Media',
            'viewed' => 'Viewed',
            'category_id' => 'Category ID',
        ];
    }
}
