<?php
$students = [
            '11' => ['А' => ['Алексей', 'Дима', 'Артём', 'Даша' ],
                     'Б' => ['Александр', 'Петр', 'Надя', 'Света' ],
                     'В' => ['Владислав', 'Ксения', 'Вероника']],
            '10'=> ['А' => ['Саша', 'Ксюща', 'Надежда', 'Виктория', 'Вадим' ],
                    'Б' => ['Алексей'],
                    'В' => ['Юра', 'Никита', 'Анна', 'Катя' ]],
            '9' => ['А' => ['Валентин', 'Полина', 'Настя', 'Лена' ],
                    'Б' => ['Павел', 'Дима', 'Александр', 'Армен' ],
                    'В' => ['Святослав', 'Юля', 'Регина', 'Яков' ]],
];
print_r($students);
$storage = [
    'Игрушки' => 49,
    'Одежда' => 145,
    'Автомобили' => 3,
    'Самолеты' => 1,
    'Техника' => 22,
    'Бумага' => 18763,
    'Цветы' => 587
];
print_r($storage);
$dinner = [
    'Понедельник' => ['Салат' => 23,
                      'Суп' => 123,
                      'Второе' => 45],
    'Вторник'=> ['Салат' => 23,
                 'Суп' => 123,
                 'Второе' => 45],
    'Среда' => ['Салат' => 23,
                'Суп' => 123,
                'Второе' => 45],
    'Четверг' => ['Салат' => 23,
                  'Суп' => 123,
                  'Второе' => 45],
    'Пятница'=> ['Салат' => 23,
                 'Суп' => 123,
                 'Второе' => 45],
];
print_r($dinner);
$famili = [
    'Петр' => [ 41, 'Отец'],
    'Ольга' => [ 41, 'Мать'],
    'Михаил' => [ 73, 'Дедушка'],
    'Александр' => [ 68, 'Дедушка'],
    'Валентина' => [ 67, 'Бабушка'],
    'Валентина2' => [ 65, 'Бабушка']
];
print_r($famili);