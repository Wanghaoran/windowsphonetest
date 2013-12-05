<?php
class IndexAction extends Action {
    public function index(){
        $_SESSION['question'] = null;
        $_SESSION['score'] = 0;
        $this -> display();
    }

    public function test(){
        if(!empty($_GET['gid'])){
            //记录正确题目数量
            $q = R('Questions/check', array($_GET['gid'], $_GET['qid']), 'Widget');
            if($_GET['select'] == $q){
                $_SESSION['score'] ++;
            }
            //记录题目
            $_SESSION['question']['old'][] = array('group' => $_GET['gid'], 'question' => $_GET['qid'], 'select' => $q);

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
            //记录成绩
            $model_question = M('Question');
            $add_arr = array();
            $add_arr['question'] = json_encode($_SESSION['question']['old']);
            $add_arr['score'] = $_SESSION['score'];
            $returnId = $model_question -> add($add_arr);
            redirect(__ROOT__ . '/index/result/id/' . $returnId);
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

        //题目序号
        $this -> assign('number', count($_SESSION['question']['old'])+1);


        $q = R('Questions/title', array($group), 'Widget');
        $this -> assign('group', $group);
        $this -> assign('question', $question);
        $this -> assign('q', $q);
        $this -> assign('a', $q['question'][$question]);
        $this -> display();
    }

    public function result(){
        $_SESSION['question'] = null;
        $_SESSION['score'] = 0;

        $model = M('Question');
        $result = $model -> field('question,score') -> find($this -> _get('id', 'intval'));

        $level = R('Level/level', array($result['score']), 'Widget');
        $this -> assign('level', $level);

        $question = json_decode($result['question'], true);
        $this -> assign('question', $question);

        if(!empty($_SERVER['HTTP_REFERER'])){
            $this -> display('result');
        }else{
            $this -> display('result2');
        }

    }
}