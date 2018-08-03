<?php

namespace App\Http\Controllers;

use Request;
use App\Models\Rappel;
use App\Repositories\RappelRepository;

class RappelController extends Controller
{

    protected $rappelRepository;

    protected $nbrPerPage = 10;

    public function __construct(RappelRepository $rappelRepository)
    {
      $this->rappelRepository = $rappelRepository;
    }
    

    /**
     * pour lire la table rappels.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $Rappels = $this->rappelRepository->getPaginate($this->nbrPerPage);

      $links = $Rappels->render();

      return view('indexRappel', compact('Rappels','links'));
    }

    /**
     * pour ouvrir le formulaire pour creer un nouveau rappel.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createRappel');
    }

    /**
     * Pour stocker le nouveau rappel crée
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rappel = $this->rappelRepository->store($request::all());

        return redirect('rappel')->withOk(" le nouveau rappel a été crée");
    }

    /**
     * pour afficher les informations du rappel
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($Id_Rappel)
    {
        $rappel = $this->rappelRepository->getById($Id_Rappel);

        return view('showRappel', compact('rappel'));
    }

    /**
     * pour ouvrir le formulaire pour modifier les informations.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($Id_Rappel)
    {
        $rappel = $this->rappelRepository->getById($Id_Rappel);

        return view('editRappel', compact('rappel'));
    }

    /**
     * pour mettre à jour les modifications.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Id_Rappel)
    {
        $this->rappelRepository->update($Id_Rappel, $request::all());

        return redirect('rappel')->withOk("la rappel a été modifié.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($Id_Rappel)
    {
        $this->rappelRepository->destroy($Id_Rappel);

        return redirect()->back();
    }
}
