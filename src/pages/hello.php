<?php

// example.com/src/pages/hello.php

$input = $request->get('name', 'World');
$response->setContent(sprintf('Hello %s', htmlspecialchars($input, ENT_QUOTES, 'UTF-8')));
