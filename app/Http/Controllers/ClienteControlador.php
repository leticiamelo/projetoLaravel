<?php


//Para criar um controlador com as funções automaticamente o comando é: "php artisan make:controller NomeControlador --resource"
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteControlador extends Controller
{

  private $clientes = [
    ['id' => 1, 'nome' => 'ademir'],
    ['id' => 2, 'nome' => 'Joao'],
    ['id' => 3, 'nome' => 'maria'],
    ['id' => 4, 'nome' => 'aline'],
  ]

  //a intenção com esse construtor é apenas guardar os dados no navegdor ja que na aula nao estamos utilizando bd.
  public function __construct (){
    $clientes = session('clientes');
    if(!isset($clientes))
      session([ 'clientes => $this->clientes']);
  }

  /**
  *Display a listing of the resource.
  *Mostra a lista de todos os registros da tabela.
  *
  * @return \Illuminate\Http\Response
  */

    public function index(){

      $clientes = session('clientes');
      $titulo = "todos os clientes";

      /*chamando a view e passando parametros por array associativo

      return view ('clientes.index', 
        ['clientes'=>$clientes, 'titulo'=>$titulo]);
      */
       
       // Esse trecho e o de cima fazem a mesma coisa: passam parametros para a view utilizando array associativo.

        return view ('clientes.index', compact(['clientes', 'titulo']));

      
     /*uma das maneiras de chamar view e passar parametros

      //chamando a view e passando parametros para a view
      return view ('clientes.index')
      ->with('clientes', $clientes)
      ->with('titulo', $titulo);
      */

        	
    }

     /**
      * Show the form for creating a new resource.
      * Serve para abrir um formulario para adicionar um novo item na lista
      * @return \Illuminate\Http\Response
      */

    public function create(){

      return view ('clientes.create');
      
    }


    /**
      * Estando na página de criar um novo item da lista, ao clicar em salvar, será direcionado para a funcão store. 
      * @param \Illuminate\Http\Request $request
      * @return \Illuminate\Http\Response
    */
     public function store(Request $request){

        $clientes = session('clientes');
        $id = end($clientes)['id'] + 1;
        $nome = $request ->nome;
        $dados = ["id" =>$id, "nome"=>$nome];
        $clientes[] = $dados;
        

        //Como estamos sem bd usamos esse codigo para mostrar os clientes novos cadastrados na lista.

        //dd($this->clientes);
        // return redirect() -> route('clientes.index');

        session(['clientes' =>$clientes]);
        return redirect()-> route('clientes.index');
    }


     /**
      * Mostrar mais informaçoes de um item da lista.
      * @param int $id
      * @return \Illuminate\Http\Response
    */
     public function show($id){

      $clientes = session('clientes');
      $index = $this->getIndex($id, $clientes);
      $cliente = $clientes [$index];
      return view ('clientes.info', compact(['cliente']));
    }

    /**
      * Estando na lista de itens, serve para carregar a página de edição de um item. Ao clicar no botão salvar, chama a função de update.
      * @param int $id
      * @return \Illuminate\Http\Response
    */
     public function edit($id){

      $clientes = session('clientes');
      $index = $this->getIndex($id, $clientes);
      $cliente = $clientes [$index];
      return view ('clientes.edit', compact(['cliente']));
      
    }

       /**
      *Estando na pagina de edição de um item, ao clicar no botao salvar, chamará a função update.
      * @param \Illuminate\Http\Request $request
      * @param int $id
      * @return \Illuminate\Http\Response
    */
    public function update(Request $request, $id){
      $clientes = session('clientes');
      $index = $this->getIndex($id, $clientes);
      $clientes [$index] ['nome'] = $request-> nome;
      session(['clientes' =>$clientes]);
      return redirect()-> route('clientes.index');
    }


     /**
      * Eliminar um item.
      * @param int $id
      * @return \Illuminate\Http\Response
    */
    public function destroy($id){
      $clientes = session('clientes');
      $index = $this->getIndex($id, $clientes);
      array_splice($clientes,, $index, 1);
      session(['clientes' =>$clientes]);
      return redirect()-> route('clientes.index');
    }

    private function getIndex($id, $clientes){
      $ids = array_column($clientes, 'id');
      $index = array_search($id, $ids);
      return index;
    }
}
