<?php

require __DIR__ . '/followHeader.php';

$users = getFollowers($pdo, $userId);

require __DIR__ . '/followList.php';

?>
