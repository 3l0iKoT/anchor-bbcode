<?php

namespace AngryCat\AnchorBbcode;

use Flarum\Extend;
use s9e\TextFormatter\Configurator;

return [
    (new Extend\Formatter)
        ->configure(function (Configurator $config) {
            $config->BBCodes->addCustom(
                '[anchor={TEXT}]',
                '<span id="{TEXT}"></span>',
                ['contentAttributes' => ['TEXT']]
            );

            $config->BBCodes->addCustom(
                '[link={TEXT1}]{TEXT2}[/link]',
                '<a href="#{TEXT1}">{TEXT2}</a>',
                ['contentAttributes' => ['TEXT1', 'TEXT2']]
            );
        })
];
