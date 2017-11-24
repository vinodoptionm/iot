<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_users".
 *
 * @property integer $user_id
 * @property string $username
 * @property string $mobile
 * @property integer $user_type
 * @property string $auth_key
 * @property string $password
 * @property string $password_reset_token
 * @property string $password_requested_at
 * @property integer $is_active
 * @property integer $is_verified
 * @property integer $is_delete
 * @property string $last_logged_at
 * @property string $access_token_expired_at
 * @property string $last_login_ip
 * @property string $created_at
 * @property integer $created_by
 * @property string $updated_at
 * @property integer $updated_by
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'mobile', 'user_type', 'auth_key', 'last_logged_at', 'created_at', 'created_by'], 'required'],
            [['user_type', 'is_active', 'is_verified', 'is_delete', 'created_by', 'updated_by'], 'integer'],
            [['password_requested_at', 'last_logged_at', 'access_token_expired_at', 'created_at', 'updated_at'], 'safe'],
            [['username', 'auth_key', 'password', 'password_reset_token'], 'string', 'max' => 255],
            [['mobile'], 'string', 'max' => 50],
            [['last_login_ip'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'username' => 'Username',
            'mobile' => 'Mobile',
            'user_type' => 'User Type',
            'auth_key' => 'Auth Key',
            'password' => 'Password',
            'password_reset_token' => 'Password Reset Token',
            'password_requested_at' => 'Password Requested At',
            'is_active' => 'Is Active',
            'is_verified' => 'Is Verified',
            'is_delete' => 'Is Delete',
            'last_logged_at' => 'Last Logged At',
            'access_token_expired_at' => 'Access Token Expired At',
            'last_login_ip' => 'Last Login Ip',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'updated_at' => 'Updated At',
            'updated_by' => 'Updated By',
        ];
    }
}
