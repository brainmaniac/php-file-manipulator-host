<?php

namespace App\PSRManipulator;

use App\PSRManipulator\Traits\DelegatesAPICalls;
use App\PSRManipulator\Traits\HasIO;

class PHPFile //implements PHPFileInterface
{
    use DelegatesAPICalls;
    use HasIO;

    protected $resources = [
        'namespace',
        'uses',
        'className',
        'classExtends',
        'classImplements',
        'classUseTraits',
        'classConst',
        'classMethods',
        'classMethodNames',
    ];
}