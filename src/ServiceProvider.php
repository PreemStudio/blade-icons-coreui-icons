<?php

declare(strict_types=1);

namespace PreemStudio\BladeIcons\CoreUIIcons;

use PreemStudio\BladeIcons\Facades\IconFamilyRegistry;
use PreemStudio\BladeIcons\IconFamily;
use PreemStudio\Jetpack\Package\AbstractServiceProvider;

final class ServiceProvider extends AbstractServiceProvider
{
    public function packageRegistered(): void
    {
        IconFamilyRegistry::push(
            IconFamily::fromDirectory('core-ui', __DIR__.'/../resources/svg'),
        );
    }
}
