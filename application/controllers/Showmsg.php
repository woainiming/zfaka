<?php
class ShowmsgController extends PcBasicController {

 	public function init(){
        parent::init();
	}
	
	public function indexAction(){
		$data['code']=$this->getParam('code');
		$data['msg']=$this->getParam('msg');
		$url=$this->getParam('url',false);
		$url=isset($url)?$url:'/';
		$data['url']=$url;
		$data['title']="操作提示:".$data['msg'];
		$this->getView()->assign($data);
	}
}