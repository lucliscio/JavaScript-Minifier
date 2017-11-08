<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'lib/Minifier.php';
require_once 'config.php';



$js = "";
foreach($cfg->infiles as $file) {
    echo "Minify: ".$file."\n";
    $js .= \JShrink\Minifier::minify(file_get_contents("in/".$file));
}

echo "\n\nSaving: ".$cfg->outfile."\n";
file_put_contents("out/".$cfg->outfile, $js);
