<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class AccountModel extends Model
{
    protected $table = 'accounts'; // login table

    // 🔹 Insert new account
   public function insert_user($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    public function get_by_username($username)
    {
        return $this->db->table($this->table)
                        ->where('username', $username)
                        ->get();


    }
}
?>
