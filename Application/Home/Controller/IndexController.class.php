<?php
namespace Home\Controller;
use Think\Controller;
use Think\Db;

class IndexController extends Controller {
		
		public function index(){
			$mod = M('novel');
			$list = $mod->order('time DESC')->select();
			$ftype = M('type')->select();
			$this->assign('list',$list);
			$this->assign('ftype',$ftype);
			$this->display();
		}
		public function book(){
			$data = I('get.');
			//var_dump($data['id']);
			$mod = M('novel');
			$list = $mod->where('id='.$data['id'])->find();
			$list['book'] = file_get_contents($list['txturl']);
			$ftype= M('type')->select();
			$this->assign('ftype',$ftype);
			$this->assign('list',$list);
			$this->display();
			//echo "ok";
		}
		public function book_type(){
			$data = I('get.');
			$mod = M('novel');
			$list = $mod->where('type='.$data['type'])->select();
			$ftype= M('type')->select();
			$this->assign('ftype',$ftype);
			$nav = M('type')->where('id='.$data['type'])->find();
			$this->assign('nav',$nav);
			$this->assign('list',$list);
			$this->display();
		}
}