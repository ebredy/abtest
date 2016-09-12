<h1>CodeIgniter Namshi/AB Test Library Wrapper</h1>
<p>This is a CodeIgniter Wrapper for Namshi/AB testing.  You can go to <a href="https://github.com/namshi/AB" >Namshi AB Test</a> for documenttation of other functionalities.
</p>
<h2>Installation</h2>
<p>
Installing this librarry requires that you update your composer.json as part of the require as "namshi/ab": "1.0.*" and run the composer update command. 
</p>
<h2>Usage</2>
<p>
    
```<?php
                     $tests = array(
                                  'price' => array(
                                                       '10'=>10
                                                      ,'20'=>10
                                                      ,'30'=>10
                                                      ,'40'=>10
                                                      ,'50'=>10
                                                       ,'60'=>10
                                                       ,'70'=>10
                                                       ,'80'=>10
                                                       ,'90'=>10
                               )
                                
                   
               );
               $this->load->library('abtest',$tests);
               
                
                                   $price= $this->abtest->getVariation('price')
                        
     
     
     
 ?>    
```
</p>
