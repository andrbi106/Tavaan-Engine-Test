# Tavaan Engine — Test

> **چارچوب تست** — موتور Test در فریمورک تَوان

## مشخصات

| فیلد | مقدار |
|---|---|
| شناسه | `tavaan.engine.test` |
| نام | `Test` |
| عنوان فارسی | چارچوب تست |
| نسخه | `0.1.0` |
| namespace | `Tavaan\Testing` |
| نوع | `engine` |

## خطاها (Exceptions)

- `Tavaan\Testing\Exceptions\AssertionFailedException`
- `Tavaan\Testing\Exceptions\TestIncompleteException`

## کلاس‌های اصلی

- `src/AssertionFailed.php`
- `src/Coverage/CoverageReporter.php`
- `src/Database/Faker.php`
- `src/Database/RefreshDatabase.php`
- `src/Factory.php`
- `src/Group.php`
- `src/Http/MakesHttpRequests.php`
- `src/Http/TestResponse.php`
- `src/Mock/Expectation.php`
- `src/Mock/Mock.php`
- `src/Mock/MockBuilder.php`
- `src/Mock/MockHandler.php`
- `src/Mock/MockProxy.php`
- `src/Mock/ProxyGenerator.php`
- `src/TestCase.php`
- `src/TestClassDescriptor.php`
- `src/TestCommand.php`
- `src/TestFailure.php`
- `src/TestMethodDescriptor.php`
- `src/TestResult.php`
- ... و 5 فایل دیگر

## Service Providerها

- `Tavaan\Testing\TestServiceProvider`

## دستورات CLI

- `test`

## پیکربندی

- فایل پیکربندی: `config/test.php`
- کلید: `test`

## نصب

```bash
git clone https://github.com/andrbi106/Tavaan-Engine-Test.git
```

این موتور بخشی از فریمورک تَوان است و معمولاً به‌صورت مستقیم نصب نمی‌شود،
بلکه توسط [Tavaan-Core](https://github.com/andrbi106/Tavaan-Core) مدیریت می‌شود.

## روابط با سایر مخازن

| مخزن | نقش |
|---|---|
| **`andrbi106/Tavaan-Engine-Test`** (این مخزن) | موتور Test |
| `andrbi106/Tavaan-Engine-Core` | ساختار پایه + درگاه ارتباط موتورها |
| `andrbi106/Tavaan-Core` | اسکلت اپلیکیشن + همهٔ موتورها |
| `Derogaramin/Tavaan-Framework` | فریمورک مادر (monorepo) |

## مجوز

MIT — هم‌راستا با فریمورک مادر تَوان.
