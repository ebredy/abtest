<h1>CodeIgniter Namshi/AB Test Library Wrapper</h1>
<p>This is a CodeIgniter Wrapper for Namshi/AB testing.  You can go to <a href="https://github.com/namshi/AB" >Namshi AB Test</a> for documenttation of other functionalities.
</p>
<h2>Installation</h2>
<p>
Installing this librarry requires that you update your composer.json as part of the require as "namshi/ab": "1.0.*" and run the composer update command. 
</p>
<h2>To Do</h2>
<ul>
<li>Allow the ability to pass options field</li>
<li>Allow the ability to retrieve seed</li>
<li>Allow the ability to clear seed value saved in session</li>
</ul>

<h2>Usage</2>

    
```php

$tests = array(
               'price' => array(
                                      '10'=>10 // runs 10% of the time
                                      ,'20'=>10
                                      ,'30'=>10
                                      ,'40'=>10
                                      ,'50'=>10
                                      ,'60'=>10
                                      ,'70'=>10
                                      ,'80'=>10
                                      ,'90'=>20 //runs 20% of the time
               ),
               'headliner' => array( 
                                        'Buy 2 and get 1 Free'=>33 //runs 33% of the time
                                        ,'Get 33% Off your second or more purchases'=>34 //runs 34% of the time
                                        ,'Get Half Off!'=>33
                                )
   
);

$this->load->library('abtest',$tests);

$price= $this->abtest->getVariation('price');

$headliner = $this->abtest->getVariation('headliner');
                        
     
     
     
  
```


