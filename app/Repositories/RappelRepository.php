<?php

namespace App\Repositories;

use App\Models\Rappel;

class RappelRepository
{
  protected $rappel;

  public function __construct(Rappel $rappel)
  {
    $this->rappel = $rappel;
  }

  private function save(Rappel $rappel, Array $inputs)
  {
    $rappel->Titre_Rappel = $inputs ['Titre_Rappel'];
    $rappel->Date_Rappel = $inputs ['Date_Rappel'];

    $rappel->save();
  }

  public function getPaginate($n)
	{
		return $this->rappel->paginate($n);
	}

	public function store(Array $inputs)
	{
		$rappel = new $this->rappel;


		$this->save($rappel, $inputs);

		return $rappel;
	}

	public function getById($Id_Rappel)
	{
		return $this->rappel->findOrFail($Id_Rappel);
	}

	public function update($Id_Rappel, Array $inputs)
	{
		$this->save($this->getById($Id_Rappel), $inputs);
	}

	public function destroy($Id_Rappel)
	{
		$this->getById($Id_Rappel)->delete();
	}

}
