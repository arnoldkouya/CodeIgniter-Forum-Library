<?php
class Subject_model extends CI_Model {
    // table name
    private $tbl_subject= 'subject';
 
    function Subject_model(){
        parent::Model();
    }
    // get number of subjects in database
    function count_all(){
        return $this->db->count_all($this->tbl_subject);
    }
    // get subjects with paging
    function get_paged_list($limit = 10, $offset = 0){
        $this->db->order_by('id','asc');
        return $this->db->get($this->tbl_subject, $limit, $offset);
    }
    // get subject by id
    function get_by_id($id){
        $this->db->where('id', $id);
        return $this->db->get($this->tbl_subject);
    }
    // add new subject
    function save($subject){
        $this->db->insert($this->tbl_subject, $subject);
        return $this->db->insert_id();
    }
    // update subject by id
    function update($id, $subject){
        $this->db->where('id', $id);
        $this->db->update($this->tbl_subject, $subject);
    }
    // delete subject by id
    function delete($id){
        $this->db->where('id', $id);
        $this->db->delete($this->tbl_subject);
    }
}