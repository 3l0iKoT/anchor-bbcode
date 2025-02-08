<?php

namespace AngryCat\AnchorBbcode;

use Flarum\Extend;
use s9e\TextFormatter\Configurator;

return [
    (new Extend\Formatter)
        ->configure(function (Configurator $config) {
            $configurator = new Configurator();
            $configurator->BBCodes->addCustom(
                '[anchor={IDENTIFIER}]',
                '<span id="{IDENTIFIER}"></span>'
            )->filterChain->append('strtolower')->append('urlencode');
            
            $configurator->BBCodes->addCustom(
                '[link={IDENTIFIER}]{TEXT}[/link]',
                '<a href="#{IDENTIFIER}">{TEXT}</a>'
            );
        })
];