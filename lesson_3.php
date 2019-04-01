<?php
/**
 * Created by PhpStorm.
 * User: pawkat
 * Date: 2019-03-24
 * Time: 12:54
 */

$title = 'Lesson 3'
?>
<?php require 'templates/header.php' ?>
    <h1 style="color: red;"><?php echo $lesson ?></h1>
    <h2 style="color: red;"><?php echo 'Homework' ?></h2>
    <h3 style="color: red;">1.</h3>
    <p>С помощью цикла while вывести все числа в промежутке от 0 до 100, которые делятся на 3 без остатка.</p>
    <p>
        <?php
        $i = 0;
        while ($i <= 100) {
            if (($i % 3) === 0) {
                echo "$i, ";
            }
            $i++;
        }
        ?>
    </p>
    <h3 style="color: red;">2.</h3>
    <p>С помощью цикла do…while написать функцию для вывода чисел от 0 до 10, чтобы результат выглядел так: <br/>
        0 – это ноль. <br/>
        1 – нечетное число. <br/>
        2 – четное число. <br/>
        3 – нечетное число. <br/>
        … <br/>
        10 – четное число. <br/>
    </p>
    <p>
        <?php
        $i = 0;
        do {
            echo "$i - ";
            if ($i === 0) {
                echo 'это ноль.';
            } elseif (($i % 2) === 0) {
                echo 'четное число.';
            } else {
                echo 'нечетное число.';
            }
            echo '<br/>';
            $i++;
        } while ($i <= 10);
        ?>
    </p>
    <h3 style="color: red;">3.</h3>
    <p>Объявить массив, в котором в качестве ключей будут использоваться названия областей, а в качестве значений –
        массивы с названиями городов из соответствующей области. Вывести в цикле значения массива, чтобы результат был
        таким:
        <br/>
        Московская область: <br/>
        Москва, Зеленоград, Клин <br/>
        Ленинградская область: <br/>
        Санкт-Петербург, Всеволожск, Павловск, Кронштадт <br/>
        Рязанская область … (названия городов можно найти на maps.yandex.ru)</p>
    <p>
        <?php
        $oblasti = array(
            "Донецкая область" => array(
                "Авдеевка",
                "Артемовск",
                "Угледар",
                "Горловка",
                "Дебальцево",
                "Дзержинск",
                "Димитров",
                "Доброполье",
                "Докучаевск",
                "Донецк"
            ),
            "Автономная Республика Крым" => array(
                "Алупка",
                "Алушта",
                "Армянск",
                "Бахчисарай",
                "Евпатория"
            ),
            "Винницкая область" => array(
                "Бар",
                "Бершадь",
                "Винница",
                "Гайсин",
                "Гнивань"
            )
        );

        foreach ($oblasti as $key => $value) {
            echo $key . ': <br/>';
            for ($i = 0; $i < count($value); $i++) {
                echo $value[$i];
                if ($i < count($value) - 1)
                    echo ', ';
                else
                    echo '<br/>';
            }
        }
        ?>
    </p>
    <h3 style="color: red;">4.</h3>
    <p>
        Объявить массив, индексами которого являются буквы русского языка, а значениями – соответствующие латинские
        буквосочетания (‘а’=> ’a’, ‘б’ => ‘b’, ‘в’ => ‘v’, ‘г’ => ‘g’, …, ‘э’ => ‘e’, ‘ю’ => ‘yu’, ‘я’ => ‘ya’).
    </p>
    <p>
        <?php
        $alphabet = array(
            "а" => "a",
            "б" => "b",
            "в" => "v",
            "г" => "g",
            "д" => "d",
            "е" => "e",
            "ё" => "yo",
            "ж" => "zh",
            "з" => "z",
            "и" => "i",
            "й" => "y",
            "к" => "k",
            "л" => "l",
            "м" => "m",
            "н" => "n",
            "Н" => "N",
            "о" => "o",
            "п" => "p",
            "р" => "r",
            "с" => "s",
            "т" => "t",
            "Т" => "T",
            "у" => "u",
            "ф" => "f",
            "х" => "h",
            "ц" => "ts",
            "ч" => "ch",
            "ш" => "sh",
            "щ" => "shch",
            "ъ" => "\"",
            "ы" => "y",
            "ь" => "'",
            "э" => "e",
            "ю" => "yu",
            "я" => "ya",
        );
        $str = "Тестирование функции транслитерации строк";
        echo $str . '<br/>';
        function translimeration($str, $alphabet)
        {
            $words = explode(' ', $str);
            $result = '';
            for ($i = 0; $i <= count($words); $i++) {
                $letters = str_split($words[$i], 2);
                for ($j = 0; $j <= count($letters); $j++) {
                    $letter = $letters[$j];
                    $new_letter = $alphabet[$letter];
                    $result .= $new_letter;
                }
                $result .= ' ';
            }
            return $result;
        }

        $result = translimeration($str, $alphabet);
        $result1 = translimeration('Написаная мною функция транслитерации строк работает успешно', $alphabet);
        echo $result . '<br/>';
        echo $result1 . '<br/>';
        ?>
    </p>
    <h3 style="color: red;">5.</h3>
    <p>Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку.</p>
    <p>
        <?php
        $str1 = 'Пробелы изменены на подчеркивания';
        function change_spaces($str)
        {
            $words = explode(' ', $str);
            $result = '';
            for ($i = 0; $i < count($words); $i++) {
                $result .= $words[$i];
                if ($i < count($words) - 1)
                    $result .= '_';
            }
            return $result;
        }

        $change_spaces_result = change_spaces($str1);
        echo $change_spaces_result;
        ?>
    </p>
    <h3 style="color: red;">6.</h3>
    <p>В имеющемся шаблоне сайта заменить статичное меню (ul - li) на генерируемое через PHP. Необходимо представить
        пункты меню как элементы массива и вывести их циклом. Подумать, как можно реализовать меню с вложенными подменю?
        Попробовать его реализовать.</p>
    <p>
    <ul>
        <?php
        $list = array(
            1,
            2 => array(
                "2.1",
                "2.2",
                "2.3"
            ),
            3,
            4,
            5,
            6,
            7
        );
        foreach ($list as $key => $item) {
            echo "<li>";
            if (is_array($item)) :
                echo $key;
                echo "<ul>";
                foreach ($item as $subitem) {
                    echo "<li>$subitem</li>";
                }
                echo "</ul>";
            else :
                echo $item;
            endif;
            echo "</li>";
        }
        ?>
    </ul>
    </p>


    <h3 style="color: red;">7.</h3>
    <p>*Вывести с помощью цикла for числа от 0 до 9, НЕ используя тело цикла. То есть выглядеть должно так: <br/>
        for (…){ // здесь пусто}</p>
    <p>
        <?php
        for ($i = 0; $i < 10; $i++) :
            echo $i;
        endfor;
        ?>
    </p>
    <h3 style="color: red;">8.</h3>
    <p> *Повторить третье задание, но вывести на экран только города, начинающиеся с буквы «А».</p>
    <p>
        <?php
        $oblasti1 = array(
            "Донецкая область" => array(
                "Авдеевка",
                "Артемовск",
                "Угледар",
                "Горловка",
                "Дебальцево",
                "Дзержинск",
                "Димитров",
                "Доброполье",
                "Докучаевск",
                "Донецк"
            ),
            "Автономная Республика Крым" => array(
                "Алупка",
                "Алушта",
                "Армянск",
                "Бахчисарай",
                "Евпатория"
            ),
            "Винницкая область" => array(
                "Бар",
                "Бершадь",
                "Винница",
                "Гайсин",
                "Гнивань"
            )
        );

        foreach ($oblasti1 as $key => $value) {
            echo $key . ': <br/>';
            for ($i = 0; $i < count($value); $i++) {
                $letters = str_split($value[$i], 2);
                if ((string)($letters[0]) == "А") {
                    echo $value[$i];
                    if ($i < count($value) - 1)
                        echo '<br>';

                }

            }
        }
        ?>
    </p>
    <h3 style="color: red;">9.</h3>
    <p>*Объединить две ранее написанные функции в одну, которая получает строку на русском языке, производит
        транслитерацию и замену пробелов на подчеркивания (аналогичная задача решается при конструировании url-адресов
        на основе названия статьи в блогах).</p>
    <p>
        <?php
        $str = "Тестирование функции транслитерации строк и замены пробелов на подчеркивания";
        echo $str . '<br/>';
        function translimeration_and_change_spaces($str, $alphabet)
        {
            $words = explode(' ', $str);
            $result = '';
            for ($i = 0; $i <= count($words); $i++) {
                $letters = str_split($words[$i], 2);
                for ($j = 0; $j < count($letters); $j++) {
                    $letter = $letters[$j];
                    $new_letter = $alphabet[$letter];
                    $result .= $new_letter;
                }
                if ($i < count($words) - 1)
                    $result .= '_';
            }
            return $result;
        }

        $result = translimeration_and_change_spaces($str, $alphabet);
        $result1 = translimeration_and_change_spaces('Написаная мною функция работает успешно', $alphabet);
        echo $result . '<br/>';
        echo $result1 . '<br/>';
        ?>
    </p>

<?php require 'templates/footer.php' ?>