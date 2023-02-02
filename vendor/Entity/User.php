<?php

namespace Entity;

class User
{
    private int $id;
    private string $name;
    private string $surname;

    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string 
    {
        return $this->name;
    }

    public function setSurname(string $surname)
    {
        $this->surname = $surname;
    }

    public function getSurname(): string 
    {
        return $this->surname;
    }
    public function __toString(): string
    {
        return sprintf(
            '>>> %s: %s %s <br>',
            $this->id,
            $this->name,
            $this->surname,
       
        );
    }
    }
