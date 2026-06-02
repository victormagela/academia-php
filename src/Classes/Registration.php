<?php

class Registration {
    private string $name;
    private string $email;
    private string $phone;
    private string $birthDate;
    private string $cpf;
    private string $address;

    public function __construct(
        string $name, 
        string $email, 
        string $phone, 
        string $birthDate, 
        string $cpf, 
        string $address
    )
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->birthDate = $birthDate;
        $this->cpf = $cpf;
        $this->address= $address;
    }
}