<?php

/**
 * Unit tests for Pazpar2 backend.
 *
 * PHP version 5
 *
 * Copyright (C) Villanova University 2010.
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License version 2,
 * as published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 * @category VuFind2
 * @package  Search
 * @author   David Maus <maus@hab.de>
 * @license  http://opensource.org/licenses/gpl-2.0.php GNU General Public License
 * @link     http://vufind.org
 */

namespace VuFindTest\Backend\Pazpar2;

use VuFindSearch\Backend\Pazpar2\Backend;
use PHPUnit_Framework_TestCase;

/**
 * Unit tests for Pazpar2 backend.
 *
 * @category VuFind2
 * @package  Search
 * @author   David Maus <maus@hab.de>
 * @license  http://opensource.org/licenses/gpl-2.0.php GNU General Public License
 * @link     http://vufind.org
 */
class BackendTest extends PHPUnit_Framework_TestCase
{
    /**
     * Test that getConnector works.
     *
     * @return void
     */
    public function testGetConnector()
    {
        $connector = $this->getMock(
            'VuFindSearch\Backend\Pazpar2\Connector', array(),
            array('http://fake', $this->getMock('Zend\Http\Client'))
        );
        $back = new Backend(
            $connector,
            $this->getMock('VuFindSearch\Response\RecordCollectionFactoryInterface')
        );
        $this->assertEquals($connector, $back->getConnector());
    }
}