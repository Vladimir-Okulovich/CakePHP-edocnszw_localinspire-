<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * BusinessReviewOwnerReports Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\BusinessReviewsTable&\Cake\ORM\Association\BelongsTo $BusinessReviews
 *
 * @method \App\Model\Entity\BusinessReviewOwnerReport newEmptyEntity()
 * @method \App\Model\Entity\BusinessReviewOwnerReport newEmptyEntity(array $data, array $options = [])
 * @method \App\Model\Entity\BusinessReviewOwnerReport[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\BusinessReviewOwnerReport get($primaryKey, $options = [])
 * @method \App\Model\Entity\BusinessReviewOwnerReport findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\BusinessReviewOwnerReport patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\BusinessReviewOwnerReport[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\BusinessReviewOwnerReport|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BusinessReviewOwnerReport saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BusinessReviewOwnerReport[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\BusinessReviewOwnerReport[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\BusinessReviewOwnerReport[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\BusinessReviewOwnerReport[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class BusinessReviewOwnerReportsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('business_review_owner_reports');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('BusinessReviews', [
            'foreignKey' => 'business_review_id',
            'joinType' => 'INNER',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('description')
            // ->maxLength('description', (int)4294967295)
            ->requirePresence('description', 'create')
            ->notEmptyString('description');

        $validator
            ->boolean('treated')
            ->allowEmptyString('treated');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['business_review_id'], 'BusinessReviews'));

        return $rules;
    }
}
