<?php
include('/var/www/html/olxHackathodn/services/RecommenderService.php');
class Recommender{
	
	private $recommenderService;
	

	public function __construct(){
		$this->recommenderService= new RecommenderService();	
	}
	
	public function getRelevantOLXadsAction($id,$data){
		echo "<html><body>";
		$count=1;
		foreach($data as $value){
			foreach($value as $v){
			echo "<a href=http://olx.in/all-results/q-1-".$v.">product-$count</a><br/>";
			$count++;
			}
		}
		echo "</body></html>";;
		/*if(!$this->getUserData($fbId)){
			$this->saveUserData($userId,$userData)
	 	}*/
		//$ads=$this->recommenderService->getRelevantAdsFromOlx($userData);	
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
