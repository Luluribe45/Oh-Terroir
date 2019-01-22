<?php

namespace Model;

class SpecialOfferManager extends AbstractManager
{
    /**
     *
     */
    const TABLE = 'specialOffer';

    /**
     *  Initializes this class.
     */
    public function __construct(\PDO $pdo)
    {
        parent::__construct(self::TABLE, $pdo);
    }

    /**
     * Affiche les offres spéciales en fonction de la date du jour,
     * lorsque la date du jour est comprise dans la période de l'offre et que celle-ci
     * est une offre limitée dans le temps.
     * Affiche aussi en permanence, les offres spéciales non limitées dans le temps.
     * @return array
     */
    public function getSpecialOffers(): array
    {
        $specialOffers = [];
        $resultsSpecialOffers = $this->pdo->query(
            'SELECT * FROM ' . $this->table .
            ' WHERE ((specialOffer.startDate <= NOW() 
              AND specialOffer.finishDate >= NOW())
              OR (specialOffer.startDate IS NULL 
              AND specialOffer.finishDate IS NULL)
              )',
            \PDO::FETCH_ASSOC
        )->fetchAll();

        foreach ($resultsSpecialOffers as $key => $resultSpecialOffers) {
            $specialOffer = new SpecialOffer();

            $specialOffer->setId($resultSpecialOffers['id']);
            $specialOffer->setName($resultSpecialOffers['name']);
            $specialOffer->setDescription($resultSpecialOffers['description']);
            if ($resultSpecialOffers['startDate'] !== null) {
                $specialOffer->setStartDate(\DateTime::createFromFormat('Y-m-d', $resultSpecialOffers['startDate']));
            }
            if ($resultSpecialOffers['finishDate'] !== null) {
                $specialOffer->setFinishDate(\DateTime::createFromFormat('Y-m-d', $resultSpecialOffers['finishDate']));
            }
            $specialOffer->setImgLink($resultSpecialOffers['imgLink']);
            $specialOffers[] = $specialOffer;
        }

        return $specialOffers;
    }
}
