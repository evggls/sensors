<?php

function getData(array $sensors): array
{
    foreach ($sensors as $name => $address) {
        $page = file_get_contents('http://' . $address);

        $dom = new DOMDocument(1, 'UTF-8');

        libxml_use_internal_errors(true);
        $dom->loadHTML(utf8_encode($page));
        libxml_use_internal_errors(false);

        $xpath = new DOMXPath($dom);
        $temp = $xpath->query("//span[@class = 't7']");

        $temperatures[] = [
            'name' => $name,
            'temp' => substr($temp->item(0)->nodeValue, 0, 4),
        ];
    }
    return $temperatures;
}

function setStyle(float $value, float $upperLimit, float $lowerLimit): string
{
    if ($value >= $upperLimit){
        return 'tooHot';
    }elseif ($value <= $lowerLimit) {
        return 'tooCold';
    }
    return 'normal';
}