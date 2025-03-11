<?php
namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Doctrine\Orm\Filter\SearchFilter;
use ApiPlatform\Doctrine\Orm\Filter\RangeFilter;
use ApiPlatform\Metadata\ApiFilter;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Traits\IdentifiableTrait;

#[ORM\Entity]
#[ApiResource]
#[ApiFilter(SearchFilter::class, properties: ['brand' => 'partial', 'model' => 'partial'])]
#[ApiFilter(RangeFilter::class, properties: ['weight', 'headSize', 'price'])]
class TennisRacket
{
    use IdentifiableTrait;

    #[ORM\Column(length: 100)]
    private ?string $brand = null;

    #[ORM\Column(length: 100)]
    private ?string $model = null;

    #[ORM\Column]
    private ?float $weight = null;

    #[ORM\Column]
    private ?float $headSize = null;

    #[ORM\Column]
    private ?float $price = null;

    public function getBrand(): ?string
    {
        return $this->brand;
    }

    public function setBrand(string $brand): self
    {
        $this->brand = $brand;
        return $this;
    }

    public function getModel(): ?string
    {
        return $this->model;
    }

    public function setModel(string $model): self
    {
        $this->model = $model;
        return $this;
    }

    public function getWeight(): ?float
    {
        return $this->weight;
    }

    public function setWeight(float $weight): self
    {
        $this->weight = $weight;
        return $this;
    }

    public function getHeadSize(): ?float
    {
        return $this->headSize;
    }

    public function setHeadSize(float $headSize): self
    {
        $this->headSize = $headSize;
        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;
        return $this;
    }
}
