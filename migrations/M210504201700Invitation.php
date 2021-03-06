<?php

/**
 * Class M210504201700Invitation
 */
class M210504201700Invitation extends \yii\db\Migration
{
    public $tableName = '{{%invitation}}';

    public $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';

    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable($this->tableName, [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'text' => $this->text()->notNull(),

        ], $this->tableOptions);


        $this->insert($this->tableName,[
            'name' => 'Общее',
            'text' => 'Решив однажды и навечно
                       Свои пути соединить,
                       Мы приглашаем Вас на вечер,
                       Чтоб нашу радость разделить.
                       Сказать напутственное слово,
                       Воскликнуть "Горько!"(и не раз!),
                       Мы беспредельно будем рады
                       На нашей свадьбе видеть Вас!',

        ]);

        $this->insert($this->tableName,[
            'name' => 'им',
            'text' => 'Дорогие {name},<br> 
                       В нашей жизни есть счастливые и радостные моменты, которые хочется разделить с дорогими людьми. 
                       Поэтому мы приглашаем вас открыть вместе с нами новую страницу книги нашей жизни.
                       Мы просим вас прибыть без опозданья, на праздник нашего бракосочетанья.
                       Ждем вас с нетерпением.',
        ]);

        $this->insert($this->tableName,[
            'name' => 'ему, ты',
            'text' => 'Дорогой {name},<br> 
                       Скоро состоится День нашего бракосочетания!
                       Мы будем очень рады видеть тебя
                       на долгожданном торжестве,
                       посвященном нашему вступлению
                       в семейный союз. Ждем с нетерпением!',
        ]);

        $this->insert($this->tableName,[
            'name' => 'ей, ты',
            'text' => 'Дорогая {name}, <br>
                       Скоро состоится День нашего бракосочетания!
                       Мы будем очень рады видеть тебя
                       на долгожданном торжестве,
                       посвященном нашему вступлению
                       в семейный союз. Ждем с нетерпением!',
        ]);

        $this->insert($this->tableName,[
            'name' => 'ей на вы',
            'text' => 'Уважаемая {name},<br>
                       В нашей жизни есть счастливые и радостные моменты, которые хочется разделить с дорогими людьми. 
                       Поэтому мы приглашаем Вас открыть вместе с нами новую страницу книги нашей жизни.
                       Мы просим вас прибыть без опозданья, на праздник нашего бракосочетанья.
                       Ждем вас с нетерпением.',
        ]);
        $this->insert($this->tableName,[
            'name' => 'ему на вы',
            'text' => 'Уважаемый {name},<br>
                       В нашей жизни есть счастливые и радостные моменты, которые хочется разделить с дорогими людьми. 
                       Поэтому мы приглашаем Вас открыть вместе с нами новую страницу книги нашей жизни.
                       Мы просим вас прибыть без опозданья, на праздник нашего бракосочетанья.
                       Ждем вас с нетерпением.',
        ]);

        $this->insert($this->tableName,[
            'name' => 'паре мафиози',
            'text' => 'Уважаемые дон и донна {surname}, <br>
                       Мы рады вам сообщить, что состоится торжественное объединение двух 
                       самых могущественных кланов мафиози,
                       и очень хотим, чтобы вы разделили радость этого дня вместе с нами.
                       Умение стрелять, блефовать и танцевать приветствуется.',
        ]);
        $this->insert($this->tableName,[
            'name' => 'средневековой паре',
            'text' => 'Добродетельные синьор и синьора {surname}, <br>
                       Спешим сообщить вам приятное известие. 
                       В двух славных и знатных семействах будет освящен Союз детей.
                       Благородный рыцарь Алексей и юная дама его сердца Мария ждут вас на вечерний пир и рыцарский турнир. 
                       Одарите это событие своим вниманием.',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable($this->tableName);
    }
}
