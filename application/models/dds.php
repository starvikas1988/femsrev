<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Qa_philip_model extends CI_Model {
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();	
    }

/////////////////////////////
		private $RepDB=null;
	
		public function set_report_database($group="default"){	
			$this->RepDB = $this->load->database($group,TRUE);
		}
//////////////////////////	

	
	public function get_agent_id($cid,$pid,$apid)
	{	
		$qSql="SELECT id, concat(fname, ' ', lname) as name, assigned_to, fusion_id FROM `signin` where role_id in (select id from role where folder ='agent') and dept_id=6 and is_assign_client (id,$cid) and (is_assign_process (id,$pid) or is_assign_process (id,$apid)) and status=1  order by name";
		$query = $this->db->query($qSql);
		return $query->result_array();	
	}
	
	function philip_insert_excel($data){
		$this->db->insert_batch('qa_loanxm_feedback', $data);
	}

	function debt_solution_insert_voicemail_excel($data){
		$this->db->insert_batch('qa_loanxm_voicemail_feedback', $data);
	}

	function hcci_core_insert_excel($data){
		$this->db->insert_batch('qa_hcci_feedback', $data);
	}

	function hcci_cx_insert_excel($data){
		$this->db->insert_batch('qa_hcci_feedback_new', $data);
	}

	function hcco_insert_excel($data){
		$this->db->insert_batch('qa_hcco_feedback', $data);
	}

	function hcco_flex_insert_excel($data){
		$this->db->insert_batch('qa_hcco_feedback_new', $data);
	}

	function vfs_chat_insert_excel($data){
		$this->db->insert_batch('qa_vfs_chat_feedback', $data);
	}
	function vfs_call_insert_excel($data){
		$this->db->insert_batch('qa_vfs_call_feedback', $data);
	}
	function phs_voice2_excel_data($data){
		$this->db->insert_batch('qa_phs_voice_v2_feedback', $data);
	}
	function phs_email2_excel_data($data){
		$this->db->insert_batch('qa_phs_email_v2_feedback', $data);
	}
	function phs_chat2_excel_data($data){
		$this->db->insert_batch('qa_phs_chat_v2_feedback', $data);
	}
	function chekpoint_email_excel_data($data){
		$this->db->insert_batch('qa_checkpoint_email_feedback', $data);
	}
	function chekpoint_excel_data($data){
		$this->db->insert_batch('qa_checkpoint_feedback', $data);
	}
	function sycn_voice_inbound_data($data){
		$this->db->insert_batch('qa_sycn_feedback', $data);
	}
	function sycn_voice_outbound_data($data){
		$this->db->insert_batch('qa_sycn_outbound_feedback', $data);
	}
	
	function at_chat_data($data){
		$this->db->insert_batch('qa_awareness_chat_new_feedback', $data);
	}
	
	function at_email_data($data){
		$this->db->insert_batch('qa_awareness_email_new_feedback', $data);
	}
	function at_voice_data($data){
		$this->db->insert_batch('qa_awareness_phone_new_feedback', $data);
	}
	function stratus_data($data){
		$this->db->insert_batch('qa_stratus_feedback', $data);
	}
	function stratus_csr_data($data){
		$this->db->insert_batch('qa_stratus_csr_feedback', $data);
	} 
	function stratus_outbound_data($data){
		$this->db->insert_batch('qa_stratus_outbound_feedback', $data);
	}

	function stratus_call_tech_data($data){
		$this->db->insert_batch('qa_stratus_calltech_feedback', $data);
	}

	function stratus_monitoring_tech_data($data){
		$this->db->insert_batch('qa_stratus_monitoringtech_feedback', $data);
	}

	function biomet_call_data($data){
		$this->db->insert_batch('qa_biomet_call_feedback', $data);
	}

	function biomet_chat_data($data){
		$this->db->insert_batch('qa_biomet_chat_feedback', $data);
	}

	function biomet_email_data($data){
		$this->db->insert_batch('qa_biomet_email_feedback', $data);
	}

	function premium_data($data){
		$this->db->insert_batch('qa_premium_feedback', $data);
	}

	function premium_sq_data($data){
		$this->db->insert_batch('qa_premium_sq_feedback', $data);
	}
	
	function premium_mc_data($data){
		$this->db->insert_batch('qa_premium_mc_feedback', $data);
	}

	function premium_vbc_data($data){
		$this->db->insert_batch('qa_premium_vbc_feedback', $data);
	}

	function telaidsaob_data($data){
		$this->db->insert_batch('qa_telaidsaob_feedback', $data);
	}

	function ameriflex_data($data){
		$this->db->insert_batch('qa_ameriflex_feedback', $data);
	}

	function carparts_service_data($data){
		$this->db->insert_batch('qa_service_feedback', $data);
	}

	function sales_carpart_inbound2_data($data){
		$this->db->insert_batch('qa_sales_carpart_inbound2_feedback', $data);
	}

	function jurys_inn_data($data){
		$this->db->insert_batch('qa_jurys_inn_feedback', $data);
	}

	function jurys_inn_email_data($data){
		$this->db->insert_batch('qa_jurysinn_email_feedback', $data);
	}

	function od_voice_data($data){
		$this->db->insert_batch('qa_od_voice_feedback', $data);
	}

	function bioserenity_data($data){
		$this->db->insert_batch('qa_bioserenity_feedback', $data);
	}

	function rugdoctor_data($data){
		$this->db->insert_batch('qa_rugdoctor_feedback', $data);
	}

	function sentient_jet_data($data){
		$this->db->insert_batch('qa_sentient_jet_feedback', $data);
	}

	function craftjack_cebu_data($data){
		$this->db->insert_batch('qa_craftjack_cebu_feedback', $data);
	}

	function usda_data($data){
		$this->db->insert_batch('qa_us_da_feedback', $data);
	}
}
?>	