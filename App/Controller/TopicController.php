<?php 

namespace App\Controller;
use Flight;
use DB\QueryBuillder;


class TopicController{
    protected $topic;

    public function __construct(){
        $this->topic = new QueryBuillder();
    }
    public function index(){
        if($this->topic->index()){
            $data =[
                'message'=>'Se muestran los datos',
                'data'=>$this->topic->index(),
                'status'=>200
             ];
             Flight::json($data);
        }else{
            Flight::json("La data está vacia!");
        }
    }

    public function show($id){

        if ($this->topic->show($id)){
            $data =[
                'message'=>'Datos personalizados',
                'data'=>$this->topic->show($id),
                'status'=>202
             ];
             Flight::json($data);
        }else{
            Flight::json( "No existen datos con el id ingresado");
        }
        
        
    }
    public function store(){
        //get data of request form
        $request = Flight::request()->data;
        $json= json_encode($request);
        $this->topic->create($json);
        $data =[
            'message'=>'Los datos fueron guardados correctamente',
            'data'=>json_decode($json),
            'status'=>201
         ];
         Flight::json($data);
    }

    public function update($id){
        $request = Flight::request()->data;
        $json = json_encode($request);
        try{
                $this->topic->update($id,$json);
                $data =[
                    'message'=>'Los datos fueron actualizados correctamente',
                    'data'=>json_decode($json),
                    'status'=>204
                 ];
                 Flight::json($data);
        }catch(\Exception $e){
            echo "Error : ".$e->getMessage();
        }
        
    }

    public function destroy($id){
        $this->topic->delete($id);
        $data =[
            'message'=>'Los datos eliminaos fueron',
            'status'=>205
         ];
         Flight::json($data);
    }

}