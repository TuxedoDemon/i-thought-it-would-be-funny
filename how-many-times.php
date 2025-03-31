<?php
// if you've ever wondered...
$end = time() + 1;

for($i = 1; time() < $end; $i++){
    echo <<<END
        {$i}. \x70\x6F\x6F\x70<br>
        END;
}
// ... now you can know.
