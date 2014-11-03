<?php

// Use in the "Post-Receive URLs" section of your GitHub repo.
echo shell_exec( 'cd /home/uprisedev/public_html/cb && git reset --hard HEAD && git pull' );

?>