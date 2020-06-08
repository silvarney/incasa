<?php

namespace App\Http\Controllers\api\empresa;

use App\Http\Controllers\Controller;
use App\Models\PagamentoTaxa;
use App\Models\Pedido;
use Illuminate\Http\Request;

class SetPagamentoTaxaController extends Controller
{
    public function index()
    {
        //
    }

    public function store(Request $request)
    {
        //criacao de um novo registro de pagamento
        PagamentoTaxa::create($request->all());

        $pagamento = PagamentoTaxa::where('codigo', $request->codigo)->first();

        if (isset($pagamento)) {
            //alteracao do status de 'pendente' para 'aguardando pagamento' nos pedidos
            $pedido = Pedido::where('empresa_id', $pagamento->empresa_id)->where('taxa_pedido_status', 'pendente');
            $pedido_auteracao['taxa_pedido_status'] = 'aguardando pagamento';
            $pedido->update($pedido_auteracao);

            //deletar pagamentos gerados e nao pagos
            PagamentoTaxa::where('empresa_id', $request->empresa_id)->where('status', 'gerado')->where('codigo', '!=', $request->codigo)->delete();
        }

        return $pagamento->id;
    }

    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $pagamento = PagamentoTaxa::findOrFail($id);
        $pagamento->update($request->all());
    }

    public function destroy($id)
    {
        //
    }
}
