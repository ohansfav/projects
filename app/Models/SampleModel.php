<?php

namespace App\Models;

use CodeIgniter\Model;

class SampleModel extends Model
{
	protected $DBGroup = 'default';
	protected $table = 'referral';
	protected $primaryKey = 'id';
	protected $returnType = 'object';
	protected $useSoftDeletes = true;
	protected $allowedFields = [
		"id",  "date_referral", "from_health_facility", "referred_to", "patients_name",
		"clinical_findings", "investigation", "provisional_diag", "reason_for_referral",  "source_ref_doc_id",
		"destination_ref_doc_id", "action_taken", "created_at", "deleted_at","assigned_by"
	];
	protected $useTimestamps = true;
	protected $createdField  = 'created_at';
	protected $updatedField  = 'updated_at';
	protected $beforeInsert = ['beforeInsert'];
	protected $beforeUpdate = ['beforeUpdate'];
	protected $skipValidation = false;

	protected $validationRules = [
		'date_referral'     => 'required',
		'from_health_facility'     => 'required',
		'referred_to'     => 'required',
		'patients_name'     => 'required',
		'reason_for_referral'     => 'required',
		'clinical_findings'     => 'required|min_length[1]',
		'source_ref_doc_id'     => 'required',
	];

	protected $validationMessages = [
		'date_referral' => [
			'required' => 'Sorry, the date of the referral must be entered'
		],
		'clinical_findings' => [
			'required' => 'Sorry, the clinical findings must be entered',
			'min_length' => 'Sorry, the clinical findings is too brief'
		]
	];
}
