<?php


namespace App\Movie;


use App\Shared\MovieId;

class Movie
{
    /**
     * @var MovieId
     */
    private MovieId $movieId;
    /**
     * @var Title
     */
    private Title $title;
    /**
     * @var Description
     */
    private Description $description;
    /**
     * @var Director
     */
    private Director $director;
    /**
     * @var Production
     */
    private Production $production;
    /**
     * @var Premiere
     */
    private Premiere $premiere;

    public function __construct(MovieId $movieId, Title $title, Description $description, Director $director, Production $production, Premiere $premiere)
    {
        $this->movieId = $movieId;
        $this->title = $title;
        $this->description = $description;
        $this->director = $director;
        $this->production = $production;
        $this->premiere = $premiere;
    }

    /**
     * @return Title
     */
    public function getTitle(): Title
    {
        return $this->title;
    }

    /**
     * @param Title $title
     */
    public function setTitle(Title $title): void
    {
        $this->title = $title;
    }

    /**
     * @return Description
     */
    public function getDescription(): Description
    {
        return $this->description;
    }

    /**
     * @param Description $description
     */
    public function setDescription(Description $description): void
    {
        $this->description = $description;
    }

    /**
     * @return Director
     */
    public function getDirector(): Director
    {
        return $this->director;
    }

    /**
     * @param Director $director
     */
    public function setDirector(Director $director): void
    {
        $this->director = $director;
    }

    /**
     * @return Production
     */
    public function getProduction(): Production
    {
        return $this->production;
    }

    /**
     * @param Production $production
     */
    public function setProduction(Production $production): void
    {
        $this->production = $production;
    }

    /**
     * @return Premiere
     */
    public function getPremiere(): Premiere
    {
        return $this->premiere;
    }

    /**
     * @param Premiere $premiere
     */
    public function setPremiere(Premiere $premiere): void
    {
        $this->premiere = $premiere;
    }
}