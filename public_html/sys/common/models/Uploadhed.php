<?php

namespace common\models;

use yii\base\Model;
use yii\web\UploadedFile;

class UploadHed extends Model
{
    /**
     * @var UploadedFile
     */
    public $imageFile;

    public function rules()
    {
        return [
            [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg, gif'],
        ];
    }

    public function upload()
    {
        $name = 'other_server';
        if ($this->validate()) {
            $this->imageFile->saveAs('../image/bg_banner/header_image/' . $name . '.' . $this->imageFile->extension);
            return true;
        } else {
            return false;
        }
    }
}