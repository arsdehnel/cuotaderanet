<?php
namespace common\models;

use yii\db\ActiveRecord;

class Nav extends ActiveRecord
{

    /**
     * @return string the name of the table associated with this ActiveRecord class.
     */
    public static function tableName()
    {
        return 'nav_items';
    }
        
}
