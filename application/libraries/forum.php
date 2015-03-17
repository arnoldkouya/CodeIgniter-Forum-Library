<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Forum {

    public function __construct()
    {
        
        $CI =& get_instance();

        $CI->load->helper('url');
        $CI->load->library('session');
        $CI->load->database();
    }
    public function forum_home()
    {
            $CI =& get_instance();
            $CI->read_all_subject();
    }

    function create_subject($data){
        $CI =& get_instance();
       $CI->db->insert('subject', $data); 
   }

   function read_all_subject(){
        $CI =& get_instance();
        $CI->db->select('*')->from('subject');
        $query=$CI->db->get();
        return $query->result_array();
   }

   function update_subject($id_subject,$data){
    $CI =& get_instance();
    $CI->db->where('id_subject',$id_subject);
    $CI->db->update('subject', $data); 
    
   }
   function delete_subject($id_subject){
    $CI =& get_instance();
    $CI->db->where('id_subject',$id_subject);
    $CI->db->delete('subject');                 
   }

   function get_subject($id_subject){
         $CI =& get_instance();
         $CI->db->select()->from('subject')->where('id_subject',$id_subject);
         $query=$CI->db->get();
        return $query->first_row('array');
    }
    function check_subject($subject_subject){
        $CI =& get_instance();
         $CI->db->select('subject_subject')->from('subject')->where('subject_subject',$subject_subject);
         $query=$CI->db->get();
        return $query->first_row('array');
    }




    function get_comment_by_topic($id_subject) {
        $CI =& get_instance();
        $CI->db->select()->from('comment_subject')->where('id_subject',$id_subject);
        //$CI->db->join('user','user.id_user=comment_subject.id_user'); You can decomment it if you want to see the comment by user
        $query=$CI->db->get();
        return $query->result_array();

    }
    function select_subject(){
        $CI =& get_instance();
        $CI->db->select('number_comment');
          $q = $CI->db->get('subject');
    
      if($q->num_rows()>0)
      {
          foreach ($q->result() as $lign)
          {
              $data[]=$lign;
          }
          
          return $data;
      }
    }

                
    function create_comment($data) {
        $CI =& get_instance();
       $CI->db->insert('comment_subject', $data); 
    }

    function read_all_comment(){
        $CI =& get_instance();
      $q = $CI->db->get('comment_subject');             
      if($q->num_rows()>0)
      {
          foreach ($q->result() as $lign)
          {
              $data[]=$lign;
          }                   
          return $data;
      } 
   }
   function update_comment($id_comment,$data){
    $CI =& get_instance();
    $CI->db->where('id_comment',$id_comment);
    $CI->db->update('comment_subject', $data);              
   }

   function update_number_comment($id_subject,$data){
    $CI =& get_instance();
    $CI->db->where('id_subject',$id_subject);
    $CI->db->update('comment_subject', $data);              
   }

   function delete_comment($id_comment){
    $CI =& get_instance();
    $CI->db->where('id_comment',$id_comment);
    $CI->db->delete('comment_subject');                 
   }

}

/* End of file Forum.php */