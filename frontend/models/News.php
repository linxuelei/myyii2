<?php

namespace frontend\models;

use Yii;
use yii\db\ActiveRecord;


/**
 * ContactForm is the model behind the contact form.
 */
class News extends ActiveRecord
{

    public static function tableName()
    {
        return 'news';
    }
}
