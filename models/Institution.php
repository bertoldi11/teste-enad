<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "institution".
 *
 * @property integer $idinstitution
 * @property string $name
 * @property double $grade
 *
 * @property Course[] $courses
 */
class Institution extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'institution';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['grade'], 'required'],
            [['grade'], 'number'],
            [['name'], 'string', 'max' => 128],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idinstitution' => 'Idinstitution',
            'name' => 'Name',
            'grade' => 'Grade',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCourses()
    {
        return $this->hasMany(Course::className(), ['idinstitution' => 'idinstitution']);
    }
}
