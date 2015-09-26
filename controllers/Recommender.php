<?php
include('../services/RecommenderService.php')

class Recommender{
	
	private $recommenderService;
	

	public function __construct(){
		$this->recommenderService= new RecommenderService();	
	}
	
	public function getRelevantOLXadsAction($id,$data){
		/*if(!$this->getUserData($fbId)){
			$this->saveUserData($userId,$userData)
	 	}*/
		$ads=$this->recommenderService->getRelevantAdsFromOlx($userData);	
		return json_encode($ads);
	}
	
	public function saveUserData($fbId,$userData){
		$this->recommenderService->saveUserData($fbId,$userData);	
	}
		
	public function getUserData($fbId){
		$x=$this->recommenderService->getUserData($fbId);
		if(isset($x) && $x!=''){
			return $x;
		}
		else{
			return 0;
		}
	}



}
