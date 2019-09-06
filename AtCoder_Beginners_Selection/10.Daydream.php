<?php
  
echo preg_match('/^(dreamerase|dreamer|eraser|dream|erase){1,}$/', trim(fgets(STDIN))) ? 'YES' : 'NO';
