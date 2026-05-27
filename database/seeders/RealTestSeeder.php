<?php

namespace Database\Seeders;

use App\Models\Answer;
use App\Models\Lesson;
use App\Models\Question;
use App\Models\Test;
use Illuminate\Database\Seeder;

class RealTestSeeder extends Seeder
{
    public function run(): void
    {
        Lesson::with('topic')->get()->each(function (Lesson $lesson): void {
            $this->replaceTest($lesson);
        });
    }

    private function replaceTest(Lesson $lesson): void
    {
        Test::where('lesson_id', $lesson->id)->delete();

        $test = Test::create([
            'lesson_id' => $lesson->id,
            'title' => 'Тест: '.$lesson->title,
        ]);

        foreach ($this->questionsFor($lesson) as $index => [$text, $answers]) {
            $question = Question::create([
                'test_id' => $test->id,
                'question_text' => $text,
                'type' => 'single',
                'order' => $index + 1,
            ]);

            foreach ($answers as $answerIndex => $answerText) {
                Answer::create([
                    'question_id' => $question->id,
                    'answer_text' => $answerText,
                    'is_correct' => $answerIndex === 0,
                ]);
            }
        }
    }

    private function questionsFor(Lesson $lesson): array
    {
        $haystack = mb_strtolower($lesson->topic->title.' '.$lesson->title);

        $grammar = [
            'present simple' => [
                ['She ___ English every day.', ['studies', 'study', 'is studying']],
                ['___ you like coffee?', ['Do', 'Does', 'Are']],
                ['He ___ not play tennis.', ['does', 'do', 'is']],
                ['My parents ___ in Lviv.', ['live', 'lives', 'living']],
                ['The shop ___ at 9 a.m.', ['opens', 'open', 'is opening']],
                ['Does Anna ___ here?', ['work', 'works', 'working']],
                ['I usually ___ breakfast at 8.', ['have', 'has', 'am having']],
                ['Tom ___ TV in the evening.', ['watches', 'watch', 'watching']],
                ['We ___ to school by bus.', ['go', 'goes', 'are going']],
                ['It ___ a lot in autumn.', ['rains', 'rain', 'is rain']],
            ],
            'present continuous' => [
                ['I ___ reading now.', ['am', 'is', 'are']],
                ['She ___ dinner at the moment.', ['is cooking', 'cooks', 'cook']],
                ['They ___ football now.', ['are playing', 'is playing', 'play']],
                ['Look! It ___ outside.', ['is raining', 'rains', 'rain']],
                ['We ___ for the test this week.', ['are preparing', 'prepare', 'prepares']],
                ['He ___ to music right now.', ['is listening', 'listens', 'listen']],
                ['What ___ you doing?', ['are', 'do', 'is']],
                ['The children ___ in the garden.', ['are running', 'runs', 'is running']],
                ['I ___ my homework now.', ['am doing', 'do', 'does']],
                ['You ___ very fast today.', ['are speaking', 'speak', 'speaks']],
            ],
            'present perfect' => [
                ['I ___ finished my homework.', ['have', 'has', 'did']],
                ['She ___ never been to Paris.', ['has', 'have', 'was']],
                ['They have ___ this film.', ['seen', 'saw', 'see']],
                ['Have you ___ sushi?', ['tried', 'try', 'trying']],
                ['He has ___ arrived.', ['just', 'yesterday', 'last year']],
                ['We have not finished it ___.', ['yet', 'already', 'yesterday']],
                ['Tom has ___ his keys.', ['lost', 'lose', 'losing']],
                ['I have ___ read this book.', ['already', 'last night', 'ago']],
                ['Has she ___ the email?', ['sent', 'send', 'sending']],
                ['They have ___ lunch.', ['had', 'have', 'has']],
            ],
            'past perfect continuous' => [
                ['I ___ been studying for two hours.', ['had', 'have', 'was']],
                ['She had been ___ all day.', ['working', 'worked', 'work']],
                ['They had been waiting ___ morning.', ['since', 'already', 'yesterday']],
                ['We ___ been living there for five years.', ['had', 'has', 'were']],
                ['He was tired because he ___ been running.', ['had', 'has', 'was']],
                ['Had you been ___ long?', ['waiting', 'waited', 'wait']],
                ['It had been ___ for hours.', ['raining', 'rained', 'rain']],
                ['She had not been ___ enough.', ['sleeping', 'slept', 'sleep']],
                ['They had been ___ English before the exam.', ['learning', 'learned', 'learn']],
                ['How long had he been ___ there?', ['working', 'worked', 'works']],
            ],
            'past perfect' => [
                ['I ___ finished before he came.', ['had', 'have', 'did']],
                ['She had ___ by 6 p.m.', ['left', 'leave', 'leaves']],
                ['They had already ___ dinner.', ['eaten', 'ate', 'eat']],
                ['Had you ___ the letter?', ['sent', 'send', 'sending']],
                ['He had not ___ the film before.', ['seen', 'saw', 'see']],
                ['We ___ arrived before the rain started.', ['had', 'have', 'were']],
                ['After I had ___, I went out.', ['cleaned', 'clean', 'cleaning']],
                ['She had ___ her keys at home.', ['forgotten', 'forgot', 'forget']],
                ['The train had ___ when we arrived.', ['left', 'leaves', 'leaving']],
                ['They had ___ the work before lunch.', ['finished', 'finish', 'finishes']],
            ],
            'past continuous' => [
                ['I ___ reading at 8 p.m.', ['was', 'were', 'am']],
                ['They ___ playing football when it started raining.', ['were', 'was', 'are']],
                ['She ___ cooking dinner when I called.', ['was', 'were', 'is']],
                ['We ___ watching TV at 9.', ['were', 'was', 'are']],
                ['What ___ you doing yesterday evening?', ['were', 'was', 'did']],
                ['He ___ not sleeping at midnight.', ['was', 'were', 'did']],
                ['The children ___ playing in the park.', ['were', 'was', 'is']],
                ['It ___ raining all morning.', ['was', 'were', 'is']],
                ['I ___ studying while my brother was gaming.', ['was', 'were', 'am']],
                ['You ___ talking too loudly.', ['were', 'was', 'did']],
            ],
            'past simple' => [
                ['I ___ my room yesterday.', ['cleaned', 'clean', 'am cleaning']],
                ['She ___ to London last year.', ['went', 'goes', 'going']],
                ['They ___ a movie yesterday.', ['watched', 'watch', 'watches']],
                ['We ___ pizza last night.', ['ate', 'eat', 'eats']],
                ['Did you ___ the book?', ['read', 'readed', 'reads']],
                ['He ___ not play football.', ['did', 'does', 'is']],
                ['My dad ___ home late.', ['came', 'come', 'comes']],
                ['The lesson ___ five minutes ago.', ['started', 'starts', 'start']],
                ['I ___ my phone yesterday.', ['lost', 'lose', 'loses']],
                ['They ___ happy last weekend.', ['were', 'was', 'are']],
            ],
            'future' => [
                ['I ___ call you tomorrow.', ['will', 'am', 'did']],
                ['She is going ___ travel next week.', ['to', 'will', 'for']],
                ['We ___ meeting at 5 p.m.', ['are', 'will', 'do']],
                ['They will ___ late.', ['be', 'are', 'being']],
                ['I think it ___ rain tomorrow.', ['will', 'is', 'does']],
                ['He is going to ___ a new phone.', ['buy', 'buys', 'bought']],
                ['Will you ___ me?', ['help', 'helps', 'helped']],
                ['The lesson will ___ soon.', ['start', 'starts', 'started']],
                ['I am ___ my dentist tomorrow.', ['seeing', 'see', 'saw']],
                ['She will not ___ today.', ['work', 'works', 'worked']],
            ],
            'modal verbs' => [
                ['I ___ swim very well.', ['can', 'must', 'should to']],
                ['You ___ do your homework.', ['must', 'can to', 'must to']],
                ['She should ___ more water.', ['drink', 'drinks', 'drank']],
                ['Can he ___ a bike?', ['ride', 'rides', 'rode']],
                ['You ___ not smoke here.', ['must', 'should to', 'can to']],
                ['We should ___ a doctor.', ['see', 'sees', 'saw']],
                ['They can ___ fast.', ['run', 'runs', 'running']],
                ['Must I ___ this form?', ['fill in', 'fills in', 'filled in']],
                ['You should not ___ so late.', ['sleep', 'sleeps', 'slept']],
                ['She can ___ the piano.', ['play', 'plays', 'played']],
            ],
        ];

        foreach ($grammar as $keyword => $questions) {
            if (str_contains($haystack, $keyword)) {
                return $questions;
            }
        }

        return $this->vocabularyQuestions($haystack);
    }

