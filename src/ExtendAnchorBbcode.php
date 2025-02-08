<?php

namespace AngryCat\AnchorBbcode;

use Flarum\Extend;
use s9e\TextFormatter\Configurator;

return [
    (new Extend\Formatter)
        ->configure(function (Configurator $config) {
            // Добавляем кастомный BBCode тег для якоря
            $config->BBCodes->addCustom(
                '[anchor={TEXT}]',
                '<span id="{TEXT}"></span>',
                ['parseContent' => false]
            );

            // Добавляем кастомный BBCode тег для ссылки на якорь
            $config->BBCodes->addCustom(
                '[link={TEXT1}]{TEXT2}[/link]',
                '<a href="#{TEXT1}">{TEXT2}</a>',
                ['parseContent' => false]
            );
        })
];