<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\web\UploadedFile;


class MediaUpload extends Model{

    public $media;

	public function rules()
    {

        return [
            [['media'], 'required'],
            [['media'], 'file', 'extensions' => 'jpg,png,mp4']
        ];
    }

    public function uploadFile(UploadedFile $file, $currentMedia)
    {
        $this->media = $file;

        if($this->validate())
        {
            $this->deleteCurrentMedia($currentMedia);

            return $this->saveMedia();
        }
    }

    private function getFolder()
    {
        return Yii::getAlias('@web') . 'uploads/';
    }

    private function generateFilename()
    {
        return strtolower(md5(uniqid($this->media->baseName)) . '.' . $this->media->extension);
    }

    public function deleteCurrentMedia($currentMedia)
    {
        if($this->fileExists($currentMedia))
        {
            unlink($this->getFolder() . $currentMedia);
        }
    }

    public function fileExists($currentMedia)
    {
        if(!empty($currentMedia) && $currentMedia != null)
        {
            return file_exists($this->getFolder() . $currentMedia);
        }
    }

    public function saveMedia()
    {
        $filename = $this->generateFilename();

        $this->media->saveAs($this->getFolder() . $filename);

        return $filename;
    }
}