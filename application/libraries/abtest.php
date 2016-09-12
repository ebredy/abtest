<?php if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

require_once('vendor/autoload.php');

class abtest
{
    private $ci;
    private $container;


    
    /*
     * usage:
     *                 $tests = array(
     *                               'price' => array(
     *                                                   '10'=>10
     *                                                  ,'20'=>10
     *                                                  ,'30'=>10
     *                                                  ,'40'=>10
     *                                                  ,'50'=>10
     *                                                  ,'60'=>10
     *                                                  ,'70'=>10
     *                                                  ,'80'=>10
     *                                                  ,'90'=>10
     *                            )
     *                            
     *               
     *           );
     *           $this->load->library('abtest',$tests);
     *           
     *            
     *                               $price= $this->abtest->getVariation('price')
     *                    
     * 
     * 
     * 
     * 
     */
    public function __construct($tests)
    {
        $this->ci = & get_instance();
        
        $seed = time() + rand(1, 1000000);
        $this->ci->session->set_userdata(array(
                                                'seed'=>$this->ci->session->userdata('seed')
                                                        ?$this->ci->session->userdata('seed')
                                                        :$seed
                ));
        $contArr = array();
        if($tests && is_array($tests)){
            
            foreach($tests as $testname => $testVariations){
                
                $contArr[] = new Namshi\AB\Test($testname, 
                                                $testVariations
                        
                        );
            }
            
            $this->container = new \Namshi\AB\Container($contArr, $this->ci->session->userdata('seed'));
        }
    }
    public function getAllTests(){
        
        return $this->container->getAll();
    }
    public function getTest($testname){
        
        return $this->container->get($testname);
    }
    public function getVariation($testname){
        
            return $this->container->get($testname)->getVariation();
    }
    public function getVariations($testname){
        
            return $this->container->get($testname)->getVariations();
    }
    
    public function hasRun($testname){
        
        return $this->container->get($testname)->hasRun();
    }
    
}
