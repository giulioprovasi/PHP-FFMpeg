<?php

namespace FFMpeg\FFProbe;

interface CodecTesterInterface
{
    /**
     * Tells if the given codec is supported by ffmpeg.
     *
     * @param string $name
     *
     * @return Boolean
     */
    public function has($name);
}
