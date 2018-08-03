<?php

namespace App\Repositories;

use App\Models\Tache;

class TacheRepository
{
  protected $tache;

  public function __construct(Tache $tache)
  {
    $this->tache = $tache;
  }

  private function save(Tache $tache, Array $inputs)
  {
    $tache->Titre_Tache = $inputs ['Titre_Tache'];
    $tache->Date_In_Tache = $inputs ['Date_In_Tache'];
    $tache->Date_Out_Tache = $inputs ['Date_Out_Tache'];

    $tache->save();
  }

  public function getPaginate($n)
	{
		return $this->tache->paginate($n);
	}

	public function store(Array $inputs)
	{
		$tache = new $this->tache;


		$this->save($tache, $inputs);

		return $tache;
	}

	public function getById($Id_Tache)
	{
		return $this->tache->findOrFail($Id_Tache);
	}

	public function update($Id_Tache, Array $inputs)
	{
		$this->save($this->getById($Id_Tache), $inputs);
	}

	public function destroy($Id_Tache)
	{
		$this->getById($Id_Tache)->delete();
	}

}
