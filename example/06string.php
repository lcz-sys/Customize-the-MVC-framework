<?php

//heredoc

$str = 'hey';

$str1 = <<<END
	$str
	hello world!

	<script>
		alert('$str');
	</script>
END;


// nowdoc

$str2 = <<<'END'
	$str
	hello world!
	
END;

echo $str1;

echo $str2;