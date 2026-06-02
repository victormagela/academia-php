<?php

class Registration {
    public string $name;
    public string $email;
    public string $phone;
    public string $birthDate;
    public string $cpf;
    public string $address;

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