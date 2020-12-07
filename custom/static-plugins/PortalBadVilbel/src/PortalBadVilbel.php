<?php declare(strict_types=1);

namespace PortalBadVilbel;

use Shopware\Core\Framework\Plugin;
use Shopware\Storefront\Framework\ThemeInterface;

class PortalBadVilbel extends Plugin implements ThemeInterface
{
    public function getThemeConfigPath(): string
    {
        return 'theme.json';
    }
}
