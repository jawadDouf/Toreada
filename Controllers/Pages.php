<?php

class Pages extends Controller
{

public function Page2(){
 $data = ['name'=> 'jawad'];
 $this->view('Page2',$data);
}

}