<?php

namespace App\Http\Controllers\api\empresa;

use App\Http\Controllers\Controller;
use App\Models\PublicidadePagamento;
use Illuminate\Http\Request;
use Artistas\PagSeguro\PagSeguro;

class SetPublicidadePagamentoController extends Controller
{
    public function index()
    {
        //
    }

    public function store(Request $request)
    {
        $request['status'] = 'aguardando pagamento';
        

        $request['inicio'] = date("Y-m-d", strtotime($request->inicio));
        $request['fim'] = date("Y-m-d", strtotime($request->fim));

        PublicidadePagamento::create($request->all());

        //Boleto em nome da empresa
        $pagseguro = PagSeguro::setReference($request->codigo)
        ->setSenderInfo([
        'senderName' => 'Empresa de supermercado', //Deve conter nome e sobrenome
        'senderPhone' => '91992462035', //Código de área enviado junto com o telefone
        'senderEmail' => 'empresa@gmail.com',
        'senderHash' => $hash, //>>>>>>>>> parei aqui <<<<<<<<<<
        'senderCNPJ' => $empresa->empresa_cnpj //Ou CNPJ se for Pessoa Júridica
        ])
        ->setShippingAddress([ // OPCIONAL
            'shippingAddressStreet' => $empresa->empresa_endereco,
            'shippingAddressNumber' => '00',
            'shippingAddressDistrict' => $empresa->empresa_bairro,
            'shippingAddressPostalCode' => '68680-000',
            'shippingAddressCity' => 'Tomé-Açu',
            'shippingAddressState' => 'Pa'
        ])
        ->setItems([
        [
            'itemId' => $pagamento->pagamento_id,
            'itemDescription' => 'Empresa: '.$empresa->empresa_nome.' - Plano: '.$planos[$pagamento->pagamento_plano].' - Prazo: '.$pagamento->pagamento_prazo,
            'itemAmount' => $pagamento->pagamento_pago, //Valor unitário
            'itemQuantity' => '1', // Quantidade de itens
        ]
        ])
        ->send([
        'paymentMethod' => 'boleto'
    ]);

    }

    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
