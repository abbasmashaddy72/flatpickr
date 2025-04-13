<?php

namespace Coolsam\Flatpickr\Enums;

enum FlatpickrMode: string
{
    case RANGE = 'range';
    case SINGLE = 'single';
    case MULTIPLE = 'multiple';
    case TIME = 'time';
}
