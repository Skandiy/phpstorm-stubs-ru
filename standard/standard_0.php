<?php

// Start of standard v.5.3.2-0.dotdeb.1

use JetBrains\PhpStorm\Deprecated;
use JetBrains\PhpStorm\ExpectedValues;
use JetBrains\PhpStorm\Internal\LanguageLevelTypeAware;
use JetBrains\PhpStorm\Internal\PhpStormStubsElementAvailable;
use JetBrains\PhpStorm\Internal\TentativeType;
use JetBrains\PhpStorm\Pure;

class __PHP_Incomplete_Class
{
    /**
     * @var string
     */
    public $__PHP_Incomplete_Class_Name;
}

class php_user_filter
{
    #[LanguageLevelTypeAware(['8.1' => 'string'], default: '')]
    public $filtername;

    #[LanguageLevelTypeAware(['8.1' => 'mixed'], default: '')]
    public $params;

    public $stream;

    /**
     * @link https://php.net/manual/ru/php-user-filter.filter.php
     * @param resource $in <p> ресурс, указывающий на bucket brigade, которая содержит один или несколько объектов bucket содержащих фильтруемые данные.</p>
     * @param resource $out <p> ресурс, указывающий на другой объект bucket brigade, в который будут помещаться модифицированные бакеты.</p>
     * @param int &$consumed <p> который должен <i>всегда </i> передаваться по ссылке, должен увеличиваться на размер данных, которые фильтр читает и изменяет. В большинстве случаев это значит, что Вы сами будете увеличивать значение consumed на <i>$bucket->datalen</i> для каждого <i>$bucket</i>.</p>
     * @param bool $closing <p> Если поток закрывается (следовательно, это последний фильтр в цепочке), аргумент closing примет значение <b>TRUE</b>
     * @return int <p>
     * Метод <b>filter()</b> должен возвращать одно из трёх значений.
     * </p><table>
     *
     * <thead>
     * <tr>
     * <th>Возвращаемое значение</th>
     * <th>Описание</th>
     * </tr>
     *
     * </thead>
     *
     * <tbody class="tbody">
     * <tr>
     * <td><b>PSFS_PASS_ON</b></td>
     * <td>
     * Фильтр отработал успешно, данные доступны через аргумент
     * <code class="parameter">out</code> <em>bucket brigade</em>.
     * </td>
     * </tr>
     *
     * <tr>
     * <td><b>PSFS_FEED_ME</b></td>
     * <td>
     * Фильтр отработал успешно, однако доступных для вывода данных нет.
     * Требуются ещё данные из потока или предыдущего фильтра.
     * </td>
     * </tr>
     *
     * <tr>
     * <td><b>PSFS_ERR_FATAL</b> (default)</td>
     * <td>
     * Фильтр вызвал необрабатываемую ошибку и не может продолжить выполнение.
     * </td>
     * </tr>
     */
    #[TentativeType]
    public function filter(
        $in,
        $out,
        &$consumed,
        #[LanguageLevelTypeAware(['8.0' => 'bool'], default: '')] $closing
    ): int {}

    /**
     * @link https://php.net/manual/ru/php-user-filter.oncreate.php
     * @return bool
     */
    #[TentativeType]
    public function onCreate(): bool {}

    /**
     * @link https://php.net/manual/ru/php-user-filter.onclose.php
     */
    #[TentativeType]
    public function onClose(): void {}
}

/**
 * Instances of Directory are created by calling the dir() function, not by the new operator.
 */
class Directory
{
    /**
     * @var string Каталог, который был открыт.
     */
    #[LanguageLevelTypeAware(['8.1' => 'string'], default: '')]
    public $path;

    /**
     * @var resource Может использоваться с другими функциями каталога, такими как {@see readdir()}, {@see rewinddir()} и {@see closedir()}.
     */
    #[LanguageLevelTypeAware(['8.1' => 'mixed'], default: '')]
    public $handle;

