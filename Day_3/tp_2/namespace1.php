<?php

namespace espace1;

class Message
{
    public $_auteur;
    public $_email;
    public $_sujet;
    public $_contenu;

    public function getAuteur()
    {
        return $this->_auteur;
    }

    public function getEmail()
    {
        return $this->_email;
    }

    public function getSujet()
    {
        return $this->_sujet;
    }

    public function getContenu()
    {
        return $this->_contenu;
    }

    public function setAuteur($name)
    {
        $this->_auteur = $name;
        return $this;
    }

    public function setEmail($name)
    {
        $this->_email = $name;
        return $this;
    }

    public function setSujet($name)
    {
        $this->_sujet = $name;
        return $this;
    }

    public function setContenu($name)
    {
        $this->_contenu = $name;
        return $this;
    }
}
