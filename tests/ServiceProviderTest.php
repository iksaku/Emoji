<?php

declare(strict_types=1);

/*
 * This file is part of Cachet Emoji.
 *
 * (c) apilayer GmbH
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Tests\Emoji;

use CachetHQ\Emoji\EmojiExtension;
use CachetHQ\Emoji\EmojiParser;
use CachetHQ\Emoji\Repositories\RepositoryInterface;
use GrahamCampbell\TestBenchCore\ServiceProviderTrait;

/**
 * This is the service provider test class.
 *
 * @author Graham Campbell <graham@alt-three.com>
 * @author James Brooks <james@alt-three.com>
 */
class ServiceProviderTest extends AbstractTestCase
{
    use ServiceProviderTrait;

    public function testEmojiRepositoryIsInjectable()
    {
        $this->assertIsInjectable(RepositoryInterface::class);
    }

    public function testEmojiParserIsInjectable()
    {
        $this->assertIsInjectable(EmojiParser::class);
    }

    public function testEmojiExtensionIsInjectable()
    {
        $this->assertIsInjectable(EmojiExtension::class);
    }
}
