<?php

// パスワードを記録したファイル場所
echo __FILE__;
// /Applications/MAMP/htdocs/php_test/MAINTE/TEST.PHP
echo '<br>';
// パスワード暗号化
echo(password_hash('password123',PASSWORD_BCRYPT));
// $2y$10$9LfjJlxjeyzWIOz3OEXtVuW7VKXIGe4FgX/EhHjNrmaQUCKqZj0Ce

