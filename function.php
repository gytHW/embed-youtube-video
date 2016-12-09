<?php 

public function change($content)
{
    $resultContent = preg_replace('/\<a\shref="http:\/\/www.youtube.com\/watch\?v=([\s\S]*?)"\starget="_blank">[\s\S]*?<\/a>/i','<iframe width="560" height="315" src="https://www.youtube.com/embed/${1}" frameborder="0" allowfullscreen></iframe>' , $content);
    return $resultContent;
}
