<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "course".
 *
 * @property integer $idcourse
 * @property integer $idinstitution
 * @property double $coursegrade
 * @property double $studentgrade
 *
 * @property Institution $idinstitution0
 */
class Course extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'course';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idinstitution', 'coursegrade', 'studentgrade'], 'required'],
            [['idinstitution'], 'integer'],
            [['coursegrade', 'studentgrade'], 'number'],
            [['idinstitution'], 'exist', 'skipOnError' => true, 'targetClass' => Institution::className(), 'targetAttribute' => ['idinstitution' => 'idinstitution']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idcourse' => 'Idcourse',
            'idinstitution' => 'Idinstitution',
            'coursegrade' => 'Coursegrade',
            'studentgrade' => 'Studentgrade',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdinstitution0()
    {
        return $this->hasOne(Institution::className(), ['idinstitution' => 'idinstitution']);
    }
}
