
<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

   class Form_model extends  CI_Models 
   {  
      function __construct()  
      {  
         // Call the Model constructor  
         parent::__construct();  
      }  
      //we will use the select function  
      public function select()  
      {  
         //data is retrive from this query  
         $query = $this->db->get('reg_details');  
         return $query;  
      }  
   }  
?> 