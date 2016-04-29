<?php




/**
 * This is the model class for table "auditoria".
 *
 * The followings are the available columns in table 'auditoria':
 * @property integer $rmo_mol_id
 * @property integer $rmo_roe_id
 * @property integer $ruo_roe_id
 * @property integer $ruo_uso_id
 * @property integer $err_codigo
 *
 * The followings are the available model relations:
 * @property Errores $errCodigo
 * @property RolesModulos $rmoMol
 * @property RolesModulos $rmoRoe
 * @property RolesUsuario $ruoRoe
 * @property RolesUsuario $ruoUso
 */
class Auditoria extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'auditoria';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('rmo_mol_id, rmo_roe_id, ruo_roe_id, ruo_uso_id, err_codigo', 'required'),
			array('rmo_mol_id, rmo_roe_id, ruo_roe_id, ruo_uso_id, err_codigo', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('rmo_mol_id, rmo_roe_id, ruo_roe_id, ruo_uso_id, err_codigo', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'errCodigo' => array(self::BELONGS_TO, 'Errores', 'err_codigo'),
			'rmoMol' => array(self::BELONGS_TO, 'RolesModulos', 'rmo_mol_id'),
			'rmoRoe' => array(self::BELONGS_TO, 'RolesModulos', 'rmo_roe_id'),
			'ruoRoe' => array(self::BELONGS_TO, 'RolesUsuario', 'ruo_roe_id'),
			'ruoUso' => array(self::BELONGS_TO, 'RolesUsuario', 'ruo_uso_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */

public function attributeLabels()
{
    return array(
            'rmo_mol_id' => Yii::t('application', 'Rmo Mol'),
            'rmo_roe_id' => Yii::t('application', 'Rmo Roe'),
            'ruo_roe_id' => Yii::t('application', 'Ruo Roe'),
            'ruo_uso_id' => Yii::t('application', 'Ruo Uso'),
            'err_codigo' => Yii::t('application', 'Err Codigo'),
    );
}


	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('rmo_mol_id',$this->rmo_mol_id);
		$criteria->compare('rmo_roe_id',$this->rmo_roe_id);
		$criteria->compare('ruo_roe_id',$this->ruo_roe_id);
		$criteria->compare('ruo_uso_id',$this->ruo_uso_id);
		$criteria->compare('err_codigo',$this->err_codigo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Auditoria the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
