<?php
// Exercício PHP em arquivo único abordando 5 conceitos:
// 1. Variáveis
// 2. Arrays
// 3. Condicionais
// 4. Loops
// 5. Funções

// ---- 1. VARIÁVEIS ----
echo "<h2>1. Variáveis</h2>";

// Atribuição das variáveis
$nome = "Maria";
$idade = 25;
$profissao = "Desenvolvedora";
$salario = 5000.50;
$ativo = true;

// Exibir valores
echo "Nome: $nome <br>";
echo "Idade: $idade anos. <br>";
echo "Profissão: $profissao <br>";
echo "Salário:  R$ " .number_format($salario, 2, ',' , '.'). "<br>";
echo "Status: " .($ativo ? "Ativo" : "Inativo") . "<br>";


echo "<br>";
echo "=============================================================================";

// ---- 2. ARRAYS ----
echo "<h2>2. Arrays</h2>";

// Array indexado
$frutas = ["Maça", "Banana", "Laranja", "Uva", "Morango"];

// Array associativo
$funcionario = [
    "nome" => "João",
    "cargo" => "Analista",
    "departamento" => "TI",
    "salario" => 4500
];

// Array multidimensional
$alunos = [
    ["nome" => "Pedro", "nota" =>8.5],
    ["nome" => "Ana", "nota" =>9.0],
    ["nome" => "Carlos", "nota" =>7.5],
];

// Exibição // Array indexado
echo "<strong>Lista de frutas</strong> <br>";
foreach($frutas as $fruta) {
    echo "- $fruta <br>";
}

// Exibição // Array associativo
echo "<br> <strong>Dados do funcionário</strong> <br>";
foreach($funcionario as $chave => $valor) {
    echo ucfirst($chave) . ": $valor <br>";
}

// Exibição // Array multidimensional
echo "<br> <strong>Dados dos alunos</strong> <br>";
foreach($alunos as $aluno) {
    echo "Aluno: {$aluno['nome']} - Nota: {$aluno['nota']} <br>";
}

// Exemplo (Pegar Nome só do 1º Aluno)
echo "<br> <strong>Trazer Nome do 1º Aluno</strong> <br>";
echo $alunos[0]["nome"];
echo "<br>";

// Exemplo (Pegar Nota só do 3º Aluno)
echo "<br> <strong>Trazer Nota do 3º Aluno</strong> <br>";
echo $alunos[2]["nota"];
echo "<br>";

echo "<br>";
echo "=============================================================================";

// ---- 3. CONDICIONAIS ----
echo "<h2>3. Condicionais</h2>";

$temperatura = 28;
echo "Temperatura atual: " .$temperatura. "ºC <br>";
echo "<br>";

// Condicional normal
if ($temperatura <15) {
    echo "Está frio! <br>";
} elseif ($temperatura >=15 && $temperatura <25) {
    echo "Temperatura agradável! <br>";
} else {
    echo "Está calor! <br>";
}

echo "<br>";

// Ternário
echo ($temperatura <15) ? "Está frio! <br>" :
(($temperatura >=15 && $temperatura <25) ?
"Temperatura agradável! <br>" : "Está calor! <br>");

// switch case
// "w" Retorna o dia da semana (0-6) através da função "date"
$dia_semana = date("w");
echo "Hoje é: ";

switch ($dia_semana) {
    case 0:
        echo "Domingo";
        break;
    case 1:
        echo "Segunda-feira";
        break;
    case 2:
        echo "Terça-feira";
        break;
    case 3:
        echo "Quarta-feira";
        break;
    case 4:
        echo "Quinta-feira";
        break;
    case 5:
        echo "Sexta-feira";
        break;
    case 6:
        echo "Sábado";
        break;
}

echo "<br>";
echo "=============================================================================";

// ---- 4. LOOPS ----
echo "<h2>4. Loops</h2>";

// For
for ($i = 1; $i<=5; $i++) {
    echo "Número: $i <br>";
}

echo "<br>";

// While (Enquanto)
$contador =5;
while ($contador >= 0) {
    echo "Contagem: $contador <br>";
    $contador--;
    // $contador = $contador -1;
}

echo "<br>";

// Do While (Faça enquanto)
$z=1;
do {
    echo "Valor: $z <br>";
    $z++;
}while($z<=8);

echo "<br>";

// Foreach com arrays
echo "<br> <strong>Laço Foreach</strong> <br>";
$frutas = ["Maça", "Banana", "Laranja", "Uva", "Morango"];

foreach($frutas as $indice =>$fruta) {
    echo "Frutas $indice: $fruta <br>";
}

echo "<br>";


echo "<br>";
echo "=============================================================================";

// ---- 5. FUNÇÕES ----
echo "<h2>5. Funções</h2>";

// Função símples
function saudacao($nome) {
    return"Olá, $nome!";
}

// Exibição
echo saudacao("Carlos") ."<br>";

// Função anônima
$dobro = function($numero) {
    return $numero *2;
};

// Exibição
echo "O dobro de 15 é: " . $dobro(15) . "<br>";



// O fatorial de um número n é o produto de todos os inteiros de 1 até n. O fatorial de 5, por exemplo, é 5 * 4 * 3 * 2 * 1 = 120.

// Função Recursiva:

// Recursão é um processo onde a função chama a si mesma. No caso da função fatorial(), ela chama a si mesma com o valor de $n - 1 até que $n seja menor ou igual a 1.
// A base da recursão (condição de parada) é quando $n <= 1, onde a função retorna 1. Isso é necessário para evitar que a função continue chamando a si mesma indefinidamente.

// Função para calcular Fatorial
function fatorial($n) {
    if ($n <=1) return 1;
    return $n * fatorial($n -1);
}

// Exibir fatorial de 8
echo "Fatorial de 8: " . fatorial(8) . "<br>";

echo "<br>";
echo "=============================================================================";

// EXERCÍCIO PRÁTICO: Combinando todos os conceitos
echo "<h2>Exercício Prático</h2>";

// Função para calcular média de notas


// 6º Digitação (Aqui)


// Criando um array com alunos e notas
$turma = [
    ["nome" => "Ana Silva", "notas" => [8.5, 9.0, 7.5]],
    ["nome" => "Pedro Santos", "notas" => [6.0, 7.5, 8.0]],
    ["nome" => "Maria Oliveira", "notas" => [9.5, 9.0, 10.0]],
    ["nome" => "João Costa", "notas" => [5.0, 6.5, 7.0]],
    ["nome" => "Lucia Pereira", "notas" => [7.5, 8.0, 6.5]]
];

// Exibindo os resultados


// 7º Digitação (Aqui)


?>