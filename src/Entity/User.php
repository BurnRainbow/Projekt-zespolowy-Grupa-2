<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[UniqueEntity(fields: ['username'], message: 'There is already an account with this username')]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180, unique: true)]
    private ?string $username = null;

    #[ORM\Column(length: 40)]
    private ?string $email = null;

    #[ORM\Column]
    private array $roles = [];

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @var string The hashed password
     */
    #[ORM\Column]
    private ?string $password = null;

    #[ORM\Column]
    private ?int $wygrane = 0;

    #[ORM\Column]
    private ?int $przegrane = 0;

    #[ORM\Column]
    private ?int $remisy = 0;

    #[ORM\OneToMany(mappedBy: 'User', targetEntity: HistoriaGier::class)]
    private Collection $DoHistoriiGier;

    public function __construct()
    {
        $this->DoHistoriiGier = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @deprecated since Symfony 5.3, use getUserIdentifier instead
     */
    public function getUsername(): string
    {
        return (string) $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->username;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Returning a salt is only needed, if you are not using a modern
     * hashing algorithm (e.g. bcrypt or sodium) in your security.yaml.
     *
     * @see UserInterface
     */
    public function getSalt(): ?string
    {
        return null;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getWygrane(): ?int
    {
        return $this->wygrane;
    }

    public function setWygrane(int $wygrane): static
    {
        $this->wygrane = $wygrane;

        return $this;
    }

    public function getPrzegrane(): ?int
    {
        return $this->przegrane;
    }

    public function setPrzegrane(int $przegrane): static
    {
        $this->przegrane = $przegrane;

        return $this;
    }

    public function getRemisy(): ?int
    {
        return $this->remisy;
    }

    public function setRemisy(int $remisy): static
    {
        $this->remisy = $remisy;

        return $this;
    }

    /**
     * @return Collection<int, HistoriaGier>
     */
    public function getDoHistoriiGier(): Collection
    {
        return $this->DoHistoriiGier;
    }

    public function addDoHistoriiGier(HistoriaGier $doHistoriiGier): static
    {
        if (!$this->DoHistoriiGier->contains($doHistoriiGier)) {
            $this->DoHistoriiGier->add($doHistoriiGier);
            $doHistoriiGier->setUser($this);
        }

        return $this;
    }

    public function removeDoHistoriiGier(HistoriaGier $doHistoriiGier): static
    {
        if ($this->DoHistoriiGier->removeElement($doHistoriiGier)) {
            // set the owning side to null (unless already changed)
            if ($doHistoriiGier->getUser() === $this) {
                $doHistoriiGier->setUser(null);
            }
        }

        return $this;
    }
}
