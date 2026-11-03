<?php

declare(strict_types=1);

/*|--------------------------------------------------------------------------
 | Test Engine Configuration
 |--------------------------------------------------------------------------
 |
 | پیکربندی موتور test — همهٔ کلیدهای مستندشده در `docs/03-engines/test.md` بخش «پیکربندی».
 |
 |@see https://github.com/Derogaramin/Tavaan-Doc/blob/main/docs/03-engines/test.md
 */

return [
    /*| پیش‌فرض موتور (driver/store یا حالت فعال) */
    'default' => env('TEST_DEFAULT', 'default'),

    /*| کلید کش (در صورت استفاده) */
    'prefix' => env('TEST_PREFIX', 'test:'),

    /*| تنظیمات لاگ */
    'log' => [
        'channel' => env('TEST_LOG_CHANNEL', 'test'),
    ],

    /*| سایر کلیدها (طبق مستندات) */
    'options' => [
        // TODO: کلیدهای اضافی طبق سند §۶ (پیکربندی)
    ],
];