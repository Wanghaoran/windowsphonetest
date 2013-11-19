<?php
class IndexAction extends Action {
    public function index(){
        $this -> display();
    }

    public function test(){
        $step_id = !empty($_POST['step']) ? $this -> _post('step', 'intval') : 0;
        if($step_id == 0){
            session('question_select', null);
        }else{
            $_SESSION['question_select'][$step_id] = $this -> _post('test', 'intval');
        }
        if(!$question = R('Questions/title', array(++$step_id), 'Widget')){
            redirect(__APP__ . '/index/result');
        }
        $this -> assign('question', $question);
        $this -> assign('step_id', $step_id);
        $this -> display();
    }

    public function result(){
//        dump($_SESSION);
        $this -> display();
    }
}