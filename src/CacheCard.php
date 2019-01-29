<?php

namespace KarimQaderi\ZoroasterCacheCard;

use Illuminate\Support\Facades\View;
use KarimQaderi\Zoroaster\Card;

class CacheCard extends Card
{


    /**
     * show Card
     *
     * @return view | string
     */
    function render($builder , $resource = null , $ResourceRequest = null)
    {
       return view('ZoroasterCacheCard::card')->with([
           'defaultDriver' => ucwords(config('cache.default')),
           'cacheSize' => CacheHelpers::getFileCacheSize(),
           'CountFile' => CacheHelpers::$getFileCacheCount-1 ,
           'CountFile' => CacheHelpers::$getFileCacheFolder ,
       ]);
    }
}
