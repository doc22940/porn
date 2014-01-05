<?php
namespace Models\Entities;


/**
 * @Entity(readOnly=false, repositoryClass="\Models\Repositories\FileRepository")
 * @Table(name="files")
 */
Class File
{
	/** @Id
	 * @Column(name="file_id", type="integer")
	 * @GeneratedValue(strategy="IDENTITY") **/
	protected  $id;
	
	/** @Column(name="folder_name", type="string") **/
	protected $folderName;
	
	/** @Column(name="file_name", type="string") **/
	protected $fileName;
	
	/**
	 *
	 * @var Server
	 * @ManyToOne(targetEntity="Server")
	 * @JoinColumn(name="server_id", referencedColumnName="id")
	 */
	protected $server;
	
	/**
	 *
	 * @var Movie
	 * @ManyToOne(targetEntity="Movie")
	 * @JoinColumn(name="movie_id", referencedColumnName="id")
	 */
	protected $movie;
	
	public function getId() {
		return $this->id;
	}
	public function setId($id) {
		$this->id = $id;
		return $this;
	}
	public function getFolderName() {
		return $this->folderName;
	}
	public function setFolderName($folderName) {
		$this->folderName = $folderName;
		return $this;
	}
	public function getFileName() {
		return $this->fileName;
	}
	public function setFileName($fileName) {
		$this->fileName = $fileName;
		return $this;
	}
	public function getServer() {
		return $this->server;
	}
	public function setServer(Server $server) {
		$this->server = $server;
		return $this;
	}
	public function getMovie() {
		return $this->movie;
	}
	public function setMovie(Movie $movie) {
		$this->movie = $movie;
		return $this;
	}
	
	
	
}