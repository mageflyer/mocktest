<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Options Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Options
 * @property \Cake\ORM\Association\BelongsTo $Qs
 * @property \Cake\ORM\Association\BelongsTo $Cs
 *
 * @method \App\Model\Entity\Option get($primaryKey, $options = [])
 * @method \App\Model\Entity\Option newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Option[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Option|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Option patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Option[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Option findOrCreate($search, callable $callback = null, $options = [])
 */
class OptionsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('options');
        $this->setDisplayField('option_id');
        $this->setPrimaryKey('option_id');
		
		$this->belongsTo('Questions', [
            'foreignKey' => 'q_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Courses', [
            'foreignKey' => 'c_id',
            'joinType' => 'INNER'
        ]);
        /*$this->belongsTo('Options', [
            'foreignKey' => 'option_id',
            'joinType' => 'INNER'
        ]);*/
        
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->requirePresence('description', 'create')
            ->notEmpty('description');

        $validator
            ->integer('status')
            ->requirePresence('status', 'create')
            ->notEmpty('status');


        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        //$rules->add($rules->existsIn(['option_id'], 'Options'));
        $rules->add($rules->existsIn(['q_id'], 'Questions'));
        $rules->add($rules->existsIn(['c_id'], 'Courses'));

        return $rules;
    }
	public function beforeSave(\Cake\Event\Event $event, \Cake\ORM\Entity $entity, \ArrayObject $options)
	{
		
		$entity->created_at = date('Y-m-d H:i:s');
		$entity->modified_at = date('Y-m-d H:i:s');
		return true;
	}
	public function findOwnedBy(Query $query, array $options)
    {
		return $query->where(['Questions.q_id' => $options['q_id']]);
    }
}
