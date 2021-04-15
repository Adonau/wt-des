<?php

namespace common\models;

use yii\base\Model;
use yii\web\UploadedFile;

class UploadForm extends Model
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
        $name = 'aside-gif';
        if ($this->validate()) {
            $this->imageFile->saveAs('../image/gif_aside/' . $name . '.' . $this->imageFile->extension);
            return true;
        } else {
            return false;
        }
    }
}
