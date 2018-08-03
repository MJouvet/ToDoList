<?php

namespace App\Http\Controllers;

use Request;
use App\Models\Tache;
use App\Repositories\TacheRepository;
use DB;

class TacheController extends Controller
{
    protected $tacheRepository;

    protected $nbrPerPage = 10;

    public function __construct(TacheRepository $tacheRepository)
    {
      $this->tacheRepository = $tacheRepository;
    }


    /**
     * pour lire la table taches
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Taches = $this->tacheRepository->getPaginate($this->nbrPerPage);

        $date = DB::table('Taches')->orderBy('Date_In_Tache','asc')->get();

        $links = $Taches->render();

        return view('indexTache', compact('Taches','links','date'));

    }

    /**
     * pour ouvrir le formulaire pour creer une nouvelle Tache.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('createTache');
    }

    /**
     * Pour stocker la nouvelle tache créee
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tache = $this->tacheRepository->store($request::all());

        return redirect('tache')->withOk("la nouvelle tache a été crée.");
    }

    /**
     * pour afficher les informations de la tache.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($Id_Tache)
    {
        $tache = $this->tacheRepository->getById($Id_Tache);

        return view('showTache', compact('tache'));
    }

    /**
     * pour ouvrir le formulaire pour modifier les informations.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($Id_Tache)
    {
        $tache = $this->tacheRepository->getById($Id_Tache);

        return view('editTache', compact('tache'));
    }

    /**
     * pour mettre à jour les modifications.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Id_Tache)
    {
        $this->tacheRepository->update($Id_Tache, $request::all());

        return redirect('tache')->withOk("la tache a été modifié.");
    }

    /**
     * Pour supprimer la tache
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($Id_Tache)
    {
        $this->tacheRepository->destroy($Id_Tache);

        return redirect()->back();
    }
}
