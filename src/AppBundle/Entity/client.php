<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * client
 *
 * @ORM\Table(name="clients")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\clientRepository")
 */
class client
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     *  /**
     * @Assert\Choice({"Client A", "Client B", "Client C"})
     *
     * @var string
     *
     * @ORM\Column(name="client", type="string", length=255)
     */
    private $client;

    /**
     * @var string
     *
     * @ORM\Column(name="matter", type="string", length=400)
     */
    private $matter;

    /**
     * @var string
     *
     * @ORM\Column(name="issuer", type="string", length=255)
     */
    private $issuer;

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=255)
     */
    private $language;

    /**
     * @var string
     *
     * @ORM\Column(name="currency", type="string", length=255)
     */
    private $currency;

    /**
     * /**
     * @Assert\Regex(
     *     pattern="/^[0-9]+$/",
     *     match=true,
     *     message="Your name cannot contain a number"
     * )
     *
     * @var string
     *
     * @ORM\Column(name="invoice", type="integer")
     */
    private $invoice;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="decimal", precision=10, scale=0)
     */
    private $amount;

    /**
     * @var string
     *
     * @ORM\Column(name="discount", type="decimal", precision=10, scale=0)
     */
    private $discount;

    /**
     * @var int
     *
     * @ORM\Column(name="vat", type="integer")
     */
    private $vat;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set client.
     *
     * @param string $client
     *
     * @return client
     */
    public function setClient($client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client.
     *
     * @return string
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set matter.
     *
     * @param string $matter
     *
     * @return client
     */
    public function setMatter($matter)
    {
        $this->matter = $matter;

        return $this;
    }

    /**
     * Get matter.
     *
     * @return string
     */
    public function getMatter()
    {
        return $this->matter;
    }

    /**
     * Set issuer.
     *
     * @param string $issuer
     *
     * @return client
     */
    public function setIssuer($issuer)
    {
        $this->issuer = $issuer;

        return $this;
    }

    /**
     * Get issuer.
     *
     * @return string
     */
    public function getIssuer()
    {
        return $this->issuer;
    }

    /**
     * Set language.
     *
     * @param string $language
     *
     * @return client
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language.
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set currency.
     *
     * @param string $currency
     *
     * @return client
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Get currency.
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Set invoice.
     *
     * @param int $invoice
     *
     * @return client
     */
    public function setInvoice($invoice)
    {
        $this->invoice = $invoice;

        return $this;
    }

    /**
     * Get invoice.
     *
     * @return int
     */
    public function getInvoice()
    {
        return $this->invoice;
    }

    /**
     * Set date.
     *
     * @param \DateTime $date
     *
     * @return client
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date.
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set amount.
     *
     * @param string $amount
     *
     * @return client
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount.
     *
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set discount.
     *
     * @param string $discount
     *
     * @return client
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;

        return $this;
    }

    /**
     * Get discount.
     *
     * @return string
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Set vat.
     *
     * @param int $vat
     *
     * @return client
     */
    public function setVat($vat)
    {
        $this->vat = $vat;

        return $this;
    }

    /**
     * Get vat.
     *
     * @return int
     */
    public function getVat()
    {
        return $this->vat;
    }
}
