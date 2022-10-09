<style>
    .time{
        position: absolute;
        color:white;
        font-size: 12pt;
        left: 13%;
        margin-top: 20px;
    }
</style>
<?php
$data=date('M  g:i:s A');
$html = "<h1 class='time'>$data</h1>";


echo ($html);
