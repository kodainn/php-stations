<?php

$config = new PhpCsFixer\Config();

return $config
->setRiskyAllowed(true)
->setRules([
'@PSR2' => true, // PSR2のコーディング規約を適用
'trailing_comma_in_multiline' => true,　// この一行を追加
]);