    /**
     * Закрывает дескриптор каталога
     * То же, что и closedir(), только dir_handle по умолчанию имеет значение $this.
     * @param resource $dir_handle [optional]
     * @link https://secure.php.net/manual/ru/directory.close.php
     */
    #[TentativeType]
    public function close(#[PhpStormStubsElementAvailable(from: '5.3', to: '7.4')] $dir_handle = null): void {}

    /**
     * Перемещает дескриптор каталога в начало каталога
     * То же, что и rewinddir(), только dir_handle по умолчанию равен $this.
     * @param resource $dir_handle [optional]
     * @link https://secure.php.net/manual/ru/directory.rewind.php
     */
    #[TentativeType]
    public function rewind(#[PhpStormStubsElementAvailable(from: '5.3', to: '7.4')] $dir_handle = null): void {}

    /**
     * Получает элемент из дескриптора каталога
     * То же, что и readdir(), только dir_handle по умолчанию имеет значение $this.
     * @param resource $dir_handle [optional]
     * @return string|false
     * @link https://secure.php.net/manual/ru/directory.read.php
     */
    #[TentativeType]
    public function read(#[PhpStormStubsElementAvailable(from: '5.3', to: '7.4')] $dir_handle = null): string|false {}
}

/**
 * Возвращает значение константы
 * @link https://php.net/manual/ru/function.constant.php
 * @param string $name <p>
 * Имя константы.
 * </p>
 * @return mixed Возвращает значение константы, или null, если константа не определена.
 */
#[Pure]
function constant(string $name): mixed {}

/**
 * Преобразует бинарные данные в шестнадцатеричное представление
 * @link https://php.net/manual/ru/function.bin2hex.php
 * @param string $string <p>
 * Строка.
 * </p>
 * @return string Возвращает шестнадцатеричное представление указанной строки.
 */
#[Pure]
function bin2hex(string $string): string {}

/**
 * Задержка выполнения
 * @link https://php.net/manual/ru/function.sleep.php
 * @param int $seconds <p>
 * Время остановки в секундах.
 * </p>
 * @return int|false Возвращает 0 в случае успешного выполнения или false в случае возникновения ошибки.
 * <p>
 * Если вызов был прерван сигналом, функция sleep() возвратит значение, не равное нулю. В Windows это значение всегда будет равно 192
 * (значение константы Windows API WAIT_IO_COMPLETION). На других платформах возвращаемом значением будет количество секунд, оставшихся до задержки.
 * </p>
 */
#[LanguageLevelTypeAware(["8.0" => "int"], default: "int|false")]
function sleep(int $seconds) {}

/**
 * Задержка выполнения в микросекундах
 * @link https://php.net/manual/ru/function.usleep.php
 * @param int $microseconds <p>
 * Время откладываемого исполнения в микросекундах. Микросекунда - это одна миллионная секунды.
 * </p>
 * @return void
 */
function usleep(int $microseconds): void {}

/**
 * Задержка на заданное число секунд и наносекунд
 * @link https://php.net/manual/ru/function.time-nanosleep.php
 * @param int $seconds <p>
 * Должно быть целым положительным числом.
 * </p>
 * @param int $nanoseconds <p>
 * Должно быть целым положительным числом, меньшим одного миллиарда.
 * </p>
 * @return bool|array Возвращает true в случае успешного выполнения или false в случае возникновения ошибки.
 * <p>
 * Если отложенное исполнение было прервано сигналом, то возвращается ассоциативный массив со следующими компонентами:
 * seconds - число оставшихся секунд
 * nanoseconds - число оставшихся наносекунд
 * </p>
 */
function time_nanosleep(int $seconds, int $nanoseconds): array|bool {}

/**
 * Откладывает исполнение скрипта до заданного времени
 * @link https://php.net/manual/ru/function.time-sleep-until.php
 * @param float $timestamp <p>
 * Временная метка продолжения исполнения скрипта.
 * </p>
 * @return bool Возвращает true в случае успешного выполнения или false в случае возникновения ошибки.
 */
function time_sleep_until(float $timestamp): bool {}

/**
 * Разбирает строку даты/времени, сгенерированную функцией <function>strftime</function>
 * @link https://php.net/manual/ru/function.strptime.php
 * @param string $timestamp <p>
 * Строка для разбора (например, строковый результат выполнения функции strftime)
 * </p>
 * @param string $format <p>
 * Формат строки timestamp (например, формат, используемый в функции strftime).
 * </p>
 * <p>
 * Следует обратить внимание на тот факт, что не все возможности форматирования используемые в strftime() будут обрабатываться в strptime();
 * набор поддерживаемых символов форматирования зависит от ОС и используемой С-библиотеки.
 * </p>
 * <p>
 * За дополнительной информацией о возможностях форматирования обращайтесь на страницу описания функции strftime().
 * </p>
 * @return array|false Возвращает массив или false в случае возникновения ошибки.
 * <p>
 * <table>
 * Список элементов возвращаемого массива
 * <tr valign="top">
 * <td>параметры</td>
 * <td>Описание</td>
 * </tr>
 * <tr valign="top">
 * <td>"tm_sec"</td>
 * <td>Секунды после минут (0-61)</td>
 * </tr>
 * <tr valign="top">
 * <td>"tm_min"</td>
 * <td>Минуты после часов (0-59)</td>
 * </tr>
 * <tr valign="top">
 * <td>"tm_hour"</td>
 * <td>Часы после полуночи (0-23)</td>
 * </tr>
 * <tr valign="top">
 * <td>"tm_mday"</td>
 * <td>День месяца (1-31)</td>
 * </tr>
 * <tr valign="top">
 * <td>"tm_mon"</td>
 * <td>Месяцы после января (0-11)</td>
 * </tr>
 * <tr valign="top">
 * <td>"tm_year"</td>
 * <td>Годы после 1900</td>
 * </tr>
 * <tr valign="top">
 * <td>"tm_wday"</td>
 * <td>Дни после воскресенья (0-6)</td>
 * </tr>
 * <tr valign="top">
 * <td>"tm_yday"</td>
 * <td>Дни после 1-го января (0-365)</td>
 * </tr>
 * <tr valign="top">
 * <td>"unparsed"</td>
 * <td>Часть timestamp, которую не удалось распознать в соответствии с format</td>
 * </tr>
 * </table>
 * </p>
 * @deprecated 8.1
 */
#[Pure]
#[Deprecated(since: '8.1')]
function strptime(string $timestamp, string $format): array|false {}

/**
 * Сброс системного буфера вывода
 * @link https://php.net/manual/ru/function.flush.php
 * @return void
 */
function flush(): void {}

/**
 * Переносит строку по указанному количеству символов
 * @link https://php.net/manual/ru/function.wordwrap.php
 * @param string $string <p>
 * Входная строка.
 * </p>
 * @param int $width [optional] <p>
 * Количество символов, по которым строка будет перенесена.
 * </p>
 * @param string $break [optional] <p>
 * Символ переноса строки можно указать с помощью необязательного параметра break.
 * </p>
 * @param bool $cut_long_words [optional] <p>
 * Если параметр cut_long_words установлен в true, строка всегда будет переноситься на указанной ширине width или раньше.
 * Поэтому, если исходная строка содержит слово длиннее заданной ширины строки, то оно будет разорвано. (Смотрите второй пример).
 * Если установлен в false, функция не разделяет слово, даже если width меньше длины слова.
 * </p>
 * @return string Возвращает строку со вставленными символами переноса на указанной длине.
 */
#[Pure]
function wordwrap(string $string, int $width = 75, string $break = "\n", bool $cut_long_words = false): string {}

/**
 * Преобразует специальные символы в HTML-сущности
 * @link https://php.net/manual/ru/function.htmlspecialchars.php
 * @param string $string <p>
 * Конвертируемая {@link https://secure.php.net/manual/ru/language.types.string.php строка}.
 * </p>
 * @param int $flags [optional] <p>
 * Битовая маска из нижеуказанных флагов, определяющих режим обработки кавычек,
 * некорректных кодовых последовательностей и используемый тип документа.
 * По умолчанию используется
 * <em><b>ENT_COMPAT | ENT_HTML401</b></em>.
 * </p><table>
 * <caption><b>Доступные значения параметра <em>flags</em></b></caption>
 * <thead>
 * <tr>
 * <th>Название константы</th>
 * <th>Описание</th>
 * </tr>
 *
 * </thead>
 *
 * <tbody>
 * <tr>
 * <td><b>ENT_COMPAT</b></td>
 * <td>Преобразует двойные кавычки, одинарные кавычки не изменяются.</td>
 * </tr>
 *
 * <tr>
 * <td><b>ENT_QUOTES</b></td>
 * <td>Преобразует как двойные, так и одинарные кавычки.</td>
 * </tr>
 *
 * <tr>
 * <td><b>ENT_NOQUOTES</b></td>
 * <td>Оставляет без изменения как двойные, так и одинарные кавычки.</td>
 * </tr>
 *
 * <tr>
 * <td><b>ENT_IGNORE</b></td>
 * <td>
 * Без всяких уведомительных сообщений отбрасывает некорректные кодовые последовательности вместо возврата пустой строки.
 * Использование этого флага не рекомендуется, так как это может привести к
 * {@link https://unicode.org/reports/tr36/#Deletion_of_Noncharacters » негативным последствиям, связанным с безопасностью}.
 * </td>
 * </tr>
 *
 * <tr>
 * <td><b>ENT_SUBSTITUTE</b></td>
 * <td>
 * Заменяет некорректные кодовые последовательности символом замены Юникода U+FFFD
 * в случае использования UTF-8 или &amp;#FFFD; при использовании другой кодировки, вместо возврата пустой строки.
 * </td>
 * </tr>
 *
 * <tr>
 * <td><b>ENT_DISALLOWED</b></td>
 * <td>
 * Заменяет неверные коды символов для заданного типа документа символом замены юникода U+FFFD (UTF-8) или &amp;#FFFD;
 * (при использовании другой кодировки) вместо того, чтобы оставлять все как есть. Это может быть полезно, например,
 * для того, чтобы убедиться в формальной правильности XML-документов со встроенным внешним контентом.
 * </td>
 * </tr>
 *
 * <tr>
 * <td><b>ENT_HTML401</b></td>
 * <td>
 * Обработка кода в соответствии с HTML 4.01.
 * </td>
 * </tr>
 *
 * <tr>
 * <td><b>ENT_XML1</b></td>
 * <td>
 * Обработка кода в соответствии с XML 1.
 * </td>
 * </tr>
 *
 * <tr>
 * <td><b>ENT_XHTML</b></td>
 * <td>
 * Обработка кода в соответствии с XHTML.
 * </td>
 * </tr>
 *
 * <tr>
 * <td><b>ENT_HTML5</b></td>
 * <td>
 * Обработка кода в соответствии с HTML 5.
 * </td>
 * </tr>
 *
 * </tbody>
 *
 * </table>
 * @param string|null $encoding [optional] <p>
 * Необязательный аргумент, определяющий кодировку, используемую при конвертации символов.
 * Для целей этой функции кодировки ISO-8859-1, ISO-8859-15, UTF-8, cp866, cp1251, cp1252 и KOI8-R являются практически эквивалентными,
 * предполагая то, что сама строка string содержит корректные символы в указанной кодировке, то символы, изменяемые htmlspecialchars(),
 * останутся на тех же местах во всех этих кодировках.
 * </p>
 * <p>
 * Поддерживаются следующие кодировки:
 * <em>ISO-8859-1</em>, <em>ISO-8859-15</em>,
 * <em>UTF-8</em>, <em>cp866</em>,
 * <em>cp1251</em>, <em>cp1252</em>, и
 * <em>KOI8-R</em> фактически эквивалентны, при условии, что
 * <em><b>строка</b></em> сама допустима для кодировки, так как
 * символы, на которые влияет <b>htmlspecialchars()</b> занимают
 * одинаковые позиции во всех этих кодировках.
 * </p>
 * @param bool $double_encode [optional] <p>
 * Если параметр <em><b>double_encode</b></em> выключен, то PHP не будет преобразовывать существующие html-сущности.
 * По умолчанию преобразуется все без ограничений.
 * </p>
 * @return string Преобразованная строка (string).
 */
#[Pure]
function htmlspecialchars(string $string, int $flags = ENT_QUOTES|ENT_SUBSTITUTE, ?string $encoding = 'UTF-8', bool $double_encode = true): string {}

/**
 * Преобразует все возможные символы в соответствующие HTML-сущности
 * @link https://php.net/manual/ru/function.htmlentities.php
 * @param string $string <p>
 * Входная строка.
 * </p>
 * @param int $flags [optional] <p>
 * Битовая маска из нижеуказанных флагов, определяющих режим обработки кавычек,
 * некорректных кодовых последовательностей и используемый тип документа.
 * По умолчанию используется ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401.
 * <table>
 * <caption><b>Доступные значения параметра <em>flags</em></b></caption>
 * <thead>
 * <tr>
 * <th>Название константы</th>
 * <th>Описание</th>
 * </tr>
 *
 * </thead>
 * <tr valign="top">
 * <td>ENT_COMPAT</td>
 * <td>Преобразует двойные кавычки, одинарные кавычки не изменяются.</td>
 * </tr>
 * <tr valign="top">
 * <td>ENT_QUOTES</td>
 * <td>Преобразует как двойные, так и одинарные кавычки.</td>
 * </tr>
 * <tr valign="top">
 * <td>ENT_NOQUOTES</td>
 * <td>Оставляет без изменения как двойные, так и одинарные кавычки.</td>
 * </tr>
 *
 * <tr>
 * <td><b>ENT_IGNORE</b></td>
 * <td>
 * Без всяких уведомительных сообщений отбрасывает некорректные кодовые последовательности вместо возврата пустой строки.
 * Использование этого флага не рекомендуется, так как это может привести к
 * {@link https://unicode.org/reports/tr36/#Deletion_of_Noncharacters » негативным последствиям, связанным с безопасностью}.
 * </td>
 * </tr>
 *
 * <tr>
 * <td><b>ENT_SUBSTITUTE</b></td>
 * <td>
 * Заменяет некорректные кодовые последовательности символом замены Юникода U+FFFD
 * в случае использования UTF-8 или &amp;#FFFD; при использовании другой кодировки, вместо возврата пустой строки.
 * </td>
 * </tr>
 *
 * <tr>
 * <td><b>ENT_DISALLOWED</b></td>
 * <td>
 * Заменяет неверные коды символов для заданного типа документа символом замены юникода U+FFFD (UTF-8) или &amp;#FFFD;
 * (при использовании другой кодировки) вместо того, чтобы оставлять все как есть. Это может быть полезно, например,
 * для того, чтобы убедиться в формальной правильности XML-документов со встроенным внешним контентом.
 * </td>
 * </tr>
 *
 * <tr>
 * <td><b>ENT_SUBSTITUTE</b></td>
 * <td>
 * Заменяет некорректные кодовые последовательности символом замены Юникода U+FFFD
 * в случае использования UTF-8 или &amp;#FFFD; при использовании другой кодировки, вместо возврата пустой строки.
 * </td>
 * </tr>
 *
 * <tr>
 * <td><b>ENT_HTML401</b></td>
 * <td>
 * Обработка кода в соответствии с HTML 4.01.
 * </td>
 * </tr>
 *
 * <tr>
 * <td><b>ENT_XML1</b></td>
 * <td>
 * Обработка кода в соответствии с XML 1.
 * </td>
 * </tr>
 *
 * <tr>
 * <td><b>ENT_XHTML</b></td>
 * <td>
 * Обработка кода в соответствии с XHTML.
 * </td>
 * </tr>
 *
 * <tr>
 * <td><b>ENT_HTML5</b></td>
 * <td>
 * Обработка кода в соответствии с HTML 5.
 * </td>
 * </tr>
 * </table>
 * </p>
 * @param string|null $encoding [optional] <p>
 * Необязательный аргумент, определяющий кодировку, используемую при конвертации символов.
 * В настоящее время по умолчанию используется набор символов ISO-8859-1.
 * </p>
 * @param bool $double_encode [optional] <p>
 * При выключении параметра double_encode, PHP не будет преобразовывать существующие html-сущности.
 * По умолчанию преобразуется все без ограничений.
 * </p>
 * @return string Возвращает преобразованную строку.
 */
#[Pure]
function htmlentities(string $string, int $flags = ENT_QUOTES|ENT_SUBSTITUTE, ?string $encoding, bool $double_encode = true): string {}

/**
 * Преобразует HTML-сущности в соответствующие им символы
 * @link https://php.net/manual/ru/function.html-entity-decode.php
 * @param string $string <p>
 * Входная строка.
 * </p>
 * @param int $flags [optional] <p>
 * Битовая маска, состоящая из одного или более флагов, которые указывают,
 * как обращаться с кавычками и какой тип документа использовать.
 * По умолчанию маска принимает значение ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401.
 * <table>
 * <caption><b>Константы <em>flags</em></b></caption>
 * <thead>
 * <tr>
 * <th>Название константы</th>
 * <th>Описание</th>
 * </tr>
 * </thead>
 *
 * <tr valign="top">
 * <td>ENT_COMPAT</td>
 * <td>Преобразуются двойные кавычки, одинарные остаются без изменений.</td>
 * </tr>
 * <tr valign="top">
 * <td>ENT_QUOTES</td>
 * <td>Преобразуются и двойные, и одинарные кавычки.</td>
 * </tr>
 * <tr valign="top">
 * <td>ENT_NOQUOTES</td>
 * <td>Оставить как двойные, так и одинарные кавычки без изменений.</td>
 * </tr>
 *
 * <tr>
 * <td><b>ENT_HTML401</b></td>
 * <td>
 * Обработка кода в соответствии с HTML 4.01.
 * </td>
 * </tr>
 *
 * <tr>
 * <td><b>ENT_XML1</b></td>
 * <td>
 * Обработка кода в соответствии с XML 1.
 * </td>
 * </tr>
 *
 * <tr>
 * <td><b>ENT_XHTML</b></td>
 * <td>
 * Обработка кода в соответствии с XHTML.
 * </td>
 * </tr>
 *
 * <tr>
 * <td><b>ENT_HTML5</b></td>
 * <td>
 * Обработка кода в соответствии с HTML 5.
 * </td>
 * </tr>
 * </table>
 * </p>
 * @param string|null $encoding [optional] <p>
 * Набор символов ISO-8859-1 используется по умолчанию для дополнительного третьего
 * набор символов. Это определяет набор символов, используемый при преобразовании.
 * </p>
 * @return string Возвращает раскодированную строку.
 */
#[Pure]
function html_entity_decode(string $string, int $flags = ENT_QUOTES|ENT_SUBSTITUTE, ?string $encoding): string {}

/**
 * Преобразует специальные HTML-сущности обратно в соответствующие символы
 * @link https://php.net/manual/ru/function.htmlspecialchars-decode.php
 * @param string $string <p>
 * Строка, которую надо преобразовать.
 * </p>
 * @param int $flags [optional] <p>
 * Битовая маска из одного или нескольких следующих флагов, которые указывают как обрабатывать кавычки и какие типы документов использовать.
 * Значением по умолчанию является ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401.
 * <table>
 * <caption><b>Доступные константы, используемые в качестве параметра <em>flags</em></b></caption>
 * <thead>
 * <tr>
 * <th>Название константы</th>
 * <th>Описание</th>
 * </tr>
 * </thead>
 *
 * <tr valign="top">
 * <tr valign="top">
 * <td>ENT_COMPAT</td>
 * <td>Преобразуются двойные кавычки, одинарные остаются без изменений.</td>
 * </tr>
 * <tr valign="top">
 * <td>ENT_QUOTES</td>
 * <td>Преобразуются и двойные, и одинарные кавычки.</td>
 * </tr>
 * <tr valign="top">
 * <td>ENT_NOQUOTES</td>
 * <td>Оставить как двойные, так и одинарные кавычки без изменений.</td>
 * </tr>
 *
 * <tr>
 * <td><b>ENT_SUBSTITUTE</b></td>
 * <td>
 * Заменяет некорректные кодовые последовательности символом замены Юникода U+FFFD
 * в случае использования UTF-8 или &amp;#FFFD; при использовании другой кодировки, вместо возврата пустой строки.
 * </td>
 * </tr>
 *
 * <tr>
 * <td><b>ENT_HTML401</b></td>
 * <td>
 * Обработка кода в соответствии с HTML 4.01.
 * </td>
 * </tr>
 *
 * <tr>
 * <td><b>ENT_XML1</b></td>
 * <td>
 * Обработка кода в соответствии с XML 1.
 * </td>
 * </tr>
 *
 * <tr>
 * <td><b>ENT_XHTML</b></td>
 * <td>
 * Обработка кода в соответствии с XHTML.
 * </td>
 * </tr>
 *
 * <tr>
 * <td><b>ENT_HTML5</b></td>
 * <td>
 * Обработка кода в соответствии с HTML 5.
 * </td>
 * </tr>
 * </table>
 * </p>
 * @return string Возвращает преобразованную строку.
 */
#[Pure]
function htmlspecialchars_decode(string $string, int $flags = ENT_QUOTES|ENT_SUBSTITUTE): string {}

/**
 * Возвращает таблицу преобразований, используемую функциями <function>htmlspecialchars</function> и <function>htmlentities</function>
 * @link https://php.net/manual/ru/function.get-html-translation-table.php
 * @param int $table [optional] <p>
 * Указывает, какую таблицу использовать для преобразований.
 * Либо HTML_ENTITIES, либо HTML_SPECIALCHARS.
 * </p>
 * @param int $flags [optional] <p>
 * Как и в функциях htmlspecialchars и
 * htmlentities functions вы можете дополнительно указать
 * quote_style, с которым вы работаете.
 * Смотрите описание из htmlspecialchars.
 * </p>
 * @param string $encoding [optional] <p>
 * Кодировка для использования.
 * Если этот параметр опущен, значение по умолчанию для этого аргумента равно ISO-8859-1 в
 * версии PHP до 5.4.0 и UTF-8 начиная с PHP 5.4.0 и далее.
 * </p>
 *
 *
 * <p>
 * Поддерживаются следующие кодировки:
 * </p><table class="doctable table">
 * <caption><strong>Поддерживаемые кодировки</strong></caption>
 *
 * <thead>
 * <tr>
 * <th>Кодировка</th>
 * <th>Псевдонимы</th>
 * <th>Описание</th>
 * </tr>
 *
 * </thead>
 *
 * <tbody class="tbody">
 * <tr>
 * <td>ISO-8859-1</td>
 * <td>ISO8859-1</td>
 * <td>
 * Западно-европейская Latin-1.
 * </td>
 * </tr>
 *
 * <tr>
 * <td>ISO-8859-5</td>
 * <td>ISO8859-5</td>
 * <td>
 * Редко используемая кириллическая кодировка (Latin/Cyrillic).
 * </td>
 * </tr>
 *
 * <tr>
 * <td>ISO-8859-15</td>
 * <td>ISO8859-15</td>
 * <td>
 * Западно-европейская Latin-9. Добавляет знак евро, французские и финские буквы к кодировке Latin-1 (ISO-8859-1).
 * </td>
 * </tr>
 *
 * <tr>
 * <td>UTF-8</td>
 * <td class="empty">&nbsp;</td>
 * <td>
 * 8-битная Unicode, совместимая с ASCII.
 * </td>
 * </tr>
 *
 * <tr>
 * <td>cp866</td>
 * <td>ibm866, 866</td>
 * <td>
 * Кириллическая кодировка, применяемая в DOS.
 * </td>
 * </tr>
 *
 * <tr>
 * <td>cp1251</td>
 * <td>Windows-1251, win-1251, 1251</td>
 * <td>
 * Кириллическая кодировка, применяемая в Windows.
 * </td>
 * </tr>
 *
 * <tr>
 * <td>cp1252</td>
 * <td>Windows-1252, 1252</td>
 * <td>
 * Западно-европейская кодировка, применяемая в Windows.
 * </td>
 * </tr>
 *
 * <tr>
 * <td>KOI8-R</td>
 * <td>koi8-ru, koi8r</td>
 * <td>
 * Русская кодировка.
 * </td>
 * </tr>
 *
 * <tr>
 * <td>BIG5</td>
 * <td>950</td>
 * <td>
 * Традиционный китайский, применяется в основном на Тайване.
 * </td>
 * </tr>
 *
 * <tr>
 * <td>GB2312</td>
 * <td>936</td>
 * <td>
 * Упрощённый китайский, стандартная национальная кодировка.
 * </td>
 * </tr>
 *
 * <tr>
 * <td>BIG5-HKSCS</td>
 * <td class="empty">&nbsp;</td>
 * <td>
 * Расширенная Big5, применяемая в Гонконге.
 * </td>
 * </tr>
 *
 * <tr>
 * <td>Shift_JIS</td>
 * <td>SJIS, SJIS-win, cp932, 932</td>
 * <td>
 * Японская кодировка.
 * </td>
 * </tr>
 *
 * <tr>
 * <td>EUC-JP</td>
 * <td>EUCJP, eucJP-win</td>
 * <td>
 * Японская кодировка.
 * </td>
 * </tr>
 *
 * <tr>
 * <td>MacRoman</td>
 * <td class="empty">&nbsp;</td>
 * <td>
 * Кодировка, используемая в Mac OS.
 * </td>
 * </tr>
 *
 * <tr>
 * <td><em>''</em></td>
 * <td class="empty">&nbsp;</td>
 * <td>
 * Пустая строка активирует режим определения кодировки из файла скрипта (Zend multibyte),
 * {@link https://php.net/manual/ru/ini.core.php#ini.default-charset default_charset} и текущей локали
 * (смотрите {@link https://php.net/manual/ru/function.nl-langinfo.php nl_langinfo()} и
 * {@link https://php.net/manual/ru/function.setlocale.php setlocale()}) в указанном порядке. Не рекомендуется к использованию.
 * </td>
 * </tr>
 *
 * </tbody>
 *
 * </table>
 *
 * <blockquote><p><strong>Замечание</strong>:
 *
 * Остальные кодировки не поддерживаются, вместо них будет применена кодировка по умолчанию и сгенерировано предупреждение.
 *
 * </p></blockquote>
 * @return array Возвращает таблицу преобразований в виде массива с оригинальными символами в качестве ключей и сущностями в качестве значений.
 */
#[Pure]
function get_html_translation_table(int $table, int $flags = ENT_QUOTES|ENT_SUBSTITUTE, string $encoding = "UTF-8"): array {}

/**
 * Возвращает SHA1-хеш строки
 * @link https://php.net/manual/ru/function.sha1.php
 * @param string $string <p>
 * Входная строка.
 * </p>
 * @param bool $binary [optional] <p>
 * Если необязательный аргумент binary имеет значение true,
 * хеш возвращается в виде бинарной строки из 20 символов, иначе он будет возвращён в виде 40-символьного шестнадцатеричного числа.
 * </p>
 * @return string Возвращает SHA1-хеш в виде строки.
 */
#[Pure]
function sha1(string $string, bool $binary = false): string {}

/**
 * Возвращает SHA1-хеш файла
 * @link https://php.net/manual/ru/function.sha1-file.php
 * @param string $filename <p>
 * Имя хешируемого файла.
 * </p>
 * @param bool $binary [optional] <p>
 * Если установлен в true, возвращает 20-символьный хеш в бинарном формате.
 * </p>
 * @return string|false Возвращает строку в случае успешного выполнения, иначе возвращается false.
 */
#[Pure]
function sha1_file(string $filename, bool $binary = false): string|false {}

/**
 * Возвращает MD5-хеш строки
 * @link https://php.net/manual/ru/function.md5.php
 * @param string $string <p>
 * Строка.
 * </p>
 * @param bool $binary [optional] <p>
 * Если необязательный аргумент binary имеет значение true, то возвращается бинарная строка из 16 символов.
 * </p>
 * @return string Возвращает хеш в виде 32-символьного шестнадцатеричного числа.
 */
#[Pure]
function md5(string $string, bool $binary = false): string {}

/**
 * Возвращает MD5-хеш файла
 * @link https://php.net/manual/ru/function.md5-file.php
 * @param string $filename <p>
 * Имя файла
 * </p>
 * @param bool $binary [optional] <p>
 * Если имеет значение true, то возвращается бинарная строка из 16 символов.
 * </p>
 * @return string|false Возвращает строку в случае успешного выполнения, иначе false.
 */
#[Pure]
function md5_file(string $filename, bool $binary = false): string|false {}

/**
 * Вычисляет полином CRC32 для строки
 * @link https://php.net/manual/ru/function.crc32.php
 * @param string $string <p>
 * Данные.
 * </p>
 * @return int Возвращает контрольную сумму crc32 строки string в виде целого числа.
 */
#[Pure]
function crc32(string $string): int {}

/**
 * Разбор двоичных IPTC данных на отдельные теги
 * Замечание: Этой функции не требуется библиотека GD.
 * @link https://php.net/manual/ru/function.iptcparse.php
 * @param string $iptc_block <p>
 * Двоичные данные IPTC.
 * </p>
 * @return array|false Возвращает массив значений тегов, используя метки тегов в качестве индекса.
 * Возвращает false в случае возникновения ошибки, а также если IPTC данные отсутствуют.
 */
#[Pure]
function iptcparse(string $iptc_block): array|false {}

/**
 * Встраивание двоичных IPTC данных в JPEG изображение
 * Замечание: Этой функции не требуется библиотека GD.
 * @link https://php.net/manual/ru/function.iptcembed.php
 * @param string $iptc_data <p>
 * Данные.
 * </p>
 * @param string $filename <p>
 * Путь к JPEG изображению.
 * </p>
 * @param int $spool [optional] <p>
 * Если значение этого флага больше 2, то JPEG будет возвращён в виде строки. В противном случае, JPEG будет напечатан в STDOUT.
 * </p>
 * @return string|bool Если spool меньше 2, будет возвращён JPEG или false в случае возникновения ошибки.
 * В противном случае true в случае успешного выполнения или false в случае возникновения ошибки.
 */
function iptcembed(string $iptc_data, string $filename, int $spool): string|bool {}

/**
 * Получение размера изображения
 * @link https://php.net/manual/ru/function.getimagesize.php
 * @param string $filename <p>
 * Этот аргумент задаёт файл, сведения о котором будут извлекаться.
 * Это может быть локальный или удалённый (зависит от конфигурации) файл.
 * Передача данных удалённого файла должна осуществляться одним из поддерживаемых потоков.
 * </p>
 * @param array &$image_info [optional] <p>
 * Этот необязательный аргумент позволяет извлечь некоторые расширенные сведения из файла изображения.
 * На данный момент можно получать различные JPG APP маркеры в виде ассоциативного массива.
 * Некоторые программы используют эти маркеры для встраивания текста в картинку.
 * Наиболее часто встраивают » IPTC сведения в APP13 маркер.
 * Для преобразования двоичных данных APP13 маркера во что-то удобочитаемое можно воспользоваться функцией iptcparse().
 * </p>
 * @return array|false Возвращает массив из 7 элементов. Не все типы изображений содержат элементы с каналами (channels) и битрейтом (bits).
 * <p>
 * Индексы 0 и 1 содержат ширину и высоту изображения.
 * </p>
 * <p>
 * Некоторые форматы файлов могут хранить несколько изображений или не содержать изображения вообще.
 * В таких случаях getimagesize() не сможет определить размер изображения. getimagesize() вернёт нули в качестве значений высоты и ширины.
 * </p>
 * <p>
 * Индекс 2 содержит одну из констант типа изображения IMAGETYPE_XXX.
 * </p>
 * <p>
 * Индекс 3 содержит строку со значениями ширины и высоты изображения height="yyy" width="xxx", которая может быть использована внутри IMG тега.
 * </p>
 * <p>
 * mime - соответствующий MIME-тип изображения. Эти сведения используются для корректной обработки изображения на основании заголовка Content-type:
 * </p>
 * <p>
 * channels принимает значение 3 для RGB картинок и 4 для CMYK.
 * </p>
 * <p>
 * bits - глубина цвета, число бит для каждого цвета.
 * </p>
 * <p>
 * Для некоторых типов изображений наличие значений channels и bits может сбить с толку.
 * Например, GIF всегда использует 3 канала на пиксель, но глубину цвета невозможно вычислить для анимированных GIF изображений с общей таблицей цветов.
 * </p>
 * <p>
 * В случае возникновения ошибки функция вернёт false.
 * </p>
 */
function getimagesize(string $filename, &$image_info): array|false {}

/**
 * Получение Mime-типа для типа изображения, возвращаемого функциями getimagesize, exif_read_data, exif_thumbnail, exif_imagetype
 * @link https://php.net/manual/ru/function.image-type-to-mime-type.php
 * @param int $image_type <p>
 * Одна из констант IMAGETYPE_XXX.
 * </p>
 * @return string Возвращаемые значения приведены ниже
 * <table>
 * Возвращаемые значения и Константы
 * <tr valign="top">
 * <td>image_type</td>
 * <td>Возвращаемое значение</td>
 * </tr>
 * <tr valign="top">
 * <td>IMAGETYPE_GIF</td>
 * <td>image/gif</td>
 * </tr>
 * <tr valign="top">
 * <td>IMAGETYPE_JPEG</td>
 * <td>image/jpeg</td>
 * </tr>
 * <tr valign="top">
 * <td>IMAGETYPE_PNG</td>
 * <td>image/png</td>
 * </tr>
 * <tr valign="top">
 * <td>IMAGETYPE_SWF</td>
 * <td>application/x-shockwave-flash</td>
 * </tr>
 * <tr valign="top">
 * <td>IMAGETYPE_PSD</td>
 * <td>image/psd</td>
 * </tr>
 * <tr valign="top">
 * <td>IMAGETYPE_BMP</td>
 * <td>image/bmp</td>
 * </tr>
 * <tr valign="top">
 * <td>IMAGETYPE_TIFF_II (порядок байт intel)</td>
 * <td>image/tiff</td>
 * </tr>
 * <tr valign="top">
 * <td>
 * IMAGETYPE_TIFF_MM (порядок байт motorola)
 * </td>
 * <td>image/tiff</td>
 * </tr>
 * <tr valign="top">
 * <td>IMAGETYPE_JPC</td>
 * <td>application/octet-stream</td>
 * </tr>
 * <tr valign="top">
 * <td>IMAGETYPE_JP2</td>
 * <td>image/jp2</td>
 * </tr>
 * <tr valign="top">
 * <td>IMAGETYPE_JPX</td>
 * <td>application/octet-stream</td>
 * </tr>
 * <tr valign="top">
 * <td>IMAGETYPE_JB2</td>
 * <td>application/octet-stream</td>
 * </tr>
 * <tr valign="top">
 * <td>IMAGETYPE_SWC</td>
 * <td>application/x-shockwave-flash</td>
 * </tr>
 * <tr valign="top">
 * <td>IMAGETYPE_IFF</td>
 * <td>image/iff</td>
 * </tr>
 * <tr valign="top">
 * <td>IMAGETYPE_WBMP</td>
 * <td>image/vnd.wap.wbmp</td>
 * </tr>
 * <tr valign="top">
 * <td>IMAGETYPE_XBM</td>
 * <td>image/xbm</td>
 * </tr>
 * <tr valign="top">
 * <td>IMAGETYPE_ICO</td>
 * <td>image/vnd.microsoft.icon</td>
 * </tr>
 * </table>
 */
#[Pure]
function image_type_to_mime_type(int $image_type): string {}

/**
 * Получение расширения файла для типа изображения
 * @link https://php.net/manual/ru/function.image-type-to-extension.php
 * @param int $image_type <p>
 * Одна из констант IMAGETYPE_XXX.
 * </p>
 * @param bool $include_dot [optional] <p>
 * Удален в 8.0.
 * Добавлять точку к расширению или нет. По умолчанию true.
 * </p>
 * @return string|false Строка с расширением файла, соответствующим типу изображения или false в случае возникновения ошибки.
 */
#[Pure]
function image_type_to_extension(int $image_type, bool $include_dot = true): string|false {}

/**
 * Выводит информацию о текущей конфигурации PHP
 * @link https://php.net/manual/ru/function.phpinfo.php
 * @param int $flags [optional] <p>
 * Вывод функции можно настраивать, передавая битовую маску из одной или более приведённых ниже констант (constants).
 * Эта маска передаётся в качестве необязательного аргумента flags.
 * Отдельные константы или битовые значения можно комбинировать с помощью оператора побитового оператора ИЛИ.
 * </p>
 * <p>
 * <table>
 * Настройки phpinfo()
 * <tr valign="top">
 * <td>Имя (константа)</td>
 * <td>Значение</td>
 * <td>Описание</td>
 * </tr>
 * <tr valign="top">
 * <td>INFO_GENERAL</td>
 * <td>1</td>
 * <td>
 * Строка конфигурации, расположение php.ini, дата сборки, сервер, система и др.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>INFO_CREDITS</td>
 * <td>2</td>
 * <td>
 * Разработчики PHP. Смотрите также phpcredits().
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>INFO_CONFIGURATION</td>
 * <td>4</td>
 * <td>
 * Текущие значение основных и локальных PHP директив. Смотрите также ini_get().
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>INFO_MODULES</td>
 * <td>8</td>
 * <td>
 * Загруженные модули и их настройки. Смотрите также get_loaded_extensions().
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>INFO_ENVIRONMENT</td>
 * <td>16</td>
 * <td>
 * Информация о переменных окружения, которая также доступна в $_ENV.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>INFO_VARIABLES</td>
 * <td>32</td>
 * <td>
 * Выводит все предопределённые переменные из EGPCS (Environment, GET, POST, Cookie, Server).
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>INFO_LICENSE</td>
 * <td>64</td>
 * <td>
 * Информация о лицензии PHP. Смотрите также » license FAQ.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>INFO_ALL</td>
 * <td>-1</td>
 * <td>
 * Выводит все приведённое выше.
 * </td>
 * </tr>
 * </table>
 * </p>
 * @return bool Возвращает true в случае успешного выполнения или false в случае возникновения ошибки.
 */
function phpinfo(#[ExpectedValues(flags: [INFO_GENERAL, INFO_CREDITS, INFO_CONFIGURATION, INFO_MODULES, INFO_ENVIRONMENT, INFO_VARIABLES, INFO_LICENSE, INFO_ALL])] int $flags = INFO_ALL): bool {}

/**
 * Получает текущую версию PHP
 * @link https://php.net/manual/ru/function.phpversion.php
 * @param string|null $extension [optional] <p>
 * Необязательное имя модуля.
 * </p>
 * @return string|false Возвращает текущую версию PHP в виде строки (string).
 * Если в параметре extension указано строковое значение (string), phpversion() вернёт версию этого модуля или false,
 * если информации о версии нет или модуль в данный момент не включён.
 */
#[Pure]
function phpversion(?string $extension): string|false {}

/**
 * Выводит список разработчиков PHP
 * @link https://php.net/manual/ru/function.phpcredits.php
 * @param int $flags [optional] <p>
 * Использование аргумента flags позволяет произвольно компоновать информацию об отдельных группах разработчиков.
 * </p>
 * <p>
 * <table>
 * Предопределённые флаги phpcredits()
 * <tr valign="top">
 * <td>Имя</td>
 * <td>Описание</td>
 * </tr>
 * <tr valign="top">
 * <td>CREDITS_ALL</td>
 * <td>
 * Все разработчики, эквивалентно использованию: CREDITS_DOCS + CREDITS_GENERAL + CREDITS_GROUP + CREDITS_MODULES + CREDITS_FULLPAGE.
 * В этом случае будет сгенерирована полностью независимая HTML-страница с соответствующими тэгами.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>CREDITS_DOCS</td>
 * <td>Участники команды документирования</td>
 * </tr>
 * <tr valign="top">
 * <td>CREDITS_FULLPAGE</td>
 * <td>
 * Обычно используется в комбинации с другими флагами.
 * Указывает на то, что независимая HTML страница должна содержать информацию других флагов.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>CREDITS_GENERAL</td>
 * <td>
 * Главные разработчики: Концепция и дизайн языка, авторы PHP и модуля SAPI.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>CREDITS_GROUP</td>
 * <td>Список разработчиков ядра языка</td>
 * </tr>
 * <tr valign="top">
 * <td>CREDITS_MODULES</td>
 * <td>
 * Список модулей для PHP и их авторов
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>CREDITS_SAPI</td>
 * <td>
 * Список модулей серверных API и их авторов
 * </td>
 * </tr>
 * </table>
 * </p>
 * @return bool Возвращает true в случае успешного выполнения или false в случае возникновения ошибки.
 */
function phpcredits(int $flags = CREDITS_ALL): bool {}

/**
 * Получает руководство по логотипу
 * @removed 5.5
 * @link https://php.net/manual/ru/function.php-logo-guid.php
 * @return string PHPE9568F34-D428-11d2-A769-00AA001ACF42.
 */
#[Pure]
function php_logo_guid(): string {}

/**
 * @removed 5.5
 */
function php_real_logo_guid() {}

/**
 * @removed 5.5
 */
function php_egg_logo_guid() {}

/**
 * Получает руководство по Zend
 * @removed 5.5
 * @link https://php.net/manual/ru/function.zend-logo-guid.php
 * @return string PHPE9568F35-D428-11d2-A769-00AA001ACF42.
 */
function zend_logo_guid(): string {}

/**
 * Возвращает тип интерфейса между веб-сервером и PHP
 * @link https://php.net/manual/ru/function.php-sapi-name.php
 * @return string|false Возвращает тип интерфейса в виде строки в нижнем регистре или false в случае возникновения ошибки.
 * <p>
 * Возможные возвращаемые значения (список может быть неполным): apache, apache2handler, cgi (до PHP 5.3), cgi-fcgi, cli, cli-server, embed, fpm-fcgi, litespeed, phpdbg.
 * </p>
 */
#[Pure]
function php_sapi_name(): string|false {}

/**
 * Возвращает информацию об операционной системе, на которой запущен PHP
 * @link https://php.net/manual/ru/function.php-uname.php
 * @param string $mode [optional] <p>
 * mode - одиночный символ, определяющий, какая информация будет выводиться:
 * <p>'a': По умолчанию. Содержит все режимы в следующей последовательности "s n r v m".</p>
 * <p>'s': Название операционной системы, например, FreeBSD.</p>
 * <p>'n': Имя хоста, например, localhost.example.com.</p>
 * <p>'r': Номер релиза, например, 5.1.2-RELEASE.</p>
 * <p>'v': Информация о версии. Может сильно различаться в разных ОС.</p>
 * <p>'m': Архитектура процессора, например, i386.</p>
 * @return string Возвращает описание ОС в виде строки.
 */
#[Pure]
function php_uname(string $mode = 'a'): string {}

/**
 * Возвращает список .ini-файлов, найденных в дополнительной ini-директории
 * @link https://php.net/manual/ru/function.php-ini-scanned-files.php
 * @return string|false При успехе возвращает строку с разделёнными запятыми именами .ini-файлов.
 * За каждой запятой следует новая строка. Если директива --with-config-file-scan-dir не задана и переменная окружения PHP_INI_SCAN_DIR тоже не задана,
 * функция вернёт false. Если директива задана и она пуста, будет возвращена пустая строка.
 * Если файл не удаётся распознать, он всё же будет включён в список, но при этом PHP сообщит об ошибке.
 * Эта ошибка будет возникать как при компиляции, так и во время работы php_ini_scanned_files().
 */
#[Pure]
function php_ini_scanned_files(): string|false {}

/**
 * Получить путь к загруженному файлу php.ini
 * @link https://php.net/manual/ru/function.php-ini-loaded-file.php
 * @return string|false Путь к загруженному файлу php.ini или false, если файл не загружен.
 * @since 5.2.4
 */
#[Pure]
function php_ini_loaded_file(): string|false {}

/**
 * Сравнение строк с использованием алгоритма "natural order"
 * @link https://php.net/manual/ru/function.strnatcmp.php
 * @param string $string1 <p>
 * Первая строка.
 * </p>
 * @param string $string2 <p>
 * Вторая строка.
 * </p>
 * @return int
 * Подобно другим функциям сравнения строк, данная функция возвращает отрицательное число, если string1 &lt; string2,
 * положительное число, если string1 &gt; string2, и 0 если строки равны.
 */
#[Pure]
function strnatcmp(string $string1, string $string2): int {}

/**
 * Сравнение строк без учёта регистра с использованием алгоритма "natural order"
 * @link https://php.net/manual/ru/function.strnatcasecmp.php
 * @param string $string1 <p>
 * Первая строка.
 * </p>
 * @param string $string2 <p>
 * Вторая строка.
 * </p>
 * @return int
 * Подобно другим функциям сравнения строк, данная функция возвращает отрицательное число,
 * если string1 &lt; string2, положительное число, если string1 &gt; string2, и 0, если строки равны.
 */
#[Pure]
function strnatcasecmp(string $string1, string $string2): int {}

/**
 * Возвращает число вхождений подстроки
 * @link https://php.net/manual/ru/function.substr-count.php
 * @param string $haystack <p>
 * Строка, в которой ведётся поиск
 * </p>
 * @param string $needle <p>
 * Искомая подстрока
 * </p>
 * @param int $offset [optional] <p>
 * Смещение начала отсчёта. Если задано отрицательное значение, отсчёт позиции будет произведён с конца строки.
 * </p>
 * @param int|null $length [optional] <p>
 * Максимальная длина строки, в которой будет производится поиск подстроки после указанного смещения.
 * Если сумма смещения и максимальной длины будет больше длины haystack, то будет выведено предупреждение.
 * Отрицательное значение будет отсчитываться с конца haystack.
 * </p>
 * @return int Эта функция возвращает целое число (int).
 */
#[Pure]
function substr_count(string $haystack, string $needle, int $offset, ?int $length): int {}

/**
 * Возвращает длину участка в начале строки, полностью соответствующего маске
 * @link https://php.net/manual/ru/function.strspn.php
 * @param string $string <p>
 * Исследуемая строка.
 * </p>
 * @param string $characters <p>
 * Список из разрешённых символов.
 * </p>
 * @param int $offset [optional] <p>
 * Позиция начала поиска в subject.
 * </p>
 * <p>
 * Если offset указан и неотрицателен, то strspn() начнёт искать в строке string, начиная с позиции offset.
 * К примеру, в строке 'abcdef', символом с позицией 0 является 'a', символом с позицией 2 является 'c' и т.д.
 * </p>
 * <p>
 * Если offset указан и отрицателен, то strspn() начнёт поиск в строке string с позиции, отстоящей на offset символов с конца string.
 * </p>
 * @param int|null $length [optional] <p>
 * Длина исследуемого фрагмента string.
 * </p>
 * <p>
 * Если length указан и неотрицателен, то строка string будет исследована в течение length после стартовой позиции.
 * </p>
 * <p>
 * Если length указан и отрицателен, то строка string будет исследована начиная со стартовой позиции до позиции, отстоящей на length символов с конца string.
 * </p>
 * @return int Возвращает длину первого участка string, состоящего целиком из символов в characters.
 */
#[Pure]
function strspn(string $string, string $characters, int $offset, ?int $length): int {}

/**
 * Возвращает длину участка в начале строки, не соответствующего маске
 * @link https://php.net/manual/ru/function.strcspn.php
 * @param string $string <p>
 * Строка для исследования.
 * </p>
 * @param string $characters <p>
 * Строка, содержащая каждый из запрещённых символов.
 * </p>
 * @param int $offset [optional] <p>
 * Позиция в строке string, с которой начинается поиск.
 * </p>
 * @param int|null $length [optional] <p>
 * Длина фрагмента из string для обследования.
 * </p>
 * @return int Возвращает длину начального фрагмента строки string, которая состоит полностью из символов, не включённых в параметр characters.
 */
#[Pure]
function strcspn(string $string, string $characters, int $offset, ?int $length): int {}

/**
 * Разбивает строку на токены
 * Замечание: Функция ведёт себя немного иначе, чем можно было бы ожидать, знакомясь с explode().
 * Во-первых, последовательность из двух или более смежных символов token в анализируемой строке считается одним разделителем.
 * Также игнорируется token, расположенный в начале или конце строки. Например, если используется строка ";aaa;;bbb;",
 * последовательные вызовы strtok() с ";" в качестве token вернут строки "aaa" и "bbb", а затем false.
 * В результате строка будет разделена только на два элемента, а explode(";", $string) вернёт массив из 5 элементов.
 * @link https://php.net/manual/ru/function.strtok.php
 * @param string $string <p>
 * Строка (string), разбиваемая на подстроки (токены).
 * </p>
 * @param string|null $token <p>
 * Разделитель строки string.
 * </p>
 * @return string|false Токен в виде строки (string) или false, если токенов больше нет.
 */
function strtok(
    string $string,
    #[PhpStormStubsElementAvailable(from: '5.3', to: '7.0')] $token,
    #[PhpStormStubsElementAvailable(from: '7.1')] ?string $token = null
): string|false {}
