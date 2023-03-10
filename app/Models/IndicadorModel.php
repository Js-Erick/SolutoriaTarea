<?php 
  
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
   
class IndicadorModel extends Model
{
    protected $table = 'Indicadores';
   
    protected $allowedFields = ['nombreIndicador','codigoIndicador','unidadMedidaIndicador','valorIndicador','fechaIndicador','tiempoIndicador','origenIndicador'];
      
    public function __construct() {
        parent::__construct();
        //$this->load->database();
        $db = \Config\Database::connect();
        $builder = $db->table('indicadores');
    }
      
    public function insert_data($data) {
        if($this->db->table($this->table)->insert($data))
        {
            return $this->db->insertID();
        }
        else
        {
            return false;
        }
    }
}
?>