<?php

/**
 * SlickHeroElement
 *
 * @package SwiftDevLabs\SlickHeroElemental\Models
 * @author Kong Jin Jie <jinjie@swiftdev.sg>
 */

namespace SwiftDevLabs\SlickHeroElemental\Models;

use DNADesign\Elemental\Models\BaseElement;
use SwiftDevLabs\SlickHero\Extensions\SlickHeroBannerExtension;

class SlickHeroElement extends BaseElement
{
    private static $table_name = 'SlicHeroElement';

    private static $icon = 'font-icon-picture';

    private static $title = 'Slick Hero';

    private static $description = 'A hero element with slick';

    private static $singlular_name = 'Slick hero element';

    private static $plural_name = 'Slick hero elements';

    private static $inline_editable = false;

    private static $extensions = [
        SlickHeroBannerExtension::class,
    ];

    public function getType()
    {
        return _t(__CLASS__ . '.BlockType', 'Slick Hero');
    }
}
