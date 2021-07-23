<?php
declare(strict_types=1);

class bankAccount { //definição de classe
public string $bank; //public - todo mundo vê, todo mundo acessa
private string $owner;
private string $agencyNumber;
private string $accountNumber;
private float $balance; //private - apenas métodos da própria classe podem acessar e alterar essa variável

public function __construct(string $bank, string $owner, string $agencyNumber, string $accountNumber, float  $balance) 
//método construtor (é chamado sempre que a classe é instaciada)
{
$this->bank = $bank; //$this se refere a algum elemento instanciado na prória classe. $this->bank se refere ao public $bank declarado no 'cabeçalho' da classe
$this->owner = $owner;
$this->agencyNumber = $agencyNumber;
$this->accountNumber = $accountNumber;
$this->balance = $balance;
}


//Handlers $balance
public function getBalance() : float
{
    return $this->balance; //como o atributo $balance está como private, apenas um método da própria classe pode acessá-lo
}

public function depositBalance(float $value): void{
    $this->balance += $value;
}

public function withdrawBalance(float $value): void{
    $this->balance -= $value;
}

}


$myBankAccount = new bankAccount(
    'Nubank',      //bank
    'Lucas Sacci', //owner
    '1',           //agencyNumber
    '123456',      //accountNumber
    1000.00        //balance
); //instancia a classe com atributos

echo "Banco: $myBankAccount->bank <br>"; //atributos declarados como public podem ser acessados dessa forma
$myBankAccount->depositBalance(500); //deposita 500 conto
$myBankAccount->withdrawBalance(100); //saca 100 conto
echo $myBankAccount->getBalance(); //atributos declarados como private precisam de um handler get/set para acessá-los;
?>