

<?php

    require 'vendor/autoload.php';
    use Carbon\Carbon;

    $Jakarta_now = Carbon::now('Asia/Jakarta');

    echo "Sekarang di Jakarta : $Jakarta_now ";

?>