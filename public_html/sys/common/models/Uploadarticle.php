<?php

namespace common\models;

use yii\base\Model;
use yii\web\UploadedFile;

class UploadArticle extends Model
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
        $name = 'bg_banner';
        if ($this->validate()) {
            $this->imageFile->saveAs('../image/bg_banner/' . $name . '.' . $this->imageFile->extension);
            return true;
        } else {
            return false;
        }
    }
}
