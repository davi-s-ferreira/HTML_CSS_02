<?php require __DIR__ . "/_header.php"; ?>

<style>
    table, tr, th, td {
        border: 1px solid black;
    }

</style>

<h2>Tabelas</h2>

<p><strong>table</strong> &rarr; Cria uma tabela.</p>
<p><strong>tr</strong> &rarr; table row &rarr; Cria uma linha na tabela.</p>
<p><strong>th</strong> &rarr; table header &rarr; Cria uma célula de cabeçalho dentro da linha.</p>
<p><strong>td</strong> &rarr; table data &rarr; Cria uma célula de dados dentro da linha.</p>
<p><strong>colspan</strong> &rarr; Expande coluna &rarr; Esse atributo espande uma célula na mesma linha.</p>
<p><strong>rowspan</strong> &rarr; Expande linha &rarr; Esse atributo espande uma célula para a linha seguinte.</p>

<table style="border: 1px solid black">

    <tr>
        <th style="background: gray">Nome</th>
        <th style="background: gray">E-mail</th>
        <th style="background: gray">Nascimento</th>
    </tr>

    <tr>
        <td>Joca da Silva</td>
        <td>joca@silva.com</td>
        <td>10/11/1980</td>
    </tr>

    <tr>
        <td>Setembrino Trocatapas</td>
        <td>set@brino.com</td>
        <td>23/12/1979</td>
    </tr>

    <tr>
        <td>Marineuza Siriliano</td>
        <td>mari@neuza.com</td>
        <td>02/02/2000</td>
    </tr>

    <tr>
        <td>Edilineuza Carmisona</td>
        <td>edir@carmo.com</td>
        <td>10/04/1971</td>
    </tr>

</table>

<h3>Outra tabela</h3>

<table>

    <tr>
        <th>Produto</th>
        <th>Preço</th>
        <th>Seção</th>
        <th>Subseção</th>
    </tr>

    <tr>
        <td>Bicicleta</td>
        <td>R$1000,00</td>
        <td colspan="2">Veículos</td>
    </tr>

    <tr>
        <td>Bola</td>
        <td>R$20,00</td>
        <td>Esportes</td>
        <td>Bolas</td>
    </tr>

    <tr>
        <td>Patins</td>
        <td>R$500,00</td>
        <td colspan="2" rowspan="2">Veículos</td>
    </tr>

    <tr>
        <td>Patinete</td>
        <td>R$700,00</td>
    </tr>

</table>

<h3>Exercícios</h3>

<p><strong>Exercício 1:</strong> Crie mais uma tabela simples representando dados em 4 colunas e 6 linhas.</p>

<table>

    <tr>
        <th>Jogadores</th>
        <th>Posição</th>
        <th>Número</th>
        <th>Time</th>
    </tr>

    <tr>
        <td>Gabigol</td>
        <td>Atacante</td>
        <td>9</td>
        <td>Flamengo</td>
    </tr>

    <tr>
        <td>Pedro</td>
        <td>Atacante</td>
        <td>21</td>
        <td>Flamengo</td>
    </tr>

    <tr>
        <td>Arrascaeta</td>
        <td>Meia</td>
        <td>14</td>
        <td>Flamengo</td>
    </tr>

    <tr>
        <td>David luiz</td>
        <td>Zagueiro</td>
        <td>23</td>
        <td>Flamengo</td>
    </tr>

    <tr>
        <td>Bruno Henrique</td>
        <td>Atacante</td>
        <td>27</td>
        <td>Flamengo</td>
    </tr>

    <tr>
        <td>Diego Alves</td>
        <td>Goleiro</td>
        <td>1</td>
        <td>Flamengo</td>
    </tr>

    </table>

    <p><strong>Exercício 2:</strong> Crie uma pequena lista de compras para o brunch das crianças.</p>

   <table>

   <tr>
        <th>Produto</th>
        <th>Quantidade</th>
        <th>Preço</th>       
   </tr>    

   <tr>
        <td>Pães</td>
        <td>8</td>
        <td>R$0,60</td>
    </tr>

    <tr>
    <td>Ovos</td>
    <td>12</td>
    <td>R$0,99</td>
    </tr>

    <tr>
    <td>Queijos</td>
    <td>5</td>
    <td>R$3,99</td>
    </tr>

    <tr>
    <td>Cereais</td>
    <td>3</td>
    <td>R$5,99</td>
    </tr>

    <tr>
    <td>Leites</td>
    <td>5</td>
    <td>R$4,99</td>
    </tr>

   </table>

   <p><strong>Exercício 3:</strong> Clique no relógio do Windows e reproduza o calendário do mês atual usando HTML.</p>
   
<?php require __DIR__ . "/_footer.php"; ?>