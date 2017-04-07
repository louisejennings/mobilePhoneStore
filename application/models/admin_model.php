<?php
class admin_model extends CI_Model {
    public function __construct ()
    {
        parent::__construct();
    }
    function get_records()
    {
        $query= $this->db->get('product');
        return $query->result();
    }
    function add_record($data)
    {
        $this->db->insert('product',$data);
        return;
    }
    function update_record($id, $data)
    {
        $this->db->where('id' ,$id);
        $this->db->update('product',$data);
    }
    function delete_row($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('product');
    }
    function view($id)
    {
        $query = $this->db->get_where('product', array('id' => $id));
        return $query->row_array();
    }
}
