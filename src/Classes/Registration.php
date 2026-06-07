<?php

class Registration {
    private ?int $registrationId; 
    public string $name;
    public string $email;
    public string $phone;
    public string $birthDate;
    public string $cpf;
    public string $address;

    private function __construct(
        string $name, 
        string $email, 
        string $phone, 
        string $birthDate, 
        string $cpf, 
        string $address,
        ?int $registrationId = null
    )
    {
        $this->registrationId = $registrationId;
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->birthDate = $birthDate;
        $this->cpf = $cpf;
        $this->address= $address;
    }

    static public function create(
        string $name, 
        string $email, 
        string $phone, 
        string $birthDate, 
        string $cpf, 
        string $address
    ): Registration {
        return new Registration(
        $name, 
        $email, 
        $phone, 
        $birthDate, 
        $cpf, 
        $address
        );
    }

    static public function fromDb(
        string $name, 
        string $email, 
        string $phone, 
        string $birthDate, 
        string $cpf, 
        string $address,
        int $registrationId
    ): Registration {
        return new Registration(
        $name, 
        $email, 
        $phone, 
        $birthDate, 
        $cpf, 
        $address,
        $registrationId
        );
    }

    public function getId() {
        return $this->registrationId;
    }
}