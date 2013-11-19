<?php
class QuestionsWidget extends Action {

    public function title($key){
        $questions = array(
            1 => array(
                'title' => '下面哪个不是WINDOWS PHONE 新功能？',
                'options' => array(
                    1 => '“开始”屏幕',
                    2 => '儿童园地',
                    3 => '照片 + 相机',
                    4 => '测试题目',
                ),
                'right' => 1,
            ),
            2 => array(
                'title' => '这是第二题的题目',
                'options' => array(
                    1 => '我是错误答案',
                    2 => '我是正确的，选我',
                    3 => '我也是错误的',
                    4 => '我还是错误的',
                ),
                'right' => 2,
            ),
        );
        return $questions[$key];
    }

}