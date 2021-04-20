<?php

namespace App\Entity;

use App\Repository\LogsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LogsRepository::class)
 */
class Logs
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $crate_date;

    /**
     * @ORM\Column(type="text")
     */
    private $json;

    /**
     * @ORM\Column(type="text")
     */
    private $log_text;

    /**
     * @ORM\Column(type="integer")
     */
    private $sub_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCrateDate(): ?\DateTimeInterface
    {
        return $this->crate_date;
    }

    public function setCrateDate(\DateTimeInterface $crate_date): self
    {
        $this->crate_date = $crate_date;

        return $this;
    }

    public function getJson(): ?string
    {
        return $this->json;
    }

    public function setJson(string $json): self
    {
        $this->json = $json;

        return $this;
    }

    public function getLogText(): ?string
    {
        return $this->log_text;
    }

    public function setLogText(string $log_text): self
    {
        $this->log_text = $log_text;

        return $this;
    }

    public function getSubId(): ?int
    {
        return $this->sub_id;
    }

    public function setSubId(int $sub_id): self
    {
        $this->sub_id = $sub_id;

        return $this;
    }
}
