
<?php
class Export_csv_model extends CI_Model
{
 function fetch_data()
 {
  $this->db->select("name, description");
  $this->db->from('projects');
  return $this->db->get();
 }
}

?>


