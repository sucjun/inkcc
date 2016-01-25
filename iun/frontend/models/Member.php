<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "r_member".
 *
 * @property integer $member_id
 * @property string $username
 * @property string $password
 * @property string $openid
 * @property string $nickname
 * @property string $real_name
 * @property integer $level_id
 * @property integer $points
 * @property double $balance
 * @property string $email
 * @property string $phone
 * @property string $qq
 * @property integer $address_id
 * @property string $province
 * @property string $city
 * @property string $zip
 * @property string $address
 * @property string $email_status
 * @property string $phone_status
 * @property string $security_email
 * @property string $security_phone
 * @property string $company
 * @property string $meal
 * @property string $id
 * @property string $birthday
 * @property string $height
 * @property string $weight
 * @property string $blood
 * @property string $constellation
 * @property string $zodiac
 * @property string $education
 * @property integer $emotional
 * @property integer $gender
 * @property string $hobby
 * @property string $homepay
 * @property string $introduce
 * @property string $alipay
 * @property string $ip
 * @property string $logintime
 * @property string $createtime
 * @property integer $status
 *
 * @property RAddress[] $rAddresses
 * @property RBalance[] $rBalances
 * @property RMemberLevel $level
 * @property RPoints[] $rPoints
 */
class Member extends \yii\db\ActiveRecord
{
    const STATUS_DELETED = 0;
    const STATUS_ACTIVE = 10;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'r_member';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'password', 'logintime'], 'required'],
            [['level_id', 'points', 'address_id', 'emotional', 'gender', 'status'], 'integer'],
            [['balance'], 'number'],
            [['birthday', 'logintime', 'createtime'], 'safe'],
            [['username', 'nickname', 'real_name', 'email', 'province', 'city', 'security_email', 'company', 'alipay', 'ip'], 'string', 'max' => 50],
            [['password', 'openid', 'meal', 'hobby', 'homepay'], 'string', 'max' => 100],
            [['phone', 'qq', 'zip', 'email_status', 'phone_status', 'security_phone', 'id'], 'string', 'max' => 20],
            [['address'], 'string', 'max' => 255],
            [['height', 'weight', 'blood', 'constellation', 'zodiac', 'education'], 'string', 'max' => 10],
            [['introduce'], 'string', 'max' => 500]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'member_id' => 'Member ID',
            'username' => 'Username',
            'password' => 'Password',
            'openid' => 'Openid',
            'nickname' => 'Nickname',
            'real_name' => 'Real Name',
            'level_id' => 'Level ID',
            'points' => 'Points',
            'balance' => 'Balance',
            'email' => 'Email',
            'phone' => 'Phone',
            'qq' => 'Qq',
            'address_id' => 'Address ID',
            'province' => 'Province',
            'city' => 'City',
            'zip' => 'Zip',
            'address' => 'Address',
            'email_status' => 'Email Status',
            'phone_status' => 'Phone Status',
            'security_email' => 'Security Email',
            'security_phone' => 'Security Phone',
            'company' => 'Company',
            'meal' => 'Meal',
            'id' => 'ID',
            'birthday' => 'Birthday',
            'height' => 'Height',
            'weight' => 'Weight',
            'blood' => 'Blood',
            'constellation' => 'Constellation',
            'zodiac' => 'Zodiac',
            'education' => 'Education',
            'emotional' => 'Emotional',
            'gender' => 'Gender',
            'hobby' => 'Hobby',
            'homepay' => 'Homepay',
            'introduce' => 'Introduce',
            'alipay' => 'Alipay',
            'ip' => 'Ip',
            'logintime' => 'Logintime',
            'createtime' => 'Createtime',
            'status' => 'Status',
        ];
    }


    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
        return static::findOne(['member_id' => $id, 'status' => self::STATUS_ACTIVE]);
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username, 'status' => self::STATUS_ACTIVE]);
    }

    /**
     * Finds user by password reset token
     *
     * @param string $token password reset token
     * @return static|null
     */
    public static function findByPasswordResetToken($token)
    {
        if (!static::isPasswordResetTokenValid($token)) {
            return null;
        }

        return static::findOne([
            'password_reset_token' => $token,
            'status' => self::STATUS_ACTIVE,
        ]);
    }

    /**
     * Finds out if password reset token is valid
     *
     * @param string $token password reset token
     * @return boolean
     */
    public static function isPasswordResetTokenValid($token)
    {
        if (empty($token)) {
            return false;
        }
        $expire = Yii::$app->params['user.passwordResetTokenExpire'];
        $parts = explode('_', $token);
        $timestamp = (int) end($parts);
        return $timestamp + $expire >= time();
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->getPrimaryKey();
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return boolean if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->password_hash);
    }

    /**
     * Generates password hash from password and sets it to the model
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password_hash = Yii::$app->security->generatePasswordHash($password);
    }

    /**
     * Generates "remember me" authentication key
     */
    public function generateAuthKey()
    {
        $this->auth_key = Yii::$app->security->generateRandomString();
    }

    /**
     * Generates new password reset token
     */
    public function generatePasswordResetToken()
    {
        $this->password_reset_token = Yii::$app->security->generateRandomString() . '_' . time();
    }

    /**
     * Removes password reset token
     */
    public function removePasswordResetToken()
    {
        $this->password_reset_token = null;
    }






    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAddresses()
    {
        return $this->hasMany(Address::className(), ['member_id' => 'member_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBalances()
    {
        return $this->hasMany(Balance::className(), ['member_id' => 'member_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLevel()
    {
        return $this->hasOne(MemberLevel::className(), ['member_level_id' => 'level_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPoints()
    {
        return $this->hasMany(Points::className(), ['member_id' => 'member_id']);
    }





}
