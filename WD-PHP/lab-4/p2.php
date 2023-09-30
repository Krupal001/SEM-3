<?php
    function ChkPrime($n)
    {
        for($i=2;$i<=$n;$i++)
        {
            if($n%$i==0)
                return;
            else
                return 1;
        }
    }
    function ArrayDemo($ar)
    {
        $even=0;
        $odd=0;
        $prime=0;
        $flag=1;
        foreach($ar as $a)
        {
            if($a%2==0)
            {
                $even++;
            }
              else{
            $odd++;
        }
        if(ChkPrime($a))
            $prime++;
            
        }
        return array(
            "even"=>$even,
            "odd"=>$odd,
            "prime"=>$prime
        );
      
    }
    $arr=array(1,2,3,4,5,6,7,8,9,10);
    $result= ArrayDemo($arr);
    echo "even:=".$result['even']."<br>";
    echo "odd:=".$result['odd']."<br>";
    echo "prime:=".$result['prime'];
?>