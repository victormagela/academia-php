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

    public function findById(int $id): Registration {
        $stmt = $this->db->prepare("SELECT * FROM registrations WHERE registration_id = $id");
        $stmt->execute();
        $result = $stmt->fetchAll();

        return Registration::fromDb(
            $result[0]['name'],
            $result[0]['email'],
            $result[0]['phone'],
            $result[0]['birth_date'],
            $result[0]['cpf'],
            $result[0]['address'],
            $result[0]['registration_id']
        );
    }

    public function updateRegistration(
        int $id,
        string $name,
        string $email,
        string $phone,
        string $birthDate,
        string $cpf,
        string $address,
    ): int {
        $stmt = $this->db->prepare(
            "UPDATE registrations
            SET
                name = :name,
                email = :email,
                phone = :phone,
                birth_date = :birthDate,
                cpf = :cpf,
                address = :address
            WHERE registration_id = $id;"
        );
        
        $stmt->execute([
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'birthDate' => $birthDate,
            'cpf' => $cpf,
            'address' => $address           
        ]);
        
        return $stmt->rowCount();
    }
}