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

namespace Phalcon\Test\Unit\Assets\Inline\Css;

use Phalcon\Assets\Inline\Css;
use UnitTester;

class GetContentCest
{
    /**
     * Tests Phalcon\Assets\Inline\Css :: getContent()
     *
     * @author Phalcon Team <team@phalcon.io>
     * @since  2018-11-13
     */
    public function assetsInlineCssGetContent(UnitTester $I)
    {
        $I->wantToTest('Assets\Inline\Css - getContent()');

        $content = 'p {color: #000099}';

        $asset = new Css($content);

        $I->assertEquals(
            $content,
            $asset->getContent()
        );
    }
}
