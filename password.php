<?$a=$b='';foreach(str_split(strtolower($argv[1]))as$c){if($c==' ')$c='_';if(preg_match("/[0-9]/",$c))$a.=$c;else$b.=(rand(0,1)?$c:strtoupper($c));}echo$b.$a;