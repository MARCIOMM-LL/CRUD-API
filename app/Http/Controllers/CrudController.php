<?php

namespace App\Http\Controllers;

use App\Http\Helpers\FieldsValidation;
use App\Http\Requests\CrudValidation;
use App\Http\Requests\CrudValidationEdition;
use App\Models\Tb_crud;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CrudController extends Controller
{
    //public function index(Request $request): View
    //{
    //    //$dados = Tb_crud::all();
    //    $dados = Tb_crud::query()
    //        ->orderBy('nome')
    //        ->get();

    //    //$dados = Tb_crud::paginate($request->per_page);

    //    $mensagem = $request->session()->get('mensagem');

    //    return view('dados.index', compact('dados', 'mensagem'));
    //}

    //public function create(): View
    //{
    //    return view('dados.create');
    //}

    //public function store(CrudValidation $request): RedirectResponse
    //{
    //    try
    //    {
    //        $validacao = new FieldsValidation(
    //            $request->nome,
    //            $request->email,
    //            $request->celular,
    //            $request->data_nascimento,
    //            $request->cep,
    //            $request->endereco,
    //            $request->numero,
    //            $request->bairro,
    //            $request->cidade,
    //            $request->uf
    //        );

    //        $nome = $request->nome;
    //        $sobrenome = $request->sobrenome;
    //        $email = $request->email;
    //        $data_nascimento = $request->data_nascimento;
    //        $celular = $request->celular;
    //        $cep = $request->cep;
    //        $endereco = $request->endereco;
    //        $numero = $request->numero;
    //        $bairro = $request->bairro;
    //        $cidade = $request->cidade;
    //        $uf = $request->uf;
    //    }
    //    catch(\Exception $error)
    //    {
    //        echo "<script>alert('" . $error->getMessage() . "')</script>";
    //        echo "<script>history.back()</script>";
    //    }

    //    Tb_crud::create([
    //        'nome' => $nome,
    //        'sobrenome' => $sobrenome,
    //        'email' => $email,
    //        'data_nascimento' => $data_nascimento,
    //        'celular' => \App\Http\Helpers\FieldsValidation::removeFormatacao($celular),
    //        'cep' => \App\Http\Helpers\FieldsValidation::removeFormatacao($cep),
    //        'endereco' => $endereco,
    //        'numero' => $numero,
    //        'bairro' => $bairro,
    //        'cidade' => $cidade,
    //        'uf' => $uf
    //    ]);

    //    $request->session()
    //        ->flash(
    //            'mensagem',
    //            'Dado criado com sucesso!'
    //        );

    //    return redirect()->route('listar_dados');
    //}

    //public function edit(Tb_crud $id): View
    //{
    //    $dados = Tb_crud::find($id);

    //    return view('dados.editar', compact('dados'));
    //}

    //public function update(CrudValidationEdition $request, int $id): RedirectResponse
    //{
    //    //Tb_crud::find($id)->update(
    //    //    \App\Http\Helpers\FieldsValidation::removeFormatacao($request->all())
    //    //);

    //    try
    //    {
    //        $validacao = new FieldsValidation(
    //            $request->nome,
    //            $request->email,
    //            $request->celular,
    //            $request->data_nascimento,
    //            $request->cep,
    //            $request->endereco,
    //            $request->numero,
    //            $request->bairro,
    //            $request->cidade,
    //            $request->uf
    //        );

    //        $nome = $request->nome;
    //        $sobrenome = $request->sobrenome;
    //        $email = $request->email;
    //        $data_nascimento = $request->data_nascimento;
    //        $celular = $request->celular;
    //        $cep = $request->cep;
    //        $endereco = $request->endereco;
    //        $numero = $request->numero;
    //        $bairro = $request->bairro;
    //        $cidade = $request->cidade;
    //        $uf = $request->uf;
    //    }
    //    catch(\Exception $error)
    //    {
    //        echo "<script>alert('" . $error->getMessage() . "')</script>";
    //        echo "<script>history.back()</script>";
    //    }

    //    Tb_crud::find($id)->update([
    //        'nome' => $nome,
    //        'sobrenome' => $sobrenome,
    //        'email' => $email,
    //        'data_nascimento' => $data_nascimento,
    //        'celular' => \App\Http\Helpers\FieldsValidation::removeFormatacao($celular),
    //        'cep' => \App\Http\Helpers\FieldsValidation::removeFormatacao($cep),
    //        'endereco' => $endereco,
    //        'numero' => $numero,
    //        'bairro' => $bairro,
    //        'cidade' => $cidade,
    //        'uf' => $uf
    //    ]);

    //    $request->session()
    //        ->flash(
    //            'mensagem',
    //            'Dado criado com sucesso!'
    //        );

    //    return redirect()->route('listar_dados');
    //}

    //public function destroy(Request $request): RedirectResponse
    //{
    //    Tb_crud::destroy($request->id);

    //    $request->session()
    //        ->flash(
    //            'mensagem',
    //            'Dado excluído com sucesso!'
    //        );

    //    return redirect()->route('listar_dados');
    //}




    // CONSUMO DE API RESTFUL
    public function index(Request $request): View
    {
        //$dados = Tb_crud::all();
        //$dados = Tb_crud::query()
        //    ->orderBy('nome')
        //    ->get();

        $dados = Tb_crud::paginate($request->per_page);

        $mensagem = $request->session()->get('mensagem');

        return view('dados.index', compact('dados', 'mensagem'));
    }


    public function create(): View
    {
        return view('dados.create');
    }

    public function store(CrudValidation $request): RedirectResponse
    {
        try
        {
            $validacao = new FieldsValidation(
                $request->nome,
                $request->email,
                $request->celular,
                $request->data_nascimento,
                $request->cep,
                $request->endereco,
                $request->numero,
                $request->bairro,
                $request->cidade,
                $request->uf
            );

            $nome = $request->nome;
            $sobrenome = $request->sobrenome;
            $email = $request->email;
            $data_nascimento = $request->data_nascimento;
            $celular = $request->celular;
            $cep = $request->cep;
            $endereco = $request->endereco;
            $numero = $request->numero;
            $bairro = $request->bairro;
            $cidade = $request->cidade;
            $uf = $request->uf;
        }
        catch(\Exception $error)
        {
            echo "<script>alert('" . $error->getMessage() . "')</script>";
            echo "<script>history.back()</script>";
        }

        //response()->json(Tb_crud::create($request->all()), status: 201);

        response()->json(Tb_crud::create([
            'nome' => $nome,
            'sobrenome' => $sobrenome,
            'email' => $email,
            'data_nascimento' => $data_nascimento,
            'celular' => \App\Http\Helpers\FieldsValidation::removeFormatacao($celular),
            'cep' => \App\Http\Helpers\FieldsValidation::removeFormatacao($cep),
            'endereco' => $endereco,
            'numero' => $numero,
            'bairro' => $bairro,
            'cidade' => $cidade,
            'uf' => $uf
        ]), status: 201);

        $request->session()
            ->flash(
                'mensagem',
                'Dado criado com sucesso!'
            );

        return redirect()->route('listar_dados');
    }

    public function edit(Tb_crud $id): View
    {
        $dados = Tb_crud::find($id);

        if (is_null($dados)) {
            return response()->json([
                'erro' => 'Recurso não encontrado!!'
            ], 404);
        }

        return view('dados.editar', compact('dados'));
    }

    public function update(CrudValidationEdition $request, int $id): RedirectResponse
    {
        //Tb_crud::find($id)->update(
        //    \App\Http\Helpers\FieldsValidation::removeFormatacao($request->all())
        //);

        try
        {
            $validacao = new FieldsValidation(
                $request->nome,
                $request->email,
                $request->celular,
                $request->data_nascimento,
                $request->cep,
                $request->endereco,
                $request->numero,
                $request->bairro,
                $request->cidade,
                $request->uf
            );

            $nome = $request->nome;
            $sobrenome = $request->sobrenome;
            $email = $request->email;
            $data_nascimento = $request->data_nascimento;
            $celular = $request->celular;
            $cep = $request->cep;
            $endereco = $request->endereco;
            $numero = $request->numero;
            $bairro = $request->bairro;
            $cidade = $request->cidade;
            $uf = $request->uf;
        }
        catch(\Exception $error)
        {
            echo "<script>alert('" . $error->getMessage() . "')</script>";
            echo "<script>history.back()</script>";
        }

        Tb_crud::find($id)->update([
            'nome' => $nome,
            'sobrenome' => $sobrenome,
            'email' => $email,
            'data_nascimento' => $data_nascimento,
            'celular' => \App\Http\Helpers\FieldsValidation::removeFormatacao($celular),
            'cep' => \App\Http\Helpers\FieldsValidation::removeFormatacao($cep),
            'endereco' => $endereco,
            'numero' => $numero,
            'bairro' => $bairro,
            'cidade' => $cidade,
            'uf' => $uf
        ]);

        $request->session()
            ->flash(
                'mensagem',
                'Dado criado com sucesso!'
            );

        return redirect()->route('listar_dados');
    }

    public function destroy(Request $request): RedirectResponse
    {
        $qtdRecursosRemovidos = Tb_crud::destroy($request->id);

        if ($qtdRecursosRemovidos === 0) {
            return response()->json([
                'erro' => 'Recurso não encontrado!!'
            ], 404);
        }

        $request->session()
            ->flash(
                'mensagem',
                'Dado excluído com sucesso!'
            );

        return redirect()->route('listar_dados');
    }

    public function editaNome(Request $request)
    {
        $novoNome = $request->nome;
        $dado = Tb_crud::find($request->id);
        $dado->nome = $novoNome;
        $dado->save();
    }
}
