<?php

namespace Mhor\MediaInfoBundle\Service;

use Mhor\MediaInfo\Container\MediaInfoContainer;
use Mhor\MediaInfo\MediaInfo;

class MediaInfoService
{
    /**
     * @var MediaInfo
     */
    private $mediaInfo;

    public function __construct()
    {
        $this->mediaInfo = new MediaInfo();
    }

    /**
     * @param string $filePath
     * @return MediaInfoContainer
     */
    public function getInfo($filePath)
    {
        return $this->mediaInfo->getInfo($filePath);
    }
} 