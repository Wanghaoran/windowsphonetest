<?php
class LevelWidget extends Action {
    public function level($score){
        $level = array(
            1 => array(
                'score' => 1,
                'title' => 'Windows Phone小白',
                'content' => '呜呜呜，我还要继续加油储备知识哟',
                'icon' => 'level_1.png',
            ),
            2 => array(
                'score' => 3,
                'title' => 'Windows Phone砖家',
                'content' => '当当当，砖家现身！大家不要乱拍板砖哟',
                'icon' => 'level_2.png',
            ),
            3 => array(
                'score' => 5,
                'title' => 'Windows Phone极客',
                'content' => '极客不解释！新一代Windows Phone就由我来设计吧',
                'icon' => 'level_3.png',
            ),
            4 => array(
                'score' => 6,
                'title' => 'Windows Phone达人',
                'content' => '万中无一！维护世界和平的任务就交给我了',
                'icon' => 'level_4.png',
            ),
        );

        foreach($level as $key => $value){
            if($score <= $value['score']){
                return $level[$key];
            }
        }
    }
}