<?php

interface StorageFeature{
	public function list();
	public function add();
}
interface BasicFeature{
	public function play();
	public function pause();
	public function previous();
	public function next();

}
interface OnlineFeature{
	public function login();
	public function singUp();
	public function createPlayList();
	public function saveFavourite();

}

class VideoPlayer implements BasicFeature,OnlineFeature{
	public function play(){

	}
	public function pause(){
		
	}
	public function previous(){
		
	}
	public function next(){
		
	}
	public function login(){
		
	}public function singUp()
	{
		
	}
	public function saveFavourite()
	{
		
	}public function createPlayList()
	{
		
	}
}