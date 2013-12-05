<?php
class IndexAction extends Action {
    public function index(){
        $_SESSION['question'] = null;
        $_SESSION['score'] = 0;
        $this -> display();
    }

    public function test(){
        if(!empty($_GET['gid'])){
            $_SESSION['question']['old'][] = array('group' => $_GET['gid'], 'question' => $_GET['qid'], 'select' => $_GET['select']);
            //分数记录
            $q = R('Questions/check', array($_GET['gid'], $_GET['qid']), 'Widget');
            if($_GET['select'] == $q){
                $_SESSION['score'] ++;
            }
        }

        //选分组
        $part1 = 0;
        $part2 = 0;
        $part3 = 0;

        foreach($_SESSION['question']['old'] as $value){
            if($value['group'] == 1){
                $part1++;
            }elseif($value['group'] == 2){
                $part2++;
            }elseif($value['group'] == 3){
                $part3++;
            }
        }


        if($part1 < 2){
            $group = 1;
        }elseif($part2 < 2){
            $group = 2;
        }elseif($part3 < 2){
            $group = 3;
        }else{
            redirect(__ROOT__ . '/index/result');
        }

        //选题
        $old_answer = array();
        foreach($_SESSION['question']['old'] as $value){
            if($value['group'] == $group){
                $old_answer[] = $value['question'];
            }
        }

        do{
            $question = rand(1,5);
        }while(in_array($question, $old_answer));


        $q = R('Questions/title', array($group), 'Widget');
        $this -> assign('group', $group);
        $this -> assign('question', $question);
        $this -> assign('q', $q);
        $this -> assign('a', $q['question'][$question]);
        $this -> display();
    }

    public function result(){
        $this -> display();

    }
}