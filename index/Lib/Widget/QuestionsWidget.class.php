<?php
class QuestionsWidget extends Action {

    public $question = array(
        1 => array(
            'color_q' => 'test3',
            'color_a' => 'answer3',
            'question' => array(
                1 => array(
                    'q' => '知道Windows Phone Lumia 1520开始屏幕可以支持多少列中号的动态磁贴么？',
                    'a' => array(
                        'A' => '2列',
                        'B' => '3列',
                    ),
                    'right' => 'B',
                ),
                2 => array(
                    'q' => '就算是宅男腐女，也需要交流的。有一个应用可以把所有的好友的动态集合在一起，知道它是什么么？',
                    'a' => array(
                        'A' => '人脉中心',
                        'B' => '房间',
                    ),
                    'right' => 'A',
                ),
                3 => array(
                    'q' => '人生得一知己足矣，但我是社交达人，混迹于不同的圈子，Windows Phone的什么功能可以分组分享照片笔记日历？',
                    'a' => array(
                        'A' => '人脉中心',
                        'B' => '房间',
                    ),
                    'right' => 'B',
                ),
                4 => array(
                    'q' => '作为一名学霸，时刻都要学习。知道什么应用可以让你随时随地地观看老师的PPT编辑自己未完成的文档么？',
                    'a' => array(
                        'A' => 'Office中心',
                        'B' => '记事本',
                    ),
                    'right' => 'A',
                ),
                5 => array(
                    'q' => '信息时代，什么最重要？是数据！请问什么可以随时备份资料，上传云端，让数据更加安全？',
                    'a' => array(
                        'A' => 'SkyDrive',
                        'B' => 'SD卡',
                    ),
                    'right' => 'A',
                ),
            ),
        ),
        2 => array(
            'color_q' => 'test2',
            'color_a' => 'answer2',
            'question' => array(
                1 => array(
                    'q' => '摇一摇，扫一扫，好友动态全知道。你正在用哪一款Windows Phone人气社交应用进行测试？',
                    'a' => array(
                        'A' => '微信',
                        'B' => '陌陌',
                    ),
                    'right' => 'A',
                ),
                2 => array(
                    'q' => '买衣服还要逛商场，交话费还要去营业厅，冬天雪地不想动啊！知道下面那个应用可以轻松帮你解决上面的难题么？',
                    'a' => array(
                        'A' => 'QQ',
                        'B' => '淘宝',
                    ),
                    'right' => 'B',
                ),
                3 => array(
                    'q' => '美美的人物就要和美美的风景溶为一体，不分彼此。知道下面那一款相机应用具有双重曝光的功能么？',
                    'a' => array(
                        'A' => '美图秀秀',
                        'B' => 'Camera 360',
                    ),
                    'right' => 'B',
                ),
                4 => array(
                    'q' => '信息爆炸的时代，时间就是一切。新鲜资讯抢先知道，出行理财样样精通，知道这是哪类应用么？',
                    'a' => array(
                        'A' => '头条新闻',
                        'B' => 'Bing应用',
                    ),
                    'right' => 'B',
                ),
                5 => array(
                    'q' => '糟糕！脸上又蹦出一个痘痘，这可让我怎么发照片呀？别怕，WP照片美容有神器，轻松去痘，还能增白护肤瘦脸扩眼……史上最易上手美图神器，你懂的？',
                    'a' => array(
                        'A' => 'PS',
                        'B' => '美图秀秀',
                    ),
                    'right' => 'B',
                ),
            ),
        ),
        3 => array(
            'color_q' => 'test1',
            'color_a' => 'answer1',
            'question' => array(
                1 => array(
                    'q' => '做Windows Phone达人，屏幕够大才够料。知道Windows Phone Lumia 1520屏幕尺寸有多大么？',
                    'a' => array(
                        'A' => '4.5英寸',
                        'B' => '6英寸',
                    ),
                    'right' => 'B',
                ),
                2 => array(
                    'q' => '屏幕大还要分辨率高，不然也只是一个LED广告屏。知道Windows Phone Lumia 1520的屏幕分辨率是多少么？',
                    'a' => array(
                        'A' => '640P',
                        'B' => '1080P',
                    ),
                    'right' => 'B',
                ),
                3 => array(
                    'q' => '屏幕大就能称霸一方？错，性能才是王道！知道Windows Phone Lumia 1520的处理器是几核的么？',
                    'a' => array(
                        'A' => '2核',
                        'B' => '4核',
                    ),
                    'right' => 'B',
                ),
                4 => array(
                    'q' => 'Nokia一向追求细节，不放过一点一滴的美好。知道Windows Phone Lumia 1520的镜头是多少像素么？',
                    'a' => array(
                        'A' => '2000万像素',
                        'B' => '800万像素',
                    ),
                    'right' => 'A',
                ),
                5 => array(
                    'q' => '有那么一款应用，在手机上通过时间、地点双经纬整理生成你的专属影像故事，你知道是什么吗？ ',
                    'a' => array(
                        'A' => '影像日志',
                        'B' => 'Onenote',
                    ),
                    'right' => 'A',
                ),
            ),
        ),
    );

    public function title($key){
        $question = $this -> question;
        return $question[$key];
    }

    public function check($key, $key2){
        $question = $this -> question;
        return $question[$key]['question'][$key2]['right'];

    }

}