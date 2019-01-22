<?php
/**
 * Created by PhpStorm.
 * User: varloteaux
 * Date: 18/10/18
 * Time: 09:36
 */
namespace Model;

/**
 * Class OpinionTripAdvisor
 * @package Model
 */
class OpinionTripAdvisor
{

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $pseudo;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $comment;

    /**
     * @var \DateTime
     */
    private $dateOpinion;

    /**
     * @var int
     */
    private $note;

    /**
     * @return int
     */
    public function getId() :int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getPseudo() :string
    {
        return $this->pseudo;
    }

    /**
     * @param string $pseudo
     */
    public function setPseudo(string $pseudo)
    {
        $this->pseudo = $pseudo;
    }

    /**
     * @return string
     */
    public function getTitle() :string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getComment() :string
    {
        return $this->comment;
    }

    /**
     * @param string $comment
     */
    public function setComment(string $comment)
    {
        $this->comment = $comment;
    }

    /**
     * @return \DateTime
     */
    public function getDateOpinion(): \DateTime
    {
        $timeZone = new \DateTimeZone('+0200');
        return $dateOpinion = new \DateTime($this->dateOpinion, $timeZone);
    }

    /**
     * @param \DateTime $dateOpinion
     */
    public function setDateOpinion(\DateTime $dateOpinion)
    {
        $this->dateOpinion = $dateOpinion;
    }

    /**
     * @return int
     */
    public function getNote():int
    {
        return $this->note;
    }

    /**
     * @param int $note
     */
    public function setNote(int $note)
    {
        $this->note = $note;
    }
}
