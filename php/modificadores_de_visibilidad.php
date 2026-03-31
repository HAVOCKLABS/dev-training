<?php
declare(strict_types=1);

class Usuario 
{
    private string $email;
    private string $passwordHash;

    public function __construct(string $email, string $password)
    {
        $this->setEmail($email);
        $this->setPassword($password);
    }

    public function getEmail(): string
    {
        return $this->email;
    }
    public function setEmail(string $email): void
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false)
            {
                throw new InvalidArgumentException('Email invalido');
            }
            $this->email = strtolower($email);
    }

    public function setPassword(string $password):void
    {
        if (strlen($password) < 8)
            {
                throw new InvalidArgumentException('Password debe tener minimo 8 caracteres');
            }
            $this->passwordHash =  password_hash($password, PASSWORD_DEFAULT);
    }
    
    public function verificarPassword(string $password): bool
    {
        return password_verify($password, $this->passwordHash);
    }

}

$usuario =  new Usuario('ana@ejemplo.com', '123456789');
echo $usuario->getEmail();
