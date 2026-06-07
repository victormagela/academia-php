<?php

class RegistrationRepository {
    private PDO $db;

    public function __construct(PDO $db) {
        $this->db = $db;
    }

    public function save(Registration $registration): void {
        $this->db->prepare("INSERT INTO registrations (name, email, phone, birth_date, cpf, address) VALUES (:name, :email, :phone, :birth_date, :cpf, :address)")->execute([
            'name' => $registration->name,
            'email' => $registration->email,
            'phone' => $registration->phone,
            'birth_date' => $registration->birthDate,
            'cpf' => $registration->cpf,
            'address' => $registration->address,
        ]);
    }

    /**
     *  @return Registration[]
     */
    public function findAll(): array {
        $stmt = $this->db->prepare("SELECT * FROM registrations");
        $stmt->execute();
        $result = $stmt->fetchAll();

        return array_map(fn($row) => Registration::fromDb($row['name'], $row['email'], $row['phone'], $row['birth_date'], $row['cpf'], $row['address'], $row['registration_id']), $result);
    }
}