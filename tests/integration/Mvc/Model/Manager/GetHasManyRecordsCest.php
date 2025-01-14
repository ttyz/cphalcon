<?php
declare(strict_types=1);

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Test\Integration\Mvc\Model\Manager;

use IntegrationTester;

/**
 * Class GetHasManyRecordsCest
 */
class GetHasManyRecordsCest
{
    /**
     * Tests Phalcon\Mvc\Model\Manager :: getHasManyRecords()
     *
     * @author Phalcon Team <team@phalcon.io>
     * @since  2018-11-13
     */
    public function mvcModelManagerGetHasManyRecords(IntegrationTester $I)
    {
        $I->wantToTest('Mvc\Model\Manager - getHasManyRecords()');
        $I->skipTest('Need implementation');
    }
}
