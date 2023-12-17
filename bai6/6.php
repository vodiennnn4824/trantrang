<head>
      <title> Find min/max of Strings </title>
   </head>
   <body>
   
       <?php
       $my_array = array('EHC', 'HackYourLimits', 'Training');
        $my_result = array_map('strlen', $my_array);  
        echo "minLength =  " . min($my_result) .  
        ". <br>maxLength = " . max($my_result).'.';
       ?>
       

