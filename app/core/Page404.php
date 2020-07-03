<?php

namespace MVC2020\Core;

class Page404
{
    public function index()
    {
        //echo '<h1>Erro 404 - Pagína não encontrada';
        //echo "<div  style='text-align: center'>";
        //echo "<img src='https://www.pngkey.com/png/detail/212-2124171_404-error-404-pagina-no-encontrada.png'>";
        //echo "</div>";

        $nome = 'Henrique';

        $conteudo = <<<ETEC
        <h1>Boa Noite {$nome}</h1>
        <h1>Erro 404 - Pagína não encontrada'</h1>
        <div  style='text-align: center'>
            <img src='https://www.pngkey.com/png/detail/212-2124171_404-error-404-pagina-no-encontrada.png'>
        </div>

ETEC;
        echo $conteudo;

    }


}