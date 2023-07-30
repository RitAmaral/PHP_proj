<?php
//-------------isto foi criado ao escrever isto no terminal: php artisan make:controller EmpregadosController -r
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empregado; //---------------------isto é preciso acrescentar

class EmpregadosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        //dd('cheguei aos empregados'); //fazemos isto para ver se a route está bem criada. se na página web aparecer "cheguei aqui", a rota está bem feita.
        $empregados=Empregado::get(); //Empregado que é o que está no App-> Models
        //dd($empregados);
        return view ('empregado.empregados', [ //empregado porque a pasta chama-se empregado; o empregados é a página que vai abrir (empregados.blade)
           'empregados'=>$empregados ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view ('empregado.empregados_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(\App\Http\Requests\Empregado\EmpregadoStoreRequest $request)
    {
        //
        $data=$request->only(['nome', 'morada', 'localidade', 'password']);
        Empregado::create($data); 
        return redirect() -> route('empregado.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $empregados=Empregado::find($id);
        return view('empregado.empregados_show',
            ['empregado'=>$empregados]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $empregados=Empregado::find($id);
        return view('empregado.empregados_edit',
            ['empregado'=>$empregados]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(\App\Http\Requests\Empregado\EmpregadoUpdateRequest $request, string $id)
    {
        //
        $data=$request -> only(['nome', 'morada', 'localidade']);
        //dd($data);
        $empregado=Empregado::find($id);
        $empregado->update($data);

        //return redirect() ->back(); //depois de gravar, volta para trás. 
        return redirect() ->route('empregado.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $empregado=Empregado::find($id); //vai buscar e destruir o empregado que clicarmos com o id correspondente
        $empregado->delete();
        return redirect() -> route('empregado.index');
    }
}