    private function vocabularyQuestions(string $haystack): array
    {
        $sets = [
            'кольори colors' => [['red перекладається як...', ['червоний', 'зелений', 'синій']], ['blue перекладається як...', ['синій', 'жовтий', 'білий']], ['green перекладається як...', ['зелений', 'чорний', 'рожевий']], ['yellow перекладається як...', ['жовтий', 'сірий', 'фіолетовий']], ['black перекладається як...', ['чорний', 'білий', 'помаранчевий']], ['white перекладається як...', ['білий', 'коричневий', 'синій']], ['purple перекладається як...', ['фіолетовий', 'жовтий', 'зелений']], ['brown перекладається як...', ['коричневий', 'червоний', 'білий']], ['bright перекладається як...', ['яскравий', 'темний', 'прозорий']], ['transparent перекладається як...', ['прозорий', 'барвистий', 'темний']]],
            'погода weather' => [['sunny перекладається як...', ['сонячно', 'дощово', 'хмарно']], ['rainy перекладається як...', ['дощово', 'вітряно', 'сніжно']], ['cloudy перекладається як...', ['хмарно', 'спекотно', 'тепло']], ['windy перекладається як...', ['вітряно', 'морозно', 'сухо']], ['snowy перекладається як...', ['сніжно', 'туманно', 'сонячно']], ['forecast перекладається як...', ['прогноз', 'градус', 'лід']], ['umbrella перекладається як...', ['парасоля', 'дощовик', 'хмара']], ['spring перекладається як...', ['весна', 'осінь', 'зима']], ['winter перекладається як...', ['зима', 'літо', 'весна']], ['heat перекладається як...', ['спека', 'вітер', 'сніг']]],
            'їжа food' => [['breakfast перекладається як...', ['сніданок', 'вечеря', 'перекус']], ['lunch перекладається як...', ['обід', 'сніданок', 'рахунок']], ['dinner перекладається як...', ['вечеря', 'меню', 'вода']], ['sweet перекладається як...', ['солодкий', 'солоний', 'кислий']], ['salty перекладається як...', ['солоний', 'гострий', 'свіжий']], ['spicy перекладається як...', ['гострий', 'голодний', 'кислий']], ['hungry перекладається як...', ['голодний', 'спраглий', 'свіжий']], ['thirsty перекладається як...', ['спраглий', 'солодкий', 'солоний']], ['menu перекладається як...', ['меню', 'рахунок', 'замовлення']], ['bill перекладається як...', ['рахунок', 'сніданок', 'страва']]],
            'відпочинок leisure' => [['hobby перекладається як...', ['хобі', 'подорож', 'багаж']], ['painting перекладається як...', ['малювання', 'читання', 'танці']], ['cycling перекладається як...', ['їзда на велосипеді', 'похід', 'плавання']], ['reading перекладається як...', ['читання', 'малювання', 'фотографія']], ['journey перекладається як...', ['подорож', 'море', 'карта']], ['souvenir перекладається як...', ['сувенір', 'квиток', 'готель']], ['airport перекладається як...', ['аеропорт', 'музей', 'пляж']], ['luggage перекладається як...', ['багаж', 'карта', 'гід']], ['mountains перекладається як...', ['гори', 'море', 'місто']], ['rest перекладається як...', ['відпочинок', 'робота', 'урок']]],
            'частини body' => [['head перекладається як...', ['голова', 'рука', 'нога']], ['eye перекладається як...', ['око', 'вухо', 'ніс']], ['ear перекладається як...', ['вухо', 'рот', 'зуб']], ['mouth перекладається як...', ['рот', 'шия', 'спина']], ['tooth перекладається як...', ['зуб', 'палець', 'стопа']], ['shoulder перекладається як...', ['плече', 'коліно', 'серце']], ['finger перекладається як...', ['палець', 'кисть', 'спина']], ['knee перекладається як...', ['коліно', 'ніс', 'шия']], ['stomach перекладається як...', ['живіт', 'серце', 'вухо']], ['back перекладається як...', ['спина', 'обличчя', 'стопа']]],
            'сім family' => [['mother перекладається як...', ['мати', 'батько', 'сестра']], ['father перекладається як...', ['батько', 'брат', 'дитина']], ['parents перекладається як...', ['батьки', 'родичі', 'діти']], ['sister перекладається як...', ['сестра', 'тітка', 'донька']], ['brother перекладається як...', ['брат', 'дядько', 'син']], ['daughter перекладається як...', ['донька', 'дружина', 'мати']], ['son перекладається як...', ['син', 'брат', 'дідусь']], ['grandmother перекладається як...', ['бабуся', 'тітка', 'племінниця']], ['uncle перекладається як...', ['дядько', 'дідусь', 'чоловік']], ['relatives перекладається як...', ['родичі', 'батьки', 'діти']]],
            'квартира apartment rooms' => [['apartment перекладається як...', ['квартира', 'кімната', 'стеля']], ['living room перекладається як...', ['вітальня', 'кухня', 'коридор']], ['bedroom перекладається як...', ['спальня', 'балкон', 'ванна']], ['kitchen перекладається як...', ['кухня', 'вітальня', 'шафа']], ['bathroom перекладається як...', ['ванна кімната', 'коридор', 'спальня']], ['window перекладається як...', ['вікно', 'двері', 'стіна']], ['door перекладається як...', ['двері', 'стіл', 'лампа']], ['chair перекладається як...', ['стілець', 'диван', 'ліжко']], ['wardrobe перекладається як...', ['шафа', 'підлога', 'балкон']], ['ceiling перекладається як...', ['стеля', 'стіна', 'поверх']]],
            'місяці months seasons' => [['January перекладається як...', ['січень', 'лютий', 'березень']], ['March перекладається як...', ['березень', 'травень', 'квітень']], ['June перекладається як...', ['червень', 'липень', 'серпень']], ['September перекладається як...', ['вересень', 'жовтень', 'листопад']], ['December перекладається як...', ['грудень', 'січень', 'лютий']], ['spring перекладається як...', ['весна', 'літо', 'зима']], ['summer перекладається як...', ['літо', 'осінь', 'весна']], ['autumn перекладається як...', ['осінь', 'зима', 'літо']], ['winter перекладається як...', ['зима', 'весна', 'осінь']], ['season перекладається як...', ['пора року', 'місяць', 'тиждень']]],
            'професії jobs' => [['teacher перекладається як...', ['вчитель', 'лікар', 'водій']], ['doctor перекладається як...', ['лікар', 'юрист', 'кухар']], ['nurse перекладається як...', ['медсестра', 'вчитель', 'фермер']], ['engineer перекладається як...', ['інженер', 'офіціант', 'музикант']], ['programmer перекладається як...', ['програміст', 'будівельник', 'перукар']], ['driver перекладається як...', ['водій', 'менеджер', 'лікар']], ['cook перекладається як...', ['кухар', 'юрист', 'фермер']], ['lawyer перекладається як...', ['юрист', 'водій', 'художник']], ['accountant перекладається як...', ['бухгалтер', 'пожежник', 'офіціант']], ['firefighter перекладається як...', ['пожежник', 'поліцейський', 'інженер']]],
        ];

        foreach ($sets as $keywords => $questions) {
            foreach (explode(' ', $keywords) as $keyword) {
                if ($keyword !== '' && str_contains($haystack, $keyword)) {
                    return $questions;
                }
            }
        }

        return [
            ['Choose the correct translation for "book".', ['книга', 'ручка', 'стілець']],
            ['Choose the correct translation for "school".', ['школа', 'місто', 'кімната']],
            ['Choose the correct translation for "friend".', ['друг', 'вчитель', 'лікар']],
            ['Choose the correct translation for "day".', ['день', 'ніч', 'місяць']],
            ['Choose the correct translation for "water".', ['вода', 'чай', 'їжа']],
            ['Choose the correct translation for "house".', ['будинок', 'дорога', 'парк']],
            ['Choose the correct translation for "work".', ['робота', 'відпочинок', 'гра']],
            ['Choose the correct translation for "city".', ['місто', 'село', 'країна']],
            ['Choose the correct translation for "learn".', ['вчити', 'спати', 'читати']],
            ['Choose the correct translation for "speak".', ['говорити', 'слухати', 'писати']],
        ];
    }
}
