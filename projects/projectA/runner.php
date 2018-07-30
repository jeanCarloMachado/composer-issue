<?php

require __DIR__.'/vendor/autoload.php';

#works fine
new \FirstNamespace\First;
#works fine
new \SecondNamespace\Second;
#THIS  do NOT work
new \SharedNamespace\Shared;
