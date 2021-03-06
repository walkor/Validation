--CREDITS--
Edson Lima <dddwebdeveloper@gmail.com>
Henrique Moody <henriquemoody@gmail.com>
--FILE--
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use Respect\Validation\Exceptions\ConsonantException;
use Respect\Validation\Validator as v;

try {
    v::allOf(v::stringType(), v::consonant())->check('Luke i\'m your father');
} catch (ConsonantException $e) {
    echo $e->getMessage();
}
?>
--EXPECT--
"Luke i'm your father" must contain only consonants
