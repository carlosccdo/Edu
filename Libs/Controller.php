 <?php 

 class Controller{
    function __construct(){
        echo "<p>Controlador base</p>";
        $this->view = new View();
    }
    function LoadModel($modelo){

    	$modelpath = "Model/".$modelo."Model.php";
    	if(file_exists($modelpath)){
    		require $modelpath;
    		$modelName = $modelo."Model";
    		$this->modelo = new $modelName();
    	}

    }


}
?>