<?php

namespace App\Entity;

use App\Repository\ContactsRepository;
use Doctrine\ORM\Mapping as ORM;use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass=ContactsRepository::class)
 * @Vich\Uploadable
 */
class Contacts
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $entreprise;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=1048)
     */
    private $message;

        /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $document;

    /**
     * @Vich\UploadableField(mapping="product_images", fileNameProperty="document")
     * @var File
     */
    private $file;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getEntreprise(): ?string
    {
        return $this->entreprise;
    }

    public function setEntreprise(string $entreprise): self
    {
        $this->entreprise = $entreprise;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }

    public function getDocument(): ?string
    {
        return $this->document;
    }

    public function setDocument($document): self
    {
        $this->document = $document;

        return $this;
    }

    public function setFile(File $document = null)
    {
        $this->file = $document;

        // VERY IMPORTANT:
        // It is required that at least one field changes if you are using Doctrine,
        // otherwise the event listeners won't be called and the file is lost
        // if ($document) {
            // if 'updatedAt' is not defined in your entity, use another property
            // $this->updatedAt = new \DateTime('now');
        // }
    }

    public function getFile()
    {
        return $this->file;
    }
}
