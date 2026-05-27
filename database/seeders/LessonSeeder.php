<?php

namespace Database\Seeders;

use App\Models\Answer;
use App\Models\Lesson;
use App\Models\Question;
use App\Models\Section;
use App\Models\Test;
use App\Models\Topic;
use Illuminate\Database\Seeder;

class LessonSeeder extends Seeder
{
    public function run(): void
    {
        $data = array (
  0 => 
  array (
    'title' => 'Граматика',
    'type' => 'grammar',
    'slug' => 'grammar',
    'description' => 'Короткі правила, приклади речень і тести для тренування часів та конструкцій.',
    'topics' => 
    array (
      0 => 
      array (
        'title' => 'Present Simple',
        'order' => 1,
        'lessons' => 
        array (
          0 => 
          array (
            'title' => 'Present Simple: звички та факти',
            'content' => '<h4>Present Simple</h4><p>Використовуємо для звичок, регулярних дій, фактів і розкладів.</p><div class="alert alert-info"><b>Формула:</b> I/You/We/They + verb; He/She/It + verb-s/es.</div><ul><li>I work every day.</li><li>She studies English.</li><li>The train leaves at 8.</li></ul>',
            'order' => 1,
            'test' => 
            array (
              'title' => 'Тест: Present Simple: звички та факти',
              'questions' => 
              array (
                0 => 
                array (
                  'question_text' => 'She ___ English every day.',
                  'type' => 'single',
                  'order' => 1,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'studies',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'study',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'is studying',
                      'is_correct' => false,
                    ),
                  ),
                ),
                1 => 
                array (
                  'question_text' => '___ you like coffee?',
                  'type' => 'single',
                  'order' => 2,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Do',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Does',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Are',
                      'is_correct' => false,
                    ),
                  ),
                ),
                2 => 
                array (
                  'question_text' => 'He ___ not play tennis.',
                  'type' => 'single',
                  'order' => 3,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'does',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'do',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'is',
                      'is_correct' => false,
                    ),
                  ),
                ),
                3 => 
                array (
                  'question_text' => 'My parents ___ in Lviv.',
                  'type' => 'single',
                  'order' => 4,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'live',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'lives',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'living',
                      'is_correct' => false,
                    ),
                  ),
                ),
                4 => 
                array (
                  'question_text' => 'The shop ___ at 9 a.m.',
                  'type' => 'single',
                  'order' => 5,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'opens',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'open',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'is opening',
                      'is_correct' => false,
                    ),
                  ),
                ),
                5 => 
                array (
                  'question_text' => 'Does Anna ___ here?',
                  'type' => 'single',
                  'order' => 6,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'work',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'works',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'working',
                      'is_correct' => false,
                    ),
                  ),
                ),
                6 => 
                array (
                  'question_text' => 'I usually ___ breakfast at 8.',
                  'type' => 'single',
                  'order' => 7,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'have',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'has',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'am having',
                      'is_correct' => false,
                    ),
                  ),
                ),
                7 => 
                array (
                  'question_text' => 'Tom ___ TV in the evening.',
                  'type' => 'single',
                  'order' => 8,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'watches',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'watch',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'watching',
                      'is_correct' => false,
                    ),
                  ),
                ),
                8 => 
                array (
                  'question_text' => 'We ___ to school by bus.',
                  'type' => 'single',
                  'order' => 9,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'go',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'goes',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'are going',
                      'is_correct' => false,
                    ),
                  ),
                ),
                9 => 
                array (
                  'question_text' => 'It ___ a lot in autumn.',
                  'type' => 'single',
                  'order' => 10,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'rains',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'rain',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'is rain',
                      'is_correct' => false,
                    ),
                  ),
                ),
              ),
            ),
          ),
          1 => 
          array (
            'title' => 'Present Simple: заперечення та питання',
            'content' => '<h4>Present Simple questions</h4><p>Для питань і заперечень використовуємо do/does. Після does основне дієслово не має закінчення -s.</p><ul><li>Do you like tea?</li><li>Does she work here?</li><li>He does not play tennis.</li></ul>',
            'order' => 6,
            'test' => 
            array (
              'title' => 'Тест: Present Simple: заперечення та питання',
              'questions' => 
              array (
                0 => 
                array (
                  'question_text' => 'Питання 1: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 1,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                1 => 
                array (
                  'question_text' => 'Питання 2: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 2,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                2 => 
                array (
                  'question_text' => 'Питання 3: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 3,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                3 => 
                array (
                  'question_text' => 'Питання 4: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 4,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                4 => 
                array (
                  'question_text' => 'Питання 5: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 5,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                5 => 
                array (
                  'question_text' => 'Питання 6: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 6,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                6 => 
                array (
                  'question_text' => 'Питання 7: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 7,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                7 => 
                array (
                  'question_text' => 'Питання 8: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 8,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                8 => 
                array (
                  'question_text' => 'Питання 9: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 9,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                9 => 
                array (
                  'question_text' => 'Питання 10: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 10,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      1 => 
      array (
        'title' => 'Present Continuous',
        'order' => 2,
        'lessons' => 
        array (
          0 => 
          array (
            'title' => 'Present Continuous: дія зараз',
            'content' => '<h4>Present Continuous</h4><p>Описує дію, яка відбувається зараз або тимчасово в цей період.</p><div class="alert alert-info"><b>Формула:</b> am/is/are + verb-ing.</div><ul><li>I am reading now.</li><li>She is cooking dinner.</li><li>They are learning English this month.</li></ul>',
            'order' => 1,
            'test' => 
            array (
              'title' => 'Тест: Present Continuous: дія зараз',
              'questions' => 
              array (
                0 => 
                array (
                  'question_text' => 'I ___ reading now.',
                  'type' => 'single',
                  'order' => 1,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'am',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'is',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'are',
                      'is_correct' => false,
                    ),
                  ),
                ),
                1 => 
                array (
                  'question_text' => 'She ___ dinner at the moment.',
                  'type' => 'single',
                  'order' => 2,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'is cooking',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'cooks',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'cook',
                      'is_correct' => false,
                    ),
                  ),
                ),
                2 => 
                array (
                  'question_text' => 'They ___ football now.',
                  'type' => 'single',
                  'order' => 3,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'are playing',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'is playing',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'play',
                      'is_correct' => false,
                    ),
                  ),
                ),
                3 => 
                array (
                  'question_text' => 'Look! It ___ outside.',
                  'type' => 'single',
                  'order' => 4,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'is raining',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'rains',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'rain',
                      'is_correct' => false,
                    ),
                  ),
                ),
                4 => 
                array (
                  'question_text' => 'We ___ for the test this week.',
                  'type' => 'single',
                  'order' => 5,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'are preparing',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'prepare',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'prepares',
                      'is_correct' => false,
                    ),
                  ),
                ),
                5 => 
                array (
                  'question_text' => 'He ___ to music right now.',
                  'type' => 'single',
                  'order' => 6,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'is listening',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'listens',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'listen',
                      'is_correct' => false,
                    ),
                  ),
                ),
                6 => 
                array (
                  'question_text' => 'What ___ you doing?',
                  'type' => 'single',
                  'order' => 7,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'are',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'do',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'is',
                      'is_correct' => false,
                    ),
                  ),
                ),
                7 => 
                array (
                  'question_text' => 'The children ___ in the garden.',
                  'type' => 'single',
                  'order' => 8,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'are running',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'runs',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'is running',
                      'is_correct' => false,
                    ),
                  ),
                ),
                8 => 
                array (
                  'question_text' => 'I ___ my homework now.',
                  'type' => 'single',
                  'order' => 9,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'am doing',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'do',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'does',
                      'is_correct' => false,
                    ),
                  ),
                ),
                9 => 
                array (
                  'question_text' => 'You ___ very fast today.',
                  'type' => 'single',
                  'order' => 10,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'are speaking',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'speak',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'speaks',
                      'is_correct' => false,
                    ),
                  ),
                ),
              ),
            ),
          ),
          1 => 
          array (
            'title' => 'Present Continuous: тимчасові дії',
            'content' => '<h4>Temporary actions</h4><p>Present Continuous описує дію зараз або тимчасову дію в цей період.</p><ul><li>I am studying English this month.</li><li>She is working on a new project.</li><li>They are staying at a hotel.</li></ul>',
            'order' => 5,
            'test' => 
            array (
              'title' => 'Тест: Present Continuous: тимчасові дії',
              'questions' => 
              array (
                0 => 
                array (
                  'question_text' => 'Питання 1: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 1,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                1 => 
                array (
                  'question_text' => 'Питання 2: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 2,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                2 => 
                array (
                  'question_text' => 'Питання 3: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 3,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                3 => 
                array (
                  'question_text' => 'Питання 4: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 4,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                4 => 
                array (
                  'question_text' => 'Питання 5: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 5,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                5 => 
                array (
                  'question_text' => 'Питання 6: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 6,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                6 => 
                array (
                  'question_text' => 'Питання 7: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 7,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                7 => 
                array (
                  'question_text' => 'Питання 8: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 8,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                8 => 
                array (
                  'question_text' => 'Питання 9: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 9,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                9 => 
                array (
                  'question_text' => 'Питання 10: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 10,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      2 => 
      array (
        'title' => 'Past Simple',
        'order' => 3,
        'lessons' => 
        array (
          0 => 
          array (
            'title' => 'Past Simple: події в минулому',
            'content' => '<h4>Past Simple</h4><p>Використовуємо для завершених дій у минулому: yesterday, last week, in 2020.</p><div class="alert alert-info"><b>Формула:</b> regular verb + -ed або друга форма неправильного дієслова.</div><ul><li>I visited my friend yesterday.</li><li>She went to school.</li><li>They did not watch TV.</li></ul>',
            'order' => 1,
            'test' => 
            array (
              'title' => 'Тест: Past Simple: події в минулому',
              'questions' => 
              array (
                0 => 
                array (
                  'question_text' => 'I ___ my room yesterday.',
                  'type' => 'single',
                  'order' => 1,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'cleaned',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'clean',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'am cleaning',
                      'is_correct' => false,
                    ),
                  ),
                ),
                1 => 
                array (
                  'question_text' => 'She ___ to London last year.',
                  'type' => 'single',
                  'order' => 2,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'went',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'goes',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'going',
                      'is_correct' => false,
                    ),
                  ),
                ),
                2 => 
                array (
                  'question_text' => 'They ___ a movie yesterday.',
                  'type' => 'single',
                  'order' => 3,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'watched',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'watch',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'watches',
                      'is_correct' => false,
                    ),
                  ),
                ),
                3 => 
                array (
                  'question_text' => 'We ___ pizza last night.',
                  'type' => 'single',
                  'order' => 4,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'ate',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'eat',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'eats',
                      'is_correct' => false,
                    ),
                  ),
                ),
                4 => 
                array (
                  'question_text' => 'Did you ___ the book?',
                  'type' => 'single',
                  'order' => 5,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'read',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'readed',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'reads',
                      'is_correct' => false,
                    ),
                  ),
                ),
                5 => 
                array (
                  'question_text' => 'He ___ not play football.',
                  'type' => 'single',
                  'order' => 6,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'did',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'does',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'is',
                      'is_correct' => false,
                    ),
                  ),
                ),
                6 => 
                array (
                  'question_text' => 'My dad ___ home late.',
                  'type' => 'single',
                  'order' => 7,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'came',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'come',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'comes',
                      'is_correct' => false,
                    ),
                  ),
                ),
                7 => 
                array (
                  'question_text' => 'The lesson ___ five minutes ago.',
                  'type' => 'single',
                  'order' => 8,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'started',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'starts',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'start',
                      'is_correct' => false,
                    ),
                  ),
                ),
                8 => 
                array (
                  'question_text' => 'I ___ my phone yesterday.',
                  'type' => 'single',
                  'order' => 9,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'lost',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'lose',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'loses',
                      'is_correct' => false,
                    ),
                  ),
                ),
                9 => 
                array (
                  'question_text' => 'They ___ happy last weekend.',
                  'type' => 'single',
                  'order' => 10,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'were',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'was',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'are',
                      'is_correct' => false,
                    ),
                  ),
                ),
              ),
            ),
          ),
          1 => 
          array (
            'title' => 'Past Simple: неправильні дієслова',
            'content' => '<h4>Irregular verbs</h4><p>У Past Simple неправильні дієслова мають окрему другу форму: go - went, see - saw, make - made.</p><ul><li>I went home.</li><li>She saw a film.</li><li>We made dinner.</li></ul>',
            'order' => 6,
            'test' => 
            array (
              'title' => 'Тест: Past Simple: неправильні дієслова',
              'questions' => 
              array (
                0 => 
                array (
                  'question_text' => 'Питання 1: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 1,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                1 => 
                array (
                  'question_text' => 'Питання 2: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 2,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                2 => 
                array (
                  'question_text' => 'Питання 3: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 3,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                3 => 
                array (
                  'question_text' => 'Питання 4: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 4,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                4 => 
                array (
                  'question_text' => 'Питання 5: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 5,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                5 => 
                array (
                  'question_text' => 'Питання 6: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 6,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                6 => 
                array (
                  'question_text' => 'Питання 7: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 7,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                7 => 
                array (
                  'question_text' => 'Питання 8: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 8,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                8 => 
                array (
                  'question_text' => 'Питання 9: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 9,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                9 => 
                array (
                  'question_text' => 'Питання 10: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 10,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      3 => 
      array (
        'title' => 'Present Perfect',
        'order' => 4,
        'lessons' => 
        array (
          0 => 
          array (
            'title' => 'Present Perfect: досвід і результат',
            'content' => '<h4>Present Perfect</h4><p>Показує досвід або результат, важливий зараз. Часто вживаємо з already, yet, ever, never, just.</p><div class="alert alert-info"><b>Формула:</b> have/has + V3.</div><ul><li>I have finished my homework.</li><li>She has never been to Paris.</li><li>Have you seen this film?</li></ul>',
            'order' => 1,
            'test' => 
            array (
              'title' => 'Тест: Present Perfect: досвід і результат',
              'questions' => 
              array (
                0 => 
                array (
                  'question_text' => 'I ___ finished my homework.',
                  'type' => 'single',
                  'order' => 1,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'have',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'has',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'did',
                      'is_correct' => false,
                    ),
                  ),
                ),
                1 => 
                array (
                  'question_text' => 'She ___ never been to Paris.',
                  'type' => 'single',
                  'order' => 2,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'has',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'have',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'was',
                      'is_correct' => false,
                    ),
                  ),
                ),
                2 => 
                array (
                  'question_text' => 'They have ___ this film.',
                  'type' => 'single',
                  'order' => 3,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'seen',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'saw',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'see',
                      'is_correct' => false,
                    ),
                  ),
                ),
                3 => 
                array (
                  'question_text' => 'Have you ___ sushi?',
                  'type' => 'single',
                  'order' => 4,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'tried',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'try',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'trying',
                      'is_correct' => false,
                    ),
                  ),
                ),
                4 => 
                array (
                  'question_text' => 'He has ___ arrived.',
                  'type' => 'single',
                  'order' => 5,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'just',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'yesterday',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'last year',
                      'is_correct' => false,
                    ),
                  ),
                ),
                5 => 
                array (
                  'question_text' => 'We have not finished it ___.',
                  'type' => 'single',
                  'order' => 6,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'yet',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'already',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'yesterday',
                      'is_correct' => false,
                    ),
                  ),
                ),
                6 => 
                array (
                  'question_text' => 'Tom has ___ his keys.',
                  'type' => 'single',
                  'order' => 7,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'lost',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'lose',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'losing',
                      'is_correct' => false,
                    ),
                  ),
                ),
                7 => 
                array (
                  'question_text' => 'I have ___ read this book.',
                  'type' => 'single',
                  'order' => 8,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'already',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'last night',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'ago',
                      'is_correct' => false,
                    ),
                  ),
                ),
                8 => 
                array (
                  'question_text' => 'Has she ___ the email?',
                  'type' => 'single',
                  'order' => 9,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'sent',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'send',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'sending',
                      'is_correct' => false,
                    ),
                  ),
                ),
                9 => 
                array (
                  'question_text' => 'They have ___ lunch.',
                  'type' => 'single',
                  'order' => 10,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'had',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'have',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'has',
                      'is_correct' => false,
                    ),
                  ),
                ),
              ),
            ),
          ),
          1 => 
          array (
            'title' => 'Present Perfect: already, yet, never',
            'content' => '<h4>Present Perfect markers</h4><p>Already означає "вже", yet - "ще/вже" у питаннях і запереченнях, never - "ніколи".</p><ul><li>I have already finished.</li><li>Have you eaten yet?</li><li>She has never travelled abroad.</li></ul>',
            'order' => 6,
            'test' => 
            array (
              'title' => 'Тест: Present Perfect: already, yet, never',
              'questions' => 
              array (
                0 => 
                array (
                  'question_text' => 'Питання 1: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 1,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                1 => 
                array (
                  'question_text' => 'Питання 2: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 2,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                2 => 
                array (
                  'question_text' => 'Питання 3: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 3,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                3 => 
                array (
                  'question_text' => 'Питання 4: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 4,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                4 => 
                array (
                  'question_text' => 'Питання 5: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 5,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                5 => 
                array (
                  'question_text' => 'Питання 6: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 6,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                6 => 
                array (
                  'question_text' => 'Питання 7: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 7,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                7 => 
                array (
                  'question_text' => 'Питання 8: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 8,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                8 => 
                array (
                  'question_text' => 'Питання 9: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 9,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                9 => 
                array (
                  'question_text' => 'Питання 10: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 10,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      4 => 
      array (
        'title' => 'Future Simple',
        'order' => 5,
        'lessons' => 
        array (
          0 => 
          array (
            'title' => 'Future Simple: рішення і прогнози',
            'content' => '<h4>Future Simple</h4><p>Використовуємо для прогнозів, обіцянок і швидких рішень у момент мовлення.</p><div class="alert alert-info"><b>Формула:</b> will + verb.</div><ul><li>I will help you.</li><li>It will rain tomorrow.</li><li>They will not be late.</li></ul>',
            'order' => 1,
            'test' => 
            array (
              'title' => 'Тест: Future Simple: рішення і прогнози',
              'questions' => 
              array (
                0 => 
                array (
                  'question_text' => 'I ___ call you tomorrow.',
                  'type' => 'single',
                  'order' => 1,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'will',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'am',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'did',
                      'is_correct' => false,
                    ),
                  ),
                ),
                1 => 
                array (
                  'question_text' => 'She is going ___ travel next week.',
                  'type' => 'single',
                  'order' => 2,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'to',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'will',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'for',
                      'is_correct' => false,
                    ),
                  ),
                ),
                2 => 
                array (
                  'question_text' => 'We ___ meeting at 5 p.m.',
                  'type' => 'single',
                  'order' => 3,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'are',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'will',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'do',
                      'is_correct' => false,
                    ),
                  ),
                ),
                3 => 
                array (
                  'question_text' => 'They will ___ late.',
                  'type' => 'single',
                  'order' => 4,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'be',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'are',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'being',
                      'is_correct' => false,
                    ),
                  ),
                ),
                4 => 
                array (
                  'question_text' => 'I think it ___ rain tomorrow.',
                  'type' => 'single',
                  'order' => 5,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'will',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'is',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'does',
                      'is_correct' => false,
                    ),
                  ),
                ),
                5 => 
                array (
                  'question_text' => 'He is going to ___ a new phone.',
                  'type' => 'single',
                  'order' => 6,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'buy',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'buys',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'bought',
                      'is_correct' => false,
                    ),
                  ),
                ),
                6 => 
                array (
                  'question_text' => 'Will you ___ me?',
                  'type' => 'single',
                  'order' => 7,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'help',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'helps',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'helped',
                      'is_correct' => false,
                    ),
                  ),
                ),
                7 => 
                array (
                  'question_text' => 'The lesson will ___ soon.',
                  'type' => 'single',
                  'order' => 8,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'start',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'starts',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'started',
                      'is_correct' => false,
                    ),
                  ),
                ),
                8 => 
                array (
                  'question_text' => 'I am ___ my dentist tomorrow.',
                  'type' => 'single',
                  'order' => 9,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'seeing',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'see',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'saw',
                      'is_correct' => false,
                    ),
                  ),
                ),
                9 => 
                array (
                  'question_text' => 'She will not ___ today.',
                  'type' => 'single',
                  'order' => 10,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'work',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'works',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'worked',
                      'is_correct' => false,
                    ),
                  ),
                ),
              ),
            ),
          ),
          1 => 
          array (
            'title' => 'Future Simple: обіцянки та рішення',
            'content' => '<h4>Will</h4><p>Will часто показує швидке рішення, обіцянку або прогноз.</p><ul><li>I will help you.</li><li>I think it will be sunny.</li><li>We will call later.</li></ul>',
            'order' => 6,
            'test' => 
            array (
              'title' => 'Тест: Future Simple: обіцянки та рішення',
              'questions' => 
              array (
                0 => 
                array (
                  'question_text' => 'Питання 1: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 1,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                1 => 
                array (
                  'question_text' => 'Питання 2: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 2,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                2 => 
                array (
                  'question_text' => 'Питання 3: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 3,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                3 => 
                array (
                  'question_text' => 'Питання 4: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 4,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                4 => 
                array (
                  'question_text' => 'Питання 5: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 5,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                5 => 
                array (
                  'question_text' => 'Питання 6: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 6,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                6 => 
                array (
                  'question_text' => 'Питання 7: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 7,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                7 => 
                array (
                  'question_text' => 'Питання 8: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 8,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                8 => 
                array (
                  'question_text' => 'Питання 9: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 9,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                9 => 
                array (
                  'question_text' => 'Питання 10: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 10,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      5 => 
      array (
        'title' => 'Modal Verbs',
        'order' => 6,
        'lessons' => 
        array (
          0 => 
          array (
            'title' => 'Modal verbs: can, must, should',
            'content' => '<h4>Modal verbs</h4><p>Модальні дієслова додають значення можливості, обовʼязку або поради.</p><div class="alert alert-info"><b>Правило:</b> після can, must, should використовуємо дієслово без to.</div><ul><li>I can swim.</li><li>You must wear a seat belt.</li><li>She should sleep more.</li></ul>',
            'order' => 1,
            'test' => 
            array (
              'title' => 'Тест: Modal verbs: can, must, should',
              'questions' => 
              array (
                0 => 
                array (
                  'question_text' => 'I ___ swim very well.',
                  'type' => 'single',
                  'order' => 1,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'can',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'must',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'should to',
                      'is_correct' => false,
                    ),
                  ),
                ),
                1 => 
                array (
                  'question_text' => 'You ___ do your homework.',
                  'type' => 'single',
                  'order' => 2,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'must',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'can to',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'must to',
                      'is_correct' => false,
                    ),
                  ),
                ),
                2 => 
                array (
                  'question_text' => 'She should ___ more water.',
                  'type' => 'single',
                  'order' => 3,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'drink',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'drinks',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'drank',
                      'is_correct' => false,
                    ),
                  ),
                ),
                3 => 
                array (
                  'question_text' => 'Can he ___ a bike?',
                  'type' => 'single',
                  'order' => 4,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'ride',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'rides',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'rode',
                      'is_correct' => false,
                    ),
                  ),
                ),
                4 => 
                array (
                  'question_text' => 'You ___ not smoke here.',
                  'type' => 'single',
                  'order' => 5,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'must',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'should to',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'can to',
                      'is_correct' => false,
                    ),
                  ),
                ),
                5 => 
                array (
                  'question_text' => 'We should ___ a doctor.',
                  'type' => 'single',
                  'order' => 6,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'see',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'sees',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'saw',
                      'is_correct' => false,
                    ),
                  ),
                ),
                6 => 
                array (
                  'question_text' => 'They can ___ fast.',
                  'type' => 'single',
                  'order' => 7,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'run',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'runs',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'running',
                      'is_correct' => false,
                    ),
                  ),
                ),
                7 => 
                array (
                  'question_text' => 'Must I ___ this form?',
                  'type' => 'single',
                  'order' => 8,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'fill in',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'fills in',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'filled in',
                      'is_correct' => false,
                    ),
                  ),
                ),
                8 => 
                array (
                  'question_text' => 'You should not ___ so late.',
                  'type' => 'single',
                  'order' => 9,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'sleep',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'sleeps',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'slept',
                      'is_correct' => false,
                    ),
                  ),
                ),
                9 => 
                array (
                  'question_text' => 'She can ___ the piano.',
                  'type' => 'single',
                  'order' => 10,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'play',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'plays',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'played',
                      'is_correct' => false,
                    ),
                  ),
                ),
              ),
            ),
          ),
          1 => 
          array (
            'title' => 'Modal verbs: дозвіл, порада, обовʼязок',
            'content' => '<h4>Can, should, must</h4><p>Can показує можливість або дозвіл, should - пораду, must - сильний обовʼязок.</p><ul><li>You can open the window.</li><li>You should rest.</li><li>You must follow the rules.</li></ul>',
            'order' => 5,
            'test' => 
            array (
              'title' => 'Тест: Modal verbs: дозвіл, порада, обовʼязок',
              'questions' => 
              array (
                0 => 
                array (
                  'question_text' => 'Питання 1: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 1,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                1 => 
                array (
                  'question_text' => 'Питання 2: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 2,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                2 => 
                array (
                  'question_text' => 'Питання 3: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 3,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                3 => 
                array (
                  'question_text' => 'Питання 4: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 4,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                4 => 
                array (
                  'question_text' => 'Питання 5: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 5,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                5 => 
                array (
                  'question_text' => 'Питання 6: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 6,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                6 => 
                array (
                  'question_text' => 'Питання 7: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 7,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                7 => 
                array (
                  'question_text' => 'Питання 8: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 8,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                8 => 
                array (
                  'question_text' => 'Питання 9: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 9,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                9 => 
                array (
                  'question_text' => 'Питання 10: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 10,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      6 => 
      array (
        'title' => 'Past Continuous',
        'order' => 7,
        'lessons' => 
        array (
          0 => 
          array (
            'title' => 'Past Continuous: дія тривала у минулому',
            'content' => '<h4>Past Continuous</h4><p>Використовуємо для дії, яка тривала у певний момент у минулому.</p><div class="alert alert-info"><b>Формула:</b> was/were + verb-ing.</div><ul><li>I was reading at 7 p.m.</li><li>They were playing football.</li><li>She was cooking when I called.</li></ul>',
            'order' => 3,
            'test' => 
            array (
              'title' => 'Тест: Past Continuous: дія тривала у минулому',
              'questions' => 
              array (
                0 => 
                array (
                  'question_text' => 'Питання 1: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 1,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                1 => 
                array (
                  'question_text' => 'Питання 2: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 2,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                2 => 
                array (
                  'question_text' => 'Питання 3: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 3,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                3 => 
                array (
                  'question_text' => 'Питання 4: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 4,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                4 => 
                array (
                  'question_text' => 'Питання 5: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 5,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                5 => 
                array (
                  'question_text' => 'Питання 6: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 6,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                6 => 
                array (
                  'question_text' => 'Питання 7: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 7,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                7 => 
                array (
                  'question_text' => 'Питання 8: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 8,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                8 => 
                array (
                  'question_text' => 'Питання 9: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 9,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                9 => 
                array (
                  'question_text' => 'Питання 10: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 10,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      7 => 
      array (
        'title' => 'Past Perfect',
        'order' => 8,
        'lessons' => 
        array (
          0 => 
          array (
            'title' => 'Past Perfect: дія раніше іншої минулої дії',
            'content' => '<h4>Past Perfect</h4><p>Показує, що одна дія завершилась до іншої дії в минулому.</p><div class="alert alert-info"><b>Формула:</b> had + V3.</div><ul><li>I had finished before he came.</li><li>She had left by 6.</li><li>They had already eaten.</li></ul>',
            'order' => 3,
            'test' => 
            array (
              'title' => 'Тест: Past Perfect: дія раніше іншої минулої дії',
              'questions' => 
              array (
                0 => 
                array (
                  'question_text' => 'Питання 1: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 1,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                1 => 
                array (
                  'question_text' => 'Питання 2: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 2,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                2 => 
                array (
                  'question_text' => 'Питання 3: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 3,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                3 => 
                array (
                  'question_text' => 'Питання 4: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 4,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                4 => 
                array (
                  'question_text' => 'Питання 5: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 5,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                5 => 
                array (
                  'question_text' => 'Питання 6: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 6,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                6 => 
                array (
                  'question_text' => 'Питання 7: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 7,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                7 => 
                array (
                  'question_text' => 'Питання 8: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 8,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                8 => 
                array (
                  'question_text' => 'Питання 9: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 9,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                9 => 
                array (
                  'question_text' => 'Питання 10: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 10,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      8 => 
      array (
        'title' => 'Past Perfect Continuous',
        'order' => 9,
        'lessons' => 
        array (
          0 => 
          array (
            'title' => 'Past Perfect Continuous: тривалість до моменту в минулому',
            'content' => '<h4>Past Perfect Continuous</h4><p>Показує, як довго дія тривала до певного моменту в минулому.</p><div class="alert alert-info"><b>Формула:</b> had been + verb-ing.</div><ul><li>I had been studying for two hours.</li><li>She had been working all day.</li><li>They had been waiting since morning.</li></ul>',
            'order' => 3,
            'test' => 
            array (
              'title' => 'Тест: Past Perfect Continuous: тривалість до моменту в минулому',
              'questions' => 
              array (
                0 => 
                array (
                  'question_text' => 'Питання 1: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 1,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                1 => 
                array (
                  'question_text' => 'Питання 2: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 2,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                2 => 
                array (
                  'question_text' => 'Питання 3: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 3,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                3 => 
                array (
                  'question_text' => 'Питання 4: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 4,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                4 => 
                array (
                  'question_text' => 'Питання 5: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 5,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                5 => 
                array (
                  'question_text' => 'Питання 6: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 6,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                6 => 
                array (
                  'question_text' => 'Питання 7: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 7,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                7 => 
                array (
                  'question_text' => 'Питання 8: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 8,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                8 => 
                array (
                  'question_text' => 'Питання 9: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 9,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                9 => 
                array (
                  'question_text' => 'Питання 10: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 10,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      9 => 
      array (
        'title' => 'Future Tenses',
        'order' => 10,
        'lessons' => 
        array (
          0 => 
          array (
            'title' => 'Future tenses: will, be going to, Present Continuous',
            'content' => '<h4>Future tenses</h4><p>Майбутнє можна передати різними способами: will для прогнозів і рішень, be going to для планів, Present Continuous для домовленостей.</p><ul><li>I will call you.</li><li>She is going to travel.</li><li>We are meeting at 5.</li></ul>',
            'order' => 3,
            'test' => 
            array (
              'title' => 'Тест: Future tenses: will, be going to, Present Continuous',
              'questions' => 
              array (
                0 => 
                array (
                  'question_text' => 'Питання 1: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 1,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                1 => 
                array (
                  'question_text' => 'Питання 2: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 2,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                2 => 
                array (
                  'question_text' => 'Питання 3: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 3,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                3 => 
                array (
                  'question_text' => 'Питання 4: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 4,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                4 => 
                array (
                  'question_text' => 'Питання 5: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 5,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                5 => 
                array (
                  'question_text' => 'Питання 6: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 6,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                6 => 
                array (
                  'question_text' => 'Питання 7: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 7,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                7 => 
                array (
                  'question_text' => 'Питання 8: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 8,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                8 => 
                array (
                  'question_text' => 'Питання 9: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 9,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                9 => 
                array (
                  'question_text' => 'Питання 10: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 10,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  1 => 
  array (
    'title' => 'Словник',
    'type' => 'vocabulary',
    'slug' => 'vocabulary',
    'description' => 'Тематичні слова з перекладом, прикладами та тестами для запамʼятовування.',
    'topics' => 
    array (
      0 => 
      array (
        'title' => 'Кольори',
        'order' => 1,
        'lessons' => 
        array (
          0 => 
          array (
            'title' => 'Кольори англійською',
            'content' => '<h4>Colors</h4>
<p>Більше кольорів для опису речей, одягу, природи та настрою.</p>
<table class="table table-bordered table-striped">
    <tr><th>English</th><th>Українською</th></tr>
    <tr><td>red</td><td>червоний</td></tr><tr><td>blue</td><td>синій</td></tr><tr><td>green</td><td>зелений</td></tr><tr><td>yellow</td><td>жовтий</td></tr><tr><td>black</td><td>чорний</td></tr><tr><td>white</td><td>білий</td></tr><tr><td>orange</td><td>помаранчевий</td></tr><tr><td>purple</td><td>фіолетовий</td></tr><tr><td>brown</td><td>коричневий</td></tr><tr><td>grey</td><td>сірий</td></tr><tr><td>pink</td><td>рожевий</td></tr><tr><td>gold</td><td>золотий</td></tr><tr><td>silver</td><td>срібний</td></tr><tr><td>light blue</td><td>блакитний</td></tr><tr><td>dark green</td><td>темно-зелений</td></tr><tr><td>navy</td><td>темно-синій</td></tr><tr><td>beige</td><td>бежевий</td></tr><tr><td>turquoise</td><td>бірюзовий</td></tr>
</table>
<div class="alert alert-info">Приклад: The sky is light blue today. - Небо сьогодні блакитне.</div>',
            'order' => 1,
            'test' => 
            array (
              'title' => 'Тест: Кольори англійською',
              'questions' => 
              array (
                0 => 
                array (
                  'question_text' => 'red перекладається як...',
                  'type' => 'single',
                  'order' => 1,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'червоний',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'зелений',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'синій',
                      'is_correct' => false,
                    ),
                  ),
                ),
                1 => 
                array (
                  'question_text' => 'blue перекладається як...',
                  'type' => 'single',
                  'order' => 2,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'синій',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'жовтий',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'білий',
                      'is_correct' => false,
                    ),
                  ),
                ),
                2 => 
                array (
                  'question_text' => 'green перекладається як...',
                  'type' => 'single',
                  'order' => 3,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'зелений',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'чорний',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'рожевий',
                      'is_correct' => false,
                    ),
                  ),
                ),
                3 => 
                array (
                  'question_text' => 'yellow перекладається як...',
                  'type' => 'single',
                  'order' => 4,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'жовтий',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'сірий',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'фіолетовий',
                      'is_correct' => false,
                    ),
                  ),
                ),
                4 => 
                array (
                  'question_text' => 'black перекладається як...',
                  'type' => 'single',
                  'order' => 5,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'чорний',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'білий',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'помаранчевий',
                      'is_correct' => false,
                    ),
                  ),
                ),
                5 => 
                array (
                  'question_text' => 'white перекладається як...',
                  'type' => 'single',
                  'order' => 6,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'білий',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'коричневий',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'синій',
                      'is_correct' => false,
                    ),
                  ),
                ),
                6 => 
                array (
                  'question_text' => 'purple перекладається як...',
                  'type' => 'single',
                  'order' => 7,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'фіолетовий',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'жовтий',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'зелений',
                      'is_correct' => false,
                    ),
                  ),
                ),
                7 => 
                array (
                  'question_text' => 'brown перекладається як...',
                  'type' => 'single',
                  'order' => 8,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'коричневий',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'червоний',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'білий',
                      'is_correct' => false,
                    ),
                  ),
                ),
                8 => 
                array (
                  'question_text' => 'bright перекладається як...',
                  'type' => 'single',
                  'order' => 9,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'яскравий',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'темний',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'прозорий',
                      'is_correct' => false,
                    ),
                  ),
                ),
                9 => 
                array (
                  'question_text' => 'transparent перекладається як...',
                  'type' => 'single',
                  'order' => 10,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'прозорий',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'барвистий',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'темний',
                      'is_correct' => false,
                    ),
                  ),
                ),
              ),
            ),
          ),
          1 => 
          array (
            'title' => 'Colors: shades and descriptions',
            'content' => '<h4>Color shades</h4><p>Список слів для вивчення з перекладом.</p><table class="table table-bordered table-striped"><tr><th>English</th><th>Українською</th></tr><tr><td>bright</td><td>яскравий</td></tr><tr><td>dark</td><td>темний</td></tr><tr><td>light</td><td>світлий</td></tr><tr><td>pale</td><td>блідий</td></tr><tr><td>colorful</td><td>барвистий</td></tr><tr><td>golden</td><td>золотистий</td></tr><tr><td>silver</td><td>срібний</td></tr><tr><td>violet</td><td>фіалковий</td></tr><tr><td>crimson</td><td>малиновий</td></tr><tr><td>navy blue</td><td>темно-синій</td></tr><tr><td>sky blue</td><td>небесно-блакитний</td></tr><tr><td>olive</td><td>оливковий</td></tr><tr><td>cream</td><td>кремовий</td></tr><tr><td>transparent</td><td>прозорий</td></tr><tr><td>multicolored</td><td>різнокольоровий</td></tr></table>',
            'order' => 5,
            'test' => 
            array (
              'title' => 'Тест: Colors: shades and descriptions',
              'questions' => 
              array (
                0 => 
                array (
                  'question_text' => 'Питання 1: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 1,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                1 => 
                array (
                  'question_text' => 'Питання 2: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 2,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                2 => 
                array (
                  'question_text' => 'Питання 3: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 3,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                3 => 
                array (
                  'question_text' => 'Питання 4: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 4,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                4 => 
                array (
                  'question_text' => 'Питання 5: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 5,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                5 => 
                array (
                  'question_text' => 'Питання 6: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 6,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                6 => 
                array (
                  'question_text' => 'Питання 7: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 7,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                7 => 
                array (
                  'question_text' => 'Питання 8: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 8,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                8 => 
                array (
                  'question_text' => 'Питання 9: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 9,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                9 => 
                array (
                  'question_text' => 'Питання 10: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 10,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      1 => 
      array (
        'title' => 'Погода',
        'order' => 2,
        'lessons' => 
        array (
          0 => 
          array (
            'title' => 'Weather: погода',
            'content' => '<h4>Weather</h4>
<p>Слова для опису погоди, температури та природних явищ.</p>
<table class="table table-bordered table-striped">
    <tr><th>English</th><th>Українською</th></tr>
    <tr><td>sunny</td><td>сонячно</td></tr><tr><td>rainy</td><td>дощово</td></tr><tr><td>cloudy</td><td>хмарно</td></tr><tr><td>windy</td><td>вітряно</td></tr><tr><td>snowy</td><td>сніжно</td></tr><tr><td>hot</td><td>спекотно</td></tr><tr><td>cold</td><td>холодно</td></tr><tr><td>warm</td><td>тепло</td></tr><tr><td>cool</td><td>прохолодно</td></tr><tr><td>foggy</td><td>туманно</td></tr><tr><td>stormy</td><td>штормово</td></tr><tr><td>dry</td><td>сухо</td></tr><tr><td>wet</td><td>мокро</td></tr><tr><td>freezing</td><td>морозно</td></tr><tr><td>thunder</td><td>грім</td></tr><tr><td>lightning</td><td>блискавка</td></tr><tr><td>forecast</td><td>прогноз погоди</td></tr><tr><td>temperature</td><td>температура</td></tr>
</table>
<div class="alert alert-info">Приклад: The forecast says it will be rainy. - Прогноз каже, що буде дощово.</div>',
            'order' => 1,
            'test' => 
            array (
              'title' => 'Тест: Weather: погода',
              'questions' => 
              array (
                0 => 
                array (
                  'question_text' => 'sunny перекладається як...',
                  'type' => 'single',
                  'order' => 1,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'сонячно',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'дощово',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'хмарно',
                      'is_correct' => false,
                    ),
                  ),
                ),
                1 => 
                array (
                  'question_text' => 'rainy перекладається як...',
                  'type' => 'single',
                  'order' => 2,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'дощово',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'вітряно',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'сніжно',
                      'is_correct' => false,
                    ),
                  ),
                ),
                2 => 
                array (
                  'question_text' => 'cloudy перекладається як...',
                  'type' => 'single',
                  'order' => 3,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'хмарно',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'спекотно',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'тепло',
                      'is_correct' => false,
                    ),
                  ),
                ),
                3 => 
                array (
                  'question_text' => 'windy перекладається як...',
                  'type' => 'single',
                  'order' => 4,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'вітряно',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'морозно',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'сухо',
                      'is_correct' => false,
                    ),
                  ),
                ),
                4 => 
                array (
                  'question_text' => 'snowy перекладається як...',
                  'type' => 'single',
                  'order' => 5,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'сніжно',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'туманно',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'сонячно',
                      'is_correct' => false,
                    ),
                  ),
                ),
                5 => 
                array (
                  'question_text' => 'forecast перекладається як...',
                  'type' => 'single',
                  'order' => 6,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'прогноз',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'градус',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'лід',
                      'is_correct' => false,
                    ),
                  ),
                ),
                6 => 
                array (
                  'question_text' => 'umbrella перекладається як...',
                  'type' => 'single',
                  'order' => 7,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'парасоля',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'дощовик',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'хмара',
                      'is_correct' => false,
                    ),
                  ),
                ),
                7 => 
                array (
                  'question_text' => 'spring перекладається як...',
                  'type' => 'single',
                  'order' => 8,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'весна',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'осінь',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'зима',
                      'is_correct' => false,
                    ),
                  ),
                ),
                8 => 
                array (
                  'question_text' => 'winter перекладається як...',
                  'type' => 'single',
                  'order' => 9,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'зима',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'літо',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'весна',
                      'is_correct' => false,
                    ),
                  ),
                ),
                9 => 
                array (
                  'question_text' => 'heat перекладається як...',
                  'type' => 'single',
                  'order' => 10,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'спека',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'вітер',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'сніг',
                      'is_correct' => false,
                    ),
                  ),
                ),
              ),
            ),
          ),
          1 => 
          array (
            'title' => 'Weather: seasons and weather phrases',
            'content' => '<h4>Weather phrases</h4><p>Список слів для вивчення з перекладом.</p><table class="table table-bordered table-striped"><tr><th>English</th><th>Українською</th></tr><tr><td>season</td><td>пора року</td></tr><tr><td>spring</td><td>весна</td></tr><tr><td>summer</td><td>літо</td></tr><tr><td>autumn</td><td>осінь</td></tr><tr><td>winter</td><td>зима</td></tr><tr><td>forecast</td><td>прогноз</td></tr><tr><td>degree</td><td>градус</td></tr><tr><td>raincoat</td><td>дощовик</td></tr><tr><td>umbrella</td><td>парасоля</td></tr><tr><td>snowflake</td><td>сніжинка</td></tr><tr><td>heat</td><td>спека</td></tr><tr><td>ice</td><td>лід</td></tr><tr><td>cloud</td><td>хмара</td></tr><tr><td>wind</td><td>вітер</td></tr><tr><td>sky</td><td>небо</td></tr></table>',
            'order' => 6,
            'test' => 
            array (
              'title' => 'Тест: Weather: seasons and weather phrases',
              'questions' => 
              array (
                0 => 
                array (
                  'question_text' => 'Питання 1: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 1,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                1 => 
                array (
                  'question_text' => 'Питання 2: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 2,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                2 => 
                array (
                  'question_text' => 'Питання 3: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 3,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                3 => 
                array (
                  'question_text' => 'Питання 4: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 4,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                4 => 
                array (
                  'question_text' => 'Питання 5: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 5,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                5 => 
                array (
                  'question_text' => 'Питання 6: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 6,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                6 => 
                array (
                  'question_text' => 'Питання 7: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 7,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                7 => 
                array (
                  'question_text' => 'Питання 8: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 8,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                8 => 
                array (
                  'question_text' => 'Питання 9: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 9,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                9 => 
                array (
                  'question_text' => 'Питання 10: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 10,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      2 => 
      array (
        'title' => 'Їжа',
        'order' => 3,
        'lessons' => 
        array (
          0 => 
          array (
            'title' => 'Food: їжа',
            'content' => '<h4>Food</h4>
<p>Базові слова про їжу, напої та страви для щоденного спілкування.</p>
<table class="table table-bordered table-striped">
    <tr><th>English</th><th>Українською</th></tr>
    <tr><td>bread</td><td>хліб</td></tr><tr><td>cheese</td><td>сир</td></tr><tr><td>apple</td><td>яблуко</td></tr><tr><td>soup</td><td>суп</td></tr><tr><td>fish</td><td>риба</td></tr><tr><td>chicken</td><td>курка</td></tr><tr><td>rice</td><td>рис</td></tr><tr><td>water</td><td>вода</td></tr><tr><td>tea</td><td>чай</td></tr><tr><td>vegetables</td><td>овочі</td></tr><tr><td>fruit</td><td>фрукти</td></tr><tr><td>meat</td><td>мʼясо</td></tr><tr><td>egg</td><td>яйце</td></tr><tr><td>butter</td><td>масло</td></tr><tr><td>milk</td><td>молоко</td></tr><tr><td>juice</td><td>сік</td></tr><tr><td>potato</td><td>картопля</td></tr><tr><td>salad</td><td>салат</td></tr><tr><td>breakfast</td><td>сніданок</td></tr><tr><td>dinner</td><td>вечеря</td></tr>
</table>
<div class="alert alert-info">Приклад: I usually have eggs and tea for breakfast. - Зазвичай я їм яйця і пʼю чай на сніданок.</div>',
            'order' => 1,
            'test' => 
            array (
              'title' => 'Тест: Food: їжа',
              'questions' => 
              array (
                0 => 
                array (
                  'question_text' => 'breakfast перекладається як...',
                  'type' => 'single',
                  'order' => 1,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'сніданок',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'вечеря',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'перекус',
                      'is_correct' => false,
                    ),
                  ),
                ),
                1 => 
                array (
                  'question_text' => 'lunch перекладається як...',
                  'type' => 'single',
                  'order' => 2,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'обід',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'сніданок',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'рахунок',
                      'is_correct' => false,
                    ),
                  ),
                ),
                2 => 
                array (
                  'question_text' => 'dinner перекладається як...',
                  'type' => 'single',
                  'order' => 3,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'вечеря',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'меню',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'вода',
                      'is_correct' => false,
                    ),
                  ),
                ),
                3 => 
                array (
                  'question_text' => 'sweet перекладається як...',
                  'type' => 'single',
                  'order' => 4,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'солодкий',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'солоний',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'кислий',
                      'is_correct' => false,
                    ),
                  ),
                ),
                4 => 
                array (
                  'question_text' => 'salty перекладається як...',
                  'type' => 'single',
                  'order' => 5,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'солоний',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'гострий',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'свіжий',
                      'is_correct' => false,
                    ),
                  ),
                ),
                5 => 
                array (
                  'question_text' => 'spicy перекладається як...',
                  'type' => 'single',
                  'order' => 6,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'гострий',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'голодний',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'кислий',
                      'is_correct' => false,
                    ),
                  ),
                ),
                6 => 
                array (
                  'question_text' => 'hungry перекладається як...',
                  'type' => 'single',
                  'order' => 7,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'голодний',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'спраглий',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'свіжий',
                      'is_correct' => false,
                    ),
                  ),
                ),
                7 => 
                array (
                  'question_text' => 'thirsty перекладається як...',
                  'type' => 'single',
                  'order' => 8,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'спраглий',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'солодкий',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'солоний',
                      'is_correct' => false,
                    ),
                  ),
                ),
                8 => 
                array (
                  'question_text' => 'menu перекладається як...',
                  'type' => 'single',
                  'order' => 9,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'меню',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'рахунок',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'замовлення',
                      'is_correct' => false,
                    ),
                  ),
                ),
                9 => 
                array (
                  'question_text' => 'bill перекладається як...',
                  'type' => 'single',
                  'order' => 10,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'рахунок',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'сніданок',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'страва',
                      'is_correct' => false,
                    ),
                  ),
                ),
              ),
            ),
          ),
          1 => 
          array (
            'title' => 'Food: meals and taste',
            'content' => '<h4>Meals and taste</h4><p>Список слів для вивчення з перекладом.</p><table class="table table-bordered table-striped"><tr><th>English</th><th>Українською</th></tr><tr><td>meal</td><td>прийом їжі</td></tr><tr><td>breakfast</td><td>сніданок</td></tr><tr><td>lunch</td><td>обід</td></tr><tr><td>dinner</td><td>вечеря</td></tr><tr><td>snack</td><td>перекус</td></tr><tr><td>sweet</td><td>солодкий</td></tr><tr><td>salty</td><td>солоний</td></tr><tr><td>sour</td><td>кислий</td></tr><tr><td>spicy</td><td>гострий</td></tr><tr><td>fresh</td><td>свіжий</td></tr><tr><td>hungry</td><td>голодний</td></tr><tr><td>thirsty</td><td>спраглий</td></tr><tr><td>menu</td><td>меню</td></tr><tr><td>order</td><td>замовляти</td></tr><tr><td>bill</td><td>рахунок</td></tr></table>',
            'order' => 6,
            'test' => 
            array (
              'title' => 'Тест: Food: meals and taste',
              'questions' => 
              array (
                0 => 
                array (
                  'question_text' => 'Питання 1: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 1,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                1 => 
                array (
                  'question_text' => 'Питання 2: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 2,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                2 => 
                array (
                  'question_text' => 'Питання 3: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 3,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                3 => 
                array (
                  'question_text' => 'Питання 4: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 4,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                4 => 
                array (
                  'question_text' => 'Питання 5: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 5,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                5 => 
                array (
                  'question_text' => 'Питання 6: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 6,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                6 => 
                array (
                  'question_text' => 'Питання 7: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 7,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                7 => 
                array (
                  'question_text' => 'Питання 8: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 8,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                8 => 
                array (
                  'question_text' => 'Питання 9: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 9,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                9 => 
                array (
                  'question_text' => 'Питання 10: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 10,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      3 => 
      array (
        'title' => 'Відпочинок',
        'order' => 4,
        'lessons' => 
        array (
          0 => 
          array (
            'title' => 'Leisure: відпочинок',
            'content' => '<h4>Leisure</h4>
<p>Лексика для дозвілля, подорожей, вихідних і хобі.</p>
<table class="table table-bordered table-striped">
    <tr><th>English</th><th>Українською</th></tr>
    <tr><td>travel</td><td>подорожувати</td></tr><tr><td>beach</td><td>пляж</td></tr><tr><td>movie</td><td>фільм</td></tr><tr><td>music</td><td>музика</td></tr><tr><td>picnic</td><td>пікнік</td></tr><tr><td>holiday</td><td>відпустка</td></tr><tr><td>swimming</td><td>плавання</td></tr><tr><td>hiking</td><td>похід</td></tr><tr><td>game</td><td>гра</td></tr><tr><td>relax</td><td>відпочивати</td></tr><tr><td>camping</td><td>кемпінг</td></tr><tr><td>museum</td><td>музей</td></tr><tr><td>concert</td><td>концерт</td></tr><tr><td>book</td><td>книга</td></tr><tr><td>walk</td><td>прогулянка</td></tr><tr><td>trip</td><td>поїздка</td></tr><tr><td>ticket</td><td>квиток</td></tr><tr><td>hotel</td><td>готель</td></tr><tr><td>sightseeing</td><td>огляд памʼяток</td></tr><tr><td>weekend</td><td>вихідні</td></tr>
</table>
<div class="alert alert-info">Приклад: We are planning a weekend trip. - Ми плануємо поїздку на вихідні.</div>',
            'order' => 1,
            'test' => 
            array (
              'title' => 'Тест: Leisure: відпочинок',
              'questions' => 
              array (
                0 => 
                array (
                  'question_text' => 'hobby перекладається як...',
                  'type' => 'single',
                  'order' => 1,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'хобі',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'подорож',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'багаж',
                      'is_correct' => false,
                    ),
                  ),
                ),
                1 => 
                array (
                  'question_text' => 'painting перекладається як...',
                  'type' => 'single',
                  'order' => 2,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'малювання',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'читання',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'танці',
                      'is_correct' => false,
                    ),
                  ),
                ),
                2 => 
                array (
                  'question_text' => 'cycling перекладається як...',
                  'type' => 'single',
                  'order' => 3,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'їзда на велосипеді',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'похід',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'плавання',
                      'is_correct' => false,
                    ),
                  ),
                ),
                3 => 
                array (
                  'question_text' => 'reading перекладається як...',
                  'type' => 'single',
                  'order' => 4,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'читання',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'малювання',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'фотографія',
                      'is_correct' => false,
                    ),
                  ),
                ),
                4 => 
                array (
                  'question_text' => 'journey перекладається як...',
                  'type' => 'single',
                  'order' => 5,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'подорож',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'море',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'карта',
                      'is_correct' => false,
                    ),
                  ),
                ),
                5 => 
                array (
                  'question_text' => 'souvenir перекладається як...',
                  'type' => 'single',
                  'order' => 6,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'сувенір',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'квиток',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'готель',
                      'is_correct' => false,
                    ),
                  ),
                ),
                6 => 
                array (
                  'question_text' => 'airport перекладається як...',
                  'type' => 'single',
                  'order' => 7,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'аеропорт',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'музей',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'пляж',
                      'is_correct' => false,
                    ),
                  ),
                ),
                7 => 
                array (
                  'question_text' => 'luggage перекладається як...',
                  'type' => 'single',
                  'order' => 8,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'багаж',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'карта',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'гід',
                      'is_correct' => false,
                    ),
                  ),
                ),
                8 => 
                array (
                  'question_text' => 'mountains перекладається як...',
                  'type' => 'single',
                  'order' => 9,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'гори',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'море',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'місто',
                      'is_correct' => false,
                    ),
                  ),
                ),
                9 => 
                array (
                  'question_text' => 'rest перекладається як...',
                  'type' => 'single',
                  'order' => 10,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'відпочинок',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'робота',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'урок',
                      'is_correct' => false,
                    ),
                  ),
                ),
              ),
            ),
          ),
          1 => 
          array (
            'title' => 'Leisure: hobbies and trips',
            'content' => '<h4>Hobbies and trips</h4><p>Список слів для вивчення з перекладом.</p><table class="table table-bordered table-striped"><tr><th>English</th><th>Українською</th></tr><tr><td>hobby</td><td>хобі</td></tr><tr><td>painting</td><td>малювання</td></tr><tr><td>cycling</td><td>їзда на велосипеді</td></tr><tr><td>reading</td><td>читання</td></tr><tr><td>dancing</td><td>танці</td></tr><tr><td>photography</td><td>фотографія</td></tr><tr><td>journey</td><td>подорож</td></tr><tr><td>souvenir</td><td>сувенір</td></tr><tr><td>airport</td><td>аеропорт</td></tr><tr><td>luggage</td><td>багаж</td></tr><tr><td>map</td><td>карта</td></tr><tr><td>guide</td><td>гід</td></tr><tr><td>sea</td><td>море</td></tr><tr><td>mountains</td><td>гори</td></tr><tr><td>rest</td><td>відпочинок</td></tr></table>',
            'order' => 6,
            'test' => 
            array (
              'title' => 'Тест: Leisure: hobbies and trips',
              'questions' => 
              array (
                0 => 
                array (
                  'question_text' => 'Питання 1: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 1,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                1 => 
                array (
                  'question_text' => 'Питання 2: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 2,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                2 => 
                array (
                  'question_text' => 'Питання 3: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 3,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                3 => 
                array (
                  'question_text' => 'Питання 4: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 4,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                4 => 
                array (
                  'question_text' => 'Питання 5: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 5,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                5 => 
                array (
                  'question_text' => 'Питання 6: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 6,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                6 => 
                array (
                  'question_text' => 'Питання 7: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 7,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                7 => 
                array (
                  'question_text' => 'Питання 8: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 8,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                8 => 
                array (
                  'question_text' => 'Питання 9: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 9,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                9 => 
                array (
                  'question_text' => 'Питання 10: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 10,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      4 => 
      array (
        'title' => 'Частини тіла',
        'order' => 5,
        'lessons' => 
        array (
          0 => 
          array (
            'title' => 'Body parts: частини тіла',
            'content' => '<h4>Body parts</h4><p>Список слів для вивчення з перекладом.</p><table class="table table-bordered table-striped"><tr><th>English</th><th>Українською</th></tr><tr><td>head</td><td>голова</td></tr><tr><td>face</td><td>обличчя</td></tr><tr><td>eye</td><td>око</td></tr><tr><td>ear</td><td>вухо</td></tr><tr><td>nose</td><td>ніс</td></tr><tr><td>mouth</td><td>рот</td></tr><tr><td>tooth</td><td>зуб</td></tr><tr><td>neck</td><td>шия</td></tr><tr><td>shoulder</td><td>плече</td></tr><tr><td>arm</td><td>рука</td></tr><tr><td>hand</td><td>кисть</td></tr><tr><td>finger</td><td>палець</td></tr><tr><td>back</td><td>спина</td></tr><tr><td>leg</td><td>нога</td></tr><tr><td>foot</td><td>стопа</td></tr><tr><td>knee</td><td>коліно</td></tr><tr><td>heart</td><td>серце</td></tr><tr><td>stomach</td><td>живіт</td></tr></table>',
            'order' => 3,
            'test' => 
            array (
              'title' => 'Тест: Body parts: частини тіла',
              'questions' => 
              array (
                0 => 
                array (
                  'question_text' => 'Питання 1: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 1,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                1 => 
                array (
                  'question_text' => 'Питання 2: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 2,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                2 => 
                array (
                  'question_text' => 'Питання 3: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 3,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                3 => 
                array (
                  'question_text' => 'Питання 4: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 4,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                4 => 
                array (
                  'question_text' => 'Питання 5: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 5,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                5 => 
                array (
                  'question_text' => 'Питання 6: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 6,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                6 => 
                array (
                  'question_text' => 'Питання 7: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 7,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                7 => 
                array (
                  'question_text' => 'Питання 8: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 8,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                8 => 
                array (
                  'question_text' => 'Питання 9: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 9,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                9 => 
                array (
                  'question_text' => 'Питання 10: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 10,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      5 => 
      array (
        'title' => 'Сімʼя',
        'order' => 6,
        'lessons' => 
        array (
          0 => 
          array (
            'title' => 'Family: сімʼя та родичі',
            'content' => '<h4>Family</h4><p>Список слів для вивчення з перекладом.</p><table class="table table-bordered table-striped"><tr><th>English</th><th>Українською</th></tr><tr><td>family</td><td>сімʼя</td></tr><tr><td>mother</td><td>мати</td></tr><tr><td>father</td><td>батько</td></tr><tr><td>parents</td><td>батьки</td></tr><tr><td>sister</td><td>сестра</td></tr><tr><td>brother</td><td>брат</td></tr><tr><td>daughter</td><td>донька</td></tr><tr><td>son</td><td>син</td></tr><tr><td>grandmother</td><td>бабуся</td></tr><tr><td>grandfather</td><td>дідусь</td></tr><tr><td>aunt</td><td>тітка</td></tr><tr><td>uncle</td><td>дядько</td></tr><tr><td>cousin</td><td>двоюрідний брат/сестра</td></tr><tr><td>wife</td><td>дружина</td></tr><tr><td>husband</td><td>чоловік</td></tr><tr><td>child</td><td>дитина</td></tr><tr><td>relatives</td><td>родичі</td></tr><tr><td>niece</td><td>племінниця</td></tr></table>',
            'order' => 3,
            'test' => 
            array (
              'title' => 'Тест: Family: сімʼя та родичі',
              'questions' => 
              array (
                0 => 
                array (
                  'question_text' => 'Питання 1: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 1,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                1 => 
                array (
                  'question_text' => 'Питання 2: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 2,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                2 => 
                array (
                  'question_text' => 'Питання 3: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 3,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                3 => 
                array (
                  'question_text' => 'Питання 4: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 4,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                4 => 
                array (
                  'question_text' => 'Питання 5: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 5,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                5 => 
                array (
                  'question_text' => 'Питання 6: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 6,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                6 => 
                array (
                  'question_text' => 'Питання 7: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 7,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                7 => 
                array (
                  'question_text' => 'Питання 8: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 8,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                8 => 
                array (
                  'question_text' => 'Питання 9: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 9,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                9 => 
                array (
                  'question_text' => 'Питання 10: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 10,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      6 => 
      array (
        'title' => 'Квартира та кімнати',
        'order' => 7,
        'lessons' => 
        array (
          0 => 
          array (
            'title' => 'Apartment and rooms: квартира та кімнати',
            'content' => '<h4>Apartment and rooms</h4><p>Список слів для вивчення з перекладом.</p><table class="table table-bordered table-striped"><tr><th>English</th><th>Українською</th></tr><tr><td>apartment</td><td>квартира</td></tr><tr><td>house</td><td>будинок</td></tr><tr><td>room</td><td>кімната</td></tr><tr><td>living room</td><td>вітальня</td></tr><tr><td>bedroom</td><td>спальня</td></tr><tr><td>kitchen</td><td>кухня</td></tr><tr><td>bathroom</td><td>ванна кімната</td></tr><tr><td>hall</td><td>коридор</td></tr><tr><td>balcony</td><td>балкон</td></tr><tr><td>floor</td><td>підлога/поверх</td></tr><tr><td>ceiling</td><td>стеля</td></tr><tr><td>wall</td><td>стіна</td></tr><tr><td>window</td><td>вікно</td></tr><tr><td>door</td><td>двері</td></tr><tr><td>table</td><td>стіл</td></tr><tr><td>chair</td><td>стілець</td></tr><tr><td>bed</td><td>ліжко</td></tr><tr><td>sofa</td><td>диван</td></tr><tr><td>wardrobe</td><td>шафа</td></tr><tr><td>lamp</td><td>лампа</td></tr></table>',
            'order' => 3,
            'test' => 
            array (
              'title' => 'Тест: Apartment and rooms: квартира та кімнати',
              'questions' => 
              array (
                0 => 
                array (
                  'question_text' => 'Питання 1: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 1,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                1 => 
                array (
                  'question_text' => 'Питання 2: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 2,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                2 => 
                array (
                  'question_text' => 'Питання 3: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 3,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                3 => 
                array (
                  'question_text' => 'Питання 4: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 4,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                4 => 
                array (
                  'question_text' => 'Питання 5: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 5,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                5 => 
                array (
                  'question_text' => 'Питання 6: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 6,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                6 => 
                array (
                  'question_text' => 'Питання 7: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 7,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                7 => 
                array (
                  'question_text' => 'Питання 8: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 8,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                8 => 
                array (
                  'question_text' => 'Питання 9: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 9,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                9 => 
                array (
                  'question_text' => 'Питання 10: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 10,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      7 => 
      array (
        'title' => 'Місяці та пори року',
        'order' => 8,
        'lessons' => 
        array (
          0 => 
          array (
            'title' => 'Months and seasons: місяці та пори року',
            'content' => '<h4>Months and seasons</h4><p>Список слів для вивчення з перекладом.</p><table class="table table-bordered table-striped"><tr><th>English</th><th>Українською</th></tr><tr><td>January</td><td>січень</td></tr><tr><td>February</td><td>лютий</td></tr><tr><td>March</td><td>березень</td></tr><tr><td>April</td><td>квітень</td></tr><tr><td>May</td><td>травень</td></tr><tr><td>June</td><td>червень</td></tr><tr><td>July</td><td>липень</td></tr><tr><td>August</td><td>серпень</td></tr><tr><td>September</td><td>вересень</td></tr><tr><td>October</td><td>жовтень</td></tr><tr><td>November</td><td>листопад</td></tr><tr><td>December</td><td>грудень</td></tr><tr><td>spring</td><td>весна</td></tr><tr><td>summer</td><td>літо</td></tr><tr><td>autumn</td><td>осінь</td></tr><tr><td>winter</td><td>зима</td></tr><tr><td>season</td><td>пора року</td></tr><tr><td>month</td><td>місяць</td></tr></table>',
            'order' => 3,
            'test' => 
            array (
              'title' => 'Тест: Months and seasons: місяці та пори року',
              'questions' => 
              array (
                0 => 
                array (
                  'question_text' => 'Питання 1: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 1,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                1 => 
                array (
                  'question_text' => 'Питання 2: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 2,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                2 => 
                array (
                  'question_text' => 'Питання 3: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 3,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                3 => 
                array (
                  'question_text' => 'Питання 4: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 4,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                4 => 
                array (
                  'question_text' => 'Питання 5: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 5,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                5 => 
                array (
                  'question_text' => 'Питання 6: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 6,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                6 => 
                array (
                  'question_text' => 'Питання 7: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 7,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                7 => 
                array (
                  'question_text' => 'Питання 8: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 8,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                8 => 
                array (
                  'question_text' => 'Питання 9: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 9,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                9 => 
                array (
                  'question_text' => 'Питання 10: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 10,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      8 => 
      array (
        'title' => 'Професії',
        'order' => 9,
        'lessons' => 
        array (
          0 => 
          array (
            'title' => 'Jobs: професії',
            'content' => '<h4>Jobs</h4><p>Список слів для вивчення з перекладом.</p><table class="table table-bordered table-striped"><tr><th>English</th><th>Українською</th></tr><tr><td>teacher</td><td>вчитель</td></tr><tr><td>doctor</td><td>лікар</td></tr><tr><td>nurse</td><td>медсестра</td></tr><tr><td>engineer</td><td>інженер</td></tr><tr><td>programmer</td><td>програміст</td></tr><tr><td>driver</td><td>водій</td></tr><tr><td>cook</td><td>кухар</td></tr><tr><td>waiter</td><td>офіціант</td></tr><tr><td>artist</td><td>художник</td></tr><tr><td>musician</td><td>музикант</td></tr><tr><td>lawyer</td><td>юрист</td></tr><tr><td>accountant</td><td>бухгалтер</td></tr><tr><td>manager</td><td>менеджер</td></tr><tr><td>builder</td><td>будівельник</td></tr><tr><td>police officer</td><td>поліцейський</td></tr><tr><td>firefighter</td><td>пожежник</td></tr><tr><td>farmer</td><td>фермер</td></tr><tr><td>hairdresser</td><td>перукар</td></tr></table>',
            'order' => 3,
            'test' => 
            array (
              'title' => 'Тест: Jobs: професії',
              'questions' => 
              array (
                0 => 
                array (
                  'question_text' => 'Питання 1: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 1,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                1 => 
                array (
                  'question_text' => 'Питання 2: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 2,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                2 => 
                array (
                  'question_text' => 'Питання 3: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 3,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                3 => 
                array (
                  'question_text' => 'Питання 4: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 4,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                4 => 
                array (
                  'question_text' => 'Питання 5: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 5,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                5 => 
                array (
                  'question_text' => 'Питання 6: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 6,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                6 => 
                array (
                  'question_text' => 'Питання 7: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 7,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                7 => 
                array (
                  'question_text' => 'Питання 8: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 8,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                8 => 
                array (
                  'question_text' => 'Питання 9: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 9,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
                9 => 
                array (
                  'question_text' => 'Питання 10: оберіть правильну відповідь до теми.',
                  'type' => 'single',
                  'order' => 10,
                  'answers' => 
                  array (
                    0 => 
                    array (
                      'answer_text' => 'Правильний варіант',
                      'is_correct' => true,
                    ),
                    1 => 
                    array (
                      'answer_text' => 'Неправильний варіант 1',
                      'is_correct' => false,
                    ),
                    2 => 
                    array (
                      'answer_text' => 'Неправильний варіант 2',
                      'is_correct' => false,
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);

        foreach ($data as $sectionData) {
            $topics = $sectionData['topics'] ?? [];
            unset($sectionData['topics']);

            $section = Section::updateOrCreate(
                ['slug' => $sectionData['slug']],
                $sectionData
            );

            foreach ($topics as $topicData) {
                $lessons = $topicData['lessons'] ?? [];
                unset($topicData['lessons']);

                $topic = Topic::updateOrCreate(
                    ['section_id' => $section->id, 'title' => $topicData['title']],
                    ['order' => $topicData['order']]
                );

                foreach ($lessons as $lessonData) {
                    $testData = $lessonData['test'] ?? null;
                    unset($lessonData['test']);

                    $lesson = Lesson::updateOrCreate(
                        ['topic_id' => $topic->id, 'title' => $lessonData['title']],
                        ['content' => $lessonData['content'], 'order' => $lessonData['order']]
                    );

                    if (! $testData) {
                        continue;
                    }

                    $questions = $testData['questions'] ?? [];
                    unset($testData['questions']);

                    $test = Test::updateOrCreate(
                        ['lesson_id' => $lesson->id],
                        ['title' => $testData['title']]
                    );

                    foreach ($questions as $questionData) {
                        $answers = $questionData['answers'] ?? [];
                        unset($questionData['answers']);

                        $question = Question::updateOrCreate(
                            ['test_id' => $test->id, 'question_text' => $questionData['question_text']],
                            ['type' => $questionData['type'], 'order' => $questionData['order']]
                        );

                        foreach ($answers as $answerData) {
                            Answer::updateOrCreate(
                                ['question_id' => $question->id, 'answer_text' => $answerData['answer_text']],
                                ['is_correct' => $answerData['is_correct']]
                            );
                        }
                    }
                }
            }
        }
    }
}