<?php
require_once 'vendor/autoload.php'
namespace App;
$song = new \App\Song('Help', 'Beatles',180);

$songInfo = $song->write(new class implements \App\SongWriterInterface{
    public function __construc(private string $prefix = 'DISK 1')
    {

    }
    public function write(\App\Song $song):string
    {
        return $this->prefix.':'.$song->title.'by'.$song->artist.' '.$song->getDurationInMinutes() ;
    }
});

print $songInfo.PHP_EOL;