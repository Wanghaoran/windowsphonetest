<?php
class QuestionsWidget extends Action {

    public function title($key){
        $questions = array(
            1 => array(
                'title' => 'Windows Phone的锁定屏幕旋转功能一直被网友各种吐槽…该功能在Lumia 1520身上是否得到了实现呢？',
                'options' => array(
                    1 => '是',
                    2 => '否',
                ),
                'right' => 1,
            ),
            2 => array(
                'title' => '生活节奏快啊…天天都是同时运行多项任务的节奏啊…Lumia 1520能不能在多任务视图下关闭应用呢？',
                'options' => array(
                    1 => '能',
                    2 => '不能',
                ),
                'right' => 1,
            ),
            3 => array(
                'title' => '老早之前就听过“大有可言”了，Lumia 1520拿着这四个字各种炫耀啊…它的屏幕到底有多大？？？',
                'options' => array(
                    1 => '5英寸',
                    2 => '6英寸',
                ),
                'right' => 1,
            ),
            4 => array(
                'title' => '俗话说高清大屏不分家——Lumia 1520的屏幕的确够大，那高清应该也差不了吧？知道它有多高清么？',
                'options' => array(
                    1 => '720P',
                    2 => '1080P',
                ),
                'right' => 1,
            ),
            5 => array(
                'title' => '想必追求时尚的你很喜欢摄影拍照吧？那你是否了解Lumia 1520的镜头有多少像素呢？',
                'options' => array(
                    1 => '2000万',
                    2 => '800万',
                ),
                'right' => 1,
            ),
            6 => array(
                'title' => '除了镜头的像素，想必如此专业的你一定也知道Lumia 1520的镜头名称吧？',
                'options' => array(
                    1 => '卡尔蔡司镜头',
                    2 => '施耐德镜头',
                ),
                'right' => 1,
            ),
            7 => array(
                'title' => '拥有高清和大屏两大神器的Lumia 1520是几核处理器呀？亲，你知道么？',
                'options' => array(
                    1 => '两核处理器',
                    2 => '四核处理器',
                ),
                'right' => 1,
            ),
            8 => array(
                'title' => '亲爱的你是不是有各种文件资料要往手机里存呀？Lumia 1520可是拥有超大存储空间的哦~你知道有多大吗？',
                'options' => array(
                    1 => '64G',
                    2 => '103G',
                ),
                'right' => 1,
            ),
            9 => array(
                'title' => 'Lumia 1520不但存储空间超大，电池容量那也是杠杠的~~超大容量电池，你知道有多少毫安时么？',
                'options' => array(
                    1 => '3400毫安时',
                    2 => '4300毫安时',
                ),
                'right' => 1,
            ),
            10 => array(
                'title' => '工作压力大啊…加不完的班啊…天天和Office打交道的你是否了解——Lumia 1520是否自带原生Office应用软件？',
                'options' => array(
                    1 => '是',
                    2 => '否',
                ),
                'right' => 1,
                'next' => '查看成绩',
            ),
        );
        return $questions[$key];
    }

}