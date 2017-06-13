<?php
    $hash = password_hash("testingP@ssword", PASSWORD_DEFAULT);
    echo $hash."\n";
    
    if (password_verify('testingP@ssword', $hash)) {
        echo 'Password is valid!';
    } else {
        echo 'Invalid password.';
    }
?>
