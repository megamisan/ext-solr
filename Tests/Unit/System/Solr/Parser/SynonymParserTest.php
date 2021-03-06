<?php
namespace ApacheSolrForTypo3\Solr\Test\System\Solr\Parser;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2015-2016 Timo Schmidt <timo.schmidt@dkd.de>
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

use ApacheSolrForTypo3\Solr\System\Solr\Parser\SynonymParser;
use ApacheSolrForTypo3\Solr\Tests\Unit\UnitTest;

/**
 * Testcase for StopWordParser
 *
 * @author Timo Hund <timo.hund@dkd.de>
 */
class SynonymParserTest extends UnitTest
{

    /**
     * @test
     */
    public function canParseSynonyms()
    {
        $parser = new SynonymParser();
        $synonyms = $parser->parseJson('foo',$this->getFixtureContentByName('synonym.json'));
        $this->assertSame(['bar'], $synonyms, 'Could not parser synonyms from synonyms response');
    }
}