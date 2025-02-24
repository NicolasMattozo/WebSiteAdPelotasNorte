<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OracaoController extends Controller
{
    public function enviarPedido(Request $request)
    {
        // Validação dos campos
        $request->validate([
            'nome' => 'nullable|string|max:255',
            'motivo' => 'required|string|max:255|min:5',
            'conteudo' => 'required|string|max:255|min:5',
        ]);

        // Dados do formulário
        $dados = [
            'nome' => $request->input('nome', 'Anônimo'),
            'motivo' => $request->input('motivo'),
            'conteudo' => $request->input('conteudo'),
        ];

        // Enviar e-mail
        Mail::send('emails.pedido_oracao', $dados, function ($message) use ($dados) {
            $message->to('adnortewebsite@gmail.com')
                ->from('pedidooracaoadnorte@gmail.com', 'Pedido de Oração')
                ->subject('Pedido de Oração - ' . $dados['motivo']);
        });

        return response()->json(['mensagem' => 'Pedido de oração enviado com sucesso!']);
    }
}
