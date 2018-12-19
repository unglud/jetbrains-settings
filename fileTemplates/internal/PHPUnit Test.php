<?php
declare(strict_types=1);
#parse("PHP File Header.php")

#if (${NAMESPACE})

namespace ${NAMESPACE};

#if (${NAMESPACE} && !${TESTED_NAMESPACE})
use ${TESTED_NAME};
#elseif (${TESTED_NAMESPACE} && ${NAMESPACE} != ${TESTED_NAMESPACE})
use ${TESTED_NAMESPACE}\\${TESTED_NAME};
#end
use PHPUnit\Framework\TestCase;

/**
 * Class ${NAME}
 *
 * @package ${NAMESPACE}
 */
#end
class ${NAME} extends TestCase
{
    public static function setUpBeforeClass()
    {
        
    }

    public function setUp()
    {
        
    }

    public function test()
    {
    
    }
}
