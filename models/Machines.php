<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_machines".
 *
 * @property integer $machine_id
 * @property string $machine_name
 * @property integer $user_id
 * @property integer $created_by
 * @property string $created_date
 * @property integer $updated_by
 * @property string $updated_date
 */
class Machines extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_machines';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['machine_name', 'user_id', 'created_by'], 'required'],
            [['user_id', 'created_by', 'updated_by'], 'integer'],
            [['created_date', 'updated_date'], 'safe'],
            [['machine_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'machine_id' => 'Machine ID',
            'machine_name' => 'Machine Name',
            'user_id' => 'User ID',
            'created_by' => 'Created By',
            'created_date' => 'Created Date',
            'updated_by' => 'Updated By',
            'updated_date' => 'Updated Date',
        ];
    }
}
