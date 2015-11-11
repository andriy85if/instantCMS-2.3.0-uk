<?php

    define('LANG_PAGE_TITLE',               'Встановлення InstantCMS');
    define('LANG_INSTALLATION_WIZARD',      'Майстер встановлення');
    define('LANG_NEXT',                     'Дальше &rarr;');

    define('LANG_MANUAL',                   '<a href="http://docs.instantcms.ru/manual/install" target="_blank">Інструкція по встановленню</a>');

    define('LANG_LANGUAGE_SELECT_RU',       'Пожалуйста, выберите язык');
    define('LANG_LANGUAGE_SELECT_EN',       'Please, select a language');
    define('LANG_LANGUAGE_SELECT_UK',       'Будь-ласка, оберіть мову');

    define('LANG_STEP_LANGUAGE',            'Вибір мови');
    define('LANG_STEP_START',               'Вступ');
    define('LANG_STEP_LICENSE',             'Ліцензія');
    define('LANG_STEP_PHP_CHECK',           'Перевірка PHP');
    define('LANG_STEP_PATHS',               'Зазначення шляхів');
    define('LANG_STEP_DATABASE',            'База даних');
    define('LANG_STEP_SITE',                'Сайт');
    define('LANG_STEP_ADMIN',               'Адміністратор');
    define('LANG_STEP_CONFIG',              'Конфігурація');
    define('LANG_STEP_CRON',                'Планувальник');
    define('LANG_STEP_FINISH',              'Завершення');

    define('LANG_STEP_START_1',             'Майстер встановлення InstantCMS перевірить чи задовольняє ваш сервер системні вимоги.');
    define('LANG_STEP_START_2',             'В процесі роботи майстер поставить кілька запитань, які необхідні для правильного налаштування та встановлення InstantCMS.');
    define('LANG_STEP_START_3',             'Перед початком встановлення необхідно мати базу даних MySQL в кодуванні <b>utf8_general_ci</b>');

    define('LANG_LICENSE_AGREE',            'Я згоден з вимогами ліцензії');
    define('LANG_LICENSE_ERROR',            'Ви повинні погодитися з умовами ліцензії');
    define('LANG_LICENSE_NOTE',             'InstantCMS поширюється по ліцензії <a href="http://www.gnu.org/licenses/gpl-2.0.html" target="_blank">GNU/GPL</a> версії 2.');
    define('LANG_LICENSE_ORIGINAL',         'Оригінал');
    define('LANG_LICENSE_TRANSLATION',      'Переклад');

    define('LANG_PHP_VERSION',              'Версія інтерпретатора');
    define('LANG_PHP_VERSION_REQ',          'Необхідний PHP 5.3 або вище');
    define('LANG_PHP_VERSION_DESC',         'Встановлена версія');
	define('LANG_PHP_VARIABLES',            'Опції налаштування PHP');
	define('LANG_PHP_VARIABLES_HINT',       'Сірим кольором вказано значення, яке необхідне');
	define('LANG_PHP_VARIABLES_ON',			'Вкл');
	define('LANG_PHP_VARIABLES_OFF',		'Викл');
    define('LANG_PHP_EXTENSIONS',           'Необхідні розширення');
    define('LANG_PHP_EXTENSIONS_REQ',       'Дані розширення необхідні для роботи InstantCMS');
    define('LANG_PHP_EXTENSIONS_EXTRA',     'Рекомендовані розширення');
    define('LANG_PHP_EXTENSIONS_EXTRA_REQ', 'Дані розширення не являються необхідними, але без них<br>може бути не доступною частина функціоналу по оновленню та кешуванню');
    define('LANG_PHP_EXT_INSTALLED',        'Встановлено');
    define('LANG_PHP_EXT_NOT_INSTALLED',    'Не знайдено');
    define('LANG_PHP_CHECK_ERROR',          'Ви не зможете продовжити встановлення до тих пір, поки умови відзначені червоним не будуть виконані.');
    define('LANG_PHP_CHECK_ERROR_HINT',     'Зверніться до служби підтримки вашого хостингу з проханням забезпечити необхідні умови. Після того перезапустіть встановлення.');

    define('LANG_PATHS_ROOT_INFO',          'Всі шляхи вказуються відносно:<br/><span class="root-path">%s</span>');
    define('LANG_PATHS_ROOT_CHANGE',        'змінити');
    define('LANG_PATHS_CHANGE_INFO',        'Після встановлення шляхи можна буде змінити відредагувавши файл конфігурації.<br/>Не забудьте зробити це при перенесенні сайту з локального серверу на хостинг!');
    define('LANG_PATHS_HTACCESS_INFO',      'Ви встановлюєте InstantCMS не в кореневу папку сайту, тому необхідно змінити файл .htaccess. <a href="http://docs.instantcms.ru/manual/install?&#указание-путей" target="_blank">Інструкція</a>');
    define('LANG_PATHS_MUST_WRITABLE',      'Повинна бути доступною для запису');
    define('LANG_PATHS_NOT_WRITABLE',       'не доступна для запису!');
    define('LANG_PATHS_WRITABLE_HINT',      'Виставте правильні права на цю папку');

    define('LANG_PATHS_ROOT',               'Корінь');
    define('LANG_PATHS_ROOT_PATH',          'Коренева папка');
    define('LANG_PATHS_ROOT_HOST',          'Кореневий URL');
    define('LANG_PATHS_UPLOAD',             'Завантаження');
    define('LANG_PATHS_UPLOAD_PATH',        'Папка для завантажень');
    define('LANG_PATHS_UPLOAD_HOST',        'URL для завантажень');
    define('LANG_PATHS_CACHE',              'Кеш');
    define('LANG_PATHS_CACHE_PATH',         'Папка для кешу');

    define('LANG_DATABASE_INFO',            'Вкажіть реквізити для підключення до бази даних MySQL');
    define('LANG_DATABASE_CHARSET_INFO',    'База даних повинна бути в кодуванні <b>utf8_general_ci</b>');
    define('LANG_DATABASE_HOST',            'Сервер MySQL');
    define('LANG_DATABASE_USER',            'Користувач');
    define('LANG_DATABASE_PASS',            'Пароль');
    define('LANG_DATABASE_BASE',            'База даних');
    define('LANG_DATABASE_PREFIX',          'Префікс таблиць');
    define('LANG_DATABASE_USERS_TABLE',     'Таблиця з користувачами');
    define('LANG_DATABASE_USERS_TABLE_NEW', 'Створити нову');
    define('LANG_DATABASE_USERS_TABLE_OLD', 'Використовувати існуючу');

    define('LANG_DATABASE_CONNECT_ERROR',   "Помилка підключення MySQL:\n\n%s");
    define('LANG_DATABASE_BASE_ERROR',      "Помилка імпорту бази даних\nПеревірте правильність реквізитів");

    define('LANG_SITE_SITENAME',            "Назва сайту");
    define('LANG_SITE_HOMETITLE',           "Заголовок головної сторінки");
    define('LANG_SITE_METAKEYS',            "Ключові слова");
    define('LANG_SITE_METADESC',            "Опис сайту");    
    
    define('LANG_SITE_SITENAME_ERROR',      "Потрібно вказати назву сайту");
    
    define('LANG_ADMIN_EXTERNAL',           'Реквізити адміністратора будуть взяті із таблиці <b>%s</b>');
    define('LANG_ADMIN_INFO',               'Для створення головного адміністратора необхідно вказати його реквізити');
    define('LANG_ADMIN_NAME',               'Ім’я адміністратора');
    define('LANG_ADMIN_EMAIL',              'E-mail адміністратора');
    define('LANG_ADMIN_PASS',               'Пароль адміністратора');
    define('LANG_ADMIN_PASS2',              'Пароль повторно');

    define('LANG_ADMIN_ERROR',              'Заповніть всі поля');
    define('LANG_ADMIN_EMAIL_ERROR',        'Вказано некоректну адресу e-mail');
    define('LANG_ADMIN_PASS_ERROR',         'Паролі не співпадають');

    define('LANG_CONFIG_INFO',              'Зараз буде створено файл конфігурації сайту.');
    define('LANG_CONFIG_PATH',              'Місце розташування файлу:');
    define('LANG_CONFIG_MUST_WRITABLE',     'Вказана папка повинна бути доступною для запису.');
    define('LANG_CONFIG_AFTER',             'Після створення файла конфігурації необхідно буде зробити цю папку (та файли, які в ній знаходяться) недоступними для запису.');
    define('LANG_CONFIG_NOT_WRITABLE',      'Папка конфігурації не доступна для запису');

    define('LANG_CRON_1',                   'Для повноцінної роботи InstantCMS необхідно створити задачу для планувальника CRON на сервері.');
    define('LANG_CRON_2',                   'Це дозволить системі виконувати періодичні системні завдання в фоновому режимі.');
    define('LANG_CRON_FILE',                'Файл для запуску: <b>%s</b>');
    define('LANG_CRON_INT',                 'Інтервал: <b>5 хвилин</b>');
    define('LANG_CRON_EXAMPLE',             'Переважно, команда, котру необхідно додати до планувальника, виглядає так:');
    define('LANG_CRON_SUPPORT_1',           'Детальну інформацію про налаштування CRON можна знайти в розділі FAQ на сайті вашого хостинг-провайдера.');
    define('LANG_CRON_SUPPORT_2',           'При труднощах зверніться в службу технічної підтримки хостингу, скопіювавши весь текст вище.');

    define('LANG_FINISH_1',                 'Встановлення InstantCMS завершено.');
    define('LANG_FINISH_2',                 'Перед тим, як продовжити, видаліть папку <b>install</b> в корені сайту.');

    define('LANG_FINISH_TO_SITE',           'Перейти на сайт');

    define('LANG_CFG_OFF_REASON',           'Йдуть технічні роботи');
    define('LANG_CFG_SITENAME',             'InstantCMS 2.0');
    define('LANG_CFG_HOMETITLE',            'InstantCMS 2.0');
    define('LANG_CFG_DATE_FORMAT',          'd.m.Y');
    define('LANG_CFG_DATE_FORMAT_JS',       'dd.mm.yy');
    define('LANG_CFG_TIME_ZONE',            'Europe/Moscow');
    define('LANG_CFG_METAKEYS',             'ключові, слова, сайту');
    define('LANG_CFG_METADESC',             'Опис сайту');
