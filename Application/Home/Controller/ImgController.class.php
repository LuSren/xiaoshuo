<?php
namespace Home\Controller;
use Think\Controller;
use Think\Db;

class ImgController extends Controller {
		
		public function index(){
			$mod = M('img');
			$list = $mod->select();
			$ftype = M('imgtype')->select();
			$this->assign('list',$list);
			$this->assign('ftype',$ftype);
			$this->display();
		}
		public function img(){
			$data = I('get.');
			//var_dump($data['id']);
			$mod = M('img');
			$list = $mod->where('id='.$data['id'])->find();
			$kk = explode("|",$list['content']);
			$ftype= M('imgtype')->select();
			$this->assign('kk',$kk);
			$this->assign('ftype',$ftype);
			$this->assign('list',$list);
			$this->display();
		}
		public function img_type(){
			$data = I('get.');
			$mod = M('img');
			$list = $mod->where('type='.$data['type'])->select();
			$ftype= M('imgtype')->select();
			$this->assign('ftype',$ftype);
			$nav = M('imgtype')->where('id='.$data['type'])->find();
			$this->assign('nav',$nav);
			$this->assign('list',$list);
			$this->display();
		}
		public function num(){
			$data = I('get.id');
			$num = $data+1;
			header('Location: ./index.php?m=Home&c=Img&a=img&id='.$num);
		}
}